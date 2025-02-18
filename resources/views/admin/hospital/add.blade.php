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
                                    <input type="text" name="title" value="{{ old('title',isset($getdata->title) ? $getdata->title : '' )}}" class="form-control" placeholder="Enter hospital name">
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">City<span class="text-danger">*</span></label>
                                        <select class="form-control" name="city_id">
                                            <option value="">Select City</option>
                                            @foreach($city as $spe)
                                            <option value="{{$spe->id}}" {{ isset($getdata->city_id) ? $getdata->city_id==$spe->id ? 'selected' : '' : '' }}>{{$spe->city}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Beds<span class="text-danger">*</span></label>
                                        <input type="number" name="bed" value="{{ old('bed',isset($getdata->bed) ? $getdata->bed : '' )}}" class="form-control" placeholder="Enter Beds number">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Airport Distance<span class="text-danger">*</span></label>
                                        <input type="number" name="distance" value="{{ old('distance',isset($getdata->distance) ? $getdata->distance : '' )}}" class="form-control" placeholder="Enter airport distance">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Estb<span class="text-danger">*</span></label>
                                        <input type="text" name="estb" value="{{ old('estb',isset($getdata->estb) ? $getdata->estb : '' )}}" class="form-control" placeholder="Enter Estb">
                                    </div>
                                </div>

                                

                                <!-- @php
                                $catego = [];
                                if(isset($getdata['service_id'])){
                                $catego = explode(",", $getdata['service_id']);
                                }
                                @endphp
                                <div class="col-mb-3">
                                    <label class="form-label">Specialist<span class="text-danger">*</span></label>
                                    <select class="form-select form-control" name="specialist_id" onchange="get_sub_cat(this.value)">
                                        <option value="">Select Specialist</option>
                                        @foreach($specialist as $spe)
                                        <option value="{{$spe->id}}" {{$spe->id}}" {{ in_array($spe->id,$catego) ? 'selected' : '' }}>{{$spe->title}}</option>
                                        @endforeach
                                    </select>
                                </div><br> -->


                                <div class="mb-3">
                                    <label class="form-label">Short Description <span class="text-danger">*</span></label>
                                    <textarea name="short_description" class="form-control" placeholder="Enter short description">{{ old('short_description',isset($getdata->short_description) ? $getdata->short_description : '' )}}</textarea>
                                </div>


                                <div class="mb-3">
                                    <label class="form-label">Description </label>
                                    <textarea name="editor1" class="form-control" placeholder="Enter Description">{{ old('description',isset($getdata->description) ? $getdata->description : '' )}}</textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Order <span class="text-danger">*</span></label>
                                    <input type="text" name="order_data" value="{{ old('order_data',isset($getdata->order_data) ? $getdata->order_data : '' )}}" class="form-control" placeholder="Enter Order Number">
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
                                    <label class="form-label">Meta Title </label>
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
                'city_id': {
                    required: true
                },
                'editor1': {
                    required: true
                },
                'short_description': {
                    required: true
                },
                'specialist_id': {
                    required: true
                },

            },
            messages: {
                'title': "Please Enter hospital name.",
                'city_id': "Please select city.",
                'editor1': "Please enter description.",
                'short_description': "Please Enter short description.",
                'specialist_id': "Please Select specialist.",
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
    @endsection