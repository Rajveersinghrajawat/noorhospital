@extends('frontend.layout.layout')
@section('content')


<!-- Content Wrapper Start -->
<style>


.share {
    position: relative;
    margin: 10;
    padding: 10px 0px;
    display: flex;
    list-style: none;
    transition: 0.5s;
    cursor: pointer;
    width: 130px;
    height: 45px;
    margin-bottom: 30px;
}
 .procedure{
    list-style:none !important;
}

  .procedure li a {
       width:30%;
           display: block;
    background: #14467b !important;
    padding: 5px 0px;
    text-align:center !important;
    color: #fff;
    text-decoration: underline;
     margin-bottom:5px!important;
   }
    @media only screen and (min-width: 0px) and (max-width: 655px){
   .madalbtn .modalupup {
    position: fixed;
    right: 3%!important;
   }
   .subheadings p:first-child {
    width: 130px !important;
    margin-bottom: 0px;
    margin-right: 16px;
}

   .procedure li a {
       width:50%;
           display: block;
    background: #14467b !important;
    padding: 5px 10px;
    text-align:left !important;
    color: #fff;
    text-decoration: underline;
     margin-bottom:5px!important;
   }
   }
   .procedure span{
       display:none !important;
   }
   
   .procedure li{
       padding-left:0px!important;
        margin-bottom:0px!important;
   }

</style>
<div class="content-wrapper">

    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap bg-f br-2">
        <div class="container">
            <div class="breadcrumb-title">
                <h2>{{$file->title}}</h2>
                <ul class="breadcrumb-menu list-style">
                    <li><a href="{{url('/')}}">Home </a></li>
                    <li><a href="{{route('web_specialities')}}">Specialities</a></li>
                    <li>{{$file->title}}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Service Details section Start -->
    <section class="service-details-wrap ptb-100">
        <div class="container">
            <div class="row gx-lg-5">
                <div class="col-xl-4">
                    <div class="sidebar">
                        <div class="row">
                            <div class="col-md-12">
                                <a class="single-service-img" data-fancybox="gallery" href="{{isset($file->image)?url($file->image):url('/public/noimage.png')}}">
                                    <img src="{{isset($file->image)?url($file->image):url('/public/noimage.png')}}" class="img-fluid rounded" alt="{{isset($file->image_tag)?$file->image_tag:'Image'}}">
                                </a>
                            </div>
                            <!-- <div class="col-md-6">
                                            <a class="single-service-img" data-fancybox="gallery" href="assets/img/services/single-service-2.jpg">
                                                <img src="assets/img/services/single-service-2.jpg" alt="Image">
                                            </a>
                                        </div> -->
                        </div>
                        <div class="menuenquery">
                            <div class=" py-4 buttondisplay ">
                                <a href="{{$setting->twitter}}">
                                    <button class="btn btn-primary infromectionbtn " type="button">
                                        <span><i class="fab fa-facebook-messenger"></i></span> Messenger Now
                                    </button>
                                </a>

                                <button class="btn btn-primary infromectionbtn " onclick="window.open('https://api.whatsapp.com/send?phone=9555197411&text=Hi%21+I%27m+Interested+In+Please+Share+More+Details.', '_blank');" type="button">
                                    <span> <i class="fa-brands fa-whatsapp"></i></span> Message Now</button>
                            </div>
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

                        <div class="sidebar-widget mt-1">

                            <h4>Book an Appointment</h4>
                            <form id="allenquery" class="contact-widget" method="post">
                            <div class="mb-3">
                            <label for="" class="form-label required">Name</label><br>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="mb-3">
                         <label for="" class="form-label required">Phone Number</label><br>
                                    <input type="tel" id="phone" name="phone" class="form-control">
                                </div>
                                <div class="mb-3">
                         <label for="" class="form-label required">Email Address</label><br>
                                    <input type="email" name="email" class="form-control">
                                </div>
                                
                                <div class="mb-3">
                         <label for="" class="form-label required">Message</label><br>
                                    <textarea name="message" id="msg" cols="30" rows="2" class="form-control"></textarea>
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
                        <ul class="share">
            
            <li><a target="_blank" href="https://www.facebook.com/sharer.php?u=&t={{urlencode(Request::url())}}"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
            <li><a target="_blank" href="https://t.me/share/url?url={{urlencode(Request::url())}}"><i class="fab fa-telegram" aria-hidden="true"></i></a></li>
            <li><a target="_blank" href="https://api.whatsapp.com/send?text={{urlencode(Request::url())}}"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
            <li><a target="_blank" href="fb-messenger://share/?link={{urlencode(Request::url())}}"><i class='fab fa-facebook-messenger'></i></a></li>
            
        </ul>
                        {!!$file->description!!}
                    </div>
                    @if(!empty($file->procedure_ids))
                        <h3>Procedure</h3>
                    @php

                        if(isset($file['procedure_ids'])){
                            $prod_data = explode(",", $file['procedure_ids']);
                            $pro = App\Models\Procedure::whereIn('id',$prod_data)->get();
                        }
                        
                    @endphp
                       <ul class="content-feature-list procedure style1 list-style ">
                            @foreach($pro as $pro_d)
                            <li>
                                <a href="{{url('/procedure/'.$pro_d->slug)}}">{{$pro_d->title}}</a>
                            </li>
                            @endforeach
                        </ul>
                    @endif
                </div>

            </div>
        </div>
    </section>
    <!-- Service Details section End -->
    @if(count($subcat)>0)
    <section class="service-wrap ptb-100 bg-athens">
        <div class="container">
            <div class="section-title style1 text-center mb-40">
                <!-- <span>Our Services</span> -->
                <h2>Sub Speciality and Treatment or Condition</h2>
            </div>
            <div class="row">
                @foreach($subcat as $home_ser)
                <div class=" col-xl-4 col-lg-4 col-md-4 col-sm-10 col-12 my-3 ">
                    <div class="service-card style1">
                        <div class="service-img">
                            <img src="{{isset($home_ser->image)?url($home_ser->image):''}}" alt="Image" style="width: 100%; height:235px;">

                        </div>
                        <div class="service-info">
                            <h3><a href="{{url('/sub_speciality/'.$home_ser->slug)}}">{{$home_ser->title}}</a></h3>
                            <p>{{$home_ser->short_description}}</p>
                            <a href="{{url('/sub_speciality/'.$home_ser->slug)}}" class="link style2">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    @endif
    <!-- Service Section Start -->
    @if(count($doctor) >0)

    <section class="portfolio-wrap ptb-30 bg-athens">
        <div class="container">
            <div class="section-title style1 text-center mb-40">
                <!-- <span>Our Portfolio</span> -->
                <h2>Meet Our Specialists</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel owl-theme" id="specialities">
                        @foreach($doctor as $doc)

                        <div class="service-card style1 doctor-card m-0">
                            <div class="service-img imgeffectss">
                                <a href="{{url('/doctor/'.$doc->slug)}}">
                                    <img src="{{isset($doc->image)?url($doc->image):url('/public/noimage.png')}}" alt="{{isset($doc->image_tag)?$doc->image_tag:'Image'}}">
                                </a>
                            </div>
                            <div class="service-info textsize p-2 text-center">
                                <h3><a href="{{url('/doctor/'.$doc->slug)}}">{{$doc->title}}</a></h3>
                                <div class="my-3">{{$doc->designation}}</div>
                                <!--<a href="{{url('/doctor/'.$doc->slug)}}" class=" profilebtn">View Profile</a>-->
                            </div>
                        </div>

                        @endforeach

                    </div>
                </div>




            </div>
        </div>
    </section>
    <!-- Service Section End -->
    @endif
    
    <!-- Portfolio Section Start -->
    <section class="portfolio-wrap ptb-30 bg-athens">
        <div class="container">
            <div class="section-title style1 text-center mb-40">
                <!-- <span>Our Portfolio</span> -->
                <h2>Our Recommended Hospitals</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel owl-theme" id="Hospitals">
                        @foreach($rec_hospital as $hos)

                        <div class="service-card style1 doctor-card m-0">
                            <div class="service-img imgeffectss">
                                <img src="{{isset($hos->image)?url($hos->image):url('/public/noimage.png')}}" height="100%" alt="{{isset($hos->image_tag)?$hos->image_tag:'Image'}}">
                            </div>
                            <div class="row" style="color: #1E427B; text-align: center;">
                                <div class="col-6 pt-2 pl-5">
                                <span> <i class='fas fa-map-marker-alt'></i> {{$hos['get_city']->city}}, India</span>
                                </div>
                                <!--<div class="col-6 pt-2 pl-5">-->
                                <!--<span> <i class='fas fa-clock'></i> Estb in {{$hos->estb}}</span>-->
                                <!--</div>-->
                                <!--<div class="col-6 pt-2 pl-5">-->
                                <!--<span> <i class='fa fa-road'></i> {{$hos->distance}} km fron airport</span>-->
                                <!--</div>-->
                                <div class="col-6 pt-2 pl-5">
                                <span> <i class="fa fa-bed"></i> {{$hos->bed}} Beds</span>
                                </div>
                            </div>
                            <div class="service-info textsize p-2 text-center">
                                <h3><a href="{{url('/hospital/'.$hos->slug)}}">{{$hos->title}}</a></h3>
                                <span>{{isset($hos['get_city']->city)?$hos['get_city']->city:'N/A'}}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="text-center mt-10">
                    <div class="hero-btn ">
                        <a href="{{route('web_hospital')}}" class="btn style1">See All Hospitals</a>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <!-- Portfolio Section End -->

    <section>
        <div class="container">
            <div class="section-title style1 text-center mb-40">
                <!-- <span>Our Services</span> -->
                {!!$file->additional_text!!}
            </div>

        </div>
    </section>

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
                // data: $('#allenquery').serialize(),
                data: function() {
                    var formData = $('#allenquery').serializeArray();
                    var countryCode = $('#phone').closest('.mb-3').find('.iti__selected-dial-code').text();
                    var countryName = $('#phone').closest('.mb-3').find('.iti__a11y-text').text().split(' ')[0];
                    
                    // Append the country code to the form data
                    formData.push({ name: 'country_code', value: countryCode });
                    formData.push({ name: 'country_name', value: countryName });
                    
                    
                    return $.param(formData);
                }(),
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