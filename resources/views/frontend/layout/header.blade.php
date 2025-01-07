@php
$servic = App\Models\Category::with('get_sub_cat')->where('status',1)->select('id','title','slug','image')->orderBy('order_data', 'DESC')->where('order_data','!=','')->get();
$doctoe_header = App\Models\Doctor::where('status',1)->with('get_specialist')->orderBy('order_data', 'DESC')->where('order_data','!=','')->get();

$hospital_header = App\Models\Hospital::where('status',1)->select('id','title','slug','image')->orderBy('order_data', 'DESC')->where('order_data','!=','')->get();
@endphp
<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="RvaCFjD5qd20jYAwqucwPxkC6_NyqrLFXegtHN8MYFo" />
    <link rel="canonical" href="{{ isset($page->canonical_tag) && !is_null($page->canonical_tag) ? $page->canonical_tag : (isset($file->canonical_tag) && !is_null($file->canonical_tag) ? $file->canonical_tag : url()->current()) }}" />
    <title>{{isset($meta_title)?$meta_title:''}}</title>
    
    <meta name="title" content="$file->script">
    <meta name="description" content="{{isset($meta_description)?$meta_description:''}}">
    <meta name="keywords" content="{{isset($meta_keyword)?$meta_keyword:''}}">
    <meta name='robots' content='index, follow, noodp max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    
    
    <meta property="og:title" content="{{isset($meta_title)?$meta_title:''}}" />
    <meta property="og:description" content="{{isset($meta_description)?$meta_description:''}}" />
    <meta property="og:image" content="{{ isset($file) && isset($file->image) ? url($file->image) : (isset($setting->fav_icon) ? url($setting->fav_icon) : url('public/frontend/assets/img/Logo_1/doctor-svgrepo-com.png')) }}?v={{ time() }}" />
    <meta property="og:url" content="https://noormedicare.com/" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="NoorMediCare" />

   <meta property="og:image:width" content="1200" />
   <meta property="og:image:height" content="630" />
   
   <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="{{isset($meta_title)?$meta_title:''}}" />
    <meta name="twitter:description" content="{{isset($meta_description)?$meta_description:''}}" />
    <meta name="twitter:image" content="{{ isset($file) && isset($file->image) ? url($file->image) : (isset($setting->fav_icon) ? url($setting->fav_icon) : url('public/frontend/assets/img/Logo_1/doctor-svgrepo-com.png')) }}?v={{ time() }}" />
    <!-- Link of CSS files -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('/public/frontend/')}}/assets/css/flaticon.css">
    <link rel="stylesheet" href="{{url('/public/frontend/')}}/assets/css/remixicon.css">
    <link rel="stylesheet" href="{{url('/public/frontend/')}}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{url('/public/frontend/')}}/assets/css/odometer.min.css">
    <link rel="stylesheet" href="{{url('/public/frontend/')}}/assets/css/fancybox.css">
    <!--<link rel="stylesheet" href="{{url('/public/frontend/')}}/assets/css/aos.css">-->
    <link rel="stylesheet" href="{{url('/public/frontend/')}}/assets/css/style.css">
    <link rel="stylesheet" href="{{url('/public/frontend/')}}/assets/css/responsive.css">
    <link rel="stylesheet" href="{{url('/public/frontend/')}}/assets/css/dark-theme.css">
    <link rel="stylesheet" href="{{url('/public/')}}/build/css/intlTelInput.css" />
    <link rel="stylesheet" href="{{url('/public/')}}/build/css/demo.css" />
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/css/intlTelInput.css" />-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="icon" type="image/png" href="{{ isset($setting->fav_icon) ? url($setting->fav_icon) : url('public/frontend/assets/img/Logo_1/doctor-svgrepo-com.png') }}">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-TML4CYMGV5"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-TML4CYMGV5');
    </script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MXPPLZVV');</script>
    <!-- End Google Tag Manager -->
    {{ isset($page->script) && !is_null($page->script) ? $page->script : (isset($file->script) && !is_null($file->script) ? $file->script : '') }}

</head>
<style>
    .input-group {
        position: relative;
        width: 100%;
/*        max-width: 400px; /* Adjust as needed */*/
    }

    .dropdown-menu li{
        border-bottom: 1px solid black;
    }
    
    .tawk-bubble-container {
    right: 0px;
}

.tawk-icon-right img{
    margin-left:20px;
}

    .search_data {
        width: 100%;
        height: 38px;
        padding: 10px;
        border: 1px solid transparent; /* Set initial border */
        border-radius: 50px;
        background-color: #1E427B;
        color: #fff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: border-color 0.3s ease; /* Add transition for border color */
    }

    .search_data:focus {
        outline: none;
        background-color: #1E427B;
        color: #fff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .search_data::placeholder {
        color: #2e3f98; /* Adjust placeholder color */
    }

    .input-group-text {
        background-color: white;
        border: none;
    }

    .serchicon {
        color: #2e3f98; /* Adjust icon color */
    }

    .share {
    position: relative;
    margin: 10;
    padding: 10px 0px;
    display: flex;
    list-style: none;
    transition: 0.5s;
    cursor:pointer;
    width: 130px;
    height: 45px;
    
}
    .share:hover{
        width:50px;
    }
.share::before {
  content:"";
  
  /* font-family: fontAwesome; */
  position: absolute;
  width: 100%;
  height: 100%;
  background: url("{{url('/public/frontend/')}}/assets/img/share.png");
 background-size: cover;
  color: #fff;
  font-size: 30px;
  padding-left: 2px;
  transition: 0.5s;
  z-index: 1;
}
.share:hover:before{
    width: 45px;
    height: 45px;
    border-radius:50%;
}

.share li {
  position: absolute;
  transition: 1s;
}

.share li a {
  display: block;
  width: 40px;
  height: 40px;
  line-height: 40px;
  text-align: center;
  background-color: #262626;
  color: #fff;
  border-radius: 50%;
  font-size: 20px;
  transition: 0.5s;
}

.share li:nth-child(1) a {
  background-color: #3b5999;
}

.share li:nth-child(2) a {
  background-color: #55acee;
}
.share li:nth-child(3) a {
  background-color: #25D366;
}
.share li:nth-child(4) a {
  background-color: #0077B5;
}
.share li:nth-child(5) a {
  background-color: #e4405f;
}

.share:hover li:nth-child(1) a {
  transform: translatex(50px) rotate(360deg);
  transition-delay: 0.8s;
}

.share:hover li:nth-child(2) a {
  transform: translatex(100px) rotate(360deg);
  transition-delay: 0.6s;
}

.share:hover li:nth-child(3) a {
  transform: translatex(150px) rotate(360deg);
  transition-delay: 0.4s;
}

.share:hover li:nth-child(4) a {
  transform: translatex(200px) rotate(360deg);
  transition-delay: 0.2s;
}

.share:hover li:nth-child(5) a {
  transform: translatex(250px) rotate(360deg);
  transition-delay: 0s;
}
</style>
<style>
    .form-control:focus {
    color: #212529;
    background-color: #fff;
    border-color: #86b7fe;
    outline: 0;
    box-shadow: 0 0 0 0.25rem rgba(13,110,253,.25);
}
.form-control {
    display: block;
    width: 100%;
    /*padding: 0.475rem .75rem;*/
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: .375rem;
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
}
</style>
<style>
    .error {
        color: red !important;
        width: 100%;
        text-transform: lowercase;

    }

    .error::first-letter {
        text-transform: uppercase;
    }

    .iti {
        width: 100%;
    }

.btn.style1:hover {
    transform: scale(1.1); /* Zoom effect on hover */
}
.btn.style2:hover {
    transform: scale(1.1); /* Zoom effect on hover */
}
.profilebtn:hover {
    transform: scale(1.1)!important; /* Zoom effect on hover */
}

.profilebtn:hover {
    transform: scale(1.1)!important; /* Zoom effect on hover */
}

    @media only screen and (min-width:200px) and (max-width:567px) {
        .navbar-expand-md {
            padding: 0px !important;
        }
        .whatsapp{
            display:none;
        }
    }
</style>
<style>
.buttondisplay {
    display: flex;
    justify-content: center;
    gap: 10px;
}
           .infromectionbtn {
        padding: 12px 15px !important;
    display: flex;
    align-items: center;
    gap: 5px;
}
        .sidebar img {
            width: 100%;
            hight: auto;
        }

        .menuenquery ul {
            list-style: none;
        }

        .infromectionbtn {
            appearance: none;
    margin-right: 0px;
    background-color: #1e427b;
    border-radius: 30px;
    border-width: 0;
    /* box-shadow: rgba(45, 35, 66, 0.4) 0 2px 4px, rgba(45, 35, 66, 0.3) 0 7px 13px -3px, #D6D6E7 0 -3px 0 inset; */
    box-sizing: border-box;
    color: #fff;
    cursor: pointer;
    line-height: 1;
    padding: 10px 15px;
    text-decoration: none;
    transition: box-shadow .15s, transform .15s;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
    white-space: nowrap;
    will-change: box-shadow, transform;
    font-size: 14px;
    /* font-weight: bold; */
        }

        .infromectionbtn:focus {
            box-shadow: #D6D6E7 0 0 0 1.5px inset, rgba(45, 35, 66, 0.4) 0 2px 4px, rgba(45, 35, 66, 0.3) 0 7px 13px -3px, #D6D6E7 0 -3px 0 inset;
        }

        .infromectionbtn:hover {
            box-shadow: rgba(45, 35, 66, 0.4) 0 4px 8px, rgba(45, 35, 66, 0.3) 0 7px 13px -3px, #D6D6E7 0 -3px 0 inset;
            transform: translateY(-2px);
            background-color: #1e427b;
        }

        .infromectionbtn:active {
            box-shadow: #D6D6E7 0 3px 7px inset;
            transform: translateY(2px);
        }

        .infromectionbtn i {
            font-size: 18px;
            position: inherit;
        }
        .searchbar input{
    border-radius: 0px;
    
}
.input-group-text{
     border-radius: 0px;
}
.input-group.form-control:focus {
    padding: 10px 8px;
    border-radius: 0px;
    border: solid 1px #ced4da;
}
        @media only screen and (min-width: 0px) and (max-width: 776px){
    /*.searchbar {*/
    /*    padding-bottom:20px;*/
    /*}*/
}
 .title {
        display: flex;
    }
.infromectionbtn {
    padding: 10px 15px;
    font-size: 14px;
    font-weight: bold;
}
    @media screen and (max-width: 768px) {
        .share {
    position: relative;
    margin: 0;
    padding: 0px;
    display: flex;
    list-style: none;
    transition: 0.5s;
    cursor: pointer;
    width: 130px;
    height: 46px;
}
        .title {
            /* Adjust style for smaller screens */
            white-space: normal;
            /* Allow text to wrap */
            display: -webkit-box;
            -webkit-line-clamp: 2;
            /* Limit to 2 lines */
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        
        .margin_t{
            margin-top:5px;
        }
        
            .social-profile,
        .social-profile.style1 {
            width: 100% !important;
            text-align: left !important;
        }
        
        
    }
    
    .goog-te-combo{
        width:100%;
    }

    .search_div{
        background-color: white;
        position: absolute;
        z-index: 999;
        padding: 10px;
        display: none;
        /*width: 100%;*/
    }

    .search_div ul{
        list-style: none;
        max-height: 200px;
        overflow-y: scroll;
        padding: 10px;
    }
    .search_div ul li{
       margin: 5px;
    }
 
    </style>

<body style="margin:0px!important;">
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MXPPLZVV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    {!!isset($setting->google_tag_manager)?$setting->google_tag_manager:''!!}
    <!--Preloader starts-->
  
<!--  <div-->
<!--  class="modal fade videomodal"-->
<!--  id="staticBackdrop"-->
<!--  data-bs-backdrop="static"-->
<!--  data-bs-keyboard="false"-->
<!--  tabindex="-1"-->
<!--  aria-labelledby="staticBackdropLabel"-->
<!--  aria-hidden="true"-->
<!-->-->
<!--  <div class="modal-dialog modal-lg modal-dialog-centered">-->
<!--    <div class="modal-content bg-transparent border-0">-->
<!--      <div class="modal-header pe-0">-->
<!--        <button type="button" class="btn-close" onclick="removeVideo()" data-bs-dismiss="modal" aria-label="Close">-->
<!--          <i class="fa-solid fa-xmark" style="color: #ffffff;"></i>-->
<!--        </button>-->
<!--      </div>-->
<!--      <div class="modal-body p-0">-->
<!--        <iframe-->
<!--          width="100%"-->
<!--          height="480"-->
<!--          src=""-->
        
<!--          allowfullscreen-->
<!--          class="modal-iframe"-->
<!--        ></iframe>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->
  
  
    <ul class="mob-action nav nav-fill d-sm-block d-lg-none">
        <li class="nav-item"><a style="color:#fff" href="{{$setting->twitter}}"> <i class="fab fa-facebook-messenger"></i> Messenger </a></li>
        <li class="nav-item enqModal en"><a style="color:#fff" href="mailto:{{$setting->email}}"> <i class="fa fa-envelope" aria-hidden="true"></i> Enquire </a></li>
        <li class="nav-item" onclick="window.open('https://api.whatsapp.com/send?phone={{$setting->phone}}&amp;text=Hi%21+I%27m+Interested+In+Please+Share+More+Details.', '_blank');">
              <i class="fa-brands fa-whatsapp" style="margin-right:5px"></i> 
                    WhatsApp
        </li>
    </ul>
    <!--<div class="loader js-preloader" id="preloader">-->
    <!--    <div class="absCenter">-->
    <!--        <div class="loaderPill">-->
    <!--            <div class="loaderPill-anim">-->
    <!--                <div class="loaderPill-anim-bounce">-->
    <!--                    <div class="loaderPill-anim-flop">-->
    <!--                        <div class="loaderPill-pill"></div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="loaderPill-floor">-->
    <!--                <div class="loaderPill-floor-shadow"></div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->

    <!--Preloader ends-->

    <!-- Theme Switcher Start -->
    <!-- <div class="switch-theme-mode">
            <label id="switch" class="switch">
                    <input type="checkbox" onchange="toggleTheme()" id="slider">
                    <span class="slider round"></span>
            </label>
        </div>  -->

    <!-- Theme Switcher End -->

    <!-- Page Wrapper End -->
    <div class="page-wrapper">
        <!-- Header Section Start -->
        <header class="header-wrap style1">
            <div class="header-top px-3  d-lg-block">
                <div class="row align-items-center">
                    <div class="col-lg-4 pb-lg-0 pb-lg-2 order-lg-1 ">
                        <div class="header-top-left">
                            <ul class="contact-info list-style d-md-block d-none">
                                <li>
                                    <span><i class="flaticon-email-1"></i></span>
                                    <p> <a href="mailto:{{$setting->email}}" target="" rel="">{{$setting->email}}</a></p>
                                </li>
                                <li class="col-md-block d-none ">
                                    <span><i class="ri-phone-fill"></i></span>
                                    <a href="tel:{{$setting->phone}}">{{$setting->phone}}</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 pb-lg-0 pb-2 order-lg-2 order-2">
                        <div class="searchbar">
                            <div class="input-group">
                                <input type="text" onkeyup="search_data()" style="border: 1px solid #f8f9fb;" id="search_data" class="form-control search_data" placeholder="Search by disease, procedure, doctor or hospital" 
                                aria-label="Search by disease, procedure, doctor or hospital" aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2" onclick="search_data_click()">
                                    <span class="serchicon"><i class="fa-solid fa-magnifying-glass"></i></span>
                                </span>
                            </div>
                        <div class="search_div"  id="searchResults">
                            

                        </div>
                        </div>
                    </div>
                    <div class="col-lg-4 pb-lg-0 pb-2 text-md-right order-lg-3 order-1">
                        <div class="row">
                            <div class="col-8">
                                <div class="header-top-right">
                                    <ul class="social-profile list-style style1">
                                        @if(!empty($setting->facebook))
                                        <li>
                                            <a href="{{$setting->facebook}}">
                                                <i class="ri-facebook-fill"></i>
                                            </a>
                                        </li>
                                        @endif

                                        @if(!empty($setting->twitter))
                                        <li>
                                            <a href="{{$setting->twitter}}">
                                                <i class="fab fa-facebook-messenger"></i>
                                            </a>
                                        </li>
                                        @endif
                                        @if(!empty($setting->linkdin))
                                        <li>
                                            <a href="{{$setting->linkdin}}">
                                                <i class="ri-linkedin-fill"></i>
                                            </a>
                                        </li>
                                        @endif
                                        @if(!empty($setting->instagram))
                                        <li>
                                            <a href="{{$setting->instagram}}">
                                                <i class="fa-brands fa-instagram"></i>

                                            </a>
                                        </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                            <div class="col-4 relative margin_t text-end" style="position:relative">
                                
                                <script type="text/javascript">
                                    function googleTranslateElementInit() {
                                        new google.translate.TranslateElement({
                                            pageLanguage: 'en',
                                            includedLanguages: 'ar,ru,en'
                                        }, 'google_translate_element');
                                    }
                                </script>

                                <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

                                <div id="google_translate_element">

                                </div>
                            </div>
                        </div>

                    </div>
                    
                </div>
            </div>

            <div class="header-bottom px-2">

                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="{{url('/')}}">
                        <img class="logo-light" src="{{url('/public/frontend/')}}/assets/img/Logo_2/Noor.svg" style=" width: 100%; height: 46px; " alt="logo">
                        <img class="logo-dark" src="{{url('/public/frontend/')}}/assets/img/Logo_2/Noor.svg" style=" width: 100%; height: 46px; " alt="logo">
                    </a>
                    <div class="collapse navbar-collapse main-menu-wrap" id="navbarSupportedContent">
                        <div class="menu-close d-lg-none">
                            <a href="javascript:void(0)">
                                <i class="ri-close-line"></i></a>
                        </div>
                        <ul class="navbar-nav ">
                            <li class="nav-item">
                                <a href="{{route('home')}}" class="nav-link active">
                                    HOME
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('about')}}" class="nav-link">
                                    ABOUT
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/specialities')}}" class="nav-link">
                                    SPECIALITIES
                                    <i class="ri-arrow-down-s-line"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    @foreach($servic as $ser)
                                    <li class="nav-item">
                                        <a href="{{url('/speciality/'.$ser->slug)}}" class="nav-link">
                                            <img src="{{isset($ser->image)?url($ser->image):url('/public/noimage.png')}}" style="height:25px;"> <span style="font-size: 12px;">{{$ser->title}}</span>
                                            <!-- <i class="ri-arrow-down-s-line"></i> -->
                                        </a>

                                        
                                    </li>
                                    @endforeach

                                    <li class="nav-item">
                                        <a href="{{url('/specialities')}}" class="nav-link"> See All Specialities</a>
                                    </li>

                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/hospitals')}}" class="nav-link">
                                    HOSPITALS
                                    <i class="ri-arrow-down-s-line"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    @foreach($hospital_header as $hos_header)
                                    <li class="nav-item">
                                        <a href="{{url('/hospital/'.$hos_header->slug)}}" class="nav-link"><img src="{{isset($hos_header->image)?url($hos_header->image):url('/public/noimage.png')}}" style="height:25px;">  <span style="font-size: 12px;">{{$hos_header->title}}</span></a>
                                    </li>
                                    @endforeach
                                    <li class="nav-item">
                                        <a href="{{url('/hospitals')}}" class="nav-link"> See All Hospital</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/doctors')}}" class="nav-link">
                                     SPECIALISTS
                                    <i class="ri-arrow-down-s-line"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    @foreach($doctoe_header as $doc_header)

                                    <li class="nav-item">
                                        <a href="{{url('/doctor/'.$doc_header->slug)}}" class="nav-link">
                                        <img src="{{isset($doc_header->image)?url($doc_header->image):url('/public/noimage.png')}}" style="height:25px;"> <span style="font-size: 12px;"> {{isset($doc_header->title)?$doc_header->title:'N/A'}}, {{isset($doc_header['get_specialist']->title)?$doc_header['get_specialist']->title:'N/A'}}</span>
                                        </a>
                                    </li>
                                    @endforeach
                                    <li class="nav-item">
                                        <a href="{{url('/doctors')}}" class="nav-link"> See All Specialists</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- <li class="nav-item">
                                        <a href="contact.php" class="nav-link">GALLERY</a>
                                    </li> -->
                            <li class="nav-item">
                                <a href="{{route('web_gallery')}}" class="nav-link">GALLERY</a>
                            </li>

                            <li class="nav-item">
                                <a href="{{route('web_blog')}}" class="nav-link">BLOG</a>
                            </li>

                            <li class="nav-item">
                                <a href="{{route('contact')}}" class="nav-link">CONTACT US</a>
                            </li>

                            <li class="nav-item d-lg-none">
                                <a href="{{route('appointment')}}" class="nav-link btn style1">Book Appointment</a>
                            </li>
                        </ul>
                        <div class="other-options md-none">
                            <div class="option-item">
                                <a href="{{route('appointment')}}" class="btn style1">Book Appointment</a>
                            </div>
                        </div>
                    </div>

                    <div class="search-area">
                        <input type="search" placeholder="Search Here..">
                        <button type="submit"><i class="ri-search-line"></i></button>
                    </div>
                    <div class="mobile-bar-wrap">
                        <!-- <button class="searchbtn d-lg-none"><i class="ri-search-line"></i></button> -->
                        <div class="mobile-menu d-lg-none">
                            <a href="javascript:void(0)"><i class="ri-menu-line"></i></a>
                        </div>
                    </div>
                </nav>
            </div>

    </div>
    </header>
    <!-- Header Section End -->