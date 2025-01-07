@extends('frontend.layout.layout')
@section('content')

<!-- Content Wrapper Start -->
<div class="content-wrapper">

    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap bg-f br-4">
        <div class="container">
            <div class="breadcrumb-title">
                <h2>Blog </h2>
                <ul class="breadcrumb-menu list-style">
                    <li><a href="{{url('/')}}">Home </a></li>
                    <li>Blog </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Blog  Section Start -->
    <div class="blog-wrap ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                @foreach($blog as $blog_data)
                <?php
                    if (!empty($blog_data->image)) {
                        $image = url($blog_data->image);
                    } else {
                        $image = url('/public/noimage.png');
                    }
                ?>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 my-3">
                    <div class="blog-card style2">
                        <div class="blog-img">
                            <img src="{{$image}}" alt="Image">
                            <a href="{{url('/blog-detail/'.$blog_data->slug)}}" class="blog-date"><span>{{ \Carbon\Carbon::parse('2024-05-01 21:42:15')->format('d') }}</span> {{ \Carbon\Carbon::parse('2024-05-01 21:42:15')->format('F') }}</a>
                        </div>
                        <div class="blog-info">
                            <ul class="blog-metainfo  list-style">
                                <li><i class="ri-user-unfollow-line"></i>Admin</li>
                                
                            </ul>
                            <h3><a href="{{url('/blog-detail/'.$blog_data->slug)}}">{{$blog_data->title}}</a></h3>
                            <p>{{$blog_data->short_description}}</p>
                            <a href="{{url('/blog-detail/'.$blog_data->slug)}}" class="link style2">Read More<i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
                
                
            </div>
        </div>
    </div>
    <!-- Blog Section End -->

</div>
<!-- Content wrapper end -->

@endsection