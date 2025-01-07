@extends('admin.layout.layout')
@section('content')
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">{{$title}}</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{route('admin_dashboard')}}">Dashboard</a></li>
                                <!-- <li class="breadcrumb-item">{{$title}}</li> -->
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{$errors->first()}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" id="form-data" action="{{$saveurl}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">

                                        <div class="form-group">
                                            <label>Image</label><br>
                                            <input type="file" id="input-file-now" accept="image/*" name="image" class="dropify" data-default-file="{{isset($getdata->image) ? url($getdata->image) : ''}}" />
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Image Tag</label>
                                        <input type="text" name="image_tag" value="{{ old('image_tag',isset($getdata->image_tag) ? $getdata->image_tag : '' )}}" class="form-control" placeholder="Enter image tag">
                                    </div>
                                </div><br>

                                <div class="mb-3">
                                    <label class="form-label">Name <span class="text-danger">*</span></label>
                                    <input type="text" name="title" value="{{ old('title',isset($getdata->title) ? $getdata->title : '' )}}" class="form-control" placeholder="Enter Name">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Phone </label>
                                    <input type="text" name="phone" value="{{ old('phone',isset($getdata->phone) ? $getdata->phone : '' )}}" class="form-control" placeholder="Enter phone number">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Email </label>
                                    <input type="text" name="email" value="{{ old('email',isset($getdata->email) ? $getdata->email : '' )}}" class="form-control" placeholder="Enter email address">
                                </div>

                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label class="form-label">Designation <span class="text-danger">*</span></label>
                                            <input type="text" name="designation" value="{{ old('designation',isset($getdata->designation) ? $getdata->designation : '' )}}" class="form-control" placeholder="Enter designation">
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-3">

                                        <!--<div class="form-group">-->
                                        <!--    <label class="form-label">Location </label>-->
                                        <!--    <input type="text" name="location" value="{{ old('location',isset($getdata->location) ? $getdata->location : '' )}}" class="form-control" placeholder="Enter location">-->
                                        <!--</div>-->
                                        <div class="col-md-6 mb-3">
                                        <label class="form-label">City<span class="text-danger">*</span></label>
                                        <select class="form-control" name="location">
                                            <option value="">Select City</option>
                                            @foreach($city as $spe)
                                            <option value="{{$spe->city}}" {{ isset($getdata->location) ? $getdata->location==$spe->city ? 'selected' : '' : '' }}>{{$spe->city}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    </div>

                                    <div class="col-md-6 mb-3">

                                        <div class="form-group">
                                            <label class="form-label">Experience </label>
                                            <input type="number" name="experience" value="{{ old('experience',isset($getdata->experience) ? $getdata->experience : '' )}}" class="form-control" placeholder="Enter Experience">
                                        </div>

                                    </div>

                                    <div class="col-md-6 mb-3">

                                        <div class="form-group">
                                            <label class="form-label">Qualification </label>
                                            <input type="text" name="qualification_single" value="{{ old('qualification_single',isset($getdata->qualification) ? $getdata->qualification : '' )}}" class="form-control" placeholder="Enter Qualification">
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Hospital<span class="text-danger">*</span></label>
                                        <select class="form-control" name="hospital_id">
                                            <option value="">Select Hospital</option>
                                            @foreach($hospital as $spe1)
                                            <option value="{{$spe1->id}}" {{ isset($getdata->hospital_id) ? $getdata->hospital_id==$spe1->id ? 'selected' : '' : '' }}>{{$spe1->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    

                                    
                                    
                                </div><br>
                                
                                <div class="mb-3">
                                    <label for="formrow-inputState" class="form-label"> Recommended hospital</label>
                                    @php
                                    $Colle = [];
                                    if(isset($getdata['rec_hospital'])){
                                    $Colle = explode(",", $getdata['rec_hospital']);
                                    }
                                    @endphp
                                    <select name="rec_hospital[]" class="form-select select2 form-control select2-multiple" multiple="multiple" data-placeholder="Choose ...">
                                        <option value="">Select Recommended hospital</option>
                                        @foreach($hospital as $coll)
                                        <option value="{{$coll->id}}" {{ in_array($coll->id,$Colle) ? 'selected' : '' }}>{{$coll->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="row">
                                    
                                    <div class="col-md-6">
                                        <label class="form-label">Procedure<span class="text-danger">*</span></label>
                                        @php
                                          $prod_data = [];
                                          if(isset($getdata['procedure_ids'])){
                                          $prod_data = explode(",", $getdata['procedure_ids']);
                                          }
                                          @endphp
                                        <select class="form-control select2" multiple name="procedure_ids[]">
                                            <option value="">Select Procedure</option>
                                            @foreach($pro as $pro_data)
                                            <option value="{{$pro_data->id}}" {{ in_array($pro_data->id,$prod_data) ? 'selected' : '' }}>{{$pro_data->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                </div><br>
                                @php
                                $catego = [];
                                if(isset($getdata['specialist_id'])){
                                $catego = explode(",", $getdata['specialist_id']);
                                }
                                @endphp
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="form-label">Specialist<span class="text-danger">*</span></label>
                                        <select class="form-select form-control" name="specialist_id" onchange="get_sub_cat(this.value)">
                                            <option value="">Select Specialist</option>
                                            @foreach($specialist as $spe)
                                            <option value="{{$spe->id}}" {{$spe->id}}" {{ in_array($spe->id,$catego) ? 'selected' : '' }}>{{$spe->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Sub Specialist<span class="text-danger">*</span></label>
                                        <select class="form-control form-select  form-control select2-multiple get_sub_cat" name="sub_cat">
                                            <option value="">Select Sub Specialist</option>
                                            @foreach($sub_cat as $sub_cats)
                                            <option value="{{$sub_cats->id}}" {{ isset($getdata->sub_cat) ? $getdata->sub_cat==$sub_cats->id ? 'selected' : '' : '' }}>{{$sub_cats->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    
                                </div>

                                <div class="dynamic_field">

                                    @if(isset($getdata->id)!="")
                                    @php
                                    $award = App\Models\Award::where('doctor_id',$getdata->id)->get();
                                    @endphp
                                    @if(isset($getdata->id)!="" && count($award)>0)

                                    @foreach($award as $imgkey=>$img_data)
                                    <div class="row rowdelete">
                                        <input type="hidden" name="award[{{$imgkey}}][award_id]" value="{{$img_data->id}}">

                                        <div class="col-11 col-md-11 col-lg-11">
                                            <div class="form-group">
                                                <!-- <label>Policy</label> -->
                                                <?php
                                                if ($imgkey == 0) { ?>
                                                    <label>Awards & Accomplishments</label>
                                                <?php } ?>
                                                <input type="text" name="award[{{$imgkey}}][title]" value="{{ isset($img_data->name) ? $img_data->name : '' }}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-1 col-md-1 col-lg-1">
                                            <div class="form-group">
                                                <?php
                                                if ($imgkey == 0) { ?>
                                                    <button type="button" name="add" class="btn btn-success add" style="margin-top: 25px;"><i class="fas fa-plus-circle " aria-hidden="true"></i></button>
                                                <?php } else { ?>
                                                    <button type="button" name="remove" class="btn btn-danger btn_remove"><i class="fas fa-times-circle" aria-hidden="true"></i></button>
                                                <?php } ?>

                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    @endforeach
                                    <input type="hidden" name="varkey" id="varkey" value="{{$imgkey+1}}">
                                    @else
                                    <div class="row rowdelete">
                                        <input type="hidden" name="award[0][award_id]" value="">


                                        <div class="col-11 col-md-11 col-lg-11">
                                            <div class="form-group">
                                                <label>Awards & Accomplishments</label>
                                                <input type="text" name="award[0][title]" value="{{ isset($varimage->image_order) ? $varimage->image_order : '' }}" class="form-control" placeholder="Enter Awards & Accomplishments">
                                            </div>
                                        </div>
                                        <div class="col-1 col-md-1 col-lg-1">
                                            <div class="form-group">
                                                <button type="button" name="add" class="btn btn-success add" style="margin-top: 25px;"><i class="fas fa-plus-circle " aria-hidden="true"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    @endif
                                    @else
                                    <div class="row rowdelete">
                                        <input type="hidden" name="award[0][award_id]" value="">


                                        <div class="col-11 col-md-11 col-lg-11">
                                            <div class="form-group">
                                                <label>Awards & Accomplishments</label>
                                                <input type="text" name="award[0][title]" value="{{ isset($varimage->image_order) ? $varimage->image_order : '' }}" class="form-control" placeholder="Enter Awards & Accomplishments">
                                            </div>
                                        </div>
                                        <div class="col-1 col-md-1 col-lg-1">
                                            <div class="form-group">
                                                <button type="button" name="add" class="btn btn-success add" style="margin-top: 25px;"><i class="fas fa-plus-circle " aria-hidden="true"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    @endif
                                </div>

                                <div class="dynamic_field1">

                                    @if(isset($getdata->id)!="")
                                    @php
                                    $menber = App\Models\Membership::where('doctor_id',$getdata->id)->get();
                                    @endphp
                                    @if(isset($getdata->id)!="" && count($menber)>0)

                                    @foreach($menber as $imgkey1=>$img_data1)
                                    <div class="row rowdelete1">
                                        <input type="hidden" name="member[{{$imgkey1}}][member_id]" value="{{$img_data1->id}}">

                                        <div class="col-11 col-md-11 col-lg-11">
                                            <div class="form-group">
                                                <!-- <label>Policy</label> -->
                                                <?php
                                                if ($imgkey1 == 0) { ?>
                                                    <label>Membership and Certification</label>
                                                <?php } ?>
                                                <input type="text" name="member[{{$imgkey1}}][title]" value="{{ isset($img_data1->name) ? $img_data1->name : '' }}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-1 col-md-1 col-lg-1">
                                            <div class="form-group">
                                                <?php
                                                if ($imgkey1 == 0) { ?>
                                                    <button type="button" name="add" class="btn btn-success add1" style="margin-top: 25px;"><i class="fas fa-plus-circle " aria-hidden="true"></i></button>
                                                <?php } else { ?>
                                                    <button type="button" name="remove" class="btn btn-danger btn_remove1"><i class="fas fa-times-circle" aria-hidden="true"></i></button>
                                                <?php } ?>

                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    @endforeach
                                    <input type="hidden" name="varkey" id="varkey1" value="{{$imgkey1+1}}">
                                    @else
                                    <div class="row rowdelete1">
                                        <input type="hidden" name="member[0][member_id]" value="">


                                        <div class="col-11 col-md-11 col-lg-11">
                                            <div class="form-group">
                                                <label>Membership and Certification</label>
                                                <input type="text" name="member[0][title]" value="{{ isset($varimage->name) ? $varimage->name : '' }}" class="form-control" placeholder="Enter membership and certification">
                                            </div>
                                        </div>
                                        <div class="col-1 col-md-1 col-lg-1">
                                            <div class="form-group">
                                                <button type="button" name="add" class="btn btn-success add1" style="margin-top: 25px;"><i class="fas fa-plus-circle " aria-hidden="true"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    @endif
                                    @else
                                    <div class="row rowdelete1">
                                        <input type="hidden" name="member[0][member_id]" value="">


                                        <div class="col-11 col-md-11 col-lg-11">
                                            <div class="form-group">
                                                <label>Membership and Certification</label>
                                                <input type="text" name="member[0][title]" value="{{ isset($varimage->name) ? $varimage->name : '' }}" class="form-control" placeholder="Enter membership and certification">
                                            </div>
                                        </div>
                                        <div class="col-1 col-md-1 col-lg-1">
                                            <div class="form-group">
                                                <button type="button" name="add" class="btn btn-success add1" style="margin-top: 25px;"><i class="fas fa-plus-circle " aria-hidden="true"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    @endif
                                </div>

                                <div class="dynamic_field2">

                                    @if(isset($getdata->id)!="")
                                    @php
                                    $DoctorQualification = App\Models\DoctorQualification::where('doctor_id',$getdata->id)->get();
                                    @endphp
                                    @if(isset($getdata->id)!="" && count($DoctorQualification)>0)

                                    @foreach($DoctorQualification as $imgkey2=>$img_data2)
                                    <div class="row rowdelete2">
                                        <input type="hidden" name="qualification[{{$imgkey2}}][qualification_id]" value="{{$img_data2->id}}">

                                        <div class="col-11 col-md-11 col-lg-11">
                                            <div class="form-group">
                                                <!-- <label>Policy</label> -->
                                                <?php
                                                if ($imgkey2 == 0) { ?>
                                                    <label>Work Experience</label>
                                                <?php } ?>
                                                <input type="text" name="qualification[{{$imgkey2}}][title]" value="{{ isset($img_data2->name) ? $img_data2->name : '' }}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-1 col-md-1 col-lg-1">
                                            <div class="form-group">
                                                <?php
                                                if ($imgkey2 == 0) { ?>
                                                    <button type="button" name="add" class="btn btn-success add2" style="margin-top: 25px;"><i class="fas fa-plus-circle " aria-hidden="true"></i></button>
                                                <?php } else { ?>
                                                    <button type="button" name="remove" class="btn btn-danger btn_remove2"><i class="fas fa-times-circle" aria-hidden="true"></i></button>
                                                <?php } ?>

                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    @endforeach
                                    <input type="hidden" name="varkey" id="varkey2" value="{{$imgkey2+1}}">
                                    @else
                                    <div class="row rowdelete2">
                                        <input type="hidden" name="qualification[0][qualification_id]" value="">


                                        <div class="col-11 col-md-11 col-lg-11">
                                            <div class="form-group">
                                                <label>Work Experience</label>
                                                <input type="text" name="qualification[0][title]" class="form-control" placeholder="Enter Work Experience">
                                            </div>
                                        </div>
                                        <div class="col-1 col-md-1 col-lg-1">
                                            <div class="form-group">
                                                <button type="button" name="add" class="btn btn-success add2" style="margin-top: 25px;"><i class="fas fa-plus-circle " aria-hidden="true"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    @endif
                                    @else
                                    <div class="row rowdelete2">
                                        <input type="hidden" name="qualification[0][qualification_id]" value="">


                                        <div class="col-11 col-md-11 col-lg-11">
                                            <div class="form-group">
                                                <label>Work Experience</label>
                                                <input type="text" name="qualification[0][title]" class="form-control" placeholder="Enter Work Experience">
                                            </div>
                                        </div>
                                        <div class="col-1 col-md-1 col-lg-1">
                                            <div class="form-group">
                                                <button type="button" name="add" class="btn btn-success add2" style="margin-top: 25px;"><i class="fas fa-plus-circle " aria-hidden="true"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    @endif
                                </div>

                                <div class="dynamic_field3">

                                    @if(isset($getdata->id)!="")
                                    @php
                                    $DoctorEducation = App\Models\DoctorEducation::where('doctor_id',$getdata->id)->get();
                                    @endphp
                                    @if(isset($getdata->id)!="" && count($DoctorEducation)>0)

                                    @foreach($DoctorEducation as $imgkey3=>$img_data3)
                                    <div class="row rowdelete3">
                                        <input type="hidden" name="education[{{$imgkey3}}][education_id]" value="{{$img_data3->id}}">

                                        <div class="col-11 col-md-11 col-lg-11">
                                            <div class="form-group">
                                                <!-- <label>Policy</label> -->
                                                <?php
                                                if ($imgkey3 == 0) { ?>
                                                    <label>Education</label>
                                                <?php } ?>
                                                <input type="text" name="education[{{$imgkey3}}][title]" value="{{ isset($img_data3->name) ? $img_data3->name : '' }}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-1 col-md-1 col-lg-1">
                                            <div class="form-group">
                                                <?php
                                                if ($imgkey3 == 0) { ?>
                                                    <button type="button" name="add" class="btn btn-success add3" style="margin-top: 25px;"><i class="fas fa-plus-circle " aria-hidden="true"></i></button>
                                                <?php } else { ?>
                                                    <button type="button" name="remove" class="btn btn-danger btn_remove3"><i class="fas fa-times-circle" aria-hidden="true"></i></button>
                                                <?php } ?>

                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    @endforeach
                                    <input type="hidden" name="varkey" id="varkey3" value="{{$imgkey3+1}}">
                                    @else
                                    <div class="row rowdelete3">
                                        <input type="hidden" name="education[0][education_id]" value="">


                                        <div class="col-11 col-md-11 col-lg-11">
                                            <div class="form-group">
                                                <label>Education</label>
                                                <input type="text" name="education[0][title]" class="form-control" placeholder="Enter Education">
                                            </div>
                                        </div>
                                        <div class="col-1 col-md-1 col-lg-1">
                                            <div class="form-group">
                                                <button type="button" name="add" class="btn btn-success add3" style="margin-top: 25px;"><i class="fas fa-plus-circle " aria-hidden="true"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    @endif
                                    @else
                                    <div class="row rowdelete3">
                                        <input type="hidden" name="education[0][education_id]" value="">


                                        <div class="col-11 col-md-11 col-lg-11">
                                            <div class="form-group">
                                                <label>Education</label>
                                                <input type="text" name="education[0][title]" class="form-control" placeholder="Enter Education">
                                            </div>
                                        </div>
                                        <div class="col-1 col-md-1 col-lg-1">
                                            <div class="form-group">
                                                <button type="button" name="add" class="btn btn-success add3" style="margin-top: 25px;"><i class="fas fa-plus-circle " aria-hidden="true"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    @endif
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Short Description <span class="text-danger">*</span></label>
                                    <textarea name="short_description" class="form-control" placeholder="Enter short description">{{ old('short_description',isset($getdata->short_description) ? $getdata->short_description : '' )}}</textarea>
                                </div>


                                <div class="mb-3">
                                    <label class="form-label">Description <span class="text-danger">*</span></label>
                                    <textarea name="editor1" class="form-control" placeholder="Enter Description">{{ old('description',isset($getdata->description) ? $getdata->description : '' )}}</textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Order <span class="text-danger">*</span></label>
                                    <input type="text" name="order_data" value="{{ old('order_data',isset($getdata->order_data) ? $getdata->order_data : '' )}}" class="form-control" placeholder="Enter Order Number">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Additional Text</label>
                                    <textarea name="additional_text" class="form-control " placeholder="Enter Short Description">{{ old('additional_text',isset($getdata->additional_text) ? $getdata->additional_text : '' )}}</textarea>
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label">Slug</label>
                                    <input type="text" name="slug" value="{{ old('slug',isset($getdata->slug) ? $getdata->slug : '' )}}" class="form-control" placeholder="Enter Slug">
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label">Canonical Tag</label>
                                    <input type="text" name="canonical_tag" value="{{ old('canonical_tag',isset($getdata->canonical_tag) ? $getdata->canonical_tag : '' )}}" class="form-control" placeholder="Enter Canonical Tag">
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label">Script Tag</label>
                                    <textarea name="script" class="form-control" placeholder="Enter Script Tag">{{ old('script',isset($getdata->script) ? $getdata->script : '' )}}</textarea>
                                </div>



                                <div class="mb-3">
                                    <label class="form-label">Meta Title <span class="text-danger">*</span></label>
                                    <input type="text" name="meta_title" value="{{ old('meta_title',isset($getdata->meta_title) ? $getdata->meta_title : '' )}}" class="form-control" placeholder="Enter meta title">
                                </div>


                                <div class="mb-3">
                                    <label class="form-label">Meta Description</label>
                                    <textarea name="meta_description" class="form-control" placeholder="Enter meta description">{{ old('meta_description',isset($getdata->meta_description) ? $getdata->meta_description : '' )}}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Meta Keyword</label>
                                    <textarea name="meta_keyword" class="form-control" placeholder="Enter meta description">{{ old('meta_keyword',isset($getdata->meta_keyword) ? $getdata->meta_keyword : '' )}}</textarea>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-check form-check-success mb-3">
                                        <input class="form-check-input" name="show" value="1" type="checkbox" id="show" {{ isset($getdata->show) ? $getdata->show==1 ? 'checked' : '' : '' }}>
                                        <label class="form-check-label" for="show">
                                            Show Home Page
                                        </label>
                                    </div>
                                </div>



                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>
    <script src="https://cdn.ckeditor.com/4.20.1/full/ckeditor.js"></script>


    <script>
        CKEDITOR.replace('editor1');
    </script>
    <script>
        CKEDITOR.replace('additional_text');
    </script>
    <script>
        $(document).ready(function() {
            var varkey = $("#varkey").val();

            if (varkey != undefined) {
                val = varkey;
            } else {
                val = 1;
            }
            valuedata = 0;

            $(document).on("click", ".add", function() {

                // $pmainid = $(this).closest(".main-data").attr('attr-data');
                $(this).parents(".dynamic_field").append('<div class="row rowdelete"> <div class="col-12 col-md-12 col-lg-12"> <div class="row white-box"><input type="hidden" name="award[' + val + '][award_id]" value=""> <div class="col-11 col-md-11 col-lg-11"> <div class="form-group"> <input type="text" name="award[' + val + '][title]" value="" placeholder = "Enter Awards & Accomplishments" class="form-control"> </div></div><div class="col-1 col-md-1 col-lg-1"><div class="form-group"> <button type="button" name="remove" class="btn btn-danger btn_remove"><i class="fas fa-times-circle" aria-hidden="true"></i></button> </div></div><br><br><br>');
                val++;
                rerun();



            });

            $(document).on('click', '.btn_remove', function() {
                $(this).parents('.rowdelete').remove();
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            var varkey1 = $("#varkey1").val();

            if (varkey1 != undefined) {
                val1 = varkey1;
            } else {
                val1 = 1;
            }
            valuedata = 0;

            $(document).on("click", ".add1", function() {

                // $pmainid = $(this).closest(".main-data").attr('attr-data');
                $(this).parents(".dynamic_field1").append('<div class="row rowdelete1"> <div class="col-12 col-md-12 col-lg-12"> <div class="row white-box"><input type="hidden" name="member[' + val1 + '][member_id]" value=""> <div class="col-11 col-md-11 col-lg-11"> <div class="form-group"> <input type="text" name="member[' + val1 + '][title]" value="" placeholder = "Enter membership and certification" class="form-control" > </div></div><div class="col-1 col-md-1 col-lg-1"><div class="form-group"> <button type="button" name="remove" class="btn btn-danger btn_remove1"><i class="fas fa-times-circle" aria-hidden="true"></i></button> </div></div><br><br><br>');
                val1++;
                rerun();



            });

            $(document).on('click', '.btn_remove1', function() {
                $(this).parents('.rowdelete1').remove();
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            var varkey2 = $("#varkey2").val();

            if (varkey2 != undefined) {
                val2 = varkey2;
            } else {
                val2 = 1;
            }
            valuedata = 0;

            $(document).on("click", ".add2", function() {

                // $pmainid = $(this).closest(".main-data").attr('attr-data');
                $(this).parents(".dynamic_field2").append('<div class="row rowdelete2"> <div class="col-12 col-md-12 col-lg-12"> <div class="row white-box"><input type="hidden" name="qualification[' + val2 + '][qualification_id]" value=""> <div class="col-11 col-md-11 col-lg-11"> <div class="form-group"> <input type="text" name="qualification[' + val2 + '][title]" value="" placeholder = "Enter Work Experience" class="form-control" > </div></div><div class="col-1 col-md-1 col-lg-1"><div class="form-group"> <button type="button" name="remove" class="btn btn-danger btn_remove2"><i class="fas fa-times-circle" aria-hidden="true"></i></button> </div></div><br><br><br>');
                val2++;
                rerun();



            });

            $(document).on('click', '.btn_remove2', function() {
                $(this).parents('.rowdelete2').remove();
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            var varkey3 = $("#varkey3").val();

            if (varkey3 != undefined) {
                val3 = varkey3;
            } else {
                val3 = 1;
            }
            valuedata = 0;

            $(document).on("click", ".add3", function() {

                // $pmainid = $(this).closest(".main-data").attr('attr-data');
                $(this).parents(".dynamic_field3").append('<div class="row rowdelete3"> <div class="col-12 col-md-12 col-lg-12"> <div class="row white-box"><input type="hidden" name="education[' + val3 + '][education_id]" value=""> <div class="col-11 col-md-11 col-lg-11"> <div class="form-group"> <input type="text" name="education[' + val3 + '][title]" value="" placeholder = "Enter Education" class="form-control" > </div></div><div class="col-1 col-md-1 col-lg-1"><div class="form-group"> <button type="button" name="remove" class="btn btn-danger btn_remove3"><i class="fas fa-times-circle" aria-hidden="true"></i></button> </div></div><br><br><br>');
                val3++;
                rerun();



            });

            $(document).on('click', '.btn_remove3', function() {
                $(this).parents('.rowdelete3').remove();
            });
        });
    </script>

    <script>
        $("#form-data").validate({
            onfocusout: function(element) {
                $(element).valid();
            },
            highlight: function(element, errorClass) {

            },

            rules: {
                'title': {
                    required: true
                },
                // 'phone': {
                //     required: true,
                //     digits: true,
                //     minlength: 10,
                //     maxlength: 10
                // },
                // 'email': {
                //     required: true,
                //     email: true
                // },
                // 'experience': {
                //     required: true
                // },
                // 'designation': {
                //     required: true
                // },
                // 'hospital_id': {
                //     required: true
                // },
                // 'specialist_id': {
                //     required: true
                // },
                // 'editor1': {
                //     required: true
                // },
                // 'short_description': {
                //     required: true
                // },

            },
            messages: {
                'title': "Please Enter name.",
                // 'phone': "Please Enter 10 digit phone number.",
                // 'email': "Please Enter email address.",
                // 'experience': "Please Enter experience.",
                // 'designation': "Please Enter designations.",
                // 'hospital_id': "Please select hospital.",
                // 'specialist_id': "Please select specialist.",
                // 'editor1': "Please enter description.",
                // 'short_description': "Please Enter short description.",
            },

            errorPlacement: function(error, element) {
                if (element.attr("name") == "data[Payment][phone]") {
                    error.insertAfter(".error-placement");
                } else {
                    error.insertAfter(element);
                }
            },

            submitHandler: function(form) {

                if (this.valid()) {
                    $('.confirm-reservation-cart').attr("disabled", "disabled");

                    form.submit();
                }
            },
        });
    </script>
    <script type="text/javascript">
        function get_sub_cat(cat_id) {
            $.ajax({
                url: "{{ route('get_sub_cat') }}",
                datatType: 'json',
                type: 'POST',
                data: {
                    '_token': '<?php echo csrf_token() ?>',
                    'cat_id': cat_id,
                },

                success: function(res) {

                    if (res.status == 1) {
                        $('.get_sub_cat').html(res.get_sub);
                    }

                },

            });
        }
    </script>
    @endsection