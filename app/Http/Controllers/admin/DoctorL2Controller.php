<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Award;
use App\Models\City;
use App\Models\Membership;
use App\Models\DoctorQualification;
use App\Models\DoctorEducation;
use App\Models\Category;
use App\Models\Hospital;
use App\Models\SubCategory;
use App\Models\Procedure;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use DataTables;
use Validator;
use File;
use Intervention\Image\Facades\Image;

class DoctorL2Controller extends Controller
{
    public function add(Request $request, $id = Null)
    {
        $decrypted_id = get_decrypted_value($id, true);
        $Specialist = Category::where('status', 1)->get();
        $hospital = Hospital::where('status', 1)->get();
        $pro = Procedure::where('status', 1)->get();
        $getdata = Doctor::find($decrypted_id);
        $city = City::where('status', 1)->get();
        
        
        $rec_hospital = Hospital::select('id','title')->where('status',1)->get();
        if ($id != "") {
            $saveurl = url('admin/doctor/save/' . $id);
            $button = 'Update';
            $page_title = 'Update doctor';
            $sub_cat = SubCategory::where('category_id',$getdata->specialist_id)->get();
        } else {
            $saveurl = url('admin/doctor/save');
            $button = 'Add';
            $page_title = 'Add Doctor';
            $sub_cat = SubCategory::get();
        }
        $data = array(
            'getdata'    => $getdata,
            'saveurl'    => $saveurl,
            'button'     => $button,
            'title'      => $page_title,
            'pro'      => $pro,
            'city'      => $city,
            'specialist'      => $Specialist,
            'sub_cat' =>$sub_cat,
            'hospital'      => $hospital,
            'rec_hospital'      => $rec_hospital,
        );
        return view('admin.l2.doctor.add')->with($data);
    }
    public function save(Request $request, $id = NUll)
    {
        // p($request->all());
        if (!empty($id)) {
            $decrypted_id  = get_decrypted_value($id, true);
            $data          = Doctor::find($decrypted_id);
            $success_msg   = 'Doctor Updated Successfully.';
            $nameValidator = 'required|unique:doctors,phone,' . $decrypted_id . ',id,status,1';
        } else {
            $data          = new Doctor;
            $success_msg   = 'Doctor Added Successfully.';
            $nameValidator = 'required|unique:doctors,phone,3,status';
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
                    $request->file('image')->move("uploads/category", $name);
                    $data->image = 'uploads/category/' . $name;
                }

                $data->title       = $request['title'];
                $data->image_tag       = $request['image_tag'];
                $data->phone       = $request['phone'];
                $data->email       = $request['email'];
                $data->rec_hospital = isset($request['rec_hospital'])?implode(',', $request['rec_hospital']):'';
                $data->procedure_ids       = isset($request['procedure_ids']) ? implode(',', $request['procedure_ids']) : '';
                $data->designation       = $request['designation'];
                $data->order_data = $request['order_data'];
                $data->experience       = $request['experience'];
                $data->location       = $request['location'];
                $data->qualification       = $request['qualification_single'];
                $data->hospital_id       = $request['hospital_id'];
                $data->specialist_id       =  $request['specialist_id'];
                $data->sub_cat       = $request['sub_cat'];
                $data->description = $request['editor1'];
                $data->additional_text = $request['additional_text'];
                $data->short_description = $request['short_description'];
                $data->meta_title = $request['meta_title'];
                $data->meta_keyword = $request['meta_keyword'];
                $data->meta_description = $request['meta_description'];
                $data->show = $request['show'];
                $data->slug = !empty($request['slug']) ? $request['slug'] : (!empty($request['title']) ? Str::slug($request['title']) : Str::random(10));
                $data->script = $request['script'];
                $data->canonical_tag = $request['canonical_tag'];
                $data->save();

                if (!empty($request['award'])) {
                    $doctor_award = array_values($request['award']);
                    $doctor_awarddata = Award::where('doctor_id', $data->id)->pluck('id')->toArray();
                    $awardcolumn = array_column($doctor_award, 'award_id');

                    $notmatchaward = array_diff($doctor_awarddata, $awardcolumn);

                    foreach ($doctor_award as $imgkey => $variantt_img) {
                        // p($variantt_img['image']);

                        if ($imgkey >= 0) {
                            $varianttimg_id = $variantt_img['award_id'];

                            if ($varianttimg_id != "") {
                                $variantImg = Award::find($varianttimg_id);
                            } else {
                                $variantImg = new Award;
                            }

                            if (!empty($variantt_img['title'])) {
                                $variantImg->doctor_id     = $data->id;
                                $variantImg->name    = $variantt_img['title'];
                                $variantImg->save();
                            }
                        }
                    }
                    if (count($notmatchaward) > 0) {
                        foreach ($notmatchaward as $key => $notmatchawardvalue) {
                            $imagedelete = Award::find($notmatchawardvalue);
                            $imagedelete->delete();
                        }
                    }
                }
                if (!empty($request['member'])) {
                    $doctor_member = array_values($request['member']);
                    $doctor_memberdata = Membership::where('doctor_id', $data->id)->pluck('id')->toArray();
                    $membercolumn = array_column($doctor_member, 'member_id');

                    $notmatchmember = array_diff($doctor_memberdata, $membercolumn);

                    foreach ($doctor_member as $imgkey => $variantt_img) {
                        // p($variantt_img['image']);
                        if ($imgkey >= 0) {
                            $varianttimg_id = $variantt_img['member_id'];

                            if ($varianttimg_id != "") {
                                $variantImg = Membership::find($varianttimg_id);
                            } else {
                                $variantImg = new Membership;
                            }
                            if (!empty($variantt_img['title'])) {

                                $variantImg->doctor_id     = $data->id;
                                $variantImg->name    = $variantt_img['title'];
                                $variantImg->save();
                            }
                        }
                    }
                    if (count($notmatchmember) > 0) {
                        foreach ($notmatchmember as $key => $notmatchmembervalue) {
                            $imagedelete = Membership::find($notmatchmembervalue);
                            $imagedelete->delete();
                        }
                    }
                }

                if (!empty($request['qualification'])) {
                    $DoctorQualification = array_values($request['qualification']);
                    $DoctorQualificationdata = DoctorQualification::where('doctor_id', $data->id)->pluck('id')->toArray();
                    $qualificationcolumn = array_column($DoctorQualification, 'qualification_id');

                    $notmatchqualification = array_diff($DoctorQualificationdata, $qualificationcolumn);

                    foreach ($DoctorQualification as $imgkey => $qualification) {
                        // p($variantt_img['image']);
                        if ($imgkey >= 0) {
                            $qualification_id = $qualification['qualification_id'];

                            if ($qualification_id != "") {
                                $variantImg = DoctorQualification::find($qualification_id);
                            } else {
                                $variantImg = new DoctorQualification;
                            }
                            if (!empty($qualification['title'])) {

                                $variantImg->doctor_id     = $data->id;
                                $variantImg->name    = $qualification['title'];
                                $variantImg->save();
                            }
                        }
                    }
                    if (count($notmatchqualification) > 0) {
                        foreach ($notmatchqualification as $key => $notmatchqualificationvalue) {
                            $imagedelete = DoctorQualification::find($notmatchqualificationvalue);
                            $imagedelete->delete();
                        }
                    }
                }

                if (!empty($request['education'])) {
                    $Doctoreducation = array_values($request['education']);
                    $Doctoreducationdata = DoctorEducation::where('doctor_id', $data->id)->pluck('id')->toArray();
                    $educationcolumn = array_column($Doctoreducation, 'education_id');

                    $notmatcheducation = array_diff($Doctoreducationdata, $educationcolumn);

                    foreach ($Doctoreducation as $imgkey => $education) {
                        // p($variantt_img['image']);
                        if ($imgkey >= 0) {
                            $education_id = $education['education_id'];

                            if ($education_id != "") {
                                $variantImg = DoctorEducation::find($education_id);
                            } else {
                                $variantImg = new DoctorEducation;
                            }
                            if (!empty($education['title'])) {

                                $variantImg->doctor_id     = $data->id;
                                $variantImg->name    = $education['title'];
                                $variantImg->save();
                            }
                        }
                    }
                    if (count($notmatcheducation) > 0) {
                        foreach ($notmatcheducation as $key => $notmatcheducationvalue) {
                            $imagedelete = DoctorEducation::find($notmatcheducationvalue);
                            $imagedelete->delete();
                        }
                    }
                }
            } catch (\Exception $e) {
                DB::rollback();
                $error_message = $e->getMessage();
                p($error_message);
                return back()->withInput()->withErrors($error_message);
            }
            DB::commit();
        }
        return redirect()->route('doctor2')->withSuccess($success_msg);
    }

    public function index()
    {
        $data = array(
            'title' => 'View Doctors',
            'page_title' => 'View Doctors',
        );
        return view('admin.l2.doctor.view')->with($data);
    }

    public function anydata(Request $request)
    {
        $anydata = [];
        $anydata = Doctor::where('status', '<', 3)
        ->orderByRaw("CASE WHEN order_data IS NOT NULL AND order_data != '' THEN 0 ELSE 1 END")
    ->orderBy('order_data', 'ASC') // Orders non-empty order_data records by ASC
    ->orderBy('id', 'DESC')
        ->where(function ($query) use ($request) {

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
                $action = '<a href="' . url('/admin/doctor/add/' . $encrypted_id) . '"><i class="fas fa-edit" data-original-title="Edit" data-toggle="tooltip" data-placement="bottom"></i></a> &nbsp;&nbsp;  
                        
                        <i class="fas fa-trash-alt text-danger delete-button" id="deletebtn" data-id="' . $anydata->id . '" data-original-title="Delete" data-toggle="tooltip" data-placement="bottom"></i>';
                return $action;
            })
            ->rawColumns(['status', 'action', 'image', 'type_data'])
            ->addIndexColumn()->make(true);
    }
    public function delete(Request $request)
    {
        $id = $request['id'];
        $data = Doctor::find($id);
        if ($data) {
            $data->status = 3;
            $data->save();
            $return_arr = array(
                'status' => 'success',
                'message' => 'Doctor Deleted Sussessfully!',
            );
            return response()->json($return_arr);
        }
    }


    public function changeStatus(Request $request)
    {
        $id   = $request['id'];
        $status = $request['status'];
        $data  =  Doctor::find($id);
        if ($data) {
            $data->status = $status;
            $data->save();
            echo "Success";
        }
    }

    public function get_sub_cat(Request $request)
    {
        $cat_id   = $request['cat_id'];
        // p($cat_id);
        $subcategory = SubCategory::where('category_id', $cat_id)->get();
        $get_sub = '';
        $get_sub .= '<option value="">Select Sub Specialist</option>';
        foreach ($subcategory as $key => $value) {
            $get_sub .= '<option value="' . $value->id . '">' . $value->title . '</option>';
        }
        $return_arr = array(
            'status' => 1,
            'get_sub' => $get_sub,
        );
        return response()->json($return_arr);
    }
}
