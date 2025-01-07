<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Package;
use App\Models\User;
use App\Models\Hospital;
use App\Models\Category;
use App\Models\Faq;
use App\Models\Doctor;
use App\Models\City;
use App\Models\Page;
use App\Models\Setting;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Exception;
use Cache;
use Session;
use Illuminate\Support\Facades\Auth;
use Validator;

class HospitalController extends Controller
{
    public function hospital(Request $request)
    {
        $page = Page::find(7);
        $faq = Faq::where('status', 1)->where(function ($query) {
            $query->where('page_id', 7)
                  ->orWhere(function($query1) {
                      $query1->whereNull('pade_detail_id')
                             ->whereNull('page_id');
                  });
        })->get();
        $hospital = Hospital::where('status', 1)->orderBy('id', 'DESC')->where(function ($query) use ($request) {

            if (!empty($request['search'])) {
                $query->where('title', 'LIKE', '%' . $request['search'] . '%');
            }
            if (!empty($request['specialities'])) {
                $query->where('service_id', $request['specialities']);
            }
            if (!empty($request['city'])) {
                $query->where('city_id', $request['city']);
            }
            
        })->paginate(16);

        $servic = Category::where('status', 1)->select('id', 'title', 'slug')->orderBy('id', 'DESC')->get();
        
        $city = City::where('status', 1)->get();
        $data = array(
            'title' => 'Hospital',
            'hospital' => $hospital,
            'faq' => $faq,
            'servic' => $servic,
            'city' => $city,
            'meta_title' => $page->meta_title,
            'meta_description' => $page->meta_description,
            'meta_keyword' => $page->meta_keyword,
        );
        return view('frontend.hospitals')->with($data);
    }

    public function hospital_detail($id)
    {
        $setting = Setting::first();
        $file = Hospital::where('slug', $id)->first();
        $doctor = Doctor::where(['status' => 1, 'hospital_id' => $file->id])->get();
        $faq = Faq::where('status', 1)->where(function ($query)use($file) {
           $query->where('page_id', 7)
                  ->orWhere(function($query1) {
                      $query1->whereNull('pade_detail_id')
                             ->whereNull('page_id');
                  });
        })->get();
        $servic = Category::where('status', 1)->where('show', 1)->select('id', 'title', 'slug', 'image', 'short_description')->orderBy('id', 'DESC')->limit($setting->category_limit)->get();
        $data = array(
            'title' => $file->title,
            'file' => $file,
            'faq' => $faq,
            'doctor' => $doctor,
            'service' => $servic,
            'meta_title' => $file->meta_title,
            'meta_description' => $file->meta_description,
            'meta_keyword' => $file->meta_keyword,
        );
        return view('frontend.hospitalsdel')->with($data);
    }
}
