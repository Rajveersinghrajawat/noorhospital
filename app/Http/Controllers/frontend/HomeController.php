<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Testimonial;
use App\Models\AllEnquery;
use App\Models\Category;
use App\Models\Hospital;
use App\Models\Doctor;
use App\Models\Feature;
use App\Models\NewsLetter;
use App\Models\VideoTestimonial;
use App\Models\Setting;
use App\Models\ContactEnquery;
use App\Models\HomePageContent;
use App\Models\Faq;
use App\Models\Page;
use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Exception;
use Cache;
use Session;
use Illuminate\Support\Facades\Auth;
use Validator;
use Mail;
use App\Mail\WelcomeEmail;
use App\Mail\Enquery;


class HomeController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        $page = Page::find(4);
        $content = HomePageContent::where('status', 1)->get();
        $banner = Banner::where('status', 1)->orderBy('id', 'DESC')->get();
        $testimonial = Testimonial::where('status', 1)->orderBy('id', 'DESC')->get();
        $videotestimonial = VideoTestimonial::where('status', 1)->orderBy('id', 'DESC')->get();
        $servic = Category::where('status', 1)->where('show', 1)->select('id', 'title', 'slug', 'image', 'short_description')->orderBy('id', 'DESC')->limit($setting->category_limit)->get();
        $hospital = Hospital::where('status', 1)->with('get_city')->where('show', 1)->orderBy('id', 'DESC')->limit($setting->hospital_limit)->get();
        $doctor = Doctor::where('status', 1)->where('show', 1)->select('id', 'title', 'slug', 'image', 'short_description','designation')->orderBy('id', 'DESC')->limit($setting->doctor_limit)->get();
        $feature = Feature::where('status', 1)->select('id', 'title', 'image')->orderBy('id', 'DESC')->limit($setting->feature_limit)->get();
        $doctorall = Doctor::where('status', 1)->select('id', 'title')->get();

        $service = Service::where('status', 1)->get();
        
        $faq = Faq::where('status', 1)->where(function ($query) {
            $query->where('page_id', 4)
                  ->orWhere(function($query1) {
                      $query1->whereNull('pade_detail_id')
                             ->whereNull('page_id');
                  });
        })->get();
        // p($page->description);
        $BestSolutions = Page::find(14);
        $data = array(
            'title' => 'NoorHealth Clinic',
            'banner' => $banner,
            'servic1' => $servic,
            'hospital' => $hospital,
            'doctor' => $doctor,
            'feature' => $feature,
            'testimonial' => $testimonial,
            'videotestimonial' => $videotestimonial,
            'faq' => $faq,
            'page' => $page,
            'doctorall' => $doctorall,
            'service' => $service,
            'content' => $content,
            'BestSolutions' => $BestSolutions,
            'meta_title' => $page->meta_title,
            'meta_description' => $page->meta_description,
            'meta_keyword' => $page->meta_keyword,
        );
        return view('frontend.index')->with($data);
    }

    public function search_data(Request $request)
{
    // Retrieve the search query from the request
    $searchQuery = $request->input('search_query');
    if (!empty($searchQuery)) {
        $categoryResults = Category::where('title', 'like', '%' . $searchQuery . '%')->select('id','title','slug','image','image_tag')->where('status',1)->get();
        $hospitalResults = Hospital::with('get_city')->where('title', 'like', '%' . $searchQuery . '%')->where('status',1)->get();
        $doctorResults = Doctor::where('title', 'like', '%' . $searchQuery . '%')->select('id','title','slug','image','image_tag')->where('status',1)->get();
        $searchResults = "";

        // Check if any results were found for doctors, hospitals, or categories
        if (count($doctorResults) > 0 || count($hospitalResults) > 0 || count($categoryResults) > 0) {
            // Doctors related to the search query
            if (count($doctorResults) > 0) {
                $searchResults .= '<p>
                                <h6>Doctors related to ' . $searchQuery . '</h6>
                                <ul>';
                foreach ($doctorResults as $doctor) {
                    $imageSrc = isset($doctor->image) ? url($doctor->image) : url('/public/noimage.png');
                    $imageAlt = isset($doctor->image_tag) ? $doctor->image_tag : 'Image';
                   $searchResults .= '<li><img src="' . $imageSrc . '" alt="' . $imageAlt . '" height="30px" width="30px"> <a href="' . url('/doctor/' . $doctor->slug) . '">' . $doctor->title . ' </a></li>';

                }
                $searchResults .= '</ul>
                            </p>';
            }

            // Hospitals related to the search query
            if (count($hospitalResults) > 0) {
                $searchResults .= '<p>
                                <h6>Hospitals related to ' . $searchQuery . '</h6>
                                <ul>';
                foreach ($hospitalResults as $hospital) {
                    $imageSrc = isset($hospital->image) ? url($hospital->image) : url('/public/noimage.png');
                    $imageAlt = isset($hospital->image_tag) ? $hospital->image_tag : 'Image';
                    $searchResults .= '<li><img src="' . $imageSrc . '" alt="' . $imageAlt . '" style="width:40px;height:40px"> &nbsp; 
<a style="font-size:14px" href="' . url('/hospital/' . $hospital->slug) . '">' . $hospital->title . ' (' . 
    (isset($hospital['get_city']->city) ? $hospital['get_city']->city : 'N/A') . ')
</a></li>';

                }
                $searchResults .= '</ul>
                            </p>';
            }

            // Categories related to the search query
            if (count($categoryResults) > 0) {
                $searchResults .= '<p>
                                <h6>Speciality related to ' . $searchQuery . '</h6>
                                <ul>';
                foreach ($categoryResults as $category) {
                    $imageSrc = isset($category->image) ? url($category->image) : url('/public/noimage.png');
                    $imageAlt = isset($category->image_tag) ? $category->image_tag : 'Image';
                    $searchResults .= '<li><img src="' . $imageSrc . '" alt="' . $imageAlt . '" height="30px" width="30px"> <a href="' . url('/speciality/' . $category->slug) . '">' . $category->title . '</a></li>';
                }
                $searchResults .= '</ul>
                            </p>';
            }
        }

        return response()->json(['search_results' => $searchResults,'status' => 'true']);
    }else{
        return response()->json(['search_results' => $searchResults,'status' => 'false']);
    }
    
}


    public function newsletter(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'      => 'required|email',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => '0', 'Message' => $validator->errors()->first()], 200);
        }
        try {
            $newUser            = new NewsLetter;
            $newUser->email     = $request->email;
            $newUser->save();

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
    
    public function success(Request $request)
    {
        
        
            $data = array(
                'title' => 'Success'
                );

            return view('frontend.success')->with($data);
        
    }


    public function contact_enquery(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'      => 'required',
            'email'     => 'required',
            'phone'     => 'required',
            'message'   => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['Message' => $validator->errors()->first()], 400);
        }
        try {
            // p($request->country_name);
            $newUser                   = new ContactEnquery;
            $newUser->name             = $request->name;
            $newUser->phone           = $request->phone;
            $newUser->country_code        = $request->country_code;
            $newUser->country_name        = $request->country_name;
            $newUser->email            = $request->email;
            $newUser->message      = $request->message;
            $newUser->subject      = $request->subject;
            $newUser->country      = $request->country;
            $newUser->state      = $request->state;

            $newUser->save();

            // $mailData = [

            //     'all' => $request,
            //     'link' => url('/'),
            // ];

            // Mail::to($newUser->email)->send(new Enquery($mailData));

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

    public function allenquery(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'      => 'required',
            'phone'     => 'required',

        ]);

        if ($validator->fails()) {
            return response()->json(['Message' => $validator->errors()->first()], 400);
        }
        try {
            // p($request->country_code);
            $newUser               = new AllEnquery;
            $newUser->name         = $request->name;
            $newUser->phone        = $request->phone;
            $newUser->country_code        = $request->country_code;
            $newUser->country_name        = $request->country_name;
            $newUser->email        = $request->email;
            $newUser->message      = $request->message;
            $newUser->date         = $request->date;
            $newUser->type         = $request->type;
            $newUser->type_id      = $request->type_id;
            $newUser->save();

            // $mailData = [

            //     'all' => $request,
            //     'link' => url('/'),
            // ];

            // Mail::to($newUser->email)->send(new WelcomeEmail($mailData));

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
    
    public function rander1(Request $request)
    {
       
       
        $data = array(
            'title' => 'Landing page 1',
            
        );
        return view('frontend.Noor_page1.index')->with($data);
        
    }
    
    public function rander2(Request $request)
    {
       
       
        $data = array(
            'title' => 'Landing page 2',
            
        );
        return view('frontend.Noor_page2.index')->with($data);
        
    }
    
    public function rander3(Request $request)
    {
       
       
        $data = array(
            'title' => 'Landing page 3',
            
        );
        return view('frontend.Noor_page3.index')->with($data);
        
    }
}
