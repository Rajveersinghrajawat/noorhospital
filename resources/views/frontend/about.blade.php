@extends('frontend.layout.layout')
@section('content')

            <!-- Content Wrapper Start -->
            <div class="content-wrapper">

                <!-- Breadcrumb Start -->
                <div class="breadcrumb-wrap bg-f br-2">
                    <div class="container">
                        <div class="breadcrumb-title">
                            <h2>About Us</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li>About Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Breadcrumb End -->

                <!-- About Section Start -->
                <section class="about-wrap style1 ptb-30">
                    <div class="container">
                        <div class="row lg-gx-5 align-items-center">
                            <!-- <div class="col-lg-6">
                                <div class="about-img-wrap">
                                    <img src="{{url('/public/frontend/')}}/assets/img/about-bg.png"
                                     alt="Image" class="about-img-one">
                                 
                                </div>
                            </div> -->
                            <div class="col-lg-12">
                                <div class="about-content">
                                    <?php echo $about->description ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- About Section End -->
                
                  <section class="about-wrap style1 ptb-30">
                    <div class="container">
                        <div class="row align-items-center">
                           
                             <div class="col-lg-5">
                                 <h2>
                                 <?php echo $about->short_description ?>
                                 </h2>
                             </div>
                              <div class="col-lg-7">
                                <img src="{{url('/')}}/<?php echo $about->sec_image ?>"/>
                            </div>
                        </div>
                    </div>
                </section>


               
            
            </div>
            <!-- Content wrapper end -->

@endsection