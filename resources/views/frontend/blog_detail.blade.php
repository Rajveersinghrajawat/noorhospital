@extends('frontend.layout.layout')
@section('content')

<!-- Content Wrapper Start -->
<div class="content-wrapper">

    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap bg-f br-2">
        <div class="container">
            <div class="breadcrumb-title">
                <h2>Blog Details </h2>
                <ul class="breadcrumb-menu list-style">
                    <li><a href="{{url('/')}}">Home </a></li>
                    <!-- <li><a href="blog">Blog</a></li> -->
                    <li>Blog Details </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Blog Details Section Start -->
    <div class="blog-details-wrap ptb-100">
        <div class="container">
            <div class="row gx-5">
                <div class="col-xl-8 col-lg-12">
                    <article>
                        <div class="post-img">
                            <img src="{{isset($blog->image)?url($blog->image):url('/public/noimage.png')}}" alt="Image">
                        </div>
                        <ul class="post-metainfo  list-style">
                            <li><i class="ri-user-unfollow-line"></i>Admin</li>
                            
                        </ul>
                        <h1>{{$blog->title}}</h1>
                        <p>{{$blog->short_description}}</p>
                        {!!$blog->description!!}
                    </article>
                    
                    
                    
                </div>
                <div class="col-xl-4 col-lg-12">
                    <div class="sidebar">
                        
                        <div class="sidebar-widget popular-post">
                            <h4>Popular Posts</h4>
                            <div class="popular-post-widget">
                                @foreach($blogs as $blog_data)
                                <div class="pp-post-item">
                                    <a href="{{url('/blog-detail/'.$blog_data->slug)}}" class="pp-post-img">
                                        <img src="{{isset($blog_data->image)?url($blog_data->image):url('/public/noimage.png')}}" alt="Image">
                                    </a>
                                    <div class="pp-post-info">
                                        <!-- <span>29 Jun, 2022</span> -->
                                        <h6>
                                            <a href="{{url('/blog-detail/'.$blog_data->slug)}}">
                                            {{$blog_data->title}}
                                            </a>
                                        </h6>
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                        </div>
                        <div class="sidebar-widget categories">
                            <h4>Speciality</h4>
                            <div class="category-box">
                                <ul class="list-style">
                                    @foreach($servic as $ser_data)
                                    <li>
                                        <a href="{{url('/Speciality/'.$ser_data->slug)}}">
                                            {{$ser_data->title}}
                                        </a>
                                    </li>
                                    @endforeach
                                    
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Details Section End -->

</div>
<!-- Content wrapper end -->

@endsection