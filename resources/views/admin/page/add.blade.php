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
                                        <input type="text" name="image_tag" value="{{ old('image_tag',isset($getdata->image_tag) ? $getdata->image_tag : '' )}}" class="form-control" placeholder="Enter image_tag">
                                    </div>
                                </div><br>
                                @if(!empty($getdata))
                                    @if($getdata->id == 3)
                                    <div class="row">
                                        <div class="col-md-4">
    
                                            <div class="form-group">
                                                <label>Sec Image</label><br>
                                                <input type="file" id="input-file-now" accept="image/*" name="sec_image" class="dropify" data-default-file="{{isset($getdata->sec_image) ? url($getdata->sec_image) : ''}}" />
                                            </div>
    
                                        </div>
    
                                        <div class="col-md-4">
                                            <label class="form-label">Sec Image Tag <span class="text-danger">*</span></label>
                                            <input type="text" name="sec_image_tag" value="{{ old('sec_image_tag',isset($getdata->sec_image_tag) ? $getdata->sec_image_tag : '' )}}" class="form-control" placeholder="Enter image_tag">
                                        </div>
                                    </div><br>
                                    @endif
                                @endif    


                                <div class="mb-3">
                                    <label class="form-label">Title <span class="text-danger">*</span></label>
                                    <input type="text" name="title" value="{{ old('title',isset($getdata->title) ? $getdata->title : '' )}}" class="form-control" placeholder="Enter title">
                                </div>
                                
                                @if(!empty($getdata))
                                    @if($getdata->id == 3)
                                    <div class="mb-3">
                                        <label class="form-label">Short Description</label>
                                        <textarea name="short_description" rows="7" class="form-control " placeholder="Enter Short Description">{{ old('short_description',isset($getdata->short_description) ? $getdata->short_description : '' )}}</textarea>
                                    </div>
                                    @endif
                                @endif


                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea name="editor1" class="form-control " placeholder="Enter Short Description">{{ old('description',isset($getdata->description) ? $getdata->description : '' )}}</textarea>
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
                                    <label class="form-label">Meta Title</label>
                                    <input type="text" name="meta_title" value="{{ old('meta_title',isset($getdata->meta_title) ? $getdata->meta_title : '' )}}" class="form-control" placeholder="Enter meta title">
                                </div>


                                <div class="mb-3">
                                    <label class="form-label">Meta Keyword</label>
                                    <textarea name="meta_keyword" class="form-control " placeholder="Enter Short Description">{{ old('meta_keyword',isset($getdata->meta_keyword) ? $getdata->meta_keyword : '' )}}</textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Meta Description</label>
                                    <textarea name="meta_description" class="form-control " placeholder="Enter Short Description">{{ old('meta_description',isset($getdata->meta_description) ? $getdata->meta_description : '' )}}</textarea>
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
    @endsection
    @push('js')

    <script src="https://cdn.ckeditor.com/4.20.1/full/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor1');
    </script>
    
    <script>
        CKEDITOR.replace('short_description');
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
                'editor1': {
                    required: true
                },

            },
            messages: {
                'title': "Please Enter title.",
                'editor1': "Please Enter description.",

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
    @endpush