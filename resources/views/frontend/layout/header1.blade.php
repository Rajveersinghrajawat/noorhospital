
<html lang="zxx">

<head>
    <!-- Required meta tags -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="RvaCFjD5qd20jYAwqucwPxkC6_NyqrLFXegtHN8MYFo" />
    <title>@if($title != ""){{ $title }} | @endif {{$setting->sitename}}</title>
    <meta name="title" content="{{isset($meta_title)?$meta_title:''}}">
    <meta name="description" content="{{isset($meta_description)?$meta_description:''}}">
    <meta name="keywords" content="{{isset($meta_keyword)?$meta_keyword:''}}">
    <meta name='robots' content='no-index, no-follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
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
    <link rel="icon" type="image/png" href="{{url('/public/frontend/')}}/assets/img/Logo_1/doctor-svgrepo-com.svg">
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
</head>
