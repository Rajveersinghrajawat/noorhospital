<!-- Header Start -->
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.sarvodayahospital.com/services/behealthy/robotic-joint-replacement-surgery/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Aug 2024 10:55:03 GMT -->

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1" />
    <!-- tittle is change -->
    <title>NoorHealth Clinic | NoorHealth Clinic</title>
    <!-- new links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="icon" type="image/png"
        href="https://noormedicare.com/public/frontend/assets/img/Logo_1/doctor-svgrepo-com.svg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('/resources/views/frontend/Noor_page1/')}}/css/custom.css">
    <link rel="stylesheet" href="{{url('/resources/views/frontend/Noor_page1/')}}/css/faq.css">
    <link rel="stylesheet" href="{{url('/resources/views/frontend/Noor_page1/')}}/css/style.css">
    <link rel="stylesheet" href="{{url('/resources/views/frontend/Noor_page1/')}}/css/header.css">
    <style>
        .header-bg {
            /* background-image: url(./images/Untitled\ design.png) !important;
            background-repeat: no-repeat !important; */
            /* -webkit-filter: blur(9px); */
            /* background-position: center !important; */
            background: #2e3f99;
            /* border: 2px solid #F7F8FC !important; */
            padding: 2%;
            background-size: cover;
        }
        .error{
            color:red;
        }
        
        .labelled-form .form-group{
            margin-top:10px;
        }

        .why-choose-section {
            background-image: url(/resources/views/frontend/Noor_page1/assets/images/whychoose.png) !important;
            background-repeat: no-repeat !important;

            background-position: center !important;
            padding: 2%;
            background-size: cover;
            border-radius: 6px;
            box-shadow: 0px 0px 5px 5px #1e427b;
        }

        .owl-stage-outer {
            position: relative;
        }

        .owl-nav {
            display: flex;
            justify-content: space-between;
            position: absolute;
            width: 97%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);

        }

        .owl-prev {
            background-color: #1E427B !important;
            color: white !important;
            font-size: 40px !important;
            border-radius: 50% !important;
            width: 50px;
            height: 50px;
            display: flex !important;
            justify-content: center;
            align-items: center;

        }

        .owl-next {
            background-color: #1E427B !important;
            color: white !important;
            font-size: 40px !important;
            border-radius: 50% !important;
            width: 50px;
            height: 50px;
            display: flex !important;
            justify-content: center;
            align-items: center;

        }

        .owl-nav span, .owl-next span{
            position: relative;
            top: -8px;
        }

        @media (max-width: 480px) {
            .owl-nav {
            display: flex;
            justify-content: space-between;
            position: absolute;
            width: 97%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);

        }

        .owl-prev {
            background-color: #1E427B !important;
            color: white !important;
            font-size: 25px !important;
            border-radius: 50% !important;
            width: 40px;
            height: 40px;
            display: flex !important;
            justify-content: center;
            align-items: center;

        }

        .owl-next {
            background-color: #1E427B !important;
            color: white !important;
            font-size: 25px !important;
            border-radius: 50% !important;
            width: 40px;
            height: 40px;
            display: flex !important;
            justify-content: center;
            align-items: center;

        }

        .quiz-box{
            padding: 12px !important;
        }
        .owl-nav span, .owl-next span{
            position: relative;
            top: -0px;
        }

        .btn-prohealth {
    position: fixed;
    bottom: 162px;
    right: 24px;
    padding: 10px 27px;
    background: #1e427b;
    display: inline-block;
    font-size: 16px;
    z-index: 99;
    color: #fff;
    font-weight: 600;
    text-transform: capitalize;
    border-radius: 8px;
    text-decoration: none;
    transform: rotate(90deg);
    transform-origin: right;
}

}
    </style>
</head>

<body>

    <header class="header d-none d-md-block" id="contact-form-1">
        <nav class="navbar navbar-expand-md">
            <div class="container ">
                <a class="navbar-brand" href="{{route('home')}}">
                    <img src="https://noormedicare.com/public/frontend/assets/img/Logo_2/Noor.svg"
                        alt="Sarvodaya Healthcare" style="margin-top:0px" />
                </a>
                <div class="d-flex align-items-center gap-2">
                    <div class="text-decoration-none gap-3 d-flex">
                        <a class="text-decoration-none text-black" href="{{url('/doctors')}}">Our Experts</a>
                        <a class="text-decoration-none text-black" href="{{url('/hospitals')}}">Our Hospitals</a>
                        <a class="text-decoration-none text-black" href="{{route('about')}}">ABOUT US</a>
                    </div>
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                        <!-- <img src="assets/images/alphabet-logo.png" alt="alphabet-logo"> -->
                        <ul class="navbar-nav">
                            <li class="nav-item position-relative" style="margin-left: 10px;">
                                <div class="d-flex align-items-center hide-btn-header m-2">
                                    <button class="book-appointment-btn">
                                        <a href="tel:+91-9555197411">
                                            <i class="fa fa-headphones"></i> +91-9555197411 <br>
                                        </a>
                                        <a href="mailTo:support@noormedicare.com">
                                            <i class="fa fa-envelope"></i> support@noormedicare.com
                                        </a>
                                    </button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- for mobile responsive -->
    <header class="header-mobile d-md-none py-2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6">
                    <a href="{{route('home')}}">
                        <img src="https://noormedicare.com/public/frontend/assets/img/Logo_2/Noor.svg"
                            class="logo-mobile" alt="sarvodaya hospital">
                    </a>
                </div>
                <div class="col-6 text-end d-flex align-items-center justify-content-end pt-1">
                    <div>
                        <div class="d-flex align-items-center hide-btn-header book-appointment-btn mobile-number">
                            <a href="tel:+91-9555197411">
                                <i class="fa fa-headphones"></i> +91-9555197411
                            </a>
                        </div>
                    </div>
                </div>
    </header>
   
    <section class="header-bg relative">
        <div class="container">
            <div class="row justify-content-between align-items-center pb-4 pb-md-0">
                <!-- <div class="col-md-6 col-sm-6 col-12 col-lg-8 pt-md-5">
                    <h1 class="text-white mt-4">Get a New Pain-less Walk for Life in Just One Visit with Single Sitting
                        Robotic Knee Replacement</h1>
                    <p class="f-16 f-sm-16 text-white fw-400 text-justify">World’s first Centre for <span
                            class="f-20 fw-500">CR Robotic Joint Replacement</span> gives you the freedom to walk
                        pain-free with single sitting Robotic Knee Replacement - a surgery post which you won’t have to
                        re-visit the hospital for a follow-up checkup; you can walk on the same day; and recover faster,
                        getting back to routine lifestyle in a few weeks.</p>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-12 pt-md-5">
                            <button type="submit"
                                class="btn text-white f-18 f-sm-18 fw-700 bgBlueDark rounded-3  btn-block call-btn">Book
                                an Appointment</button><br><br>
                            <img src="assets/images/google-logo.png" alt="" height="50px">
                            <span class="text-white">&nbsp;&nbsp;&nbsp;
                                <i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i>
                                <i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i>
                                <i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i>
                                <i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i>
                                <i class="fa-solid fa-star"
                                    style="font-size: 20px; color: #ff9f00;"></i>&nbsp;&nbsp;&nbsp;Reviews on google
                            </span>
                        </div>

                    </div>
                </div> -->
                <!-- <div class="col-md-6 col-sm-6 col-12 col-lg-8 pt-md-5">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <h1 class="text-white mt-4">Get a New Pain-less Walk for Life in Just One Visit with Single Sitting
                                Robotic Knee Replacement</h1>
                            <p class="f-16 f-sm-16 text-white fw-400 text-justify">World’s first Centre for <span class="f-20 fw-500">CR
                                    Robotic
                                    Joint Replacement</span> gives you the freedom to walk
                                pain-free with single sitting Robotic Knee Replacement - a surgery post which you won’t have to
                                re-visit the hospital for a follow-up checkup; you can walk on the same day; and recover faster,
                                getting back to routine lifestyle in a few weeks.</p>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-12 pt-md-5">
                                    <button type="submit"
                                        class="btn text-white f-18 f-sm-18 fw-700 bgBlueDark rounded-3  btn-block call-btn">Book
                                        an Appointment</button><br><br>
                                    <img src="assets/images/google-logo.png" alt="" height="50px">
                                    <span class="text-white">&nbsp;&nbsp;&nbsp;
                                        <i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i>
                                        <i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i>
                                        <i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i>
                                        <i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i>
                                        <i class="fa-solid fa-star"
                                            style="font-size: 20px; color: #ff9f00;"></i>&nbsp;&nbsp;&nbsp;Reviews
                                        on
                                        google
                                    </span>
                                </div>
                
                            </div>
                        </div>
                        <div class="carousel-item">
                            <h1 class="text-white mt-4">Get a New Pain-less Walk for Life in Just One Visit with Single Sitting
                                Robotic Knee Replacement</h1>
                            <p class="f-16 f-sm-16 text-white fw-400 text-justify">World’s first Centre for <span class="f-20 fw-500">CR
                                    Robotic
                                    Joint Replacement</span> gives you the freedom to walk
                                pain-free with single sitting Robotic Knee Replacement - a surgery post which you won’t have to
                                re-visit the hospital for a follow-up checkup; you can walk on the same day; and recover faster,
                                getting back to routine lifestyle in a few weeks.</p>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-12 pt-md-5">
                                    <button type="submit"
                                        class="btn text-white f-18 f-sm-18 fw-700 bgBlueDark rounded-3  btn-block call-btn">Book
                                        an Appointment</button><br><br>
                                    <img src="assets/images/google-logo.png" alt="" height="50px">
                                    <span class="text-white">&nbsp;&nbsp;&nbsp;
                                        <i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i>
                                        <i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i>
                                        <i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i>
                                        <i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i>
                                        <i class="fa-solid fa-star"
                                            style="font-size: 20px; color: #ff9f00;"></i>&nbsp;&nbsp;&nbsp;Reviews
                                        on
                                        google
                                    </span>
                                </div>
                
                            </div>
                        </div>
                        <div class="carousel-item">
                            <h1 class="text-white mt-4">Get a New Pain-less Walk for Life in Just One Visit with Single Sitting
                                Robotic Replacement</h1>
                            <p class="f-16 f-sm-16 text-white fw-400 text-justify">World’s first Centre for <span class="f-20 fw-500">CR
                                    Robotic
                                    Joint Replacement</span> gives you the freedom to walk
                                pain-free with single sitting Robotic Knee Replacement - a surgery post which you won’t have to
                                re-visit the hospital for a follow-up checkup; you can walk on the same day; and recover faster,
                                getting back to routine lifestyle in a few weeks.</p>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-12 pt-md-5">
                                    <button type="submit"
                                        class="btn text-white f-18 f-sm-18 fw-700 bgBlueDark rounded-3  btn-block call-btn">Book
                                        an Appointment</button><br><br>
                                    <img src="assets/images/google-logo.png" alt="" height="50px">
                                    <span class="text-white">&nbsp;&nbsp;&nbsp;
                                        <i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i>
                                        <i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i>
                                        <i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i>
                                        <i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i>
                                        <i class="fa-solid fa-star"
                                            style="font-size: 20px; color: #ff9f00;"></i>&nbsp;&nbsp;&nbsp;Reviews
                                        on
                                        google
                                    </span>
                                </div>
                
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div> -->
                <div class="col-md-6 col-sm-6 col-12 col-lg-8 pt-md-5" id="slider_front">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                                aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <h1 class="text-white mt-4">Get a New Pain-less Walk for Life in Just One Visit with Single Sitting
                                    Robotic Knee Replacement</h1>
                                <p class="f-16 f-sm-16 text-white fw-400 text-justify pe-5">World’s first Centre for <span
                                        class="f-20 fw-500">CR
                                        Robotic
                                        Joint Replacement</span> gives you the freedom to walk
                                    pain-free with single sitting Robotic Knee Replacement - a surgery post which you won’t have to
                                    re-visit the hospital for a follow-up checkup; you can walk on the same day; and recover faster,
                                    getting back to routine lifestyle in a few weeks.</p>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-12 pt-md-5">
                                        <button type="submit"
                                            class="btn text-white f-18 f-sm-18 fw-700 bgBlueDark rounded-3  btn-block call-btn">Book
                                            an Appointment</button><br><br>
                                        <img src="assets/images/google-logo.png" alt="" height="50px">
                                        <span class="text-white">&nbsp;&nbsp;&nbsp;
                                            <i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i>
                                            <i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i>
                                            <i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i>
                                            <i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i>
                                            <i class="fa-solid fa-star"
                                                style="font-size: 20px; color: #ff9f00;"></i>&nbsp;&nbsp;&nbsp;Reviews
                                            on
                                            google
                                        </span>
                                    </div>
                
                                </div>
                            </div>
                            <div class="carousel-item">
                                <h1 class="text-white mt-4">Get a New Pain-less Walk for Life in Just One Visit with Single Sitting
                                    Robotic Knee Replacement</h1>
                                <p class="f-16 f-sm-16 text-white fw-400 text-justify pe-5">World’s first Centre for <span
                                        class="f-20 fw-500">CR
                                        Robotic
                                        Joint Replacement</span> gives you the freedom to walk
                                    pain-free with single sitting Robotic Knee Replacement - a surgery post which you won’t have to
                                    re-visit the hospital for a follow-up checkup; you can walk on the same day; and recover faster,
                                    getting back to routine lifestyle in a few weeks.</p>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-12 pt-md-5">
                                        <button type="submit"
                                            class="btn text-white f-18 f-sm-18 fw-700 bgBlueDark rounded-3  btn-block call-btn">Book
                                            an Appointment</button><br><br>
                                        <img src="{{url('/resources/views/frontend/Noor_page1/')}}/assets/images/google-logo.png" alt="" height="50px">
                                        <span class="text-white">
                                            <span>
                                                <i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i>
                                                <i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i>
                                                <i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i>
                                                <i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i>
                                                <i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i>
                                            </span>
                                            <span>
                                                &nbsp;&nbsp;&nbsp;Reviews on google
                                            </span>
                                        </span>
                                    </div>
                
                                </div>
                            </div>
                            <div class="carousel-item">
                                <h1 class="text-white mt-4">Get a New Pain-less Walk for Life in Just One Visit with Single Sitting
                                    Robotic Knee Replacement</h1>
                                <p class="f-16 f-sm-16 text-white fw-400 text-justify pe-5">World’s first Centre for <span
                                        class="f-20 fw-500">CR
                                        Robotic
                                        Joint Replacement</span> gives you the freedom to walk
                                    pain-free with single sitting Robotic Knee Replacement - a surgery post which you won’t have to
                                    re-visit the hospital for a follow-up checkup; you can walk on the same day; and recover faster,
                                    getting back to routine lifestyle in a few weeks.</p>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-12 pt-md-5">
                                        <button type="submit"
                                            class="btn text-white f-18 f-sm-18 fw-700 bgBlueDark rounded-3  btn-block call-btn">Book
                                            an Appointment</button><br><br>
                                        <img src="assets/images/google-logo.png" alt="" height="50px">
                                        <span class="text-white">&nbsp;&nbsp;&nbsp;
                                            <i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i>
                                            <i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i>
                                            <i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i>
                                            <i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i>
                                            <i class="fa-solid fa-star"
                                                style="font-size: 20px; color: #ff9f00;"></i>&nbsp;&nbsp;&nbsp;Reviews
                                            on
                                            google
                                        </span>
                                    </div>
                
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-12 col-lg-4 header-right" id="ScrollButtomForm">
                    <div id="need-help" style="background-color: #fff;" class="mb-4">
                        <div class="border rounded-3 px-4 py-3 mt-3">
                            <h2 class="f-20 f-sm-20 mb-md-1 mb-2 mt-0 clrBlueDark fw-500">Speak to Our Health Experts
                            </h2>
                            <p class="f-14 l-22 fw-500 f-sm-14 clr5c mb-3">
                                Get reliable medical advice anytime, anywhere.
                            </p>
                            <form class="align-items-center labelled-form justify-content-center mb-md-0 mb-0 mt-md-0"
                                id="contactForm" action="#" method="POST" novalidate="novalidate">
                                <input type="hidden" name="_token" value="bShDQw7u1r1OVjnIvBUvvymchMe6aqYH6ZKsALwn">
                                <input type="hidden" name="landingPage" value="landingPage1">
                                <input type="hidden" name="source_url" id="source_url" value="index.html">
                                <input type="hidden" name="PageName" id="PageId" value="Robotic Ortho">
                                <div class="col-md-12">
                                    <div class="form-group mb-3 mb-md-3">
                                        <label for="Name" class="labelInput">Name <span>*</span></label>
                                        <input type="text" name="name" id="name" autocomplete="off"
                                            class="form-control inputBox" onkeydown="return /[a-z, ]/i.test(event.key)"
                                            onblur="if (this.value == '') {this.value = '';}"
                                            onfocus="if (this.value == '') {this.value='';}"
                                            style="background-color: #fff;">
                                    </div>
                                    
                                </div>
<label id="name-error" class="error" for="name"></label>

                                <input type="hidden" name="subject_line" value="Speak to Our Experts">
                                <input type="hidden" name="treatment" value="Knee Replacement">

                                <div class="col-md-12">
                                    <div class="form-group mb-3 mb-md-3">
                                        <label for="Mobile" class="labelInput">Mobile Number <span>*</span></label>
                                        <input type="text" name="phone" id="phone" autocomplete="off"
                                            class="form-control inputBox phoneInputIntl" minlength="5" maxlength="10"
                                            pattern="[0-9]{10}" style="background-color: #fff;">
                                            
                                    </div>
                                    <label id="phone-error" class="error" for="phone"></label>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group mb-3 mb-md-3">
                                        <label for="Email ID" class="labelInput">Email ID <span>*</span></label>
                                        <input type="email" name="email" id="email" autocomplete="off"
                                            class="form-control inputBox" style="background-color: #fff;">
                                    </div>
                                    <label id="email-error" class="error" for="email"></label>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group mb-3 mb-md-3">
                                        <label for="Query">Message</label>
                                        <textarea class="form-control inputBox" rows="2" id="remark"
                                            name="message"></textarea>
                                    </div>
                                    <label id="remark-error" class="error" for="remark"></label>
                                </div>

                                <div class="col-md-12 terms-condition-error">
                                    <div class="form-check">
                                        <input class="form-check-input inputBox" type="checkbox" id="tc" name="tc"
                                            checked="">
                                        <label class="form-check-label f-14 text-black" for="tc">I agree to the
                                            <a href="https://www.sarvodayahospital.com/terms-and-conditions"
                                                class="no-underline clrBlueDark">terms and conditions</a>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-2 mt-2 pt-2 mb-md-0">
                                    <button type="submit"
                                        class="btn text-white f-18 fw-500 needHelpSubmitBtn bgBlueDark rounded-3 w-100 btn-block call-btn"
                                        id="submitBtn">
                                        Get expert opinion
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- <img src="assets/images/header-bg.png" alt="Sarvodaya doctors"/> -->
                </div>
            </div>
        </div>
    </section>
    <!-- Header End -->

    <section class="pt-lg-4 py-3 mt-2 schedule-appointment-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="title-course">Center of Excellence For Fully Active <span style="color: #1e427b;">Robotic
                            Joint Replacement</span></h2>
                    <p class="f-16 f-sm-16 text-justify">Sarvodaya Hospital in Faridabad, Delhi NCR houses North India's
                        First Centre with 2 Joint Replacement Robots.
                        Having performed <strong>24,000+</strong> Joint replacements and <strong>5,000+</strong> CR
                        Robotic knee replacements, the centre is backed by a world-renowned robotic joint replacement
                        surgeon and his team along with revolutionary technical modalities, well-equipped operation
                        theatres, post-surgical rehabilitation centre and more.
                    </p>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <style>
        .how-does-robotic-section {
            border-radius: 6px;
            box-shadow: 0px 0px 5px 5px #1e427b;
            background-color: #1e427b;
        }
    </style>
    <section class="mt-5">
        <div class="container">
            <div class="row justify-content-evenly mt-md-4 how-does-robotic-section align-items-center">
                <div class="col-lg-10 col-sm-12 col-md-12 text-center col-10 m-0 p-0 p-3">
                    <h2 class="cardilogy-heading text-white">
                        How does Single Visit Robotic Joint Replacement benefit the patient?
                    </h2>
                    <p class="text-white text-center">At Sarvodaya’s Centre for Robotic Joint Replacement, you get
                        operated by the most experienced surgeons empowered by one of the best Robotic technologies in
                        the world with the following benefits:
                    </p>
                </div>
                <div class="col-lg-8 col-sm-12 col-md-12 text-center text-lg-start col-10">
                    <ul class="text-white text-start">
                        <li>Surgery led by Dr. Sujoy Bhattacharjee, who features in the Limca Book of Records for
                            Successful Total Hip Replacement of the oldest person (a 104-year-old patient)</li>
                        <li>Experience of over 24,000+ Joint Replacement Surgeries</li>
                        <li>Excellent surgical track record for most successful surgeries resulting in movement on the
                            day of surgery</li>
                        <li>3D Surgical pre-planning using high-end CT scan-imaging</li>
                        <li>Suture less, pain less and scar-less surgery</li>
                        <li>Sub-millimetre accuracy during the operation</li>
                        <li>Less bone loss, ligament loss and blood loss - The robotic arm creates boundaries to prevent
                            bone loss</li>
                        <li>No Hospital re-visit required </li>
                        <li>The patient gets the feeling of natural knee and can walk on the day of surgery</li>
                        <li>The patient can perform basic activities & take shower the next day</li>
                        <li>Best implant positioning with maximum cutting accuracy, which helps with quicker recovery,
                            the overall longevity and durability of implantation</li>
                        <li>Real-time monitoring, using the robot’s console with the capability of intra-operative
                            change of plans</li>
                        <li>Minimal human intervention reduces the chances of infection</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row justify-content-between mt-md-4 align-items-center">
                <div class="col-sm-12 col-md-6 text-center col-lg-6 col-sm-12 heart-valve">
                    <img loading="lazy" src="{{url('/resources/views/frontend/Noor_page1/')}}/assets/images/robo-img.png" alt="">
                </div>
                <div class="col-lg-6 col-sm-12  text-md-start col-md-6 mt-5 mt-md-0 mt-2">
                    <div class="keypoints">
                        <h2 class="title-course text-md-start text-center f-sm-22 mb-2 fw-500">World’s first Centre for
                            <span style="color: #1e427b;">CR Robotic Joint Replacement</span>
                        </h2>
                        <p class="f-20 f-sm-16 clr747474 fw-400 text-justify banner-top-text">Sarvodaya proudly holds
                            the accolades for performing world's first cruciate-retaining knee replacement using a fully
                            active joint robot system, the most advanced surgical equipment capable of 3D pre-planning,
                            virtual surgery and precise cutting to provide accurate surgery results.</p>
                        <div class="d-flex mt-md-3">
                            <div class="d-flex">
                                <img class="d-inline-block me-2" src="assets/images/number-img.png" alt="">
                                <img class="d-inline-block me-3" src="assets/images/num-icons.png" alt="">
                            </div>
                            <div class="d-flex flex-column justify-content-between">
                                <p class="f-20 pt-2 f-sm-15 m-0">Super personalised pre-surgical planning</p>
                                <p class="f-20 pt-2 f-sm-15 m-0">Highly accurate incision and joint insertion</p>
                                <p class="f-20 pt-2 f-sm-15 m-0">Quicker recovery and better results</p>
                            </div>
                        </div>
                        <button
                            class="btn text-white f-18 f-sm-18 fw-700 bgBlueDark rounded-3  btn-block call-btn mt-5"
                            onclick="topFunction()">Talk to Expert</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- doctors sliders section 1 -->
    <section class="lb-bg-1 section py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h2 class="title-course text-center">
                        Meet Our Experts
                        <hr
                            style="border-radius: 5px; width: 100px;height: 4px;margin: auto;margin-top: 0.3rem; color: #ff7703;">
                    </h2>
                </div>
            </div>


        </div>
        <div class="owl-carousel owl-theme" id="doctorSlider-1">
            <div class="item">
                <div class="container">
                   
                    <div class="row align-items-center justify-content-between mt-md-4">
                        <div class="col-lg-6 col-md-6 col-12 mt-md-0 mt-2">
                            <div class="keypoints">
                                <h3 class="title-course text-center text-md-start f-sm-22 mb-2 fw-500">
                                    Dr. Sujoy Kumar Bhattacharjee
                                </h3>
                                <p class="f-18 f-sm-16 clr747474 fw-400 text-justify banner-top-text">MBBS, MS -
                                    Orthopedics, MCh -
                                    Orthopedics, FICS (Australia), FACS (USA), FMIS (USA), FJR (USA, UK Australia,
                                    Germany) <br>
                                    HOD & Director - Centre for Robotic Joint Replacement
                                </p>


                                <p class="f-16 f-sm-16 clr747474 fw-400 text-justify"> Nephrology is the adult and pediatric study of the kidneys and its diseases. The nephrologist deals with the diagnosis and management of kidney disease. The kidneys are vital for maintaining normal fluid and electrolyte balance in the body.
                                </p>
                                <button
                                    class="btn text-white f-18 f-sm-18 fw-700 bgBlueDark rounded-3  btn-block call-btn"
                                    onclick="topFunction()">Book an Appointment</button>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 text-center col-sm-12 ">
                            <img loading="lazy" class="rounded-circle"
                                src="https://noormedicare.com/uploads/category/32334.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                   
                    <div class="row align-items-center justify-content-between mt-md-4">
                        <div class="col-lg-6 col-md-6 col-12 mt-md-0 mt-2">
                            <div class="keypoints">
                                <h3 class="title-course text-center text-md-start f-sm-22 mb-2 fw-500">
                                    Dr. Sujoy Kumar Bhattacharjee
                                </h3>
                                <p class="f-18 f-sm-16 clr747474 fw-400 text-justify banner-top-text">MBBS, MS -
                                    Orthopedics, MCh -
                                    Orthopedics, FICS (Australia), FACS (USA), FMIS (USA), FJR (USA, UK Australia,
                                    Germany) <br>
                                    HOD & Director - Centre for Robotic Joint Replacement
                                </p>


                                <p class="f-16 f-sm-16 clr747474 fw-400 text-justify">Dr. Sujoy has been dedicated to
                                    performing
                                    Joint
                                    Replacement Surgeries for 20 years with an experience of 24,000+ Joint Replacement
                                    Surgeries. He
                                    is
                                    associated with multiple renowned national and international authorities in the
                                    field of
                                    arthroplasty & joint replacement. He has acquired his expertise in techniques of
                                    Joint
                                    Replacement
                                    Surgery from the best centres in the world. He even holds Limca book of record in
                                    performing
                                    bipolar
                                    hip replacement on a 104-year-old. <br>
                                    Certified by International Book of Records, Medical Robot Company CUREXO, Korea,
                                    Online World
                                    Record
                                    and World Book of Records UK for successfully performing "World’s First
                                    Cruciate-Retaining Total
                                    Knee Replacement Surgery with Fully Active Robot.
                                </p>
                                <button
                                    class="btn text-white f-18 f-sm-18 fw-700 bgBlueDark rounded-3  btn-block call-btn"
                                    onclick="topFunction()">Book an Appointment</button>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 text-center col-sm-12 ">
                            <img loading="lazy" class="rounded-circle"
                                src="https://noormedicare.com/uploads/category/32334.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container ">
                   
                    <div class="row align-items-center justify-content-between mt-md-4">
                        <div class="col-lg-6 col-md-6 col-12 mt-md-0 mt-2">
                            <div class="keypoints">
                                <h3 class="title-course text-center text-md-start f-sm-22 mb-2 fw-500">
                                    Dr. Sujoy Kumar Bhattacharjee
                                </h3>
                                <p class="f-18 f-sm-16 clr747474 fw-400 text-justify banner-top-text">MBBS, MS -
                                    Orthopedics, MCh -
                                    Orthopedics, FICS (Australia), FACS (USA), FMIS (USA), FJR (USA, UK Australia,
                                    Germany) <br>
                                    HOD & Director - Centre for Robotic Joint Replacement
                                </p>


                                <p class="f-16 f-sm-16 clr747474 fw-400 text-justify">Dr. Sujoy has been dedicated to
                                    performing
                                    Joint
                                    Replacement Surgeries for 20 years with an experience of 24,000+ Joint Replacement
                                    Surgeries. He
                                    is
                                    associated with multiple renowned national and international authorities in the
                                    field of
                                    arthroplasty & joint replacement. He has acquired his expertise in techniques of
                                    Joint
                                    Replacement
                                    Surgery from the best centres in the world. He even holds Limca book of record in
                                    performing
                                    bipolar
                                    hip replacement on a 104-year-old. <br>
                                    Certified by International Book of Records, Medical Robot Company CUREXO, Korea,
                                    Online World
                                    Record
                                    and World Book of Records UK for successfully performing "World’s First
                                    Cruciate-Retaining Total
                                    Knee Replacement Surgery with Fully Active Robot.
                                </p>
                                <button
                                    class="btn text-white f-18 f-sm-18 fw-700 bgBlueDark rounded-3  btn-block call-btn"
                                    onclick="topFunction()">Book an Appointment</button>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 text-center col-sm-12 ">
                            <img loading="lazy" class="rounded-circle"
                                src="https://noormedicare.com/uploads/category/32334.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- doctors slider section 2 -->
    <section class="lb-white section py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h2 class="title-course text-center">
                        Our Hospitals
                        <hr
                            style="border-radius: 5px; width: 100px;height: 4px;margin: auto;margin-top: 0.3rem; color: #ff7703;">
                    </h2>
                </div>
            </div>


        </div>
        <div class="owl-carousel owl-theme" id="doctorSlider-2">
            <div class="item">
                <div class="container">
                   
                    <div class="row align-items-center justify-content-between mt-md-4">
                        <div class="col-lg-6 col-md-6 col-12 mt-md-0 mt-2">
                            <div class="keypoints">
                                <h3 class="title-course text-center text-md-start f-sm-22 mb-2 fw-500">
                                    Medanta Delhi NCR

                                </h3>
                                <div class="row pb-4">
                                    <div class="col-6 pt-2 pl-5">
                                    <span> <i class="fas fa-map-marker-alt"></i> Gurgaon, India</span>
                                    </div>
                                    <div class="col-6 pt-2 pl-5">
                                    <span> <i class="fas fa-clock"></i> Estb in 2009</span>
                                    </div>
                                    <div class="col-6 pt-2 pl-5">
                                    <span> <i class="fa fa-road"></i> 18 km fron airport</span>
                                    </div>
                                    <div class="col-6 pt-2 pl-5">
                                    <span> <i class="fa fa-bed"></i> 1250 Beds</span>
                                    </div>
                                </div>


                                <p class="f-16 f-sm-16 clr747474 fw-400 text-justify">Dr. Sujoy has been dedicated to
                                    Medanta (The Medicity) is a multi-specialty medical institute based in Gurgaon in the National Capital Region of India. It was started in 2009, with cardiac surgeon, Naresh Trehan. as its main director along with co founder Sunil Sachdeva and various others. The hospital has more than 1600 beds and has expanded its outreach to other cities including Lucknow, Indore and Ranchi. Lucknow is now getting its own 1000 bedded hospital
                                </p>
                                <button
                                    class="btn text-white f-18 f-sm-18 fw-700 bgBlueDark rounded-3  btn-block call-btn"
                                    onclick="topFunction()">Book an Appointment</button>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 text-center col-sm-12 ">
                            <img loading="lazy" 
                                src="https://noormedicare.com/uploads/hospitals/47756.webp" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                   
                    <div class="row align-items-center justify-content-between mt-md-4">
                        <div class="col-lg-6 col-md-6 col-12 mt-md-0 mt-2">
                            <div class="keypoints">
                                <h3 class="title-course text-center text-md-start f-sm-22 mb-2 fw-500">
                                    Medanta Delhi NCR

                                </h3>
                                <div class="row pb-4">
                                    <div class="col-6 pt-2 pl-5">
                                    <span> <i class="fas fa-map-marker-alt"></i> Gurgaon, India</span>
                                    </div>
                                    <div class="col-6 pt-2 pl-5">
                                    <span> <i class="fas fa-clock"></i> Estb in 2009</span>
                                    </div>
                                    <div class="col-6 pt-2 pl-5">
                                    <span> <i class="fa fa-road"></i> 18 km fron airport</span>
                                    </div>
                                    <div class="col-6 pt-2 pl-5">
                                    <span> <i class="fa fa-bed"></i> 1250 Beds</span>
                                    </div>
                                </div>


                                <p class="f-16 f-sm-16 clr747474 fw-400 text-justify">Dr. Sujoy has been dedicated to
                                    Medanta (The Medicity) is a multi-specialty medical institute based in Gurgaon in the National Capital Region of India. It was started in 2009, with cardiac surgeon, Naresh Trehan. as its main director along with co founder Sunil Sachdeva and various others. The hospital has more than 1600 beds and has expanded its outreach to other cities including Lucknow, Indore and Ranchi. Lucknow is now getting its own 1000 bedded hospital
                                </p>
                                <button
                                    class="btn text-white f-18 f-sm-18 fw-700 bgBlueDark rounded-3  btn-block call-btn"
                                    onclick="topFunction()">Book an Appointment</button>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 text-center col-sm-12 ">
                            <img loading="lazy" 
                                src="https://noormedicare.com/uploads/hospitals/47756.webp" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                   
                    <div class="row align-items-center justify-content-between mt-md-4">
                        <div class="col-lg-6 col-md-6 col-12 mt-md-0 mt-2">
                            <div class="keypoints">
                                <h3 class="title-course text-center text-md-start f-sm-22 mb-2 fw-500">
                                    Medanta Delhi NCR

                                </h3>
                                <div class="row pb-4">
                                    <div class="col-6 pt-2 pl-5">
                                    <span> <i class="fas fa-map-marker-alt"></i> Gurgaon, India</span>
                                    </div>
                                    <div class="col-6 pt-2 pl-5">
                                    <span> <i class="fas fa-clock"></i> Estb in 2009</span>
                                    </div>
                                    <div class="col-6 pt-2 pl-5">
                                    <span> <i class="fa fa-road"></i> 18 km fron airport</span>
                                    </div>
                                    <div class="col-6 pt-2 pl-5">
                                    <span> <i class="fa fa-bed"></i> 1250 Beds</span>
                                    </div>
                                </div>


                                <p class="f-16 f-sm-16 clr747474 fw-400 text-justify">Dr. Sujoy has been dedicated to
                                    Medanta (The Medicity) is a multi-specialty medical institute based in Gurgaon in the National Capital Region of India. It was started in 2009, with cardiac surgeon, Naresh Trehan. as its main director along with co founder Sunil Sachdeva and various others. The hospital has more than 1600 beds and has expanded its outreach to other cities including Lucknow, Indore and Ranchi. Lucknow is now getting its own 1000 bedded hospital
                                </p>
                                <button
                                    class="btn text-white f-18 f-sm-18 fw-700 bgBlueDark rounded-3  btn-block call-btn"
                                    onclick="topFunction()">Book an Appointment</button>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 text-center col-sm-12 ">
                            <img loading="lazy" 
                                src="https://noormedicare.com/uploads/hospitals/47756.webp" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="lb-bg-1 section py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h2 class="title-course text-center">
                        Speciality and Treatment or Condition
                        <hr
                            style="border-radius: 5px; width: 100px;height: 4px;margin: auto;margin-top: 0.3rem; color: #ff7703;">
                    </h2>
                </div>
            </div>


        </div>
        <div class="owl-carousel owl-theme" id="Speciality-1">
            <div class="item">
                <div class="container">
                   
                    <div class="row align-items-center justify-content-between mt-md-4">
                        <div class="col-lg-6 col-md-6 col-12 mt-md-0 mt-2">
                            <div class="keypoints">
                                <h3 class="title-course text-center text-md-start f-sm-22 mb-2 fw-500">
                                    Nephrology
                                </h3>
                             


                                <p class="f-16 f-sm-16 clr747474 fw-400 text-justify"> Nephrology is the adult and pediatric study of the kidneys and its diseases. The nephrologist deals with the diagnosis and management of kidney disease. The kidneys are vital for maintaining normal fluid and electrolyte balance in the body.
                                </p>
                                <button
                                    class="btn text-white f-18 f-sm-18 fw-700 bgBlueDark rounded-3  btn-block call-btn"
                                    onclick="topFunction()">Book an Appointment</button>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 text-center col-sm-12 ">
                            <img loading="lazy" 
                                src="https://noormedicare.com/uploads/category/65660.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                   
                    <div class="row align-items-center justify-content-between mt-md-4">
                        <div class="col-lg-6 col-md-6 col-12 mt-md-0 mt-2">
                            <div class="keypoints">
                                <h3 class="title-course text-center text-md-start f-sm-22 mb-2 fw-500">
                                    Nephrology
                                </h3>
                             


                                <p class="f-16 f-sm-16 clr747474 fw-400 text-justify">Dr. Sujoy has been dedicated to
                                    performing
                                    Joint
                                    Replacement Surgeries for 20 years with an experience of 24,000+ Joint Replacement
                                    Surgeries. He
                                    is
                                    associated with multiple renowned national and international authorities in the
                                    field of
                                    arthroplasty & joint replacement. He has acquired his expertise in techniques of
                                    Joint
                                    Replacement
                                    Surgery from the best centres in the world. He even holds Limca book of record in
                                    performing
                                    bipolar
                                    hip replacement on a 104-year-old. <br>
                                    Certified by International Book of Records, Medical Robot Company CUREXO, Korea,
                                    Online World
                                    Record
                                    and World Book of Records UK for successfully performing "World’s First
                                    Cruciate-Retaining Total
                                    Knee Replacement Surgery with Fully Active Robot.
                                </p>
                                <button
                                    class="btn text-white f-18 f-sm-18 fw-700 bgBlueDark rounded-3  btn-block call-btn"
                                    onclick="topFunction()">Book an Appointment</button>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 text-center col-sm-12 ">
                            <img loading="lazy" 
                                src="https://noormedicare.com/uploads/category/65660.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container ">
                   
                    <div class="row align-items-center justify-content-between mt-md-4">
                        <div class="col-lg-6 col-md-6 col-12 mt-md-0 mt-2">
                            <div class="keypoints">
                                <h3 class="title-course text-center text-md-start f-sm-22 mb-2 fw-500">
                                    Nephrology
                                </h3>
                             


                                <p class="f-16 f-sm-16 clr747474 fw-400 text-justify">Dr. Sujoy has been dedicated to
                                    performing
                                    Joint
                                    Replacement Surgeries for 20 years with an experience of 24,000+ Joint Replacement
                                    Surgeries. He
                                    is
                                    associated with multiple renowned national and international authorities in the
                                    field of
                                    arthroplasty & joint replacement. He has acquired his expertise in techniques of
                                    Joint
                                    Replacement
                                    Surgery from the best centres in the world. He even holds Limca book of record in
                                    performing
                                    bipolar
                                    hip replacement on a 104-year-old. <br>
                                    Certified by International Book of Records, Medical Robot Company CUREXO, Korea,
                                    Online World
                                    Record
                                    and World Book of Records UK for successfully performing "World’s First
                                    Cruciate-Retaining Total
                                    Knee Replacement Surgery with Fully Active Robot.
                                </p>
                                <button
                                    class="btn text-white f-18 f-sm-18 fw-700 bgBlueDark rounded-3  btn-block call-btn"
                                    onclick="topFunction()">Book an Appointment</button>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 text-center col-sm-12 ">
                            <img loading="lazy" 
                                src="https://noormedicare.com/uploads/category/65660.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-evenly mt-md-4 why-choose-section mt-5 align-items-center">
                <div class="col-md-12 col-lg-6 col-sm-12 col-12 m-0 p-0">
                    <div class="row p-5">
                        <div class="col-md-6 col-sm-6 col-11 col-lg-6 m-0 p-0 text-center why-choose-box1">
                            <img class="mt-3" src="{{url('/resources/views/frontend/Noor_page1/')}}/assets/images/ortho-why-choose-logo1.png" alt="">
                            <p class="text-center cardilogy-para text-white mt-3">Sub-millimeter Accuracy<br>
                                Minimises the Risk of Error</p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-11 col-lg-6 m-0 p-0 text-center why-choose-box2">
                            <img class="mt-3" src="{{url('/resources/views/frontend/Noor_page1/')}}/assets/images/ortho-why-choose-logo2.png" alt="">
                            <p class="text-center cardilogy-para text-white mt-3">Best Implant <br>
                                Positioning</p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-11 col-lg-6 m-0 p-0 text-center why-choose-box3">
                            <img class="mt-3" src="{{url('/resources/views/frontend/Noor_page1/')}}/assets/images/ortho-why-choose-logo3.png" alt="">
                            <p class="text-center cardilogy-para text-white mt-3">Walk on the <br>
                                Day of Surgery</p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-11 col-lg-6 m-0 p-0 text-center">
                            <img class="mt-3" src="{{url('/resources/views/frontend/Noor_page1/')}}/assets/images/ortho-why-choose-logo4.png" alt="">
                            <p class="text-center cardilogy-para text-white mt-3">Faster Recovery
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 col-md-12 text-center text-lg-start col-10 m-0 p-0 mt-5">
                    <h2 class="cardilogy-heading text-white">
                        Why Choose Us?
                    </h2>
                    <p class="text-start cardilogy-para text-white">Sarvodaya’s Centre for Robotic Joint Replacement
                        redefines the rules of what you can do after surgery - get back on your feet, go for a long
                        walk, sit cross-legged on the floor, climb stairs or even run a marathon - even sky is not the
                        limit for you once you get a new pain-free walk.<br><br>
                        Thanks to the expertise of globally recognised experts, the accuracy & preciseness of the
                        revolutionary robot, post-surgery rehabilitation and optimum care at the centre.<br> <br>
                        Our team of robotic joint replacement experts are highly skilled, qualified, experienced and
                        hold global as well as national recognition for successfully performing the most complex joint
                        surgeries.<br><br>
                        Teamed up with comprehensive pain management during and post-surgery, we have one of the highest
                        surgery success rates with reduced complications, maximum safety, minimal ligament loss and
                        lessened requirement for post-operative physical therapy assistance.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Patient Doctor Testimonial Start -->



    <section class="testimonial-home-sec stories-section py-5 ">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-7 col-md-8">
                    <div class="section-title style2 mb-40">
                        <span>Testimonial</span>
                        <h2>OUR PATIENT’S STORIES </h2>
                    </div>
                </div>
            </div>
            <div class="row mb-10">
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <img src="https://noormedicare.com/public/google-logo.webp" alt="NoorHealth Review on Google">
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12 align-items-center" style="text-align: center;">
                    <span class="rating_point text-bold" style="color: white;">4.8</span>
                    <ul class="ratings list-style">
                        <li> <i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>
                        <li> <i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>
                        <li> <i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>
                        <li> <i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>

                        <li> <i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>
                        <!--<li>  <i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>-->
                        <!--<li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>-->
                        <!--<li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>-->
                        <!--<li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>-->
                        <!--<li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>-->
                    </ul>
                    <div class="stars-wrp"> <span class="stars"> <span style="width: 185px;"></span> </span>
                    </div>
                </div>
                <div class="col-md-5 col-sm-12 col-xs-12 text-bold">
                    <h4 class="text-bold" style="color: white;">
                        NoorMedicare is Highly Recomended</h4>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-md-between justify-content-center">
                <div class="col-lg-12 section position-relative">


                    <div>
                        <div class="owl-carousel owl-theme" id="stories-section">
                            <div class="item " >
                                <div class="testimonial-card style3 aos-init" data-aos="fade-up"
                                    data-aos-duration="1200" data-aos-delay="200">
                                    <ul class="ratings list-style">
                                        <li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>
                                        <li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>
                                        <li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>
                                        <li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>
                                        <li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>
                                        <!--<li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>-->
                                        <!--<li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>-->
                                        <!--<li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>-->
                                        <!--<li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>-->
                                        <!--<li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>-->
                                    </ul>
                                    <p class="client-quote">My mother was sick last 3 months , diagnosed with hemangioma
                                        tumor last one month Nd half . I was quite anxious about my mother's
                                        problem.soon after he made a plan to travel to India to consult the neuro
                                        surgeon.i contect NoorHealth medical services provi</p>
                                    <div class="client-info-area">
                                        <div class="client-info-wrap">
                                            <div class="client-img">
                                                <img src="https://noormedicare.com/public/noimage.png" alt="Image">
                                            </div>
                                            <div class="client-info">
                                                <h3>Mr Ali Imran wataifi</h3>
                                                <span>IRAQ</span>
                                            </div>
                                        </div>
                                        <div class="quote-icon">
                                            <i class="flaticon-quote-2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item p-3" >
                                <div class="testimonial-card style3 aos-init" data-aos="fade-up"
                                    data-aos-duration="1200" data-aos-delay="200">
                                    <ul class="ratings list-style">
                                        <li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>
                                        <li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>
                                        <li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>
                                        <li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>
                                        <li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>
                                        <!--<li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>-->
                                        <!--<li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>-->
                                        <!--<li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>-->
                                        <!--<li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>-->
                                        <!--<li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>-->
                                    </ul>
                                    <p class="client-quote">My mother was sick last 3 months , diagnosed with hemangioma
                                        tumor last one month Nd half . I was quite anxious about my mother's
                                        problem.soon after he made a plan to travel to India to consult the neuro
                                        surgeon.i contect NoorHealth medical services provi</p>
                                    <div class="client-info-area">
                                        <div class="client-info-wrap">
                                            <div class="client-img">
                                                <img src="https://noormedicare.com/public/noimage.png" alt="Image">
                                            </div>
                                            <div class="client-info">
                                                <h3>Mr Ali Imran wataifi</h3>
                                                <span>IRAQ</span>
                                            </div>
                                        </div>
                                        <div class="quote-icon">
                                            <i class="flaticon-quote-2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item p-3" >
                                <div class="testimonial-card style3 aos-init" data-aos="fade-up"
                                    data-aos-duration="1200" data-aos-delay="200">
                                    <ul class="ratings list-style">
                                        <li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>
                                        <li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>
                                        <li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>
                                        <li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>
                                        <li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>
                                        <!--<li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>-->
                                        <!--<li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>-->
                                        <!--<li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>-->
                                        <!--<li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>-->
                                        <!--<li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>-->
                                    </ul>
                                    <p class="client-quote">My mother was sick last 3 months , diagnosed with hemangioma
                                        tumor last one month Nd half . I was quite anxious about my mother's
                                        problem.soon after he made a plan to travel to India to consult the neuro
                                        surgeon.i contect NoorHealth medical services provi</p>
                                    <div class="client-info-area">
                                        <div class="client-info-wrap">
                                            <div class="client-img">
                                                <img src="https://noormedicare.com/public/noimage.png" alt="Image">
                                            </div>
                                            <div class="client-info">
                                                <h3>Mr Ali Imran wataifi</h3>
                                                <span>IRAQ</span>
                                            </div>
                                        </div>
                                        <div class="quote-icon">
                                            <i class="flaticon-quote-2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item p-3" >
                                <div class="testimonial-card style3 aos-init" data-aos="fade-up"
                                    data-aos-duration="1200" data-aos-delay="200">
                                    <ul class="ratings list-style">
                                        <li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>
                                        <li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>
                                        <li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>
                                        <li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>
                                        <li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>
                                        <!--<li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>-->
                                        <!--<li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>-->
                                        <!--<li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>-->
                                        <!--<li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>-->
                                        <!--<li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>-->
                                    </ul>
                                    <p class="client-quote">My mother was sick last 3 months , diagnosed with hemangioma
                                        tumor last one month Nd half . I was quite anxious about my mother's
                                        problem.soon after he made a plan to travel to India to consult the neuro
                                        surgeon.i contect NoorHealth medical services provi</p>
                                    <div class="client-info-area">
                                        <div class="client-info-wrap">
                                            <div class="client-img">
                                                <img src="https://noormedicare.com/public/noimage.png" alt="Image">
                                            </div>
                                            <div class="client-info">
                                                <h3>Mr Ali Imran wataifi</h3>
                                                <span>IRAQ</span>
                                            </div>
                                        </div>
                                        <div class="quote-icon">
                                            <i class="flaticon-quote-2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item p-3" >
                                <div class="testimonial-card style3 aos-init" data-aos="fade-up"
                                    data-aos-duration="1200" data-aos-delay="200">
                                    <ul class="ratings list-style">
                                        <li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>
                                        <li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>
                                        <li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>
                                        <li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>
                                        <li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>
                                        <!--<li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>-->
                                        <!--<li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>-->
                                        <!--<li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>-->
                                        <!--<li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>-->
                                        <!--<li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>-->
                                    </ul>
                                    <p class="client-quote">My mother was sick last 3 months , diagnosed with hemangioma
                                        tumor last one month Nd half . I was quite anxious about my mother's
                                        problem.soon after he made a plan to travel to India to consult the neuro
                                        surgeon.i contect NoorHealth medical services provi</p>
                                    <div class="client-info-area">
                                        <div class="client-info-wrap">
                                            <div class="client-img">
                                                <img src="https://noormedicare.com/public/noimage.png" alt="Image">
                                            </div>
                                            <div class="client-info">
                                                <h3>Mr Ali Imran wataifi</h3>
                                                <span>IRAQ</span>
                                            </div>
                                        </div>
                                        <div class="quote-icon">
                                            <i class="flaticon-quote-2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item p-3" >
                                <div class="testimonial-card style3 aos-init" data-aos="fade-up"
                                    data-aos-duration="1200" data-aos-delay="200">
                                    <ul class="ratings list-style">
                                        <li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>
                                        <li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>
                                        <li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>
                                        <li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>
                                        <li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>
                                        <!--<li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>-->
                                        <!--<li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>-->
                                        <!--<li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>-->
                                        <!--<li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>-->
                                        <!--<li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>-->
                                    </ul>
                                    <p class="client-quote">My mother was sick last 3 months , diagnosed with hemangioma
                                        tumor last one month Nd half . I was quite anxious about my mother's
                                        problem.soon after he made a plan to travel to India to consult the neuro
                                        surgeon.i contect NoorHealth medical services provi</p>
                                    <div class="client-info-area">
                                        <div class="client-info-wrap">
                                            <div class="client-img">
                                                <img src="https://noormedicare.com/public/noimage.png" alt="Image">
                                            </div>
                                            <div class="client-info">
                                                <h3>Mr Ali Imran wataifi</h3>
                                                <span>IRAQ</span>
                                            </div>
                                        </div>
                                        <div class="quote-icon">
                                            <i class="flaticon-quote-2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item p-3" >
                                <div class="testimonial-card style3 aos-init" data-aos="fade-up"
                                    data-aos-duration="1200" data-aos-delay="200">
                                    <ul class="ratings list-style">
                                        <li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>
                                        <li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>
                                        <li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>
                                        <li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>
                                        <li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>
                                        <!--<li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>-->
                                        <!--<li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>-->
                                        <!--<li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>-->
                                        <!--<li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>-->
                                        <!--<li><i class="fa-solid fa-star" style="font-size: 20px; color: #ff9f00;"></i></li>-->
                                    </ul>
                                    <p class="client-quote">My mother was sick last 3 months , diagnosed with hemangioma
                                        tumor last one month Nd half . I was quite anxious about my mother's
                                        problem.soon after he made a plan to travel to India to consult the neuro
                                        surgeon.i contect NoorHealth medical services provi</p>
                                    <div class="client-info-area">
                                        <div class="client-info-wrap">
                                            <div class="client-img">
                                                <img src="https://noormedicare.com/public/noimage.png" alt="Image">
                                            </div>
                                            <div class="client-info">
                                                <h3>Mr Ali Imran wataifi</h3>
                                                <span>IRAQ</span>
                                            </div>
                                        </div>
                                        <div class="quote-icon">
                                            <i class="flaticon-quote-2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial-home-sec lb-bg-1">
        <div class="container">
            <div class="row justify-content-md-between justify-content-center">
                <div class="col-lg-12 section position-relative">
                    <div class="d-flex justify-content-between align-item-center px-md-2 mb-3">
                        <h3 class="text-md-start f-sm-22 mb-0 clrBlueDark">
                            <span class="heading-line f-sm-22 f-40 fw-500">Patient Testimonials</span>
                        </h3>
                    </div>

                    <div>
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <iframe width="380" height="300" class="rounded-4"
                                    src="https://www.youtube.com/embed/Ih6UPbCR28U"
                                    title="Smile vs Contura Lasik | Lasik Surgery | Relex SMILE Surgery | Dr Suraj Munjal | The Sight Avenue"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                </iframe>
                            </div>
                            <div class="item">
                                <iframe width="380" height="300" class="rounded-4"
                                    src="https://www.youtube.com/embed/Ih6UPbCR28U"
                                    title="Smile vs Contura Lasik | Lasik Surgery | Relex SMILE Surgery | Dr Suraj Munjal | The Sight Avenue"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                </iframe>
                            </div>
                            <div class="item">
                                <iframe width="380" height="300" class="rounded-4"
                                    src="https://www.youtube.com/embed/Ih6UPbCR28U"
                                    title="Smile vs Contura Lasik | Lasik Surgery | Relex SMILE Surgery | Dr Suraj Munjal | The Sight Avenue"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                </iframe>
                            </div>
                            <div class="item">
                                <iframe width="380" height="300" class="rounded-4"
                                    src="https://www.youtube.com/embed/Ih6UPbCR28U"
                                    title="Smile vs Contura Lasik | Lasik Surgery | Relex SMILE Surgery | Dr Suraj Munjal | The Sight Avenue"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                </iframe>
                            </div>
                            <div class="item">
                                <iframe width="380" height="300" class="rounded-4"
                                    src="https://www.youtube.com/embed/Ih6UPbCR28U"
                                    title="Smile vs Contura Lasik | Lasik Surgery | Relex SMILE Surgery | Dr Suraj Munjal | The Sight Avenue"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                </iframe>
                            </div>
                            <div class="item">
                                <iframe width="380" height="300" class="rounded-4"
                                    src="https://www.youtube.com/embed/Ih6UPbCR28U"
                                    title="Smile vs Contura Lasik | Lasik Surgery | Relex SMILE Surgery | Dr Suraj Munjal | The Sight Avenue"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                </iframe>
                            </div>
                            <div class="item">
                                <iframe width="380" height="300" class="rounded-4"
                                    src="https://www.youtube.com/embed/Ih6UPbCR28U"
                                    title="Smile vs Contura Lasik | Lasik Surgery | Relex SMILE Surgery | Dr Suraj Munjal | The Sight Avenue"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Patient Doctor Testimonial End -->

    <!-- Faq Start -->
    <section class="section-gap mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 mt-3">
                    <h2 class="title-course text-center">
                        FAQs
                        <hr
                            style="border-radius: 5px; width: 50px;height: 4px;margin: auto;margin-top: 0.3rem; color: #ff7703;">
                    </h2>
                </div>
            </div>

            <!-- FAQ’S Right Side Close Open Icon-->
            <div class="row justify-content-between mt-md-4 quiz-box">
                <div class="col-md-12">
                    <div class="accordion">
                        <div class="accordion-item">
                            <button id="accordion-button-1" aria-expanded="false">
                                <span class="icon" aria-hidden="true"></span><span class="accordion-title">What is
                                    Robotic Joint Replacement?</span></button>
                            <div class="accordion-content">
                                <p>In joint replacement surgery, the arthritic portion of the knee is removed and
                                    replaced by an artificial joint that forms the new surfaces of the knee joint. </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-2" aria-expanded="false"><span class="icon"
                                    aria-hidden="true"></span><span class="accordion-title">How does a Fully Active
                                    Joint Replacement Robot work?</span></button>
                            <div class="accordion-content">
                                <p>
                                    <span class="fw-bold">Personalised pre-planning:</span>
                                    During Cuvis Joint Robot total knee replacement, surgeons use computed tomography
                                    (CT) scans to build a 3D model of the patient's knee. With that virtual model as a
                                    guide, the surgeon then uses the robotic arm to make accurate bone cuts and insert
                                    the knee components precisely.<br><br>
                                    <span class="fw-bold">Pre-selection and precise insertion of artificial
                                        joint:</span>
                                    The doctor uses the robot to select an artificial joint for the patient and insert
                                    it accurately.<br><br>
                                    <span class="fw-bold">Precise cutting for accuracy and optimum alignment:</span>
                                    The robot reviews the data and cuts the bone precisely concerning the dimensions of
                                    the pre-selected implant.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-2" aria-expanded="false"><span class="icon"
                                    aria-hidden="true"></span><span class="accordion-title">How safe is the surgery with
                                    a fully active robot?</span></button>
                            <div class="accordion-content">
                                <p>A surgery using a fully active robot greatly reduces the chances of human error. In
                                    the presence of a highly skilled doctor, the procedure is completely safe and
                                    enables you to return to your normal life quicker.</p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-2" aria-expanded="false"><span class="icon"
                                    aria-hidden="true"></span><span class="accordion-title">Is knee replacement surgery
                                    painful?</span></button>
                            <div class="accordion-content">
                                <p>Robotic joint replacement surgery is painless and sutureless. However, any
                                    post-surgery pain can be easily managed with medications and rehabilitation.</p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-2" aria-expanded="false"><span class="icon"
                                    aria-hidden="true"></span><span class="accordion-title">How soon can one walk after
                                    the surgery?</span></button>
                            <div class="accordion-content">
                                <p>Post-surgery, you can expect to be back on foot within the same day.</p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-2" aria-expanded="false"><span class="icon"
                                    aria-hidden="true"></span><span class="accordion-title">When can one return to
                                    normal activities after surgery?</span></button>
                            <div class="accordion-content">
                                <p>Depending on the case, you can resume normal physical activities within a few weeks.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-2" aria-expanded="false"><span class="icon"
                                    aria-hidden="true"></span><span class="accordion-title">Is there a need for any
                                    additional procedure after the surgery?</span></button>
                            <div class="accordion-content">
                                <p>Normally, no procedure is required. However, if recommended by your doctor, you might
                                    need physiotherapy sessions post-surgery for better mobility.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Faq End -->
    <section class="testimonial-home-sec lb-bg-1">
        <div class="container">
            <div class="row justify-content-md-between justify-content-center">
                <div class="col-lg-12 section position-relative">
                    <div class="d-flex justify-content-between align-item-center px-md-2 mb-3">
                        <h3 class="text-md-start f-sm-22 mb-0 clrBlueDark">
                            <span class="heading-line f-sm-22 f-40 fw-500">Patient Gallery</span>
                        </h3>
                    </div>

                    <div>
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                               <img src="https://noormedicare.com/uploads/category/44411.jpeg" alt="">
                            </div>
                            <div class="item">
                               <img src="https://noormedicare.com/uploads/category/44411.jpeg" alt="">
                            </div>
                            <div class="item">
                               <img src="https://noormedicare.com/uploads/category/44411.jpeg" alt="">
                            </div>
                            <div class="item">
                               <img src="https://noormedicare.com/uploads/category/44411.jpeg" alt="">
                            </div>
                            <div class="item">
                               <img src="https://noormedicare.com/uploads/category/44411.jpeg" alt="">
                            </div>
                            <div class="item">
                               <img src="https://noormedicare.com/uploads/category/44411.jpeg" alt="">
                            </div>
                            <div class="item">
                               <img src="https://noormedicare.com/uploads/category/44411.jpeg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <button onclick="topFunction()" id="back-top" title="Go to top"><i class="fa-solid fa-angle-up"></i></button>
    <!-- <button type="button" id="cta-book-prohealth_sticky" class="btn-prohealth btn-prohealth d-sm-block"
    onclick="topFunction()">Book an Appointment</button> -->
    <a href="#ScrollButtomForm">
        <button type="button" id="cta-book-prohealth_sticky" class="btn-prohealth btn-prohealth d-sm-block">Book an
            Appointment</button>
    </a>

    <!-- Footer Start -->
    <footer class="ft2 py-2 py-md-3 footer-bottom">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-12">
                    <p class="f-18 py-1 text-center f-sm-12 text-white m-0">
                        Copyright © NoorMediCare 2024. All Rights Reserved.
                    </p>
                </div>
                <div class="col-md-6 terms-links d-none d-md-block">
                    <div class="text-end footerBottomLink">
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <ul class="mob-action nav nav-fill d-sm-block d-lg-none">
        <li class="nav-item"><a style="color:#fff" href="https://m.me/jawedakhtar123?hash=AbaT5KScMo76ZEz6&amp;source=qr_link_share"> <i class="fab fa-facebook-messenger"></i> Messenger </a></li>
        <li class="nav-item enqModal en"><a style="color:#fff" href="mailto:support@noormedicare.com"> <i class="fa fa-envelope" aria-hidden="true"></i> Enquire </a></li>
        <li class="nav-item" onclick="window.open('https://api.whatsapp.com/send?phone=9555197411&amp;text=Hi%21+I%27m+Interested+In+Please+Share+More+Details.', '_blank');">
            <img data-src="https://herohomesmohali.realtynivesh.com/wp-content/themes/herohomes-theme/images/icons/whatsapp.png" class=" ls-is-cached lazyloaded" src="https://herohomesmohali.realtynivesh.com/wp-content/themes/herohomes-theme/images/icons/whatsapp.png"><noscript><img data-src='https://herohomesmohali.realtynivesh.com/wp-content/themes/herohomes-theme/images/icons/whatsapp.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img data-src='https://herohomesmohali.realtynivesh.com/wp-content/themes/herohomes-theme/images/icons/whatsapp.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img src="https://herohomesmohali.realtynivesh.com/wp-content/themes/herohomes-theme/images/icons/whatsapp.png"></noscript>
                    WhatsApp
        </li>
    </ul>
    
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"
    integrity="sha512-7Pi/otdlbbCR+LnW+F7PwFcSDJOuUJB3OxtEHbg4vSMvzvJjde4Po1v4BR9Gdc9aXNUNFVUY+SK51wWT8WF0Gg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"></script>
<script src="{{url('/resources/views/frontend/Noor_page1/')}}/js/script.js"></script>
<script src="{{url('/resources/views/frontend/Noor_page1/')}}/js/faq.js"></script>
<script src="{{url('/resources/views/frontend/Noor_page1/')}}/js/custom.js"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $("#contactForm").validate({

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
            
        },
        messages: {
            'name': "Please Enter name.",
            'email': "Please Enter valid email address.",
            'phone': "Please Enter valid mobile number.",
            'message': "Please Enter message.",
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
                url: "{{ route('contact_enquery') }}",
                type: 'GET',
                //data: $('#contactForm').serialize(),
                data: function() {
                    var formData = $('#contactForm').serializeArray();
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
                                window.location = "{{route('home')}}"
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
<script>
    

   

    $("#stories-section").owlCarousel({
    nav: true,
    dots: false,
    loop: true,
   
    margin: 25,
    items: 1,
    thumbs: false,
    smartSpeed: 1300,
    autoplay: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: false,
    responsiveClass: true,
    autoHeight: true,
    responsive: {
        0: {
            items: 1,
        },
        768: {
            items: 1,
        },
        1200: {
            items: 2,
        }
    }
});

$("#Speciality-1").owlCarousel({
    nav: true,
    dots: false,
    loop: true,
   
    margin: 25,
    items: 1,
    thumbs: false,
    smartSpeed: 1300,
    autoplay: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: false,
    responsiveClass: true,
    autoHeight: true,
    responsive: {
        0: {
            items: 1,
        },
        768: {
            items: 1,
        },
        1200: {
            items: 1,
        }
    }
});
</script>

<!-- Mirrored from www.sarvodayahospital.com/services/behealthy/robotic-joint-replacement-surgery/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Aug 2024 10:55:24 GMT -->

</html>
<!-- Footer End -->