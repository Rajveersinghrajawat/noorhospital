<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Category;
use App\Models\Country;
use App\Models\Hospital;
use App\Models\Doctor;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use DataTables;
use Validator;
use File;
use Intervention\Image\Facades\Image;

class CommonController extends Controller
{
    public function blog(Request $request){
        
        try
            {
                $servic = Category::where('status', 1)->orderBy('id', 'DESC')->limit(9)->get();
                $hospital = Hospital::where('status', 1)->orderBy('id', 'DESC')->limit(8)->get();
                $doctor = Doctor::where('status', 1)->orderBy('id', 'DESC')->limit(8)->get();
                 
                $success_msg = 'Data Fetach Successfully.';             
                return response()->json([
                    'message' => $success_msg,
                    'status'=>200,
                    'speciality'  => $servic,
                    'doctors'  => $doctor,
                    'hospital'  => $hospital,
                ], 200);
                
                                 
            }
        catch (\Exception $e)
        {
            return $e->getMessage();
            return response()->json(['message' => 'Something went wrong.','status'=>500,'data'=>''], 200);
            exit;
        }
    }

    
}
