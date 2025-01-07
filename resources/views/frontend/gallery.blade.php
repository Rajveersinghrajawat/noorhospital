@extends('frontend.layout.layout')
@section('content')
<!-- Content Wrapper Start -->
<div class="content-wrapper">

    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap bg-f br-2">
        <div class="container">
            <div class="breadcrumb-title">
                <h2>Our Gallery</h2>
                <ul class="breadcrumb-menu list-style">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>Gallery</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Team Section Start -->
    <section class="team-wrap ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                @foreach($gallery as $gal_data)
                
                @php
                if(!empty($gal_data->image)){
                $image = $gal_data->image;
                
                }else{
                $image = '/public/noimage.png';
                }
                @endphp
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 my-3 ">
                    <div class="team-card style2">
                        <a class="single-service-img" data-fancybox="gallery" href="assets/img/image-001_1660449641.png">
                            <img src="{{isset($gal_data->image)?url($gal_data->image):url('/public/noimage.png')}}" class="img-fluid " alt="Image">
                        </a>
                        <div class="team-info">
                            <h3>{{$gal_data->title}}</h3>
                            <span>{{$gal_data->description}}</span>
                            <ul class="social-profile style2 list-style">
                                <li>
                                    <a target="_blank" target="_blank" href="https://www.facebook.com/sharer.php?u={{url($image)}}">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://twitter.com/share?url={{url($image)}}">
                                        <i class="ri-twitter-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://instagram://library?AssetPath={{url($image)}}&InstagramCaption={{$gal_data->title}}">
                                        <i class="ri-instagram-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url={{url($image)}}">
                                        <i class="ri-linkedin-fill"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>


            <div class="row justify-content-center">
                @foreach($video as $vid_data)
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 my-3 ">
                    <div class="team-card style2">
                        <a class="single-service-img" data-fancybox="gallery" href="assets/img/image-001_1660449641.png">
                            <iframe width="100%" height="260" src="https://www.youtube.com/embed/yuid_FjNckc" frameborder="0" allowfullscreen></iframe>
                        </a>
                        <div class="team-info">
                            <h3>{{$vid_data->title}}</h3>
                            <span>{{$vid_data->description}}</span>
                            <ul class="social-profile style2 list-style">
                                <li>
                                    <a target="_blank" target="_blank" href="https://www.facebook.com/sharer.php?u={{$vid_data->video_url}}">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://twitter.com/share?url={{$vid_data->video_url}}">
                                        <i class="ri-twitter-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://instagram://library?AssetPath={{$vid_data->video_url}}&InstagramCaption={{$gal_data->title}}">
                                        <i class="ri-instagram-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url={{$gal_data->video_url}}">
                                        <i class="ri-linkedin-fill"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>

    <section>
        <div class="container">
            <div class="section-title style1 text-center mb-40">
                <!-- <span>Our Services</span> -->
                {!!$file->additional_text!!}
            </div>

        </div>
    </section>
    <!-- Team Section End -->

</div>
<!-- Content wrapper end -->

@endsection