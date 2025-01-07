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


                                <div class="row">
                                    <div class="col-md-12 mb-3">

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
                                    
                                </div><br>
                                
                                
                              

                                <div class="mb-3">
                                    <label class="form-label">Description <span class="text-danger">*</span></label>
                                    <textarea name="editor1" class="form-control" placeholder="Enter Description">{{ old('description',isset($getdata->description) ? $getdata->description : '' )}}</textarea>
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