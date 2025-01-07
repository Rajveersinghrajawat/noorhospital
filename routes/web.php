<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\admin\auth\LoginController;
use App\Http\Controllers\admin\dashboardController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Controllers\admin\CategoryController;

use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\BannerController;
use App\Http\Controllers\admin\PageController;
use App\Http\Controllers\admin\FeatureController;
use App\Http\Controllers\admin\RevenueController;
use App\Http\Controllers\admin\DoctorController;
use App\Http\Controllers\admin\HospitalController;

use App\Http\Controllers\admin\HospitalL2Controller;
use App\Http\Controllers\admin\Doctorl2Controller;
use App\Http\Controllers\admin\Galleryl2Controller;
use App\Http\Controllers\admin\otherFeatureController;

use App\Http\Controllers\admin\TestimonialController;
use App\Http\Controllers\admin\EnqueryController;
use App\Http\Controllers\admin\FaqController;
use App\Http\Controllers\admin\GalleryController;
use App\Http\Controllers\admin\CityController;
use App\Http\Controllers\admin\SubCategoryController;
use App\Http\Controllers\admin\HomePageContentController;
use App\Http\Controllers\admin\ServiceCategoryController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\admin\ProcedureController;
use App\Http\Controllers\admin\VideoTestimonialController;
use App\Http\Controllers\admin\BlogController;

use App\Http\Controllers\admin\PermissionController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\WebPageController;
use App\Http\Controllers\frontend\WebBlogController;
use App\Http\Controllers\frontend\SpecialitiesController as WebSpecialitiesController;
use App\Http\Controllers\frontend\HospitalController as WebHospitalController;
use App\Http\Controllers\frontend\DoctorController as WebDoctorController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//admin routes

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/success', [HomeController::class, 'success'])->name('success');
Route::get('/about-us', [WebPageController::class, 'about'])->name('about');
Route::get('/services', [WebPageController::class, 'services'])->name('services');
Route::get('/procedure/{id}', [WebPageController::class, 'procedure'])->name('web_procedure');
Route::any('/doctors', [WebDoctorController::class, 'doctor'])->name('web_doctor');
Route::get('/doctor/{id}', [WebDoctorController::class, 'doctor_detail']);
Route::any('/hospitals', [WebHospitalController::class, 'hospital'])->name('web_hospital');
Route::get('/gallery', [WebPageController::class, 'gallery'])->name('web_gallery');
Route::get('/hospital/{id}', [WebHospitalController::class, 'hospital_detail']);
Route::get('/specialities', [WebSpecialitiesController::class, 'specialities'])->name('web_specialities');
Route::get('/speciality/{id}', [WebSpecialitiesController::class, 'specialities_detail']);
Route::get('/sub_specialities', [WebSpecialitiesController::class, 'sub_specialities'])->name('sub_web_specialities');
Route::get('/sub_speciality/{id}', [WebSpecialitiesController::class, 'sub_specialities_detail']);
Route::get('/contact-us', [WebPageController::class, 'contact_us'])->name('contact');
Route::any('/contact-enquery', [HomeController::class, 'contact_enquery'])->name('contact_enquery');
Route::any('/allenquery', [HomeController::class, 'allenquery'])->name('allenquery');
Route::any('/blog', [WebBlogController::class, 'web_blog'])->name('web_blog');
Route::any('/blog-detail/{id}', [WebBlogController::class, 'web_blog_detail'])->name('web_blog_detail');
Route::get('/terms-condition', [WebPageController::class, 'terms_condition'])->name('terms_condition');
Route::get('/page/{id}', [WebPageController::class, 'page'])->name('url_page');
Route::get('/privacy-policy', [WebPageController::class, 'privacy_policy'])->name('privacy_policy');
Route::get('/appointment', [WebPageController::class, 'appointment'])->name('appointment');
Route::any('/appointment-save', [WebPageController::class, 'appointment_save'])->name('appointment_save');

Route::any('/get_sub_cat', [DoctorController::class, 'get_sub_cat'])->name('get_sub_cat');
Route::any('/search_data', [HomeController::class, 'search_data'])->name('search_data');
Route::any('/landing-page-1', [HomeController::class, 'rander1'])->name('rander1');
Route::any('/landing-page-2', [HomeController::class, 'rander2'])->name('rander2');
Route::any('/landing-page-3', [HomeController::class, 'rander3'])->name('rander3');


Route::group(['middleware' => 'ifnotadmin'], function () {
    Route::get('/admin', [LoginController::class, 'index'])->name('adminlogin');
    Route::post('/admin/login-save', [LoginController::class, 'save'])->name('loginsave');
    Route::post('/admin/login-save_image', [LoginController::class, 'loginsaveimage'])->name('loginsaveimage');
});

Route::group(['prefix' => 'admin', 'middleware' => 'ifadmin'], function () {
    Route::get('/dashboard', [dashboardController::class, 'index'])->name('admin_dashboard');
    Route::get('/change-password', [LoginController::class, 'change_password'])->name('change_password');
    Route::post('/change-password/save', [LoginController::class, 'change_password_save'])->name('change_password_save');
    Route::get('/view-profile', [LoginController::class, 'view_profile'])->name('view_profile');
    Route::post('/update-profile', [LoginController::class, 'update_profile'])->name('update_profile');
    Route::get('/logout', [LoginController::class, 'logout'])->name('adminlogout');
    Route::get('/denied', [PermissionController::class, 'denied'])->name('denied');


    Route::get('/setting', [SettingController::class, 'index'])->name('setting');
    Route::post('/setting-save', [SettingController::class, 'save'])->name('setting_save');

    Route::get('/about_us', [PageController::class, 'about_us'])->name('admin_about_us');
    Route::post('/about_us-save', [PageController::class, 'about_us_save'])->name('about_us_save');

    /*---------------------Admin pages routes Start---------------------*/
    Route::get('/page/add/{id?}', [PageController::class, 'add'])->name('page_add');
    Route::post('/page/save/{id?}', [PageController::class, 'save'])->name('page_save');
    Route::get('/page', [PageController::class, 'index'])->name('page');
    Route::get('/page-data', [PageController::class, 'anydata'])->name('page_data');
    Route::get('/page/status', [PageController::class, 'changeStatus'])->name('page_status');
    Route::get('/page/delete', [PageController::class, 'delete'])->name('page_delete');
    /*-----------------------Admin pages routes End---------------------*/

    /*---------------------Admin Category routes Start---------------------*/
    Route::get('/specialities/add/{id?}', [CategoryController::class, 'add'])->name('category_add');
    Route::post('/specialities/save/{id?}', [CategoryController::class, 'save'])->name('category_save');
    Route::get('/specialities', [CategoryController::class, 'index'])->name('category');
    Route::any('/specialities-data', [CategoryController::class, 'anydata'])->name('category_data');
    Route::get('/specialities/delete', [CategoryController::class, 'delete'])->name('category_delete');
    Route::get('/specialities/status', [CategoryController::class, 'changeStatus'])->name('category_status');
    /*-----------------------Admin Category routes End---------------------*/

    /*---------------------Admin Service Category routes Start---------------------*/
    Route::get('/service-category/add/{id?}', [ServiceCategoryController::class, 'add'])->name('service_category_add');
    Route::post('/service-category/save/{id?}', [ServiceCategoryController::class, 'save'])->name('service_category_save');
    Route::get('/service-category', [ServiceCategoryController::class, 'index'])->name('service_category');
    Route::any('/service-category-data', [ServiceCategoryController::class, 'anydata'])->name('service_category_data');
    Route::get('/service-category/delete', [ServiceCategoryController::class, 'delete'])->name('service_category_delete');
    Route::get('/service-category/status', [ServiceCategoryController::class, 'changeStatus'])->name('service_category_status');
    /*-----------------------Admin Service Category routes End---------------------*/


    /*---------------------Admin Service routes Start---------------------*/
    Route::get('/service/add/{id?}', [ServiceController::class, 'add'])->name('service_add');
    Route::post('/service/save/{id?}', [ServiceController::class, 'save'])->name('service_save');
    Route::get('/service', [ServiceController::class, 'index'])->name('service');
    Route::any('/service-data', [ServiceController::class, 'anydata'])->name('service_data');
    Route::get('/service/delete', [ServiceController::class, 'delete'])->name('service_delete');
    Route::get('/service/status', [ServiceController::class, 'changeStatus'])->name('service_status');
    /*-----------------------Admin Service routes End---------------------*/


    /*---------------------Admin Procedure routes Start---------------------*/
    Route::get('/procedure/add/{id?}', [ProcedureController::class, 'add'])->name('procedure_add');
    Route::post('/procedure/save/{id?}', [ProcedureController::class, 'save'])->name('procedure_save');
    Route::get('/procedure', [ProcedureController::class, 'index'])->name('procedure');
    Route::any('/procedure-data', [ProcedureController::class, 'anydata'])->name('procedure_data');
    Route::get('/procedure/delete', [ProcedureController::class, 'delete'])->name('procedure_delete');
    Route::get('/procedure/status', [ProcedureController::class, 'changeStatus'])->name('procedure_status');
    /*-----------------------Admin Procedure routes End---------------------*/

    /*---------------------Admin Category routes Start---------------------*/
    Route::get('/content/add/{id?}', [HomePageContentController::class, 'add'])->name('content_add');
    Route::post('/content/save/{id?}', [HomePageContentController::class, 'save'])->name('content_save');
    Route::get('/content', [HomePageContentController::class, 'index'])->name('content');
    Route::any('/content-data', [HomePageContentController::class, 'anydata'])->name('content_data');
    Route::get('/content/delete', [HomePageContentController::class, 'delete'])->name('content_delete');
    Route::get('/content/status', [HomePageContentController::class, 'changeStatus'])->name('content_status');
    /*-----------------------Admin Category routes End---------------------*/

    /*---------------------Admin Sub Category routes Start---------------------*/
    Route::get('/sub-specialities/add/{id?}', [SubCategoryController::class, 'add'])->name('sub_category_add');
    Route::post('/sub-specialities/save/{id?}', [SubCategoryController::class, 'save'])->name('sub_category_save');
    Route::get('/sub-specialities', [SubCategoryController::class, 'index'])->name('sub_category');
    Route::any('/sub-specialities-data', [SubCategoryController::class, 'anydata'])->name('sub_category_data');
    Route::get('/sub-specialities/delete', [SubCategoryController::class, 'delete'])->name('sub_category_delete');
    Route::get('/sub-specialities/status', [SubCategoryController::class, 'changeStatus'])->name('sub_category_status');
    /*-----------------------Admin Sub Category routes End---------------------*/

    /*---------------------Admin blog routes Start---------------------*/
    Route::get('/blog/add/{id?}', [BlogController::class, 'add'])->name('blog_add');
    Route::post('/blog/save/{id?}', [BlogController::class, 'save'])->name('blog_save');
    Route::get('/blog', [BlogController::class, 'index'])->name('blog');
    Route::any('/blog-data', [BlogController::class, 'anydata'])->name('blog_data');
    Route::get('/blog/delete', [BlogController::class, 'delete'])->name('blog_delete');
    Route::get('/blog/status', [BlogController::class, 'changeStatus'])->name('blog_status');
    /*-----------------------Admin blog routes End---------------------*/

    /*---------------------Admin faq routes Start---------------------*/
    Route::get('/faq/add/{id?}', [FaqController::class, 'add'])->name('faq_add');
    Route::post('/faq/save/{id?}', [FaqController::class, 'save'])->name('faq_save');
    Route::get('/faq', [FaqController::class, 'index'])->name('faq');
    Route::any('/faq-data', [FaqController::class, 'anydata'])->name('faq_data');
    Route::get('/faq/delete', [FaqController::class, 'delete'])->name('faq_delete');
    Route::get('/faq/status', [FaqController::class, 'changeStatus'])->name('faq_status');
    /*-----------------------Admin faq routes End---------------------*/

    /*---------------------Admin gallery routes Start---------------------*/
    Route::get('/gallery/add/{id?}', [GalleryController::class, 'add'])->name('gallery_add');
    Route::post('/gallery/save/{id?}', [GalleryController::class, 'save'])->name('gallery_save');
    Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
    Route::any('/gallery-data', [GalleryController::class, 'anydata'])->name('gallery_data');
    Route::get('/gallery/delete', [GalleryController::class, 'delete'])->name('gallery_delete');
    Route::get('/gallery/status', [GalleryController::class, 'changeStatus'])->name('gallery_status');
    /*-----------------------Admin gallery routes End---------------------*/

    /*---------------------Admin l2 gallery routes Start---------------------*/
    Route::get('l2/gallery/add/{id?}', [Galleryl2Controller::class, 'add'])->name('gallery2_add');
    Route::post('l2/gallery/save/{id?}', [Galleryl2Controller::class, 'save'])->name('gallery2_save');
    Route::get('l2/gallery', [Galleryl2Controller::class, 'index'])->name('gallery2');
    Route::any('l2/gallery-data', [Galleryl2Controller::class, 'anydata'])->name('gallery2_data');
    Route::get('l2/gallery/delete', [Galleryl2Controller::class, 'delete'])->name('gallery2_delete');
    Route::get('l2/gallery/status', [Galleryl2Controller::class, 'changeStatus'])->name('gallery2_status');
    /*-----------------------Admin gallery routes End---------------------*/

    /*---------------------Admin City routes Start---------------------*/
    Route::get('/city/add/{id?}', [CityController::class, 'add'])->name('city_add');
    Route::post('/city/save/{id?}', [CityController::class, 'save'])->name('city_save');
    Route::get('/city', [CityController::class, 'index'])->name('city');
    Route::get('/city-data', [CityController::class, 'anydata'])->name('city_data');
    Route::get('/city/delete', [CityController::class, 'delete'])->name('city_delete');
    Route::get('/city/status', [CityController::class, 'changeStatus'])->name('city_status');
    /*-----------------------Admin City routes End---------------------*/

    /*---------------------Admin feature routes Start---------------------*/
    Route::get('/feature/add/{id?}', [FeatureController::class, 'add'])->name('feature_add');
    Route::post('/feature/save/{id?}', [FeatureController::class, 'save'])->name('feature_save');
    Route::get('/feature', [FeatureController::class, 'index'])->name('feature');
    Route::any('/feature-data', [FeatureController::class, 'anydata'])->name('feature_data');
    Route::get('/feature/delete', [FeatureController::class, 'delete'])->name('feature_delete');
    Route::get('/feature/status', [FeatureController::class, 'changeStatus'])->name('feature_status');
    /*-----------------------Admin feature routes End---------------------*/

    /*---------------------Admin feature routes Start---------------------*/
    Route::get('/l2/other-feature/add/{id?}', [otherFeatureController::class, 'add'])->name('other_feature_add');
    Route::post('/l2/other-feature/save/{id?}', [otherFeatureController::class, 'save'])->name('other_feature_save');
    Route::get('/l2/other-feature', [otherFeatureController::class, 'index'])->name('other-feature');
    Route::any('/l2/other-feature-data', [otherFeatureController::class, 'anydata'])->name('other_feature_data');
    Route::get('/l2/other-feature/delete', [otherFeatureController::class, 'delete'])->name('other_feature_delete');
    Route::get('/l2/other-feature/status', [otherFeatureController::class, 'changeStatus'])->name('other_feature_status');
    /*-----------------------Admin feature routes End---------------------*/

    /*---------------------Admin banner routes Start---------------------*/
    Route::get('/banner/add/{id?}', [BannerController::class, 'add'])->name('banner_add');
    Route::post('/banner/save/{id?}', [BannerController::class, 'save'])->name('banner_save');
    Route::get('/banner', [BannerController::class, 'index'])->name('banner');
    Route::any('/banner-data', [BannerController::class, 'anydata'])->name('banner_data');
    Route::get('/banner/delete', [BannerController::class, 'delete'])->name('banner_delete');
    Route::get('/banner/status', [BannerController::class, 'changeStatus'])->name('banner_status');
    /*-----------------------Admin banner routes End---------------------*/

    /*---------------------Admin doctor routes Start---------------------*/
    Route::get('/doctor/add/{id?}', [DoctorController::class, 'add'])->name('doctor_add');
    Route::post('/doctor/save/{id?}', [DoctorController::class, 'save'])->name('doctor_save');
    Route::get('/doctors', [DoctorController::class, 'index'])->name('doctor');
    Route::any('/doctor-data', [DoctorController::class, 'anydata'])->name('doctor_data');
    Route::get('/doctor/delete', [DoctorController::class, 'delete'])->name('doctor_delete');
    Route::get('/doctor/status', [DoctorController::class, 'changeStatus'])->name('doctor_status');
    /*-----------------------Admin banner routes End---------------------*/

    /*---------------------Admin l2 doctor routes Start---------------------*/
    Route::get('/l2/doctor/add/', [Doctorl2Controller::class, 'add'])->name('doctor2_add');
    Route::post('/l2/doctor/save/{id?}', [Doctorl2Controller::class, 'save'])->name('doctor2_save');
    Route::get('/l2/doctors', [Doctorl2Controller::class, 'index'])->name('doctor2');
    Route::any('/l2/doctor-data', [Doctorl2Controller::class, 'anydata'])->name('doctor2_data');
    Route::get('/l2/doctor/delete', [Doctorl2Controller::class, 'delete'])->name('doctor2_delete');
    Route::get('/l2/doctor/status', [Doctorl2Controller::class, 'changeStatus'])->name('doctor2_status');
    /*-----------------------Admin banner routes End---------------------*/


    /*---------------------Admin hospital routes Start---------------------*/
    Route::get('/hospital/add/{id?}', [HospitalController::class, 'add'])->name('hospital_add');
    Route::post('/hospital/save/{id?}', [HospitalController::class, 'save'])->name('hospital_save');
    Route::get('/hospitals', [HospitalController::class, 'index'])->name('hospital');
    Route::any('/hospital-data', [HospitalController::class, 'anydata'])->name('hospital_data');
    Route::get('/hospital/delete', [HospitalController::class, 'delete'])->name('hospital_delete');
    Route::get('/hospital/status', [HospitalController::class, 'changeStatus'])->name('hospital_status');
    
    
      /*---------------------Admin l2 hospital routes Start---------------------*/
    Route::get('/l2/hospital/add/', [HospitalL2Controller::class, 'add'])->name('hospitall2_add');
    Route::post('/l2//hospital/save/{id?}', [HospitalL2Controller::class, 'save'])->name('hospitall2_save');
    Route::get('/l2/hospital', [HospitalL2Controller::class, 'index'])->name('hospitall2');
    Route::any('/l2//hospital-data', [HospitalL2Controller::class, 'anydata'])->name('hospitall2_data');
    Route::get('/l2//hospital/delete', [HospitalL2Controller::class, 'delete'])->name('hospitall2_delete');
    Route::get('/l2//hospital/status', [HospitalL2Controller::class, 'changeStatus'])->name('hospitall2_status');
    
    /*-----------------------Admin banner routes End---------------------*/

    /*---------------------Admin testimonial routes Start---------------------*/
    Route::get('/testimonial/add/{id?}', [TestimonialController::class, 'add'])->name('testimonial_add');
    Route::post('/testimonial/save/{id?}', [TestimonialController::class, 'save'])->name('testimonial_save');
    Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonial');
    Route::any('/testimonial-data', [TestimonialController::class, 'anydata'])->name('testimonial_data');
    Route::get('/testimonial/delete', [TestimonialController::class, 'delete'])->name('testimonial_delete');
    Route::get('/testimonial/status', [TestimonialController::class, 'changeStatus'])->name('testimonial_status');
    /*-----------------------Admin banner routes End---------------------*/

     /*---------------------Admin testimonial routes Start---------------------*/
     Route::get('/video_testimonial/add/{id?}', [VideoTestimonialController::class, 'add'])->name('video_testimonial_add');
     Route::post('/video_testimonial/save/{id?}', [VideoTestimonialController::class, 'save'])->name('video_testimonial_save');
     Route::get('/video_testimonials', [VideoTestimonialController::class, 'index'])->name('video_testimonial');
     Route::any('/video_testimonial-data', [VideoTestimonialController::class, 'anydata'])->name('video_testimonial_data');
     Route::get('/video_testimonial/delete', [VideoTestimonialController::class, 'delete'])->name('video_testimonial_delete');
     Route::get('/video_testimonial/status', [VideoTestimonialController::class, 'changeStatus'])->name('video_testimonial_status');
     /*-----------------------Admin banner routes End---------------------*/

    /*---------------------Admin User routes Start---------------------*/
    Route::get('/user/add/{id?}', [UserController::class, 'add'])->name('user_add');
    Route::post('/user/save/{id?}', [UserController::class, 'save'])->name('user_save');
    Route::get('/user', [UserController::class, 'index'])->name('user');
    Route::get('/user-data', [UserController::class, 'anydata'])->name('user_data');
    Route::get('/user/delete', [UserController::class, 'delete'])->name('user_delete');
    Route::get('/user/status', [UserController::class, 'changeStatus'])->name('user_status');
    Route::get('/user/detail/{id}', [UserController::class, 'detail'])->name('user_detail');
    Route::get('/user_delete_image', [UserController::class, 'user_delete_image'])->name('user_delete_image');
    /*-----------------------Admin User routes End---------------------*/


    Route::get('/contact-request', [EnqueryController::class, 'contact_request'])->name('contact_request');
    Route::any('/contact-data', [EnqueryController::class, 'contact_request_data'])->name('contact_data');

    Route::get('/hospital-request', [EnqueryController::class, 'hospital_request'])->name('hospital_request');
    Route::any('/hospital-request-data', [EnqueryController::class, 'hospital_request_data'])->name('hospital_request_data');

    Route::get('/doctor-request', [EnqueryController::class, 'doctor_request'])->name('doctor_request');
    Route::any('/doctor-request-data', [EnqueryController::class, 'doctor_request_data'])->name('doctor_request_data');

    Route::get('/specialities-request', [EnqueryController::class, 'specialities_request'])->name('specialities_request');
    Route::any('/specialities-request-data', [EnqueryController::class, 'specialities_request_data'])->name('specialities_request_data');

    Route::get('/appointments-request', [EnqueryController::class, 'appointments_request'])->name('appointments_request');
    Route::any('/appointments-request-data', [EnqueryController::class, 'appointments_request_data'])->name('appointments_request_data');
    
    Route::get('/delete-request', [EnqueryController::class, 'delete_request'])->name('delete_request');
    Route::get('/delete_all_request', [EnqueryController::class, 'delete_all_request'])->name('delete_all_request');

    Route::get('/revenue', [RevenueController::class, 'index'])->name('revenue.data');
    Route::any('/getRevenueData', [RevenueController::class, 'anydata'])->name('getRevenueData');
});
