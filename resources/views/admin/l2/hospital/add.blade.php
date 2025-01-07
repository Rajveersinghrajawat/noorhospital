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
                        <h4 class="mb-sm-0 font-size-18"></h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{route('admin_dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item">{{$title}}</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <!-- @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif -->
<!-- 
            @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{$errors->first()}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" id="form-data" action="" enctype="multipart/form-data">
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

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">City<span class="text-danger">*</span></label>
                                        <input type="text" name="city" value="{{ old('city',isset($getdata->city) ? $getdata->city : '' )}}" class="form-control" placeholder="Enter City">
                                    </div>
                                </div>

                                

                               


                                <div class="mb-3">
                                    <label class="form-label">Short Description <span class="text-danger">*</span></label>
                                    <textarea name="short_description" class="form-control" placeholder="Enter short description">{{ old('short_description',isset($getdata->short_description) ? $getdata->short_description : '' )}}</textarea>
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
                
                'short_description': {
                    required: true
                },
               

            },
            messages: {
                'title': "Please Enter hospital name.",
              
                'short_description': "Please Enter short description.",
              
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