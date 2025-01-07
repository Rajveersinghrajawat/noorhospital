<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Str;
use App\Models\State;
use App\Models\Page;
use App\Models\Country;
use App\Models\Faq;
use App\Models\Category;
use App\Models\Setting;
use App\Models\Doctor;
use App\Models\Hospital;
use App\Models\Procedure;
use App\Models\Appointment;
use App\Models\ServiceCategory;
use Illuminate\Support\Facades\Hash;
use Exception;
use Cache;
use Illuminate\Support\Facades\Auth;
use Validator;
use Mail;
use App\Mail\AppointmentEmail;

class WebPageController extends Controller
{
    public function about()
    {

        $about = Page::find(3);
        $faq = Faq::where('status', 1)->where(function ($query) {
            $query->where('page_id',3)
                  ->orWhere(function($query1) {
                      $query1->whereNull('pade_detail_id')
                             ->whereNull('page_id');
                  });
        })->get();
        $data = array(
            'title' => 'About Us',
            'about' => $about,
            'faq' => $faq,
            'meta_title' => $about->meta_title,
            'meta_description' => $about->meta_description,
            'meta_keyword' => $about->meta_keyword,
        );
        return view('frontend.about')->with($data);
    }
    
    public function page($id)
    {

        $about = Page::where('slug',$id)->first();
        
        $faq = Faq::where('status', 1)->where(function ($query) {
            $query->where('page_id',3)
                  ->orWhere(function($query1) {
                      $query1->whereNull('pade_detail_id')
                             ->whereNull('page_id');
                  });
        })->get();
        $data = array(
            'title' => 'About Us',
            'page' => $about,
            'faq' => $faq,
            'meta_title' => $about->meta_title,
            'meta_description' => $about->meta_description,
            'meta_keyword' => $about->meta_keyword,
        );
        return view('frontend.page')->with($data);
    }

    
     public function services()
    {
        $services = Page::find(3);
        $services_cat = ServiceCategory::with('get_service')->where('status',1)->get();
        $faq = Faq::where('status', 1)->where(function ($query) {
            $query->where('page_id',3)
                  ->orWhere(function($query1) {
                      $query1->whereNull('pade_detail_id')
                             ->whereNull('page_id');
                  });
        })->get();
        // p($services_cat);
        $data = array(
            'title' => 'Service',
            'services_cat' => $services_cat,
            'faq' => $faq,
            'meta_title' => $services->meta_title,
            'meta_description' => $services->meta_description,
            'meta_keyword' => $services->meta_keyword,
        );
        return view('frontend.services')->with($data);
    }


    public function terms_condition()
    {

        $page = Page::find(2);
        $faq = Faq::where('status', 1)->where(function ($query) {
            $query->where('page_id',2)
                  ->orWhere(function($query1) {
                      $query1->whereNull('pade_detail_id')
                             ->whereNull('page_id');
                  });
        })->get();
        $data = array(
            'title' => 'Terms & Condition',
            'page' => $page,
            'faq' => $faq,
            'meta_title' => $page->meta_title,
            'meta_description' => $page->meta_description,
            'meta_keyword' => $page->meta_keyword,
        );
        return view('frontend.terms-conditions')->with($data);
    }

    public function procedure($id)
    {

        $setting = Setting::first();
        $page = Procedure::where('slug',$id)->first();
        $faq = Faq::where('status', 1)->where(function ($query) {
            $query->where('page_id',2)
                  ->orWhere(function($query1) {
                      $query1->whereNull('pade_detail_id')
                             ->whereNull('page_id');
                  });
        })->get();
        $servic = Category::where('status', 1)->where('show', 1)->select('id', 'title', 'slug', 'image', 'short_description')->orderBy('id', 'DESC')->limit($setting->category_limit)->get();
        $hospital = Hospital::where('status', 1)->with('get_city')->where('show', 1)->orderBy('id', 'DESC')->limit($setting->hospital_limit)->get();
        $doctor = Doctor::where('status', 1)->where('show', 1)->select('id', 'title', 'slug', 'image', 'short_description','designation')->orderBy('id', 'DESC')->limit($setting->doctor_limit)->get();
        $data = array(
            'title' => $page->title,
            'page' => $page,
            'faq' => $faq,
            'service' => $servic,
            'hospital' => $hospital,
            'doctor' => $doctor,
            'meta_title' => $page->meta_title,
            'meta_description' => $page->meta_description,
            'meta_keyword' => $page->meta_keyword,
        );
        return view('frontend.procedure')->with($data);
    }

    public function privacy_policy()
    {
        $page = Page::find(1);
        $faq = Faq::where('status', 1)->where(function ($query) {
            $query->where('page_id',1)
                  ->orWhere(function($query1) {
                      $query1->whereNull('pade_detail_id')
                             ->whereNull('page_id');
                  });
        })->get();
        $data = array(
            'title' => 'Privacy & Policy',
            'page' => $page,
            'faq' => $faq,
            'meta_title' => $page->meta_title,
            'meta_description' => $page->meta_description,
            'meta_keyword' => $page->meta_keyword,
        );
        return view('frontend.privacy-policy')->with($data);
    }

    public function contact_us()
    {
        $page = Page::find(6);
        $country = Country::get();
        $state = State::get();
        $faq = Faq::where('status', 1)->where(function ($query) {
            $query->where('page_id',6)
                  ->orWhere(function($query1) {
                      $query1->whereNull('pade_detail_id')
                             ->whereNull('page_id');
                  });
        })->get();
        $data = array(
            'title' => 'Contact Us',
            'country' => $country,
            'state' => $state,
            'faq' => $faq,
            'meta_title' => $page->meta_title,
            'meta_description' => $page->meta_description,
            'meta_keyword' => $page->meta_keyword,
        );
        return view('frontend.contact')->with($data);
    }

    public function gallery()
    {
        $page = Page::find(5);
        $gallery = Gallery::where('status', 1)->where('type', 1)->get();
        $video = Gallery::where('status', 1)->where('type', 2)->get();
        $faq = Faq::where('status', 1)->where(function ($query) {
            $query->where('page_id',5)
                  ->orWhere(function($query1) {
                      $query1->whereNull('pade_detail_id')
                             ->whereNull('page_id');
                  });
        })->get();
        $file = Page::find(5);
        $data = array(
            'title' => 'Gallery',
            'gallery' => $gallery,
            'video' => $video,
            'faq' => $faq,
            'file' => $file,
            'meta_title' => $page->meta_title,
            'meta_description' => $page->meta_description,
            'meta_keyword' => $page->meta_keyword,
        );
        return view('frontend.gallery')->with($data);
    }

    public function appointment()
    {
        $page = Page::find(12);
        $category = Category::where('status', 1)->get();
        $hospital = Hospital::where('status', 1)->get();
        $doctor = Doctor::where('status', 1)->get();
        $faq = Faq::where('status', 1)->where(function ($query) {
            $query->where('page_id',12)
                  ->orWhere(function($query1) {
                      $query1->whereNull('pade_detail_id')
                             ->whereNull('page_id');
                  });
        })->get();
        $data = array(
            'title' => 'Appointment',
            'category' => $category,
            'hospital' => $hospital,
            'doctor' => $doctor,
            'faq' => $faq,
            'meta_title' => $page->meta_title,
            'meta_description' => $page->meta_description,
            'meta_keyword' => $page->meta_keyword,
        );
        return view('frontend.appointment')->with($data);
    }


    public function appointment_save(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name'      => 'required',
            'phone'     => 'required',
            'email'   => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['Message' => $validator->errors()->first()], 400);
        }
        try {
            $newUser               = new Appointment;
            $newUser->name         = $request->name;
            $newUser->email        = $request->email;
            $newUser->phone      = $request->phone;
            $newUser->dob      = $request->dob;
            $newUser->country_code        = $request->country_code;
            $newUser->country_name        = $request->country_name;
            $newUser->gender         = $request->gender;
            $newUser->hospital      = $request->hospital;
            $newUser->service      = $request->service;
            $newUser->date      = $request->date;
            $newUser->time      = $request->time;
            $newUser->doctor      = $request->doctor;
            $newUser->message      = $request->message;
            $newUser->save();

            // $mailData = [

            //     'all' => $request,
            //     'link' => url('/'),
            // ];

            // Mail::to($newUser->email)->send(new AppointmentEmail($mailData));

            return response()->json([
                'message' => 'Congratulation, your request send successfully.', 'status' => '1'
            ], 200);
            exit;
        } catch (\Exception $e) {
            $error_message = $e->getMessage();
            // p($error_message);
            return response()->json([
                'message' => $error_message,
                'status' => '0'
            ], 500);
            exit;
        }
    }
}
