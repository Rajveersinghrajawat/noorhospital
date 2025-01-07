@extends('frontend.layout.layout')
@section('content')
<!-- Hero Section Start -->
<style>
    #Hospitals .service-card.style1 .service-img img {
    height:auto !important;
}
.counter-card-wrap .counter-card {
    width: 33%;

}
.service-card.style1 {
  -webkit-box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
  border-radius: 10px;
  background-color: #fff;
}


</style>

<section class="hero-wrap style1">
    <div class="hero-slider-one owl-carousel">
        @foreach($banner as $slider)
        <div class="hero-slide-item p-0 m-0">
            
            <img src="{{isset($slider->image)?url($slider->image):url('/public/noimage.png')}}" class="d-md-block d-none" />
              <img src="{{isset($slider->mobileimage)?url($slider->mobileimage):url('/public/noimage.png')}}" class="d-md-none d-block" />
           </div> 
        @endforeach
    </div>
</section>

<!-- Hero Section End -->
<div class="promo-wrap style1">
    <div class="container">
        <div class="row justify-content-center">
            @foreach($content as $cont)
            <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                <div class="promo-card">
                    <div class="promo-info">
                        <span>{{$cont->title}}</span>
                        <h3>{{$cont->subtitle}}</h3>
                        <p>{!!$cont->description!!}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>
</div>

<section>
    <div class="specialities py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title style1 text-center mb-40">
                        <h2>Full Range of Medical Tourism Services
</h2>
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="owl-carousel py-4 owl-theme portfolio-slider-one" id="serviesditial" >
                @foreach($service as $ser)
                <div class="item">
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
               <div class="service-info">
                       
                        <a href="{{route('services')}}">
                            <button class="btn style1 d-block mx-auto">
                                View All Servies
                            </button>
                        </a>
                    </div>
        </div>
</section>

<!-- About Section Start -->
<section class="about-wrap style1 ptb-30">
    <div class="container">
        <div class="row  align-items-center">
            <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                <div class="about-img-wrap">
                    <!--<img src="{{isset($page->image)?url($page->image):url('/public/noimage.png')}}" alt="{{isset($page->image_tag)?$page->image_tag:'Image'}}" class="about-img-one">-->
                    <img src="{{url('/public/frontend/')}}/assets/img/about.jpg" alt="Image" class="img-fluid">

                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                <div class="about-content">
                    {!!$page->description!!}
                    <!-- <div class="hero-btn py-5">
                                <a href="" class="btn style1">Learn More</a>
                                </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->



<!-- Dotactor Section Start -->
<section class="portfolio-wrap ptb-30 bg-athens">
    <div class="container">
        <div class="section-title style1 text-center mb-40">
            <!-- <span>Our Portfolio</span> -->
            <h2>India’s Top Doctors and Specialists at Your Service</h2>
        </div>
        <div class="row">
            <div class="col-12">
                     <div class="owl-carousel owl-theme" id="specialities">
                           @foreach($doctor as $doc)
            <!--@php-->
            <!--    print_r($doc->toArray());-->
            <!--@endphp-->
          
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
            
          

            <div class="text-center mt-10">
                <div class="hero-btn ">
                    <a href="{{route('web_doctor')}}" class="btn style1">See All Specialists</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Dotactor Section End -->




<!-- Service Section Start -->
<section class="service-wrap ptb-30 bg-white">
    <div class="container">
        <div class="section-title style1 text-center mb-40">
            <!-- <span>Our Services</span> -->
            <h2>Specialized Treatments We Offer</h2>
        </div>
      <div class="row">
            <div class="col-12">
                     <div class="owl-carousel owl-theme" id="Speciality">
            @foreach($servic1 as $home_ser)
         
                <div class="service-card style1">
                    <div class="service-img">
                        <img src="{{isset($home_ser->image)?url($home_ser->image):url('/public/noimage.png')}}" alt="{{isset($home_ser->image_tag)?$home_ser->image_tag:'Image'}}" style="width: 100%; height:235px;">
                    </div>
                    <div class="service-info">
                        <h3 class="text-center"><a href="{{url('/speciality/'.$home_ser->slug)}}">{{$home_ser->title}}</a></h3>
                        <!--<p>{{$home_ser->short_description}}</p>-->
                        <a href="{{url('/speciality/'.$home_ser->slug)}}">
                            
                             <div class="text-center">View Details</div>  
                            <!--<button class="profilebtn d-block mx-auto">-->
                            <!--    View Details-->
                            <!--</button>-->
                        </a>
                    </div>
                </div>
         
            @endforeach
                </div>
            </div>
            
            <div class="text-center mt-10">
                <div class="hero-btn ">
                    <!--<a href="{{url('/specialities')}}" class="nav-style1"> See All Specialities</a>-->
                    <a href="{{url('/specialities')}}">
                            <button class="profilebtn d-block mx-auto">
                                See All Specialities
                            </button>
                        </a>
                </div>
            </div>
            
            

        </div>
    </div>
</section>
<!-- Service Section End -->






<!-- Service Section End -->

<!-- Portfolio Section Start -->
<section class="portfolio-wrap ptb-30 bg-athens">
    <div class="container">
        <div class="section-title style1 text-center mb-40">
            <!-- <span>Our Portfolio</span> -->
            <h2>Our Network of Best Hospitals in India</h2>
        </div>
        <div class="row">
            <div class="col-12">
                     <div class="owl-carousel owl-theme" id="Hospitals">
              @foreach($hospital as $hos)
            <!--@php-->
            <!--    print_r($doc->toArray());-->
            <!--@endphp-->
          
                <div class="service-card style1 doctor-card m-0">
                    <div class="service-img  hospitalsimg">
                        <a href="{{url('/hospital/'.$hos->slug)}}">
                         <img src="{{isset($hos->image)?url($hos->image):url('/public/noimage.png')}}" alt="{{isset($doc->image_tag)?$doc->image_tag:'Image'}}" class="img-fluid">
                        </a> 
                    </div>
                    <div class="row" style="color: #1E427B; text-align: center;">
                        <div class="col-6 pt-3 pl-5">
                        <span> <i class='fas fa-map-marker-alt'></i> {{$hos['get_city']->city}}, India</span>
                        </div>
                        <!--<div class="col-6 pt-2 pl-5">-->
                        <!--<span> <i class='fas fa-clock'></i> Estb in {{$hos->estb}}</span>-->
                        <!--</div>-->
                        <!--<div class="col-6 pt-2 pl-5">-->
                        <!--<span> <i class='fa fa-road'></i> {{$hos->distance}} km fron airport</span>-->
                        <!--</div>-->
                        <div class="col-6 pt-3 pl-5">
                        <span> <i class="fa fa-bed"></i> {{$hos->bed}} Beds</span>
                        </div>
                    </div>
                    <div class="service-info textsize px-2 pb-4 text-center">
                        <h3><a href="{{url('/hospital/'.$hos->slug)}}">{{$hos->title}}</a></h3>
                        <!--<span>{{$hos['get_city']->city}}</span>-->
                        <!--<a href="{{url('/doctor/'.$doc->slug)}}" class=" profilebtn">View Profile</a>-->
                   </div>
                 </div>
           
            @endforeach

                     </div>
            </div>
            
          

            <div class="text-center mt-30">
                <div class="hero-btn ">
                    <a href="{{route('web_hospital')}}" class="btn style1">See All Hospitals</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--<section class="portfolio-wrap ptb-30 pt-0">-->
<!--    <div class="container">-->
<!--        <div class="section-title style1 text-center mb-40">-->
            <!-- <span>Our Portfolio</span> -->
<!--            <h2>Our Hospitals</h2>-->
<!--        </div>-->
<!--         <div class="row">-->
<!--            <div class="col-12">-->
<!--                     <div class="owl-carousel owl-theme" id="Hospitals">-->
<!--            @foreach($hospital as $hos)-->
           
<!--                <div class="service-card style1">-->
<!--                    <div class="service-img imgeffects">-->
<!--                        <img src="{{isset($hos->image)?url($hos->image):url('/public/noimage.png')}}" width="100%" alt="{{isset($hos->image_tag)?$hos->image_tag:'Image'}}">-->
<!--                    </div>-->
<!--                    <div class="service-info textsize p-2 text-center">-->
<!--                        <h3><a href="{{url('/hospital/'.$hos->slug)}}">{{$hos->title}}</a></h3>-->
<!--                        <span>{{$hos['get_city']->city}}</span>-->
<!--                    </div>-->
<!--                </div>-->
            
<!--            @endforeach-->
<!--                </div>-->
<!--            </div>-->
            
<!--            <div class="text-center mt-10">-->
<!--                <div class="hero-btn ">-->
<!--                    <a href="{{route('web_hospital')}}" class="btn style1">See All Hospitals</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!-- Portfolio Section End -->

<!-- Testimonial Section Start -->
@if(count($testimonial)>0)
<section class="testimonial-wrap style1 pt-50 bg-athens">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-7 col-md-8">
                <div class="section-title style2 mb-40">
                    <span>Hear from Our Satisfied Patients</span>
                    <h2>Real Stories, Real Care</h2>
                </div>
            </div>
        </div>
        <div class="row mb-10">
        <div class="col-md-4 col-sm-12 col-xs-12" >
                <img src="{{url('/public/')}}/google-logo.webp" alt="NoorHealth Review on Google"> 
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12 align-items-center" style="text-align: center;">
                <span class="rating_point text-bold" style="color: white;">4.8</span> 
                <ul class="ratings list-style">
                    <?php
                for($i = 1;$i <= 4; $i++){
              ?>
              <li><i class="ri-star-fill"></i></li>
              <?php }
                  $starnot = 5-4;
                  for($j = 1;$j <= $starnot; $j++){ ?>
                                        
                    <li><i class="ri-star-fill-clr"></i></li>
              <?php } ?>
                    <!--<li><i class="ri-star-fill"></i></li>-->
                    <!--<li><i class="ri-star-fill"></i></li>-->
                    <!--<li><i class="ri-star-fill"></i></li>-->
                    <!--<li><i class="ri-star-fill"></i></li>-->
                    <!--<li><i class="ri-star-fill"></i></li>-->
                </ul>
                <div class="stars-wrp"> <span class="stars"> <span style="width: 185px;"></span> </span> 
            </div> 
        </div> 
        <div class="col-md-5 col-sm-12 col-xs-12 text-bold" > <h4 class="text-bold" style="color: white;">
            NoorMediCare is Highly Recomended</h4>
        </div> 
        </div>
        </div>
        
      <div class="container pb-3">
          <div class="row">
              <div class="col-12">
              <div class="owl-carousel" id="testimonial-slider-new">
            @foreach($testimonial as $test)
            <div class="testimonial-card style3" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                <ul class="ratings list-style">
                    <?php
                for($i = 1;$i <= $test->ratting; $i++){
              ?>
              <li><i class="ri-star-fill"></i></li>
              <?php }
                  $starnot = 5-$test->ratting;
                  for($j = 1;$j <= $starnot; $j++){ ?>
                                        
                    <li><i class="ri-star-fill-clr"></i></li>
              <?php } ?>
                    <!--<li><i class="ri-star-fill"></i></li>-->
                    <!--<li><i class="ri-star-fill"></i></li>-->
                    <!--<li><i class="ri-star-fill"></i></li>-->
                    <!--<li><i class="ri-star-fill"></i></li>-->
                    <!--<li><i class="ri-star-fill"></i></li>-->
                </ul>
                <p class="client-quote">{{$test->message}}</p>
                <div class="client-info-area">
                    <div class="client-info-wrap">
                        <div class="client-img">
                            <img src="{{isset($test->image)?url($test->image):url('/public/noimage.png')}}" alt="{{isset($test->image_tag)?$test->image_tag:'Image'}}">
                        </div>
                        <div class="client-info">
                            <h3>{{$test->name}}</h3>
                            <span>{{$test->designation}}</span>
                        </div>
                    </div>
                    <div class="quote-icon">
                        <i class="flaticon-quote-2"></i>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        </div>
          </div>
      </div>
        <div class="text-center pb-5 mb-10">
        <div class="hero-btn ">
            <a target="_blank" href="https://g.co/kgs/qQnhJ9Z" class="btn style1">See All Reviews</a>
        </div>
    </div>
    </div>
    
    
</section>
@endif
<!-- Testimonial Section End -->

<!-- Why Choose Us Section Start -->
 <section class="wh-wrap style1  pt-50">
                <div class="container">
                   
                       
                       
                       <div class="row gx-lg-5">
                           <div class="col-lg-5">
                                <iframe
          width="100%"
          height="100%"
          src="https://www.youtube.com/embed/{{$videotestimonial[0]->video_link}}"
        
          allowfullscreen
          class="modal-iframe"
        ></iframe>
                           </div>
                            <div class="col-lg-7">
                                       <div class="section-title style1 text-center mb-10"><h2>Video Testimonials</h2></div>
                                   <div class="partner-slider-one1 owl-carousel pt-20">
                        @foreach($videotestimonial as $vid_test)
                        <div class="partner-item">
                            <div style="width:100%;height:100%;position:absolute;display:flex;justify-content: center;
    align-items: center;    cursor: pointer;" class="video-iitems"
    
     data-bs-toggle="modal"
          data-bs-target="#staticBackdrop"
          data-video-src="https://www.youtube.com/embed/{{$vid_test->video_link}}"
    
    >
                                <div style="width: 75px;
    height: 75px;
    background: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;">
                               <img src="{{url('/public/frontend/assets/img/red-plt-btn.svg')}}" style="width:50px;"/> 
                               </div>
                           </div>
                           <iframe width="100%" height="300" class="rounded" src="https://www.youtube.com/embed/{{$vid_test->video_link}}" title="{{$vid_test->title}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                           <!--<iframe width="100%" height="300" src="https://www.youtube.com/watch?v=NJYnDgesprM" frameborder="0" allowfullscreen></iframe>-->
                        </div>
                        @endforeach
                    </div>
                            </div>
                       </div>
                       
                       
                       
                 
                </div>
            </section> 
<!-- Why Choose Us Section End -->

<!-- Appointment Section Start -->
<section class="appointment-wrap style1  ptb-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                <div class="appointment-content">
                    <div class="content-title style1">
                        <span>{{$BestSolutions->title}}</span>
                        {!!$BestSolutions->description!!}
                    </div>

                    <a href="{{route('contact')}}" class="btn style1">Book Free Consultation!</a>
                </div>
            </div>
             <div class="col-lg-1"></div>
            <div class="col-lg-5" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                <!--style="background-image:' {{isset($BestSolutions->image)?url($BestSolutions->image):url('/public/noimage.png')}}';"-->
                <div class="appointment-bg bg-f shadow " >
                    <form id="allenquery" class="appointment-form contact-widget" method="post">

                        <h2>Book Free Consultation!
                        </h2>
                        <div class="mb-3">
                            <label for="" class="form-label required">Name</label><br>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="mb-3">
                         <label for="" class="form-label required">Email Address</label><br>
                            <input type="email" class="form-control"  name="email">
                        </div>
                        <div class="mb-3">
                         <label for="" class="form-label required">Phone Number</label><br>
                            <input type="tel" class="form-control"  id="phone"  name="phone">
                        </div>
                        <div class="mb-3">
                         <label for="" class="form-label required">Select Country</label><br>
                            <select name="country" id="" class="form-control">
                                    <option> Select Country </option>
                                    <option>Afghanistan</option>
                                    <option>Albania</option>
                                    <option>Algeria</option>
                                    <option>American Samoa</option>
                                    <option>Andorra</option>
                                    <option>Angola</option>
                                    <option>Anguilla</option>
                                    <option>Antarctica</option>
                                    <option>Antigua And Barbuda</option>
                                    <option>Argentina</option>
                                    <option>Armenia</option>
                                    <option>Aruba</option>
                                    <option>Australia</option>
                                    <option>Austria</option>
                                    <option>Azerbaijan</option>
                                    <option>Bahamas The</option>
                                    <option>Bahrain</option>
                                    <option>Bangladesh</option>
                                    <option>Barbados</option>
                                    <option>Belarus</option>
                                    <option>Belgium</option>
                                    <option>Belize</option>
                                    <option>Benin</option>
                                    <option>Bermuda</option>
                                    <option>Bhutan</option>
                                    <option>Bolivia</option>
                                    <option>Bosnia and Herzegovina</option>
                                    <option>Botswana</option>
                                    <option>Bouvet Island</option>
                                    <option>Brazil</option>
                                    <option>British Indian Ocean Territory</option>
                                    <option>Brunei</option>
                                    <option>Bulgaria</option>
                                    <option>Burkina Faso</option>
                                    <option>Burundi</option>
                                    <option>Cambodia</option>
                                    <option>Cameroon</option>
                                    <option>Canada</option>
                                    <option>Cape Verde</option>
                                    <option>Cayman Islands</option>
                                    <option>Central African Republic</option>
                                    <option>Chad</option>
                                    <option>Chile</option>
                                    <option>China</option>
                                    <option>Christmas Island</option>
                                    <option>Cocos (Keeling) Islands</option>
                                    <option>Colombia</option>
                                    <option>Comoros</option>
                                    <option>Congo</option>
                                    <option>Congo The Democratic Republic Of The</option>
                                    <option>Cook Islands</option>
                                    <option>Costa Rica</option>
                                    <option>Cote D'Ivoire (Ivory Coast)</option>
                                    <option>Croatia (Hrvatska)</option>
                                    <option>Cuba</option>
                                    <option>Cyprus</option>
                                    <option>Czech Republic</option>
                                    <option>Denmark</option>
                                    <option>Djibouti</option>
                                    <option>Dominica</option>
                                    <option>Dominican Republic</option>
                                    <option>East Timor</option>
                                    <option>Ecuador</option>
                                    <option>Egypt</option>
                                    <option>El Salvador</option>
                                    <option>Equatorial Guinea</option>
                                    <option>Eritrea</option>
                                    <option>Estonia</option>
                                    <option>Ethiopia</option>
                                    <option>External Territories of Australia</option>
                                    <option>Falkland Islands</option>
                                    <option>Faroe Islands</option>
                                    <option>Fiji Islands</option>
                                    <option>Finland</option>
                                    <option>France</option>
                                    <option>French Guiana</option>
                                    <option>French Polynesia</option>
                                    <option>French Southern Territories</option>
                                    <option>Gabon</option>
                                    <option>Gambia The</option>
                                    <option>Georgia</option>
                                    <option>Germany</option>
                                    <option>Ghana</option>
                                    <option>Gibraltar</option>
                                    <option>Greece</option>
                                    <option>Greenland</option>
                                    <option>Grenada</option>
                                    <option>Guadeloupe</option>
                                    <option>Guam</option>
                                    <option>Guatemala</option>
                                    <option>Guernsey and Alderney</option>
                                    <option>Guinea</option>
                                    <option>Guinea-Bissau</option>
                                    <option>Guyana</option>
                                    <option>Haiti</option>
                                    <option>Heard and McDonald Islands</option>
                                    <option>Honduras</option>
                                    <option>Hong Kong S.A.R.</option>
                                    <option>Hungary</option>
                                    <option>Iceland</option>
                                    <option>India</option>
                                    <option>Indonesia</option>
                                    <option>Iran</option>
                                    <option>Iraq</option>
                                    <option>Ireland</option>
                                    <option>Israel</option>
                                    <option>Italy</option>
                                    <option>Jamaica</option>
                                    <option>Japan</option>
                                    <option>Jersey</option>
                                    <option>Jordan</option>
                                    <option>Kazakhstan</option>
                                    <option>Kenya</option>
                                    <option>Kiribati</option>
                                    <option>Korea North</option>
                                    <option>Korea South</option>
                                    <option>Kuwait</option>
                                    <option>Kyrgyzstan</option>
                                    <option>Laos</option>
                                    <option>Latvia</option>
                                    <option>Lebanon</option>
                                    <option>Lesotho</option>
                                    <option>Liberia</option>
                                    <option>Libya</option>
                                    <option>Liechtenstein</option>
                                    <option>Lithuania</option>
                                    <option>Luxembourg</option>
                                    <option>Macau S.A.R.</option>
                                    <option>Macedonia</option>
                                    <option>Madagascar</option>
                                    <option>Malawi</option>
                                    <option>Malaysia</option>
                                    <option>Maldives</option>
                                    <option>Mali</option>
                                    <option>Malta</option>
                                    <option>Man (Isle of)</option>
                                    <option>Marshall Islands</option>
                                    <option>Martinique</option>
                                    <option>Mauritania</option>
                                    <option>Mauritius</option>
                                    <option>Mayotte</option>
                                    <option>Mexico</option>
                                    <option>Micronesia</option>
                                    <option>Moldova</option>
                                    <option>Monaco</option>
                                    <option>Mongolia</option>
                                    <option>Montserrat</option>
                                    <option>Morocco</option>
                                    <option>Mozambique</option>
                                    <option>Myanmar</option>
                                    <option>Namibia</option>
                                    <option>Nauru</option>
                                    <option>Nepal</option>
                                    <option>Netherlands Antilles</option>
                                    <option>Netherlands The</option>
                                    <option>New Caledonia</option>
                                    <option>New Zealand</option>
                                    <option>Nicaragua</option>
                                    <option>Niger</option>
                                    <option>Nigeria</option>
                                    <option>Niue</option>
                                    <option>Norfolk Island</option>
                                    <option>Northern Mariana Islands</option>
                                    <option>Norway</option>
                                    <option>Oman</option>
                                    <option>Pakistan</option>
                                    <option>Palau</option>
                                    <option>Palestinian Territory Occupied</option>
                                    <option>Panama</option>
                                    <option>Papua new Guinea</option>
                                    <option>Paraguay</option>
                                    <option>Peru</option>
                                    <option>Philippines</option>
                                    <option>Pitcairn Island</option>
                                    <option>Poland</option>
                                    <option>Portugal</option>
                                    <option>Puerto Rico</option>
                                    <option>Qatar</option>
                                    <option>Reunion</option>
                                    <option>Romania</option>
                                    <option>Russia</option>
                                    <option>Rwanda</option>
                                    <option>Saint Helena</option>
                                    <option>Saint Kitts And Nevis</option>
                                    <option>Saint Lucia</option>
                                    <option>Saint Pierre and Miquelon</option>
                                    <option>Saint Vincent And The Grenadines</option>
                                    <option>Samoa</option>
                                    <option>San Marino</option>
                                    <option>Sao Tome and Principe</option>
                                    <option>Saudi Arabia</option>
                                    <option>Senegal</option>
                                    <option>Serbia</option>
                                    <option>Seychelles</option>
                                    <option>Sierra Leone</option>
                                    <option>Singapore</option>
                                    <option>Slovakia</option>
                                    <option>Slovenia</option>
                                    <option>Smaller Territories of the UK</option>
                                    <option>Solomon Islands</option>
                                    <option>Somalia</option>
                                    <option>South Africa</option>
                                    <option>South Georgia</option>
                                    <option>South Sudan</option>
                                    <option>Spain</option>
                                    <option>Sri Lanka</option>
                                    <option>Sudan</option>
                                    <option>Suriname</option>
                                    <option>Svalbard And Jan Mayen Islands</option>
                                    <option>Swaziland</option>
                                    <option>Sweden</option>
                                    <option>Switzerland</option>
                                    <option>Syria</option>
                                    <option>Taiwan</option>
                                    <option>Tajikistan</option>
                                    <option>Tanzania</option>
                                    <option>Thailand</option>
                                    <option>Togo</option>
                                    <option>Tokelau</option>
                                    <option>Tonga</option>
                                    <option>Trinidad And Tobago</option>
                                    <option>Tunisia</option>
                                    <option>Turkey</option>
                                    <option>Turkmenistan</option>
                                    <option>Turks And Caicos Islands</option>
                                    <option>Tuvalu</option>
                                    <option>Uganda</option>
                                    <option>Ukraine</option>
                                    <option>United Arab Emirates</option>
                                    <option>United Kingdom</option>
                                    <option>United States</option>
                                    <option>United States Minor Outlying Islands</option>
                                    <option>Uruguay</option>
                                    <option>Uzbekistan</option>
                                    <option>Vanuatu</option>
                                    <option>Vatican City State (Holy See)</option>
                                    <option>Venezuela</option>
                                    <option>Vietnam</option>
                                    <option>Virgin Islands (British)</option>
                                    <option>Virgin Islands (US)</option>
                                    <option>Wallis And Futuna Islands</option>
                                    <option>Western Sahara</option>
                                    <option>Yemen</option>
                                    <option>Yugoslavia</option>
                                    <option>Zambia</option>
                                    <option>Zimbabwe</option>
                                </select>
                        </div>
                       
                        <div class="mb-3">
                         <label for="" class="form-label required">Message</label><br>
                            <textarea class="form-control"></textarea>
                            
                        </div>
                        <div class="mb-3">
                         <label for="" class="form-label required">Treatment</label><br>
                            <select name="type" id="select_doctor" class="form-control">
                                <option value="" data-display="Select Doctor">Treatment</option>
                                  @foreach($servic1 as $home_ser)
                                <option value="{{$home_ser->title}}">{{$home_ser->title}}</option>
                                @endforeach
                            </select>
                            
                        </div>
                       
                        <button type="submit" class="btn style2">Book Now</button>
                    </form>
                            <!--<form id="allenquery" class="contact-widget" method="post">-->
                            <!--    <div class="form-group">-->
                            <!--        <input type="text" name="name" placeholder="Name">-->
                            <!--    </div>-->
                            <!--    <div class="form-group">-->
                            <!--        <input type="tel" id="phone" name="phone" placeholder="Phone Number">-->
                            <!--    </div>-->
                            <!--    <div class="form-group">-->
                            <!--        <input type="email" name="email" placeholder="Email Address">-->
                            <!--    </div>-->
                            <!--    <div class="form-group">-->
                            <!--        <input type="date" name="date">-->
                            <!--    </div>-->
                            <!--    <div class="form-group">-->
                            <!--        <textarea name="message" id="msg" cols="30" rows="10" placeholder="Your Message"></textarea>-->
                            <!--    </div>-->
                                
                            <!--    <input type="hidden" name="type_id" value="1">-->
                            <!--    <button type="submit" class="btn style2">Book Now</button>-->
                            <!--</form>-->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Appointment Section End -->

<!-- Counter Section Start -->
<div class="counter-wrap pt-40 pb-0  bg-blue">
    <div class="container">
        <div class="row">"
            <div class="col-12 text-center">
                <h3 class="text-white ">Trusted by Thousands of Patients Worldwide
</h3>
                <p class="text-white text-center p-3">Our experience, expertise, and partnerships with the best hospital in <br/>India make us a trusted leader 

</p>
            </div>
        </div>
        <div class="counter-card-wrap style1 pb-10" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
            
            <div class="counter-card style1">
                <span class="counter-icon">
                    <i class="fas fa-user-md"></i>
                </span>
                <div class="counter-text">
                    <h2 class="counter-num">
                        <span class="odometer" data-count="{{$setting->medical_beds}}"></span>
                        <span class="target">+</span>
                    </h2>
                    <p>Experienced Doctors
</p>
                </div>
            </div>
            <div class="counter-card style1">
                <span class="counter-icon">
                    <i class="fas fa-hospital"></i>
                </span>
                <div class="counter-text">
                    <h2 class="counter-num">
                        <span class="odometer" data-count="{{$setting->project_completed}}"></span>
                        <span class="target">+</span>
                    </h2>
                    <p>Leading Hospitals in India</p>
                </div>
            </div>
            <div class="counter-card style1">
                <span class="counter-icon">
                    <i class="flaticon-medical-operation"></i>
                </span>
                <div class="counter-text">
                    <h2 class="counter-num">
                        <span class="odometer" data-count="{{$setting->patients_satisfied}}"></span>
                        <span class="target">+</span>
                    </h2>
                    <p>Years of Medical Tourism Experience
</p>
                </div>
            </div>
            
        </div>
    </div>
</div>

<!-- Counter Section End -->



<!-- Pricing Section Start -->
<!-- <section class="pricing-wrap pt-100 pb-75">
                <div class="container">
                    <div class="section-title style1 text-center mb-40">
                        <span>Pricing Plan</span>
                        <h2>Our Simple &amp; Affordable Plan</h2>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                            <div class="pricing-card">
                                <div class="pricing-header">
                                    <div class="pricing-header-left">
                                        <h5>Basic Plan</h5>
                                        <h2>$79<span>/Month</span></h2>
                                    </div>
                                    <div class="pricing-header-right">
                                       <i class="flaticon-home"></i>
                                    </div>
                                </div>
                                <ul class="pricing-features list-style">
                                    <li class="checked">New Patient Consultation <i class="ri-check-line"></i></li>
                                    <li class="checked">Regular health Checkup<i class="ri-check-line"></i></li>
                                    <li class="checked">Ocupational Therapy<i class="ri-check-line"></i></li>
                                    <li class="checked">Phusical Therapy<i class="ri-check-line"></i></li>
                                    <li class="unchecked">X-rays<i class="ri-close-fill"></i></li>
                                    <li class="unchecked">Cancer Treatment<i class="ri-close-fill"></i></li>
                                </ul>
                                <a href="login.php" class="btn style2">Get Started Now</a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="300">
                            <div class="pricing-card">
                                <div class="pricing-header">
                                    <div class="pricing-header-left">
                                        <h5>Standard Plan</h5>
                                        <h2>$89<span>/Month</span></h2>
                                    </div>
                                    <div class="pricing-header-right">
                                       <i class="flaticon-user-2"></i>
                                    </div>
                                </div>
                                <ul class="pricing-features list-style">
                                    <li class="checked">New Patient Consultation <i class="ri-check-line"></i></li>
                                    <li class="checked">Regular health Checkup<i class="ri-check-line"></i></li>
                                    <li class="checked">Ocupational Therapy<i class="ri-check-line"></i></li>
                                    <li class="checked">Phusical Therapy<i class="ri-check-line"></i></li>
                                    <li class="checked">X-rays<i class="ri-check-line"></i></li>
                                    <li class="unchecked">Cancer Treatment<i class="ri-close-fill"></i></li>
                                </ul>
                                <a href="login.php" class="btn style2">Get Started Now</a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="400">
                            <div class="pricing-card">
                                <div class="pricing-header">
                                    <div class="pricing-header-left">
                                        <h5>Premium Plan</h5>
                                        <h2>$99<span>/Month</span></h2>
                                    </div>
                                    <div class="pricing-header-right">
                                       <i class="flaticon-clipboard"></i>
                                    </div>
                                </div>
                                <ul class="pricing-features list-style">
                                    <li class="checked">New Patient Consultation <i class="ri-check-line"></i></li>
                                    <li class="checked">Regular health Checkup<i class="ri-check-line"></i></li>
                                    <li class="checked">Ocupational Therapy<i class="ri-check-line"></i></li>
                                    <li class="checked">Phusical Therapy<i class="ri-check-line"></i></li>
                                    <li class="checked">X-rays<i class="ri-check-line"></i></li>
                                    <li class="checked">Cancer Treatment<i class="ri-check-line"></i></li>
                                </ul>
                                <a href="login.php" class="btn style2">Get Started Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
<!-- Pricing Section End -->

<!-- Blog Section Start -->
<!-- <section class="blog-wrap ptb-100 bg-athens">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 col-md-8">
                            <div class="section-title style1 mb-40">
                                <span>Our Blog</span>
                                <h2>Our Latest &amp; Most Popular Tips &amp; Tricks For You</h2>
                            </div>
                        </div>
                    </div>
                    <div class="blog-slider-one owl-carousel">
                        <div class="blog-card style1" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                            <div class="blog-img">
                                <img src="{{url('/public/frontend/')}}/assets/img/blog/blog-1.jpg" alt="Image">
                            </div>
                            <div class="blog-info">
                                <a href="posts-by-date.php" class="blog-date">22 Jun, 2022</a>
                                <ul class="blog-metainfo  list-style">
                                    <li><i class="ri-user-unfollow-line"></i><a href="posts-by-author.php">Admin</a></li>
                                    <li><i class="ri-wechat-line"></i>No Comment</li>
                                </ul>
                                <h3><a href="blog-details-right-sidebar.php">How To Recover Health Faster With Online Session</a></h3>
                                <a href="blog-details-right-sidebar.php" class="link style2">Read More<i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                        <div class="blog-card style1" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">
                            <div class="blog-img">
                                <img src="{{url('/public/frontend/')}}/assets/img/blog/blog-2.jpg" alt="Image">
                            </div>
                            <div class="blog-info">
                                <a href="posts-by-date.php" class="blog-date">15 Jun, 2022</a>
                                <ul class="blog-metainfo  list-style">
                                    <li><i class="ri-user-unfollow-line"></i><a href="posts-by-author.php">Admin</a></li>
                                    <li><i class="ri-wechat-line"></i>No Comment</li>
                                </ul>
                                <h3><a href="blog-details-right-sidebar.php">Telehealth Services Are Ready To Help Your Family </a></h3>
                                <a href="blog-details-right-sidebar.php" class="link style2">Read More<i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                        <div class="blog-card style1" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
                            <div class="blog-img">
                                <img src="{{url('/public/frontend/')}}/assets/img/blog/blog-3.jpg" alt="Image">
                            </div>
                            <div class="blog-info">
                                <a href="posts-by-date.php" class="blog-date">12 Jun, 2022</a>
                                <ul class="blog-metainfo  list-style">
                                    <li><i class="ri-user-unfollow-line"></i><a href="posts-by-author.php">Admin</a></li>
                                    <li><i class="ri-wechat-line"></i>No Comment</li>
                                </ul>
                                <h3><a href="blog-details-right-sidebar.php">10 Tips To Lead A Healthy And Happy Life</a></h3>
                                <a href="blog-details-right-sidebar.php" class="link style2">Read More<i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                        <div class="blog-card style1" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="500">
                            <div class="blog-img">
                                <img src="{{url('/public/frontend/')}}/assets/img/blog/blog-4.jpg" alt="Image">
                            </div>
                            <div class="blog-info">
                                <a href="posts-by-date.php" class="blog-date">25 May, 2022</a>
                                <ul class="blog-metainfo  list-style">
                                    <li><i class="ri-user-unfollow-line"></i><a href="posts-by-author.php">Admin</a></li>
                                    <li><i class="ri-wechat-line"></i>No Comment</li>
                                </ul>
                                <h3><a href="blog-details-right-sidebar.php">The Day I'd Spent At Square Medical Center</a></h3>
                                <a href="blog-details-right-sidebar.php" class="link style2">Read More<i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                        <div class="blog-card style1" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600">
                            <div class="blog-img">
                                <img src="{{url('/public/frontend/')}}/assets/img/blog/blog-5.jpg" alt="Image">
                            </div>
                            <div class="blog-info">
                                <a href="posts-by-date.php" class="blog-date">17 May, 2022</a>
                                <ul class="blog-metainfo  list-style">
                                    <li><i class="ri-user-unfollow-line"></i><a href="posts-by-author.php">Admin</a></li>
                                    <li><i class="ri-wechat-line"></i>No Comment</li>
                                </ul>
                                <h3><a href="blog-details-right-sidebar.php">How Does Science Help In Dental Surgery Research</a></h3>
                                <a href="blog-details-right-sidebar.php" class="link style2">Read More<i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
<!-- Blog Section End -->





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
            'phone': "Please Enter valid mobile number.",
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
<script>
    $(document).ready(function(){
      // Get the current date
      var currentDate = new Date().toLocaleDateString();
      // Get the last shown date from localStorage
      var lastShownDate = localStorage.getItem('modalLastShownDate');
      
      // If the modal hasn't been shown today, show it
      if (lastShownDate !== currentDate) {
        $('#exampleModal').modal('show');
        // Update the last shown date
        localStorage.setItem('modalLastShownDate', currentDate);
      }
    });
  </script>

<!-- <script>
  // Function to check if the model should be opened
  function shouldOpenModal() {
    // Get the current date
    const currentDate = new Date().toISOString().slice(0, 10);

    // Check if the modal has already been opened today
    const lastOpenedDate = localStorage.getItem('lastOpenedDate');
    return !lastOpenedDate || lastOpenedDate !== currentDate;
  }

  // Function to open the modal
  function openModal() {
    const modal = document.getElementById('exampleModal');
    modal.style.display = 'block';

    // Store the current date as the last opened date
    localStorage.setItem('lastOpenedDate', new Date().toISOString().slice(0, 10));
  }

  // Check if the modal should be opened and then open it
  if (shouldOpenModal()) {
    openModal();
  }
</script> -->
@endsection