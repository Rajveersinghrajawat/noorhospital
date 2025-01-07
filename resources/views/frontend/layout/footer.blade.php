     @php
     $servic = App\Models\Category::where('status', 1)->select('id','title','slug')->orderBy('id', 'DESC')->limit($setting->category_limit)->get();
     $doctoe_header = App\Models\Doctor::where('status', 1)->with('get_specialist')->orderBy('id', 'DESC')->limit($setting->doctor_limit)->get();

     $hospital_header = App\Models\Hospital::where('status', 1)->select('id','title','slug')->orderBy('id', 'DESC')->limit($setting->hospital_limit)->get();
     $country = App\Models\Country::get();
    $state = App\Models\State::get();
     @endphp
     <!-- Footer Section Start -->
     <style>

     </style>
     @if(isset($faq))
     <section>
         <div class="faqsection py-4">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="faqheading py-4">
                          FAQs About Medical Tourism India
                         </div>
                     </div>
                 </div>
                 
                 <div class="row">
                     <div class="col-lg-12 mx-auto">



                         <div class="faqmenu pt-4">
                             <div class="accordion" id="accordionFlushExampl">
                                 @foreach($faq as $key=>$faqdata)
                                 <?php
                                 if($key==0){
                                     $expanded = 'false';
                                     $show = 'show';
                                     $collapsed = '';
                                 }else{
                                     $expanded = 'true';
                                     $show = '';
                                     $collapsed = 'collapsed';
                                 }
                                 ?>
                                 <div class="accordion-item">
                                     <h2 class="accordion-header ">
                                         <button class="accordion-button {{$collapsed}}" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne_{{$key}}" aria-expanded="{{$expanded}}" aria-controls="collapseOne">
                                             {{$faqdata->question}}
                                         </button>
                                     </h2>
                                     <div id="flush-collapseOne_{{$key}}" class="accordion-collapse collapse {{$show}}" data-bs-parent="#accordionFlushExampl">
                                         <div class="accordion-body">{{$faqdata->answer}}</div>
                                     </div>
                                 </div>
                                 @endforeach

                             </div>

                         </div>
                     </div>
                 </div>
                
             </div>
         </div>
     </section>
      @endif
     <footer class="footer-wrap">
         <div class="container">
             <div class="row pt-40 ">

                 <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                     <div class="footer-widget">
                         <h3 class="footer-widget-title">Our Specialities</h3>
                         <ul class="footer-menu list-style">
                             @foreach($servic as $ser)
                             <li>
                                 <a href="{{url('/speciality/'.$ser->slug)}}">
                                     <i class="ri-arrow-right-s-line"></i>
                                     {{$ser->title}}
                                 </a>
                             </li>
                             @endforeach
                         </ul>
                     </div>
                 </div>
                 <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                     <div class="footer-widget">
                         <h3 class="footer-widget-title">Hospitals</h3>
                         <ul class="footer-menu list-style">
                             @foreach($hospital_header as $hos_header)
                             <li>
                                 <a href="{{url('/hospital/'.$hos_header->slug)}}">
                                     <i class="ri-arrow-right-s-line"></i>
                                     {{$hos_header->title}}
                                 </a>
                             </li>
                             @endforeach

                         </ul>
                     </div>
                 </div>
                 <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 pe-xl-4">
                     <div class="footer-widget">
                         <h3 class="footer-widget-title">Quick Link</h3>
                         <ul class="footer-menu list-style">
                             <li>
                                 <a href="{{route('about')}}">
                                     <i class="ri-arrow-right-s-line"></i>
                                     About Us
                                 </a>
                             </li>
                             <li>
                                 <a href="{{route('web_blog')}}">
                                     <i class="ri-arrow-right-s-line"></i>
                                     Blog
                                 </a>
                             </li>
                             <li>
                                 <a href="{{route('web_doctor')}}">
                                     <i class="ri-arrow-right-s-line"></i>
                                     Doctors
                                 </a>
                             </li>
                             <li>
                                 <a href="{{route('web_gallery')}}">
                                     <i class="ri-arrow-right-s-line"></i>
                                     Gallery
                                 </a>
                             </li>
                             <li>
                                 <a href="{{route('privacy_policy')}}">
                                     <i class="ri-arrow-right-s-line"></i>
                                     Privacy & Policy
                                 </a>
                             </li>

                             <li>
                                 <a href="{{route('terms_condition')}}">
                                     <i class="ri-arrow-right-s-line"></i>
                                     Terms-Conditions
                                 </a>
                             </li>

                             <li>
                                 <a href="{{route('contact')}}">
                                     <i class="ri-arrow-right-s-line"></i>
                                     Contact Us
                                 </a>
                             </li>
                         </ul>
                     </div>
                 </div>
                 <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <div class="footer-widget">
                         <h3 class="footer-widget-title">Contact Us</h3>
                         <ul class="contact-info list-style">
                             <li>
                                 <i class="flaticon-map"></i>
                                 <h6>Location</h6>
                                 <p>{{$setting->address}}</p>
                             </li>
                             <li>
                                 <i class="flaticon-email-1"></i>
                                 <h6>Email</h6>
                                 <a href="mailto:{{$setting->email}}">
                                     <span class="__cf_email__" data-cfemail="f79f929b9b98b783929b9ed994989a">
                                         {{$setting->email}}</span></a>
                             </li>
                             <li>
                                 <i class="flaticon-phone-call-1"></i>
                                 <h6>Phone</h6>
                                 <a href="tel:{{$setting->phone}}">{{$setting->phone}}</a>
                             </li>
                         </ul>
                         <ul class="social-profile pt-4 style1 list-style">
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
             </div>
         </div>
         <p class="copyright-text"><i class="ri-copyright-line"></i>
             <span>NoorMediCare</span>. Copyright ©2024 All rights reserved
         </p>
     </footer>
     <!-- Footer Section End -->

     </div>
     <!-- Page Wrapper End -->

     <!--moodal Section Start-->

     <style>
         .madalfrom .form-control {
             /*padding: 0.5rem 0.375rem !important;*/
             border-radius: 0.2rem !important;
         }

         .modalbtns {
             background-color:#d53f3f;
             border-radius: 5px;
         }

         .modalbtns:hover {
             background-color: #d53f3f;
         }

         .madalbtn .modalupup {
             position: fixed;
             right: 0%;
             background-color: #d53f3f;
             padding: 5px 20px;
             border-radius: 5px;
             text-align: center;
             text-decoration: none;
             text-transform: capitalize;
             -moz-transform: rotate(-90deg);
             -ms-transform: rotate(-90deg);
             -o-transform: rotate(-90deg);
             transform-origin: bottom right;
             z-index: 999999999;
             bottom: 60%;
             -webkit-transform: rotate(-90deg);
             transform-origin: bottom right;
         }
         #tawkchat-minified-iframe {
    bottom: 100px !important;
}
     </style>



     <div class="madalsection">
         <!-- Modal -->
         <div class="madalbtn">
             <button type="button" class="btn modalupup" data-bs-toggle="modal" data-bs-target="#exampleModal">
                 BOOK NOW
             </button>
         </div>

         <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

             <div class="modal-dialog">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h1 class="modal-title fs-5" id="exampleModalLabel">Send Us A Message</h1>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <div class="modal-body p-4">
                         <div class="madalfrom">
                             
                              <form id="allenquerypop" class="appointment-form p-0" method="post">
@csrf
<!--                        <h2>Book Free Consultancy!-->
<!--</h2>-->
                        <div class="mb-3">
                            <label for="" class="form-label required">Name</label><br>
                            <input type="text" required class="form-control" name="name">
                        </div>
                         <div class="mb-3">
                         <label for="" class="form-label required">Email Address</label><br>
                            <input type="email" required class="form-control"  name="email">
                        </div>
                        <div class="mb-3">
                         <label for="" class="form-label required">Phone Number</label><br>
                            <input type="tel"  id="phone212" class="form-control"  name="phone">
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
                            <textarea class="form-control" class="form-control" ></textarea>
                          
                        </div>
                       
                        <button type="submit" class="btn style2">Book Now</button>
                    </form>
                            
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     </div>
     <!--moodal Section End-->

     <!-- Back-to-top button Start -->

     <a href="javascript:void(0)" class="back-to-top bounce">
         <i class="ri-arrow-up-s-line"></i></a>
         
<div class="whatsapp" style="position: fixed; bottom: 30px;left: 30px;z-index: 999999;"> 
       <a href="https://api.whatsapp.com/send?phone=919555197411" target="_blank">
      <svg class="ico_d " width="50" height="50" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg" style="transform: rotate(0deg);"><circle class="color-element" cx="19.4395" cy="19.4395" r="19.4395" fill="#49E670"></circle><path d="M12.9821 10.1115C12.7029 10.7767 11.5862 11.442 10.7486 11.575C10.1902 11.7081 9.35269 11.8411 6.84003 10.7767C3.48981 9.44628 1.39593 6.25317 1.25634 6.12012C1.11674 5.85403 2.13001e-06 4.39053 2.13001e-06 2.92702C2.13001e-06 1.46351 0.83755 0.665231 1.11673 0.399139C1.39592 0.133046 1.8147 1.01506e-06 2.23348 1.01506e-06C2.37307 1.01506e-06 2.51267 1.01506e-06 2.65226 1.01506e-06C2.93144 1.01506e-06 3.21063 -2.02219e-06 3.35022 0.532183C3.62941 1.19741 4.32736 2.66092 4.32736 2.79397C4.46696 2.92702 4.46696 3.19311 4.32736 3.32616C4.18777 3.59225 4.18777 3.59224 3.90858 3.85834C3.76899 3.99138 3.6294 4.12443 3.48981 4.39052C3.35022 4.52357 3.21063 4.78966 3.35022 5.05576C3.48981 5.32185 4.18777 6.38622 5.16491 7.18449C6.42125 8.24886 7.39839 8.51496 7.81717 8.78105C8.09636 8.91409 8.37554 8.9141 8.65472 8.648C8.93391 8.38191 9.21309 7.98277 9.49228 7.58363C9.77146 7.31754 10.0507 7.1845 10.3298 7.31754C10.609 7.45059 12.2841 8.11582 12.5633 8.38191C12.8425 8.51496 13.1217 8.648 13.1217 8.78105C13.1217 8.78105 13.1217 9.44628 12.9821 10.1115Z" transform="translate(12.9597 12.9597)" fill="#FAFAFA"></path><path d="M0.196998 23.295L0.131434 23.4862L0.323216 23.4223L5.52771 21.6875C7.4273 22.8471 9.47325 23.4274 11.6637 23.4274C18.134 23.4274 23.4274 18.134 23.4274 11.6637C23.4274 5.19344 18.134 -0.1 11.6637 -0.1C5.19344 -0.1 -0.1 5.19344 -0.1 11.6637C-0.1 13.9996 0.624492 16.3352 1.93021 18.2398L0.196998 23.295ZM5.87658 19.8847L5.84025 19.8665L5.80154 19.8788L2.78138 20.8398L3.73978 17.9646L3.75932 17.906L3.71562 17.8623L3.43104 17.5777C2.27704 15.8437 1.55796 13.8245 1.55796 11.6637C1.55796 6.03288 6.03288 1.55796 11.6637 1.55796C17.2945 1.55796 21.7695 6.03288 21.7695 11.6637C21.7695 17.2945 17.2945 21.7695 11.6637 21.7695C9.64222 21.7695 7.76778 21.1921 6.18227 20.039L6.17557 20.0342L6.16817 20.0305L5.87658 19.8847Z" transform="translate(7.7758 7.77582)" fill="white" stroke="white" stroke-width="0.2"></path></svg>
      </a>
</div>
     <!-- Back-to-top button End -->


     <!-- Link of JS files -->
     <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
     <script src="{{url('/public/frontend/')}}/assets/js/jquery.min.js"></script>
     <script src="{{url('/public/frontend/')}}/assets/js/bootstrap.bundle.min.js"></script>
     <script src="{{url('/public/frontend/')}}/assets/js/form-validator.min.js"></script>
     <script src="{{url('/public/frontend/')}}/assets/js/contact-form-script.js"></script>
     <script src="{{url('/public/frontend/')}}/assets/js/aos.js"></script>
     <script src="{{url('/public/frontend/')}}/assets/js/owl.carousel.min.js"></script>
     <script src="{{url('/public/frontend/')}}/assets/js/odometer.min.js"></script>
     <script src="{{url('/public/frontend/')}}/assets/js/fancybox.js"></script>
     <script src="{{url('/public/frontend/')}}/assets/js/jquery.appear.js"></script>
     <script src="{{url('/public/frontend/')}}/assets/js/tweenmax.min.js"></script>
     <script src="{{url('/public/frontend/')}}/assets/js/main.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput-jquery.min.js"></script>
    <script src="{{url('/public/')}}/build/js/intlTelInput.js"></script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/631707c637898912e9676fa2/1gc8vcom8';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
     <script>
        $("#allenquerypop").validate({

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
                    url: "{{ route('appointment_save') }}",
                    type: 'GET',
                    //data: $('#allenquery').serialize(),
                    data: function() {
                        var formData = $('#allenquerypop').serializeArray();
                        var countryCode = $('#phone212').closest('.mb-3').find('.iti__selected-dial-code').text();
                        var countryName = $('#phone212').closest('.mb-3').find('.iti__a11y-text').text().split(' ')[0]; // Get country name before the country code
    
                        // Append the country code and country name to the form data
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
    <script type="text/javascript">
    // Wait for the Tawk.to script to load
    window.addEventListener('load', function() {
        // Set custom styles for the Tawk.to chat widget
        Tawk_API.customStyle = {
            visibility: {
                desktop: {
                    xOffset: '10px',
                    yOffset: '80px',
                    position: 'br' // Bottom right position
                },
                mobile: {
                    xOffset: '10px',
                    yOffset: '80px',
                    position: 'br' // Bottom right position
                },
                bubble: {
                    xOffset: '0',
                    yOffset: '0',
                    rotate: 0 // No rotation
                }
            }
        };
        // Set custom text using Tawk_API
        Tawk_API.toggle();

        // Add text to the chat widget once it's opened
        Tawk_API.addEvent('Welcome message', 'We are here!');
    });
</script>
<!--End of Tawk.to Script-->
    <script>
        $(document).ready(function(){
            // Show modal when hovering over the div
            $('.modalupup').hover(function(){
                $('#exampleModal').modal('show');
            });
        });
    </script>
    <script>
      const input = document.querySelector("#phone");
      const input1 = document.querySelector("#phone1");
      
      window.intlTelInput(input, {
        initialCountry: "us",
        showSelectedDialCode: true,
        strictMode: true,
        utilsScript: "{{url('/public/')}}/build/js/utils.js",
      }); 
      
      window.intlTelInput(input1, {
        initialCountry: "us",
        showSelectedDialCode: true,
        strictMode: true,
        utilsScript: "{{url('/public/')}}/build/js/utils.js",
      }); 
      
      
    </script>
    <script>
      
      const input_phone = document.querySelector("#phone212");
      
      window.intlTelInput(input_phone, {
        initialCountry: "us",
        showSelectedDialCode: true,
        strictMode: true,
        utilsScript: "{{url('/public/')}}/build/js/utils.js",
      }); 
    </script>
    
     <script>
    function search_data() {
        var searchQuery = document.getElementById("search_data").value;

        $.ajax({
            url: "{{ route('search_data') }}",
            type: 'POST',
            data: {
                '_token': '{{ csrf_token() }}',
                'search_query': searchQuery
            },
            success: function(response) {
                if (response.status == 'true') {
                    $("#searchResults").html(response.search_results);
                    $(".search_div").css("display", "block");
                }else{
                    alert(searchQuery);
                    $(".search_div").css("display", "none");
                }
                
            },
            error: function(xhr, status, error) {
                // Handle errors
                console.error(error);
            }
        });
    }

    function search_data_click() {
        var searchQuery = document.getElementById("search_data").value;

        $.ajax({
            url: "{{ route('search_data') }}",
            type: 'POST',
            data: {
                '_token': '{{ csrf_token() }}',
                'search_query': searchQuery
            },
            success: function(response) {
                if (response.status == 'true') {
                    $("#searchResults").html(response.search_results);
                    $(".search_div").css("display", "block");
                }else{
                    alert(searchQuery);
                    $(".search_div").css("display", "none");
                }
                
            },
            error: function(xhr, status, error) {
                // Handle errors
                console.error(error);
            }
        });
    }

    $(document).on('click', function(event) {
    // Check if the clicked element is not inside the search_div
    if (!$(event.target).closest('.search_div').length) {
        // Hide the search_div
        $('.search_div').hide();
    }
});

    
</script>
     <script>
     // -----Country Code Selection
$("#mobile_code").intlTelInput({
	initialCountry: "in",
	separateDialCode: true,
	// utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.4/js/utils.js"
});

$(".mobile_code").intlTelInput({
	initialCountry: "in",
	separateDialCode: true,
	// utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.4/js/utils.js"
});
         $("#contactForm1").validate({

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
                 'subject': {
                     required: true
                 },
                 'message': {
                     required: true
                 },
                 'country': {
                     required: true
                 },
                 'state': {
                     required: true
                 },
             },
             messages: {
                 'name': "Please Enter name.",
                 'email': "Please Enter valid email address.",
                 'phone': "Please Enter valid mobile number.",
                 'subject': "Please Enter subject.",
                 'message': "Please Enter message.",
                 'country': "Please Select country.",
                 'state': "Please Select state.",
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
                     data: function() {
                        var formData = $('#contactForm1').serializeArray();
                        var countryCode = $('.iti__selected-dial-code').text();
                        
                        // Append the country code to the form data
                        formData.push({ name: 'country_code', value: countryCode });
                        
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
         $(document).ready(function() {
             $('#specialities').owlCarousel({
                 margin: 15,
                 nav: true,
                 loop: true,
                 dots: false,
                 autoplay: true,
                 responsive: {
                     0: {
                         items: 1
                     },
                     600: {
                         items: 3
                     },
                     1000: {
                         items: 4
                     }
                 }
             })
             $(".owl-prev").html('<i class="fa-solid fa-chevron-left"></i>');
             $(".owl-next").html('<i class="fa-solid fa-chevron-right"></i>');
         })
         
         
          $(document).ready(function() {
             $('#Speciality').owlCarousel({
                 margin: 15,
                 nav: true,
                 loop: true,
                 dots: false,
                 autoplay: true,
                 responsive: {
                     0: {
                         items: 1
                     },
                     600: {
                         items: 3
                     },
                     1000: {
                         items: 4
                     }
                 }
             })
             $(".owl-prev").html('<i class="fa-solid fa-chevron-left"></i>');
             $(".owl-next").html('<i class="fa-solid fa-chevron-right"></i>');
         })
         
         
         
         $(document).ready(function() {
             $('#Hospitals').owlCarousel({
                 margin: 15,
                 nav: true,
                 loop: true,
                 dots: false,
                 autoplay: true,
                 responsive: {
                     0: {
                         items: 1
                     },
                     600: {
                         items: 3
                     },
                     1000: {
                         items: 4
                     }
                 }
             })
             $(".owl-prev").html('<i class="fa-solid fa-chevron-left"></i>');
             $(".owl-next").html('<i class="fa-solid fa-chevron-right"></i>');
         })
         
         
    document.addEventListener("DOMContentLoaded", function () {
        var e = document.querySelectorAll(".video-iitems");
        let o = document.querySelector(".modal-iframe");
        e.forEach(function (e) {
            e.addEventListener("click", function () {
                let t = e.dataset.videoSrc;
                o.src = t;
            });
        });
    });
         
         function removeVideo() {
    document.querySelector(".modal-iframe").src = "";
}
     </script>
     </body>

     </html>