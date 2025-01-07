@extends('frontend.layout.layout')
@section('content')

            <!-- Content Wrapper Start -->
            <div class="content-wrapper">

                <!-- Breadcrumb Start -->
                <div class="breadcrumb-wrap bg-f br-2">
                    <div class="container">
                        <div class="breadcrumb-title">
                            <h2>Our Services</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li>Our Services</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Breadcrumb End -->

                <!-- About Section Start -->
              
                <!-- About Section End -->



               
            
            </div>
            <!-- Content wrapper end -->
            <style>
    .severstopbanner {
        width: 100%;
        height: 350px;
        display: flex;
        justify-content: start;
        align-items: center;
        background-image: url('images/services-banner.jpg');
        background-size: cover;
        border-radius: 10px;
        background-position: center;
        background-repeat: no-repeat;
    }

    .servescont h2 {
        font-weight: bold;
        color: #fff;
        font-size: 28px;
        line-height: 40px;
    }

    .servescont p {
        font-size: 16px;
        color: #fff;
        line-height: 24px;
    }

    .seviestabs .nav-pills .nav-link {
        padding: 12px 30px;
        border-radius: 30px;
        font-size: 16px;
        font-weight: 500;
        line-height: 22px;
        color: #000;
        margin-right: 20px;
        margin-bottom:20px;
        border: solid 2px #1e427b;
    }

    .seviestabs .nav-pills .nav-link.active {
        color: #fff;
        background-color: #1e427b;
    }
    .cardservies {
        padding: 20px 10px;
        background: #fff;
        border: solid 1px #1e427b;
        text-align: center;
        border-radius: 10px;
    }

    .cardservies img {
        width: 64px;
        height: 64px;
    }
    .cardservies p{
        padding-top: 15px;
        font-size: 20px;
        line-height: 30px;
        font-weight: 600;
         text-align: center;
        color: #000;
        
    }
</style>
            
    <!--           <section>-->
    <!--    <div class="serviebanner py-5">-->
    <!--        <div class="container">-->
    <!--            <div class="severstopbanner" style="background-image: url('{{isset($home_ser->image)?url($home_ser->image):url('/public/services-banner.jpg')}}');" >-->
                    
    <!--                <div class="row">-->
    <!--                    <div class="col-lg-6 d-flex h-100 j ">-->
    <!--                        <div class="servescont px-4 ">-->
    <!--                            <h2>Our Services</h2>-->
    <!--                            <p>Experience world-class healthcare facilities and-->
    <!--                                seamless travel arrangements by our experts with personal care.</p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->

    <section>
        <div class="tabingsevies pt-5">
            <div class="container">
                <div class="row">
                    <div class="seviestabs">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            @foreach($services_cat as $key1=>$ser_cat)
                            @php
                            if($key1 == 0){
                                $active1 = 'active';
                            }else{
                                $active1 = '';
                            }
                            @endphp
                            <li class="nav-item" role="presentation">
                                <button class="nav-link {{$active1}}" id="pills-home-tab{{$key1}}" data-bs-toggle="pill"
                                    data-bs-target="#pills-home-{{$key1}}" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true">{{$ser_cat->title}} </button>
                            </li>
                            @endforeach

                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            @foreach($services_cat as $key=>$ser_cat)
                            @php
                            if($key == 0){
                                $active = 'show active';
                            }else{
                                $active = '';
                            }
                            @endphp
                            <div class="tab-pane fade {{$active}}" id="pills-home-{{$key}}" role="tabpanel"
                                aria-labelledby="pills-home-tab{{$key}}" tabindex="0">
                                <div class="serviescontact">
                                    <div class="row py-4">
                                        @foreach($ser_cat['get_service'] as $ser)
                                        <div class="col-lg-3 col-md-3 col-sm-12 col-12 py-3 ">
                                            <div class="cardservies py-5">
                                                <img src="{{isset($ser->image)?url($ser->image):url('/public/noimage.png')}}"
                                                 class="img-fluid"
                                                    alt="...">
                                                <p>{{$ser->title}}</p>
                                            </div>
                                        </div>
                                        @endforeach
                                                                             
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

@endsection