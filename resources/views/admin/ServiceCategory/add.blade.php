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
                                        <label class="form-label">Image Tag <span class="text-danger">*</span></label>
                                        <input type="text" name="image_tag" value="{{ old('image_tag',isset($getdata->image_tag) ? $getdata->image_tag : '' )}}" class="form-control" placeholder="Enter image tag">
                                    </div>
                                </div><br>
                                <div class="mb-3">
                                    <label class="form-label">Title <span class="text-danger">*</span></label>
                                    <input type="text" name="title" value="{{ old('title',isset($getdata->title) ? $getdata->title : '' )}}" class="form-control" placeholder="Enter title">
                                </div>



                                <div class="mb-3">
                                    <label class="form-label">Description </label>
                                    <textarea name="editor1" class="form-control" placeholder="Enter Description">{{ old('description',isset($getdata->description) ? $getdata->description : '' )}}</textarea>
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

                                <!-- <div class="col-md-3">
                                    <div class="form-check form-check-success mb-3">
                                        <input class="form-check-input" name="show" value="1" type="checkbox" id="show" {{ isset($getdata->show) ? $getdata->show==1 ? 'checked' : '' : '' }}>
                                        <label class="form-check-label" for="show">
                                            Show Home Page
                                        </label>
                                    </div>
                                </div> -->



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
                $(this).parents(".dynamic_field").append('<div class="row rowdelete"> <div class="col-12 col-md-12 col-lg-12"> <div class="row white-box"><input type="hidden" name="package[' + val + '][package_id]" value=""> <div class="col-11 col-md-11 col-lg-11"> <div class="form-group"> <input type="text" name="package[' + val + '][title]" value="" placeholder = "Question" class="form-control"> </div></div><div class="col-1 col-md-1 col-lg-1"><div class="form-group"> <button type="button" name="remove" class="btn btn-danger btn_remove"><i class="fas fa-times-circle" aria-hidden="true"></i></button> </div></div><div class="mb-12"><label class="form-label">Answer</label> <textarea name = "package[' + val + '][description]" class ="form-control" placeholder = "Enter Answer"></textarea> </div></div><br>');
                val++;
                rerun();



            });

            $(document).on('click', '.btn_remove', function() {
                $(this).parents('.rowdelete').remove();
            });
        });

        function rerun() {
            $('.dropify').dropify();


        }
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
                // 'editor1': {
                //     required: true
                // },
                // 'short_description': {
                //     required: true
                // },

            },
            messages: {
                'title': "Please Enter title.",
                'editor1': "Please enter description.",
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