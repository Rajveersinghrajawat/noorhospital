<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Package;
use App\Models\Page;
use App\Models\Category;
use App\Models\Hospital;
use App\Models\Doctor;
use App\Models\Faq;
use App\Models\Setting;
use App\Models\SubCategory;
use App\Models\Destination;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Exception;
use Cache;
use Session;
use Illuminate\Support\Facades\Auth;
use Validator;

class SpecialitiesController extends Controller
{
    public function specialities()
    {
        $page = Page::find(8);
        $servic = Category::where('status', 1)->orderBy('id', 'DESC')->paginate(16);
        $faq = Faq::where('status', 1)->where(function ($query) {
            $query->where('page_id',8)
                  ->orWhere(function($query1) {
                      $query1->whereNull('pade_detail_id')
                             ->whereNull('page_id');
                  });
        })->get();
        $data = array(
            'title' => 'Specialities',
            'servic' => $servic,
            'faq' => $faq,
            'meta_title' => $page->meta_title,
            'meta_description' => $page->meta_description,
            'meta_keyword' => $page->meta_keyword,
        );
        return view('frontend.specialities')->with($data);
    }

    public function specialities_detail($id)
    {

        $setting = Setting::first();
        $file = Category::where('slug', $id)->first();
        $doctor = Doctor::where(['status' => 1, 'specialist_id' => $file->id])->get();
        $subcat = SubCategory::where(['status' => 1, 'category_id' => $file->id])->orderBy('id', 'DESC')->limit(3)->get();
        if(!empty($file->rec_hospital)){
            $Colle = explode(",", $file['rec_hospital']);
            $rec_hospital = Hospital::with('get_city')->where('status', 1)->whereIn('id', $Colle)->orderBy('id', 'DESC')->get();
        }else{
            $rec_hospital = Hospital::with('get_city')->where('status', 1)->where('show', 1)->orderBy('id', 'DESC')->limit($setting->hospital_limit)->get();
        }
        $faq = Faq::where('status', 1)->where(function ($query) use ($file) {
            $query->where('pade_detail_id',$file->id)
                  ->orWhere(function($query1)use($file) {
                      $query1->whereNull('page_id')->whereNull('pade_detail_id');
                  });
        })->get();
        $data = array(
            'title' => $file->title,
            'file' => $file,
            'doctor' => $doctor,
            'faq' => $faq,
            'subcat' => $subcat,
            'rec_hospital' => $rec_hospital,
            'meta_title' => $file->meta_title,
            'meta_description' => $file->meta_description,
            'meta_keyword' => $file->meta_keyword,
        );
        return view('frontend.specialities-details')->with($data);
    }


    public function sub_specialities_detail($id)
    {

        $file = SubCategory::where('slug', $id)->first();
        $doctor = Doctor::where(['status' => 1, 'sub_cat' => $file->id])->get();

        $faq = Faq::where('status', 1)->where(function ($query) use ($file) {
            $query->where('pade_detail_id',$file->id)
                  ->orWhere(function($query1) {
                      $query1->whereNull('page_id')->whereNull('pade_detail_id');
                  });
        })->get();
        $data = array(
            'title' => $file->title,
            'file' => $file,
            'doctor' => $doctor,
            'faq' => $faq,
            'meta_title' => $file->meta_title,
            'meta_description' => $file->meta_description,
            'meta_keyword' => $file->meta_keyword,
        );
        return view('frontend.sub_specialities_details')->with($data);
    }
}
