<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Page;
use App\Models\Faq;
use App\Models\Doctor;
use App\Models\Award;
use App\Models\Membership;
use App\Models\DoctorQualification;
use App\Models\DoctorEducation;
use App\Models\Category;
use App\Models\Hospital;
use App\Models\City;
use App\Models\Setting;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Exception;
use Cache;
use Session;
use Illuminate\Support\Facades\Auth;
use Validator;
use Mail;
use App\Mail\WelcomeEmail;

class DoctorController extends Controller
{
    public function doctor(Request $request)
    {
        // p($request->all());
        $page = Page::find(13);
        $doctor = Doctor::with('get_specialist','get_hospital')->where('status', 1)->orderBy('id', 'DESC')->where(function ($query) use ($request) {

            if (!empty($request['search'])) {
                $query->where('title', 'LIKE', '%' . $request['search'] . '%');
            }
            if (!empty($request['specialities'])) {
                $query->where('specialist_id', $request['specialities']);
            }
            if (!empty($request['hospitals'])) {
                $query->where('hospital_id', $request['hospitals']);
            }
            
        })->paginate(20);

        $faq = Faq::where('status', 1)->where(function ($query) {
            $query->where('page_id', 8)
                ->orWhere(function ($query1) {
                    $query1->whereNull('pade_detail_id')
                        ->whereNull('page_id');
                });
        })->get();
         $servic = Category::where('status', 1)->select('id', 'title', 'slug')->orderBy('id', 'DESC')->get();
        $hospital = Hospital::where('status', 1)->with('get_city')->select('id', 'title', 'slug')->orderBy('id', 'DESC')->get();
        
        $city = City::where('status', 1)->get();
        $data = array(
            'title' => 'Doctors',
            'doctor' => $doctor,
            'faq' => $faq,
            'servic' => $servic,
            'hospital' => $hospital,
            'doctor' => $doctor,
            'city' => $city,
            'meta_title' => $page->meta_title,
            'meta_description' => $page->meta_description,
            'meta_keyword' => $page->meta_keyword,
        );
        return view('frontend.doctors')->with($data);
    }

    public function doctor_detail($id)
    {
        $setting = Setting::first();
        $file = Doctor::with('get_specialist', 'get_hospital','get_subspecialist')->where('status',1)->where('slug', $id)->first();
        // p($file);
        if(!empty($file->specialist_id)){
            $rel = Doctor::where('specialist_id', $file->specialist_id)->get();
        }else{
            $rel = Doctor::limit(10)->get();
        }
        
        if(!empty($file->rec_hospital)){
            $Colle = explode(",", $file['rec_hospital']);
            $rec_hospital = Hospital::with('get_city')->where('status', 1)->whereIn('id', $Colle)->orderBy('id', 'DESC')->get();
        }else{
            $rec_hospital = Hospital::with('get_city')->where('status', 1)->where('show', 1)->orderBy('id', 'DESC')->limit($setting->hospital_limit)->get();
        }
        $award = Award::where('doctor_id', $file->id)->get();
        $memberships = Membership::where('doctor_id', $file->id)->get();
        $DoctorQualification = DoctorQualification::where('doctor_id', $file->id)->get();
        $DoctorEducation = DoctorEducation::where('doctor_id', $file->id)->get();
        $faq = Faq::where('status', 1)->where(function ($query) use ($file) {
            $query->where('page_id', 8)
                ->orWhere(function ($query1) {
                    $query1->whereNull('pade_detail_id')
                        ->whereNull('page_id');
                });
        })->get();
        
        $cat = Category::where(['status' => 1, 'id' => $file->specialist_id])->get();
        $data = array(
            'title' => $file->name,
            'file' => $file,
            'award' => $award,
            'memberships' => $memberships,
            'DoctorQualification' => $DoctorQualification,
            'DoctorEducation' => $DoctorEducation,
            'memberships' => $memberships,
            'rec_hospital' => $rec_hospital,
            'rel' => $rel,
            'faq' => $faq,
            'cat' => $cat,
            'meta_title' => $file->meta_title,
            'meta_description' => $file->meta_description,
            'meta_keyword' => $file->meta_keyword,
        );
        return view('frontend.doctordels')->with($data);
    }
}
