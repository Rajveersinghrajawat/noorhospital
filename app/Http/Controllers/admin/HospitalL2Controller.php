<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HospitalL2;
use App\Models\City;
use App\Models\Category;
use App\Models\Procedure;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use DataTables;
use Validator;
use File;
use Intervention\Image\Facades\Image;

class HospitalL2Controller extends Controller
{
    public function add(Request $request, $id = Null)
    {
        $decrypted_id = get_decrypted_value($id, true);
        // $getdata = HospitalL2::find($decrypted_id);
        $pro = Procedure::where('status', 1)->get();
        $Specialist = Category::where('status', 1)->get();
        $city = City::where('status', 1)->get();
        if ($id != "") {
            $saveurl = url('admin/l2/hospital/save/' . $id);
            $button = 'Update';
            $page_title = 'Update Hospital';
        } else {
            $saveurl = url('admin/l2/hospital/save');
            $button = 'Add';
            $page_title = 'Add Hospital';
        }
        $data = array(
            // 'getdata'    => $getdata,
            'saveurl'    => $saveurl,
            'button'     => $button,
            'title'      => $page_title,
            'city'      => $city,
            'pro'      => $pro,
            'specialist'      => $Specialist,
        );
        return view('admin.l2.hospital.add')->with($data);
    }
    public function save(Request $request, $id = NUll)
    {
        if (!empty($id)) {
            $decrypted_id  = get_decrypted_value($id, true);
            $data          = HospitalL2::find($decrypted_id);
            $success_msg   = 'Hospital Updated Successfully.';
            $nameValidator = 'required|unique:hospitals,title,' . $decrypted_id . ',id,status,1';
        } else {
            $data          = new Hospital;
            $success_msg   = 'Hospital Added Successfully.';
            $nameValidator = 'required|unique:hospitals,title,3,status';
        }
        $Validatior = Validator::make($request->all(), [
            'title' => $nameValidator,

        ]);

        if ($Validatior->fails()) {
            return back()->withInput()->withErrors($Validatior);
        } else {

            DB::beginTransaction();
            try {
               
                if ($request['image'] != "") {
                    $file = $request->file('image');
                    $name = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
                    $ext = pathinfo($name, PATHINFO_EXTENSION);
                    $extensions = ['jpg', 'jpeg', 'png', 'JPEG', 'PNG', 'JPG','webp', 'WEBP'];
                    if (!in_array($ext, $extensions)) {
                        $status = 'File type is not allowed you have uploaded. Please upload any image !';
                        return back()->withInput()->withErrors($status);
                    }
                    $request->file('image')->move("uploads/hospitals", $name);
                    $data->image = 'uploads/hospitals/' . $name;
                }
                
                $data->title       = $request['title'];
                $data->image_tag       = $request['image_tag'];
            
                $data->short_description = $request['short_description'];
              
           
                $data->bed = $request['bed'];
                $data->distance = $request['distance'];
               
                $data->estb = $request['estb'];
             
                $data->save();
            } catch (\Exception $e) {
                DB::rollback();
                $error_message = $e->getMessage();
                p($error_message);
                return back()->withInput()->withErrors($error_message);
            }
            DB::commit();
        }
        return redirect()->route('hospitall2')->withSuccess($success_msg);
    }

    private function storeBase64($imageBase64)
    {
        list($type, $imageBase64) = explode(';', $imageBase64);
        list(, $imageBase64)      = explode(',', $imageBase64);
        $imageBase64 = base64_decode($imageBase64);
        $imageName = rand(11111, 99999) . '.png';
        $path = 'uploads/hospitals/l2/' . $imageName;


        file_put_contents($path, $imageBase64);

        return $imageName;
    }

    public function index()
    {
        $data = array(
            'title' => 'View Hospitals',
            'page_title' => 'View Hospitals',
        );
        return view('admin.l2.hospital.view')->with($data);
    }

    public function anydata(Request $request)
    {
        $anydata = [];
        $anydata = HospitalL2::orderByRaw("CASE WHEN order_data IS NOT NULL AND order_data != '' THEN 0 ELSE 1 END")
        ->orderBy('order_data', 'ASC') // Orders non-empty order_data records by ASC
        ->orderBy('id', 'DESC')->where('status', '<', 3)->where(function ($query) use ($request) {

            if (!empty($request['title'])) {
                $query->where('title', 'LIKE', '%' . $request['title'] . '%');
            }
            if (!empty($request['type'])) {
                $query->where('category_type', $request['type']);
            }
            if (!empty($request['status'])) {
                $query->where('status', $request['status']);
            }
        })->get();

        return Datatables::of($anydata)



            ->addColumn('image', function ($anydata) {
                if ($anydata['image'] != "" || file_exists($anydata['image'])) {
                    $img = url($anydata['image']);
                } else {
                    $img = url('public/noimage.png');
                }
                return '<img style="border-radius: 50%;" alt="image" src=' . $img . ' width="35" height="35px">';
            })

            ->addColumn('city', function ($anydata) {

                return isset($anydata['get_city']->city) ? $anydata['get_city']->city : 'N/A';
            })

            ->addColumn('status', function ($anydata) {

                if ($anydata->status == 1) {
                    $status = 2;
                    $statusval = '<span onclick="changeStatus(' . $anydata->id . ',' . $status . ')"  class="btn btn-success btn-rounded btn-sm waves-effect waves-light">Active</span>';
                } else {
                    $status = 1;
                    $statusval = '<span onclick="changeStatus(' . $anydata->id . ',' . $status . ')" class="btn btn-danger btn-rounded btn-sm waves-effect waves-light">Deactive</span>';
                }
                return $statusval;
            })

            ->addColumn('action', function ($anydata) {
                $file_name = "category";
                $encrypted_id = get_encrypted_value($anydata->id, true);
                $action = '<a href="' . url('/admin/hospital/add/' . $encrypted_id) . '"><i class="fas fa-edit" data-original-title="Edit" data-toggle="tooltip" data-placement="bottom"></i></a> &nbsp;&nbsp;  
                        
                        <i class="fas fa-trash-alt text-danger delete-button" id="deletebtn" data-id="' . $anydata->id . '" data-original-title="Delete" data-toggle="tooltip" data-placement="bottom"></i>';
                return $action;
            })
            ->rawColumns(['status', 'action', 'image', 'type_data', 'city'])
            ->addIndexColumn()->make(true);
    }
    public function delete(Request $request)
    {
        $id = $request['id'];
        $data = HospitalL2::find($id);
        if ($data) {
            $data->status = 3;
            $data->save();
            $return_arr = array(
                'status' => 'success',
                'message' => 'Hospital Deleted Sussessfully!',
            );
            return response()->json($return_arr);
        }
    }


    public function changeStatus(Request $request)
    {
        $id   = $request['id'];
        $status = $request['status'];
        $data  =  HospitalL2::find($id);
        if ($data) {
            $data->status = $status;
            $data->save();
            echo "Success";
        }
    }
}
