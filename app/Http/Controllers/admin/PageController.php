<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\AboutUs;
use App\Models\Setting;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use DataTables;
use Validator;
use File;
use Intervention\Image\Facades\Image;

class PageController extends Controller
{
    public function add(Request $request, $id = Null)
    {
        $decrypted_id = get_decrypted_value($id, true);
        $getdata = Page::find($decrypted_id);
        if ($id != "") {
            $saveurl = url('admin/page/save/' . $id);
            $button = 'Update';
            $page_title = 'Update Page';
        } else {
            $saveurl = url('admin/page/save');
            $button = 'Add';
            $page_title = 'Add Page';
        }
        $data = array(
            'getdata'    => $getdata,
            'saveurl'    => $saveurl,
            'button'     => $button,
            'title'      => $page_title,
        );
        return view('admin.page.add')->with($data);
    }
    public function save(Request $request, $id = NUll)
    {
        if (!empty($id)) {
            $decrypted_id  = get_decrypted_value($id, true);
            $data          = Page::find($decrypted_id);
            $success_msg   = 'Page Updated Successfully.';
            $nameValidator = 'required|unique:pages,title,' . $decrypted_id . ',id,status,1';
        } else {
            $data          = new Page;
            $success_msg   = 'Page Added Successfully.';
            $nameValidator = 'required|unique:pages';
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
                    $extensions = ['jpg', 'jpeg', 'png', 'JPEG', 'PNG', 'JPG',];
                    if (!in_array($ext, $extensions)) {
                        $status = 'File type is not allowed you have uploaded. Please upload any image !';
                        return back()->withInput()->withErrors($status);
                    }
                    $request->file('image')->move("uploads/page", $name);
                    $data->image = 'uploads/page/' . $name;
                }
                
                if ($request['sec_image'] != "") {
                    $file1 = $request->file('sec_image');
                    $name1 = rand(11111, 99999) . '.' . $file1->getClientOriginalExtension();
                    $ext1 = pathinfo($name1, PATHINFO_EXTENSION);
                    $extensions1 = ['jpg', 'jpeg', 'png', 'JPEG', 'PNG', 'JPG','webp', 'WEBP'];
                    if (!in_array($ext1, $extensions1)) {
                        $status1 = 'File type is not allowed you have uploaded. Please upload any image !';
                        return back()->withInput()->withErrors($status1);
                    }
                    $request->file('sec_image')->move("uploads/page", $name1);
                    $data->sec_image = 'uploads/page/' . $name1;
                }
                
                $data->title       = $request['title'];
                $data->short_description = $request['short_description'];
                $data->description = $request['editor1'];
                $data->additional_text = $request['additional_text'];
                $data->meta_title = $request['meta_title'];
                $data->image_tag = $request['image_tag'];
                $data->sec_image_tag = $request['sec_image_tag'];
                $data->meta_keyword = $request['meta_keyword'];
                $data->meta_description = $request['meta_description'];
                $data->slug = !empty($request['slug']) ? $request['slug'] : (!empty($request['title']) ? Str::slug($request['title']) : Str::random(10));
                $data->save();
            } catch (\Exception $e) {
                DB::rollback();
                $error_message = $e->getMessage();
                p($error_message);
                return back()->withInput()->withErrors($error_message);
            }
            DB::commit();
        }
        return redirect()->route('page')->withSuccess($success_msg);
    }

    public function index()
    {
        $data = array(
            'title' => 'View Pages',
            'page_title' => 'View Pages',
        );
        return view('admin.page.view')->with($data);
    }

    public function anydata(Request $request)
    {
        $anydata = [];
        $anydata = Page::orderBy('id', 'DESC')->where(function ($query) use ($request) {

            if (!empty($request['title'])) {
                $query->where('title', 'LIKE', '%' . $request['title'] . '%');
            }

            if (!empty($request['status'])) {
                $query->where('status', $request['status']);
            }
        })->where('status','<',3)->get();
        return Datatables::of($anydata)
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
            
            ->addColumn('link', function ($anydata) {
                $url = url('/page/' . $anydata->slug);
                    $text = '<button onclick="copyText(\'' . $url . '\')" style="color:green; padding:10px;">Copy Url</button>';
                    return $text;
                })

            ->addColumn('action', function ($anydata) {
                $file_name = "category";
                $encrypted_id = get_encrypted_value($anydata->id, true);
                $action = '<a href="' . url('/admin/page/add/' . $encrypted_id) . '"><i class="fas fa-edit" data-original-title="Edit" data-toggle="tooltip" data-placement="bottom"></i></a>&nbsp;&nbsp;  
                        
                        <i class="fas fa-trash-alt text-danger delete-button" id="deletebtn" data-id="' . $anydata->id . '" data-original-title="Delete" data-toggle="tooltip" data-placement="bottom"></i>';
                return $action;
            })
            ->rawColumns(['status', 'action','link'])
            ->addIndexColumn()->make(true);
    }

    public function changeStatus(Request $request)
    {
        $id   = $request['id'];
        $status = $request['status'];
        $data  =  Page::find($id);
        if ($data) {
            $data->status = $status;
            $data->save();
            echo "Success";
        }
    }
    
    public function delete(Request $request)
    {
        $id = $request['id'];
        $data = Page::find($id);
        if ($data) {
            $data->status = 3;
            $data->save();
            $return_arr = array(
                'status' => 'success',
                'message' => 'Page Deleted Sussessfully!',
            );
            return response()->json($return_arr);
        }
    }

    public function about_us()
    {
        $about = AboutUs::first();
        // p($about);
        $data = array(
            'title' => "About Us",
            'page_title' => "About Us",
            'about' => $about,
            'saveurl' => route('about_us_save'),
        );

        return view('admin.page.about')->with($data);
    }

    public function about_us_save(Request $request)
    {
        $about = AboutUs::first();
        if ($about != "") {
            if ($request['large_image'] != "") {
                $file = $request->file('large_image');
                $name = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
                $request->file('large_image')->move("uploads/about", $name);
                $about->large_image = 'uploads/about/' . $name;
            }

            if ($request['side_image1'] != "") {
                $file = $request->file('side_image1');
                $name = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
                $request->file('side_image1')->move("uploads/about", $name);
                $about->side_image1 = 'uploads/about/' . $name;
            }

            if ($request['side_image2'] != "") {
                $file = $request->file('side_image2');
                $name = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
                $request->file('side_image2')->move("uploads/about", $name);
                $about->side_image2 = 'uploads/about/' . $name;
            }
            if ($request['image_logo'] != "") {
                $file = $request->file('image_logo');
                $name = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
                $request->file('image_logo')->move("uploads/about", $name);
                $about->image_logo = 'uploads/about/' . $name;
            }

            $about->title           = $request['title'];
            $about->subtitle        = $request['subtitle'];
            $about->description     = $request['description'];
            $about->save();
            return back()->withSuccess("About Us Update Successfully.");
        } else {
            return back()->withInput()->withErrors("About Us Update Not Successfully.");
        }
    }
}
