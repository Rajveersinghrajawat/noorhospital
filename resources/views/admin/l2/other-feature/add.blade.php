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

                                <div class="py-3">
                                    <h2 class="fs-4 py-3">Other Feature 1</h2>
                                    <div class="mb-3">
                                        <label class="form-label">Title <span class="text-danger">*</span></label>
                                        <input type="text" name="title" value="{{ old('title',isset($getdata->title) ? $getdata->title : '' )}}" class="form-control" placeholder="Enter title">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Description</label>
                                        <textarea name="description" id="editor1" class="form-control" placeholder="Enter Short Description">{{ old('description',isset($getdata->description) ? $getdata->description : '' )}}</textarea>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label>Image</label><br>
                                                <input type="file" id="input-file-now" accept="image/*" name="image" class="dropify" data-default-file="{{isset($getdata->image) ? url($getdata->image) : ''}}" />
                                            </div>

                                        </div>
                                    </div>
                                </div><br>

                                <div class="py-3">
                                    <h2 class="fs-4 py-3">Other Feature 2</h2>
                                    <div class="mb-3">
                                        <label class="form-label">Title <span class="text-danger">*</span></label>
                                        <input type="text" name="title" value="{{ old('title',isset($getdata->title) ? $getdata->title : '' )}}" class="form-control" placeholder="Enter title">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Description</label>
                                        <textarea name="description" id="editor2" class="form-control" placeholder="Enter Short Description">{{ old('description',isset($getdata->description) ? $getdata->description : '' )}}</textarea>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label>Image</label><br>
                                                <input type="file" id="input-file-now" accept="image/*" name="image" class="dropify" data-default-file="{{isset($getdata->image) ? url($getdata->image) : ''}}" />
                                            </div>

                                        </div>
                                    </div>
                                </div><br>

                                <div class="py-3">
                                    <h2 class="fs-4 py-3">Other Feature 3</h2>
                                    <div class="mb-3">
                                        <label class="form-label">Title <span class="text-danger">*</span></label>
                                        <input type="text" name="title" value="{{ old('title',isset($getdata->title) ? $getdata->title : '' )}}" class="form-control" placeholder="Enter title">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Description</label>
                                        <textarea name="description" id="editor3" class="form-control" placeholder="Enter Short Description">{{ old('description',isset($getdata->description) ? $getdata->description : '' )}}</textarea>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label>Image</label><br>
                                                <input type="file" id="input-file-now" accept="image/*" name="image" class="dropify" data-default-file="{{isset($getdata->image) ? url($getdata->image) : ''}}" />
                                            </div>

                                        </div>
                                    </div>
                                </div><br>

                                <div class="py-3">
                                    <h2 class="fs-4 py-3">Other Feature 4</h2>
                                    <div class="mb-3">
                                        <label class="form-label">Title <span class="text-danger">*</span></label>
                                        <input type="text" name="title" value="{{ old('title',isset($getdata->title) ? $getdata->title : '' )}}" class="form-control" placeholder="Enter title">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Description</label>
                                        <textarea name="description" id="editor4" class="form-control" placeholder="Enter Short Description">{{ old('description',isset($getdata->description) ? $getdata->description : '' )}}</textarea>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label>Image</label><br>
                                                <input type="file" id="input-file-now" accept="image/*" name="image" class="dropify" data-default-file="{{isset($getdata->image) ? url($getdata->image) : ''}}" />
                                            </div>

                                        </div>
                                    </div>
                                </div><br>

                                <div class="py-3">
                                    <h2 class="fs-4 py-3">Other Feature 5</h2>
                                    <div class="mb-3">
                                        <label class="form-label">Title <span class="text-danger">*</span></label>
                                        <input type="text" name="title" value="{{ old('title',isset($getdata->title) ? $getdata->title : '' )}}" class="form-control" placeholder="Enter title">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Description</label>
                                        <textarea name="description" id="editor5" class="form-control" placeholder="Enter Short Description">{{ old('description',isset($getdata->description) ? $getdata->description : '' )}}</textarea>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label>Image</label><br>
                                                <input type="file" id="input-file-now" accept="image/*" name="image" class="dropify" data-default-file="{{isset($getdata->image) ? url($getdata->image) : ''}}" />
                                            </div>

                                        </div>
                                    </div>
                                </div><br>

                                <div class="py-3">
                                    <h2 class="fs-4 py-3">Heart Treatments</h2>
                                    <div id="treatments-list">
                                        <div class="treatments-item mb-3">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <input type="text" name="treatments[0][title]" class="form-control" placeholder="Title" required>
                                                </div>
                                                <div class="col-md-5">
                                                    <textarea name="treatments[0][description]" class="form-control" placeholder="Description" required></textarea>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-danger remove-treatment">Remove</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" id="add-treatment" class="btn btn-primary mt-3">Add More</button>
                                </div>


                                <div class="py-3">
                                    <h2 class="fs-4 py-3">FAQ's</h2>
                                    <div id="faq-list">
                                        <div class="faq-item mb-3">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <input type="text" name="faq[0][question]" class="form-control" placeholder="Question" required>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" name="faq[0][answer]" class="form-control" placeholder="Answer" required>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-danger remove-faq">Remove</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" id="add-faq" class="btn btn-primary mt-3">Add FAQ</button>

                                </div><br>



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
        CKEDITOR.replace('editor2');
        CKEDITOR.replace('editor3');
        CKEDITOR.replace('editor4');
        CKEDITOR.replace('editor5');
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
                'category_type': {
                    required: true
                },

            },
            messages: {
                'title': "Please Enter title.",
                'category_type': "Please Select category Type.",
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

    <script>
        $(document).ready(function() {
            let faqIndex = 1; // To keep track of dynamic FAQ inputs

            // Add new FAQ entry
            $('#add-faq').click(function() {
                let faqTemplate = `
                <div class="faq-item mb-3">
                    <div class="row">
                        <div class="col-md-5">
                            <input type="text" name="faq[${faqIndex}][question]" class="form-control" placeholder="Question" required>
                        </div>
                        <div class="col-md-5">
                            <input type="text" name="faq[${faqIndex}][answer]" class="form-control" placeholder="Answer" required>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-danger remove-faq">Remove</button>
                        </div>
                    </div>
                </div>`;
                $('#faq-list').append(faqTemplate);
                faqIndex++;
            });

            // Remove FAQ entry
            $(document).on('click', '.remove-faq', function() {
                $(this).closest('.faq-item').remove();
            });
        });
    </script>

<script>
    $(document).ready(function () {
        let treatmentsIndex = 1; // To keep track of dynamic treatment entries

        // Add new treatment entry
        $('#add-treatment').click(function () {
            let treatmentTemplate = `
                <div class="treatments-item mb-3">
                    <div class="row">
                        <div class="col-md-5">
                            <input type="text" name="treatments[${treatmentsIndex}][title]" class="form-control" placeholder="Title" required>
                        </div>
                        <div class="col-md-5">
                            <textarea name="treatments[${treatmentsIndex}][description]" class="form-control" placeholder="Description" required></textarea>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-danger remove-treatment">Remove</button>
                        </div>
                    </div>
                </div>`;
            $('#treatments-list').append(treatmentTemplate);
            treatmentsIndex++;
        });

        // Remove treatment entry
        $(document).on('click', '.remove-treatment', function () {
            $(this).closest('.treatments-item').remove();
        });
    });
</script>
    @endsection