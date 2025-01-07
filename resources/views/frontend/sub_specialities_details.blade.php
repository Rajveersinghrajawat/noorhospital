@extends('frontend.layout.layout')
@section('content')
<style>
    .service-card.style1 {
  -webkit-box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
  border-radius: 10px;
  background-color: #fff;
}

</style>
<!-- Content Wrapper Start -->
<div class="content-wrapper">

    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap bg-f br-2">
        <div class="container">
            <div class="breadcrumb-title">
                <h2>{{$file->title}}</h2>
                <ul class="breadcrumb-menu list-style">
                    <li><a href="{{url('/')}}">Home </a></li>
                    <li><a href="{{route('web_specialities')}}">Sub Specialities</a></li>
                    <li>{{$file->title}}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Service Details section Start -->
    <section class="service-details-wrap ptb-100">
        <div class="container">
            <div class="row gx-5">
                <div class="col-xl-4">
                    <div class="sidebar">
                        <div class="row">
                            <div class="col-md-12">
                                <a class="single-service-img" data-fancybox="gallery" href="{{isset($file->image)?url($file->image):url('/public/noimage.png')}}">
                                    <img src="{{ isset($file->image) ? url($file->image) : url('/public/noimage.png') }}" class="img-fluid rounded" alt="{{ isset($file->image_tag) ? $file->image_tag : 'Image' }}">

                                </a>
                            </div>
                            <!-- <div class="col-md-6">
                                            <a class="single-service-img" data-fancybox="gallery" href="assets/img/services/single-service-2.jpg">
                                                <img src="assets/img/services/single-service-2.jpg" alt="Image">
                                            </a>
                                        </div> -->
                        </div>
                        <!-- <div class="sidebar-widget categories">
                                        <h4>Top Services</h4>
                                        <div class="category-box">
                                            <ul class="list-style">
                                                <li>
                                                    <a href="service-one.html">
                                                      Orthopedic Solutions 
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="service-one.html">
                                                        Cardiology Solutions
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="service-one.html">
                                                        Dental Services
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="service-one.html">
                                                        Eye Care Services
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="service-one.html">
                                                        Gastrology Services
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="service-one.html">
                                                        Neurology Services
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div> -->

                        <div class="sidebar-widget mt-5">

                            <h4>Book an Appointment</h4>
                            <form id="allenquery" class="contact-widget" method="post">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="number" name="phone" placeholder="Phone Number">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    <input type="date" name="date">
                                </div>
                                <div class="form-group">
                                    <textarea name="message" id="msg" cols="30" rows="10" placeholder="Your Message"></textarea>
                                </div>
                                <input type="hidden" name="type" value="{{$file->title}}">
                                    <input type="hidden" name="type_id" value="1">
                                    <button type="submit" class="btn style2">Book Now</button>
                                    </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-8">
                        <div class="service-desc">
                            <h2>{{$file->title}}</h2>
                            {!!$file->description!!}
                        </div>
                    </div>

                </div>
            </div>
    </section>
    <!-- Service Details section End -->

    

    <!-- Service Section Start -->
    <section class="service-wrap ptb-100 bg-athens">
        <div class="container">
            <div class="section-title style1 text-center mb-40">
                <!-- <span>Our Services</span> -->
                <h2>Recommended Specialist</h2>
            </div>
            <div class="service-slider-one owl-carousel">
                @foreach($doctor as $doc)
                <div class="portfolio-card style1">
                    <img src="{{url($doc->image)}}" class="img-fluid" alt="Image">
                    <div class="portfolio-info sizedoct">
                        <a href="{{url('/Speciality/'.$file->slug)}}" class="portfolio-cat">{{$file->title}}</a>
                        <h3><a href="{{url('/doctor/'.$doc->slug)}}">{{$doc->title}}</a></h3>
                    </div>
                </div>
                @endforeach


            </div>
            <div class="text-center mt-5">
                <div class="hero-btn mt-5 rounded ">
                    <a href="{{route('web_doctor')}}" class="btn style1">See All Specialist</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Section End -->



</div>
<!-- Content wrapper end -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $("#allenquery").validate({

        onfocusout: function(element) {
            $(element).valid();
        },
        highlight: function(element, errorClass) {

        },

        rules: {
            'name': {
                required: true
            },

           'phone': {
                    required: true,
                    digits: true,
                    minlength: 10,
                    maxlength: 10
                },
            'email': {
                required: true,
                email: true
            },

            'message': {
                required: true
            },
            'date': {
                required: true
            },

        },
        messages: {
            'name': "Please Enter name.",
            'phone': "Please Enter mobile number.",
            'email': "Please Enter email address.",
            'message': "Please Enter message.",
            'date': "Please Select date.",

        },
        errorPlacement: function(error, element) {
            if (element.attr("name") == "data[Payment][phone]") {
                error.insertAfter(".error-placement");
            } else {
                error.insertAfter(element);
            }
        },

        submitHandler: function(form) {

            $.ajax({
                url: "{{ route('allenquery') }}",
                type: 'GET',
                data: $('#allenquery').serialize(),
                beforeSend: function() {
                    $("#preloader").show();
                },
                success: function(res) {
                    $("#preloader").hide();
                    if (res.status == 1) {
                        swal({
                                title: "Success!",
                                text: res.message,
                                icon: "success",
                                dangerMode: true,
                                buttons: false,
                                timer: 1000
                            })
                            .then(() => {
                                location.reload();
                            })

                    } else {
                        $("#preloader").hide();
                        swal({
                            icon: 'error',
                            title: 'Oops...',
                            text: res.message,
                        })
                    }
                },
                error: function(error) {
                    $("#preloader").hide();
                    swal({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!',
                    })
                }
            });
        },
    });
</script>
@endsection