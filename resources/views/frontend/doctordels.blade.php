@extends('frontend.layout.layout')
@section('content')

<style>
   .buttondisplay{
       display:flex;
   }
   .infromectionbtn{
    padding: 15px 19px;
   }
   .subheadings{
       line-height:28px;
       display:flex;
      
   }
   
   .subheadings p:first-child{
     width: 15% !important;
    margin-bottom: 0px;
    margin-right: 16px;
   
   }
   
    .subheadings p:nth-child(2){
     width: 80% !important;
    margin-bottom: 0px;
    margin-right: 16px;
   
   }
   .service-card {
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    background-color: #fff;
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
    right: 0%!important;
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

<!-- Content Wrapper Start -->
<div class="content-wrapper">

    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap bg-f br-2">
        <div class="container">
            <div class="breadcrumb-title">
                <h2>{{$file->title}}</h2>
                <ul class="breadcrumb-menu list-style">
                    <li><a href="{{url('/')}}">Home </a></li>
                    <li><a href="">Specialists</a></li>

                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    
    
    

    <!-- Service Details section Start -->
    <section class="service-details-wrap ptb-40">
        <div class="container">
            <div class="row gx-lg-5">
                <div class="col-xl-4">
                    <div class="sidebar">
                        <div class="row">
                            <?php
                            if (!empty($file->image)) {
                                $image = url($file->image);
                            } else {
                                $image = url('/public/noimage.png');
                            }
                            ?>
                            <div class="col-md-12">
                                <a class="single-service-img" data-fancybox="gallery" href="{{$image}}">
                                    <img src="{{$image}}" class="rounded" alt="{{isset($file->image_tag)?$file->image_tag:'Image'}}">
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

                            <h4>Book An Apointment</h4>
                            <div class="contact-widget">
                                <form id="allenquery" class="appointment-form p-0" method="post">

                                    <!--                        <h2>Book Free Consultancy!-->
                                    <!--</h2>-->
                                    <div class="mb-3">
                                    <label for="" class="form-label required">Name</label><br>
                                        <input type="text" class="form-control" required  name="name">
                                    </div>
                                    <div class="mb-3">
                                    <label for="" class="form-label required">Email Address</label><br>
                                        <input type="email" required class="form-control" name="email">
                                    </div>
                                    <div class="mb-3">
                                    <label for="" class="form-label required">Phone Number</label><br>
                                        <input type="tel"  id="phone" required class="form-control" name="phone">
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
                                    <input type="hidden" name="type" value="{{$file->title}}">
                                <input type="hidden" name="type_id" value="3">
                                    <div class="mb-3">
                                    <label for="" class="form-label required">Message</label><br>
                                        <textarea class="form-control" class="form-control"></textarea>

                                    </div>

                                    <button type="submit" class="btn style2">Book Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8">
                    <div class="service-desc">
                        <h2 class="title">

                            <div>{{$file->title}}

  <ul class="share">
            
            <li><a target="_blank" href="https://www.facebook.com/sharer.php?u=&t={{urlencode(Request::url())}}"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
            <li><a target="_blank" href="https://t.me/share/url?url={{urlencode(Request::url())}}"><i class="fab fa-telegram" aria-hidden="true"></i></a></li>
            <li><a target="_blank" href="https://api.whatsapp.com/send?text={{urlencode(Request::url())}}"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
            <li><a target="_blank" href="fb-messenger://share/?link={{urlencode(Request::url())}}"><i class='fab fa-facebook-messenger'></i></a></li>
            
        </ul>
    </div>
                            
                        </h2>
           <div class="displaytitle">
                                   <div class="subheadings"> <p><b>Designation : </b></p>  <p>{{isset($file->designation)?$file->designation:'N/A'}}</p></div>
                        <div class="subheadings"> <p><b>Speciality : </b></p> <p> {{ isset($file['get_subspecialist']->title) ? $file['get_subspecialist']->title : (isset($file['get_specialist']->title) ? $file['get_specialist']->title : 'N/A') }}
</p></div>
                        <div class="subheadings"> <p><b>Location : </b> </p>  <p>{{isset($file->location)?$file->location:'N/A'}}</p></div>
                        <div class="subheadings"> <p><b>Experience : </b></p>  <p>{{isset($file->experience)?$file->experience .' year Experience':'N/A'}}</p></div>
                        <div class="subheadings"> <p> <b>Hospital : </b></p> <p>  @if(isset($file['get_hospital']->title))
    <a href="{{ url('/hospital/'.$file['get_hospital']->slug) }}"> 
        {{ $file['get_hospital']->title }}
    </a>
@else
    N/A
@endif  </p> </div>
<div class="subheadings">  <p><b>Qualification : </b></p>  <p> {{isset($file->qualification)?$file->qualification:'N/A'}} </p> </div>
           </div>
                    <br><br>
                    <h4>Brief Profile:</h4>
                        <!--<div class="title">-->
                        <!--    <div>{{$file->designation}}&nbsp;</div>-->
                        <!--    <div><b>({{$file->experience}} Experience)</b></div>-->
                        <!--</div>-->
                        <!--@if(!empty($file['get_hospital']))-->
                        <!--<p><b><a href="{{url('/hospital/'.$file['get_hospital']->slug)}}">{{isset($file['get_hospital']->title)?$file['get_hospital']->title:'N/A'}}</a></b></p>-->
                        <!--@endif-->
                        
                        {!!$file->description!!}

                        @if(count($DoctorQualification)>0)
                        <h3>Work Experience:</h3>
                        <ul class="content-feature-list style1 list-style ">
                            @foreach($DoctorQualification as $exp)
                            <li><span><i class="ri-check-line"></i></span>
                                {{$exp->name}}
                            </li>
                            @endforeach
                        </ul>

                        @endif

                        @if(count($DoctorEducation)>0)
                        <h3>Education:</h3>
                        <ul class="content-feature-list style1 list-style ">
                            @foreach($DoctorEducation as $edu)
                            <li><span><i class="ri-check-line"></i></span>
                                {{$edu->name}}
                            </li>
                            @endforeach
                        </ul>
                        @endif

                        @if(count($award)>0)
                        <h3>AWARDS & ACCOMPLISHMENTS</h3>
                        <ul class="content-feature-list style1 list-style ">
                            @foreach($award as $aw)
                            <li><span><i class="ri-check-line"></i></span>
                                {{$aw->name}}
                            </li>
                            @endforeach
                        </ul>
                        @endif

                        @if(count($memberships)>0)
                        <h3>MEMBERSHIPS & CERTIFICATIONS</h3>

                        <ul class="content-feature-list style1 list-style ">
                            @foreach($memberships as $mem)
                            <li><span><i class="ri-check-line"></i></span>
                                {{$mem->name}}
                            </li>
                            @endforeach
                        </ul>
                        @endif

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
                            <li><span><i class="ri-check-line"></i></span>
                                <a href="{{url('/procedure/'.$pro_d->slug)}}">{{$pro_d->title}}</a>
                            </li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Dotactor Section Start -->
    <section class="portfolio-wrap ptb-30 bg-athens">
        <div class="container">
            <div class="section-title style1 text-center mb-40">
                <!-- <span>Our Portfolio</span> -->
                <h2>Meet Our Other Specialists</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel owl-theme" id="specialities">
                        @foreach($rel as $doc)

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
                    <!--<a href="https://www.noormedicare.com/specialities" class="nav-style1"> See All Specialities</a>-->
                    <a href="https://www.noormedicare.com/specialities">
                            <button class="profilebtn d-block mx-auto">
                                See All Specialities
                            </button>
                        </a>
                </div>
            </div>



            </div>
        </div>
    </section>
    <!-- Dotactor Section End -->

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

    <!--@if(count($cat)>0)-->
    <!--<section class="service-wrap ptb-40 bg-athens">-->
    <!--    <div class="container">-->
    <!--        <div class="section-title style1 text-center mb-40">-->
                <!-- <span>Our Services</span> -->
    <!--            <h2>Speciality and Treatment or Condition</h2>-->
    <!--        </div>-->
    <!--        <div class="row">-->
    <!--            @foreach($cat as $home_ser)-->
    <!--            <div class=" col-xl-4 col-lg-4 col-md-4 col-sm-10 col-12 my-3 ">-->
    <!--                <div class="service-card style1">-->
    <!--                    <div class="service-img">-->
    <!--                        <img src="{{isset($home_ser->image)?url($home_ser->image):''}}" alt="Image" style="width: 100%; height:235px;">-->

    <!--                    </div>-->
    <!--                    <div class="service-info">-->
    <!--                        <h3><a href="{{url('/Speciality/'.$home_ser->slug)}}">{{$home_ser->title}}</a></h3>-->
    <!--                        <p>{{$home_ser->short_description}}</p>-->
    <!--                        <a href="{{url('/Speciality/'.$home_ser->slug)}}" class="link style2">Read More</a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            @endforeach-->

    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!--@endif-->

    <section>
        <div class="container">
            <div class="section-title style1 text-center mb-40">
                <!-- <span>Our Services</span> -->
                {!!$file->additional_text!!}
            </div>

        </div>
    </section>
    <!-- Service Details section End -->
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
                    //data: $('#allenquery').serialize(),
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