<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Associate;
use App\Models\AllEnquery;
use App\Models\ContactEnquery;
use App\Models\Appointment;
use App\Models\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use DataTables;
use Validator;
use File;
use Intervention\Image\Facades\Image;

class EnqueryController extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Associate Enquiry',
            'page_title' => 'Associate Enquiry',
        );
        return view('admin.enquery.associate')->with($data);
    }
    public function hospital_request()
    {
        $data = array(
            'title' => 'Hospital Enquiry',
            'page_title' => 'Hospital Enquiry',
        );
        return view('admin.enquery.hospital')->with($data);
    }
    public function doctor_request()
    {
        $data = array(
            'title' => 'Doctors Enquiry',
            'page_title' => 'Doctors Enquiry',
        );
        return view('admin.enquery.doctor')->with($data);
    }
    public function specialities_request()
    {
        $data = array(
            'title' => 'Specialities Enquiry',
            'page_title' => 'Specialities Enquiry',
        );
        return view('admin.enquery.specialities')->with($data);
    }
    public function appointments_request()
    {
        $data = array(
            'title' => 'Appointments',
            'page_title' => 'Appointments',
        );
        return view('admin.enquery.appointments')->with($data);
    }

    public function anydata(Request $request)
    {
        $anydata = [];
        $anydata = Associate::orderBy('id', 'DESC')->get();

        return Datatables::of($anydata)

            ->addColumn('action', function ($anydata) {
                $file_name = "category";
                $encrypted_id = get_encrypted_value($anydata->id, true);
                $action = '
                        <i class="fas fa-trash-alt text-danger delete-button" id="deletebtn" data-id="' . $anydata->id . '" data-original-title="Delete" data-toggle="tooltip" data-placement="bottom"></i>';
                return $action;
            })

            ->rawColumns(['action'])
            ->addIndexColumn()->make(true);
    }

    public function contact_request()
    {
        $data = array(
            'title' => 'Contact Enquiry',
            'page_title' => 'Contact Enquiry',
        );
        return view('admin.enquery.contact')->with($data);
    }

    public function contact_request_data(Request $request)
    {
        $anydata = [];
        $anydata = ContactEnquery::orderBy('id', 'DESC')->get();
        return Datatables::of($anydata)

            ->addColumn('date', function ($anydata) {
                return date_format($anydata->created_at, "d-M-Y");
            })
            ->addColumn('phone', function ($anydata) {
    return isset($anydata->country_code) ? $anydata->country_code . ' ' . $anydata->phone : $anydata->phone;
})
            ->addColumn('action', function ($anydata) {
                $file_name = "category";
                $encrypted_id = get_encrypted_value($anydata->id, true);
                $action = '
                        <i class="fas fa-trash-alt text-danger delete-button" id="deletebtn" data-id="' . $anydata->id . '" data-original-title="Delete" data-toggle="tooltip" data-placement="bottom"></i>';
                return $action;
            })
            ->rawColumns(['date','phone','action'])
            ->addIndexColumn()->make(true);
    }
    public function hospital_request_data(Request $request)
    {
        $anydata = [];
        $anydata = AllEnquery::where('type_id', 2)->orderBy('id', 'DESC')->get();
        return Datatables::of($anydata)

            ->addColumn('date', function ($anydata) {
                return date_format($anydata->created_at, "d-M-Y");
            })
            ->addColumn('phone', function ($anydata) {
                return isset($anydata->country_code) ? $anydata->country_code . ' ' . $anydata->phone : $anydata->phone;
            })
            ->addColumn('action', function ($anydata) {
                $file_name = "category";
                $encrypted_id = get_encrypted_value($anydata->id, true);
                $action = '
                        <i class="fas fa-trash-alt text-danger delete-button" id="deletebtn" data-id="' . $anydata->id . '" data-original-title="Delete" data-toggle="tooltip" data-placement="bottom"></i>';
                return $action;
            })
            ->rawColumns(['date','phone','action'])
            ->addIndexColumn()->make(true);
    }
    public function doctor_request_data(Request $request)
    {
        $anydata = [];
        $anydata = AllEnquery::where('type_id', 3)->orderBy('id', 'DESC')->get();
        return Datatables::of($anydata)

            ->addColumn('date', function ($anydata) {
                return date_format($anydata->created_at, "d-M-Y");
            })
            ->addColumn('phone', function ($anydata) {
                return isset($anydata->country_code) ? $anydata->country_code . ' ' . $anydata->phone : $anydata->phone;
            })
            ->addColumn('action', function ($anydata) {
                $file_name = "category";
                $encrypted_id = get_encrypted_value($anydata->id, true);
                $action = '
                        <i class="fas fa-trash-alt text-danger delete-button" id="deletebtn" data-id="' . $anydata->id . '" data-original-title="Delete" data-toggle="tooltip" data-placement="bottom"></i>';
                return $action;
            })
            ->rawColumns(['date','phone','action'])
            ->addIndexColumn()->make(true);
    }
    public function specialities_request_data(Request $request)
    {
        $anydata = [];
        $anydata = AllEnquery::where('type_id', 1)->orderBy('id', 'DESC')->get();
        return Datatables::of($anydata)

            ->addColumn('date', function ($anydata) {
                return date_format($anydata->created_at, "d-M-Y");
            })
            ->addColumn('phone', function ($anydata) {
                return isset($anydata->country_code) ? $anydata->country_code . ' ' . $anydata->phone : $anydata->phone;
            })
            ->addColumn('action', function ($anydata) {
                $file_name = "category";
                $encrypted_id = get_encrypted_value($anydata->id, true);
                $action = '
                        <i class="fas fa-trash-alt text-danger delete-button" id="deletebtn" data-id="' . $anydata->id . '" data-original-title="Delete" data-toggle="tooltip" data-placement="bottom"></i>';
                return $action;
            })
            ->rawColumns(['date','phone','action'])
            ->addIndexColumn()->make(true);
    }

    public function appointments_request_data(Request $request)
    {
        $anydata = [];
        $anydata = Appointment::orderBy('id', 'DESC')->get();
        return Datatables::of($anydata)

            ->addColumn('date', function ($anydata) {
                return date_format($anydata->created_at, "d-M-Y");
            })
            ->addColumn('phone', function ($anydata) {
                return isset($anydata->country_code) ? $anydata->country_code . ' ' . $anydata->phone : $anydata->phone;
            })
            ->addColumn('action', function ($anydata) {
                $file_name = "category";
                $encrypted_id = get_encrypted_value($anydata->id, true);
                $action = '
                        <i class="fas fa-trash-alt text-danger delete-button" id="deletebtn" data-id="' . $anydata->id . '" data-original-title="Delete" data-toggle="tooltip" data-placement="bottom"></i>';
                return $action;
            })
            ->rawColumns(['date','phone','action'])
            ->addIndexColumn()->make(true);
    }
    
        public function delete_request(Request $request)
        {
        $id = $request['id'];
        $data = ContactEnquery::find($id);
        if ($data) {
            $data->delete();
            $return_arr = array(
                'status' => 'success',
                'message' => 'Inquiry Deleted Sussessfully!',
            );
            return response()->json($return_arr);
        }
    }
    
    public function delete_all_request(Request $request)
        {
        $id = $request['id'];
        $data = AllEnquery::find($id);
        if ($data) {
            $data->delete();
            $return_arr = array(
                'status' => 'success',
                'message' => 'Inquiry Deleted Sussessfully!',
            );
            return response()->json($return_arr);
        }
    }
}
