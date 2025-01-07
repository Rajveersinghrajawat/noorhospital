@extends('frontend.layout.layout1')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<style>
body{
    padding:0px;
    margin:0px;
}
    .copyrightsection{
    background-color:#1E427B;
    color:#fff;
    text-align:center;
}

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

.topnavbar{
background-color: #fff;
box-shadow: 0 15px 15px rgba(0, 0, 0, 0.05);
}
.topnavbar .nav-item{
    padding: 0px 15px;
}

.topnavbar .nav-link{
    font-size: 15px;
    font-style: normal;
    line-height: 20px;
    font-family: "Roboto", sans-serif;
    font-weight: 500;
    color: #fff;
}
.contactbutton{
    font-size: 15px;
    font-weight: 500;
    line-height: 35px;
    color: #fff;
    font-family: "Roboto", sans-serif;
    text-transform: ;
     background-color: #2e3f99;
    border-radius:5px;
}
.contactbutton:hover{
  
    background-color: #d53f3f;
    color: #fff;
}
.iconmails i{
    font-size:16px;
    padding:5px 5px;

}
.bannersection{
    background-image: url('https://noormedicare.com/public/frontend/assets/img/breadcrumb/br-1.jpg');
    height: auto;
    background-size: cover;
    background-position: center;
}
.bannercontant h2{
    font-size: 32px;
    font-weight: 600;
    line-height: 42px;
    color: #fff;
}
.bannercontant ul {
    padding-left: 0px;
    list-style: none;
}
.bannercontant p {
    display: flex;
    color: #fff;
    font-size: 16px;
    font-weight: 500;
    line-height: 20px;
    justify-content: flex-start;
    align-items: center;
}
.arrowslider {
    width: 30px;
    height: 30px;
    display: flex;
    border-radius: 40px;
    background: #6c9a40;
    color: #fff;
    justify-content: center;
    align-items: center;
}
.bannercontant ul li{
    display:flex;
    align-items: center;
}
.roboticjointcontant{
    box-shadow: 0 15px 15px rgba(0, 0, 0, 0.05);
    background-color:#1E427B;
    color:#fff;
     border-radius: 5px;
    
}
.roboticjointcontant h2{
        font-size: 32px;
    font-weight: 600;
    line-height: 40px;
    color: #fff;
}
.roboticjointcontant p{
        font-size: 15px;
    line-height: 20px;
    color: #fff;
}
.roboticjointcontant ul li{
        font-size: 15px;
    line-height: 24px;
    color: #fff;
}
.meetyoudoctor{
    background-color:#f0f4ff;
}
.doctorcontant span{
          font-size: 18px;
    line-height: 28px;
}
.iconsmenu{
    color: #1e427b;
    font-size: 45px;
    font-weight:bold;
    line-height: 55px;
}
.cardlayout {
    padding:20px 5px;
    text-align:center;
}
.cardlayout p{
   text-align:center; 
}
@media only screen and (min-width: 0px) and (max-width: 776px){
    .bannercontant h2 {
    font-size: 24px;
    line-height: 28px;
    }
    .tabingcontnat h2 {
    padding-top: 20px;
    font-size: 24px;
    line-height: 28px;
    }
    .cardlayout {
    margin-bottom: 20px;
    }
    .doctorlayout {
    margin-bottom: 20px;
    }
    
}
</style>

<section>
    <div class="topnavbar">
        <nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img src="https://noormedicare.com/public/frontend/assets/img/Logo_2/Noor.svg" class="w-100" alt="" srcset="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapsed d-lg-flex justify-content-lg-end " id="navbarNav">
      <ul class="navbar-nav  ">
     
        <li class="nav-item">
          <a class="nav-link contactbutton" href="mailto:support@noormedicare.com">
        <span class="iconmails" ><i class="flaticon-email-1"></i></span>  support@noormedicare.com</a>
        </li>
        <li class="nav-item">
          <a class="nav-link contactbutton" href="tel:9555197411">
              <span class="iconmails"><i class="ri-phone-fill"></i></span> +91-95551-97411
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    </div>
    
</section>


 <div class="bannersection py-5">
   <div class="container">
    <div class="row">
        <div class="col-lg-8 d-flex align-items-center">
            <div class="bannercontant">
               <h2> Reconstructing ACL Tears to Perfection by Best Arthroscopic Surgeons</h2>
              <p>   World’s first Centre for CR Robotic Joint Replacement gives you the freedom to walk pain-free with single sitting Robotic Knee Replacement - a surgery post which you won’t have to re-visit the hospital for a follow-up checkup; you can walk on the same day; and recover faster, getting back to routine lifestyle in a few weeks.</p>
                 <a href="#" class="btn style1 " >Book Appointment</a>
            </div>
        </div>
        <div class="col-lg-4">
              <div class="appointment-bg bg-f shadow rounded mt-lg-0 mt-sm-4" >
                    <form id="allenquerys" class="appointment-form contact-widget" method="post">

                        <h3 class="text-center py-3" >Consult a Doctor </h3>
                        <div class="mb-3">
                            <label for="" class="form-label required">Name</label><br>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="mb-3">
                         <label for="" class="form-label required">Phone Number</label><br>
                            <input type="tel" class="form-control"  id="phone"  name="phone">
                        </div>
                           <div class="mb-3">
                         <label for="" class="form-label required">Email</label><br>
                            <input type="email" class="form-control"  id="email"  name="email">
                        </div>
                      
                        <div class="mb-3">
                         <label for="" class="form-label required">Message</label><br>
                            <textarea class="form-control"></textarea>
                            
                        </div>
                     
                        <div class="text-center ">
                             <a href="#" class="btn style1" >Book Appointment</a>
                        </div>
                    </form>
                          
                </div>
        </div>
    </div>
   </div>
 </div>     
 
<section>

 <section>
   <div class="exportscontant py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="exportsmenucontant">
              <div class="content-title style1">
                       <h3>Center of Excellence For Fully Active Robotic Joint Replacement</h3>
                    </div>
              <p>Sarvodaya Hospital, Faridabad, Delhi NCR houses the World’s First Center for Cruciate Retaining Robotic Joint Replacement that has transformed the lives of thousands of patients with revolutionary robotic technology - A Fully Active Robot (Cuvis) for Joint Replacement.</p>             
              <p>Having performed 22,000+ Joint replacements and 3,000+ CR Robotic knee replacements, the centre is backed by a world-renowned robotic joint replacement surgeon and his team along with revolutionary technical modalities, well-equipped operation theatres, post-surgical rehabilitation centre and more.</p>
          </div>
        </div>
      </div>
    </div>
   </div>
  </section>
  
  
  
  <section>
   <div class="roboticjoint pb-5">
    <div class="container">
      <div class="row">
        <div class="roboticjointcontant p-4">
           <h2> How does Single Visit Robotic Joint Replacement benefit the patient?</h2>
           <p>At Sarvodaya’s Centre for Robotic Joint Replacement, you get operated by the most experienced surgeons empowered by one of the best Robotic technologies in the world with the following benefits:</p>
           <ul>
               <li>Surgery led by Dr. Sujoy Bhattacharjee, who features in the Limca Book of Records for Successful Total Hip Replacement of the oldest person (a 104-year-old patient) </li>
               <li>Experience of over 20,000+ Joint Replacement Surgeries</li>
<li>Excellent surgical track record for most successful surgeries resulting in movement on the day of surgery</li>
<li>3D Surgical pre-planning using high-end CT scan-imaging</li>
<li>Suture less, pain less and scar-less surgery</li>
<li>Sub-millimetre accuracy during the operation</li>
<li>Less bone loss, ligament loss and blood loss The robotic arm creates boundaries to prevent bone loss</li>
<li>No Hospital re-visit required</li>
<li>The patient gets the feeling of natural knee and can walk on the day of surgery</li>
<li>The patient can perform basic activities & take shower the next day</li>
<li>Best implant positioning with maximum cutting accuracy, which helps with quicker recovery, the overall longevity and durability of implantation</li>
<li>Real-time monitoring, using the robot’s console with the capability of intra-operative change of plans</li>
<li>Minimal human intervention reduces the chances of infection</li>
           </ul>
        </div>

      </div>
    </div>
   </div>
  </section>
  
   <section>
    <div class="slidercontant pb-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
           <div class="subimages">
            <img src="https://noormedicare.com/uploads/category/78476.jpg" class="img-fluid rounded" />
           </div>
          </div>
          <div class="col-lg-6 d-flex align-items-center">
            <div class="subimagescontant">
                  <div class="content-title style1">
                       <h3> World’s first Centre for CR Robotic Joint Replacement</h3>
                    </div>
      <p>Sarvodaya proudly holds the accolades for performing world's first cruciate-retaining knee replacement using a fully active joint robot system, the most advanced surgical equipment capable of 3D pre-planning, virtual surgery and precise cutting to provide accurate surgery results.</p>
      <div class="bannercontant" >
               <ul>
                    <li><div class="arrowslider mx-2 my-1">
                        <i class="fa-solid fa-arrow-right"></i></div> Super personalised pre-surgical planning</li>
                    <li><div class="arrowslider mx-2 my-1">
                        <i class="fa-solid fa-arrow-right"></i></div> Highly accurate incision and joint insertion</li>
                    <li><div class="arrowslider mx-2 my-1">
                        <i class="fa-solid fa-arrow-right"></i></div> High Success Rate</li>
                </ul>
                   <a href="#" class="btn style1" >Book Appointment</a>
      </div>
            </div>
           </div>
        </div>
      </div>
    </div>
  </section>
  
  
  
  
  <section>
    <div class="meetyoudoctor py-5">
         <div class="content-title style1 text-center">
                       <h3>Meet Our Expert</h3>
                    </div>
      <div class="container">
        <div class="row py-3">
          <div class="col-lg-8">
            <div class="doctorcontant">
             <h3>Dr. Sujoy Kumar Bhattacharjee</h3>
             <span>MBBS, MS - Orthopedics, MCh - Orthopedics, FICS (Australia), FACS (USA), FMIS (USA), FJR (USA, UK Australia, Germany)
HOD & Director - Centre for Robotic Joint Replacement</span>
<p>Dr. Sujoy has been dedicated to performing Joint Replacement Surgeries for 20 years with an experience of 22,000+ Joint Replacement Surgeries. He is associated with multiple renowned national and international authorities in the field of arthroplasty & joint replacement. He has acquired his expertise in techniques of Joint Replacement Surgery from the best centres in the world. He even holds Limca book of record in performing bipolar hip replacement on a 104-year-old.</p>
<p>Certified by International Book of Records, Medical Robot Company CUREXO, Korea, Online World Record and World Book of Records UK for successfully performing "World’s First Cruciate-Retaining Total Knee Replacement Surgery with Fully Active Robot.</p>
  <a href="#" class="btn style1" >Book Appointment</a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="doctorimges">
              <img src="https://noormedicare.com/uploads/category/73047.jpg" class="img-fluid rounded shadow" alt="" sizes="" srcset="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
  <section>
    <div class="counter-wrap pt-5  ">
    <div class="container">
          <div class="appointment-content text-center">
                    <div class="content-title style1">
                       <h3>Why Choose Us?</h3>
                       <p class='' >Sarvodaya’s Centre for Robotic Joint Replacement redefines the rules of what you can do after surgery - get back on your feet, go for a long walk, sit cross-legged on the floor, climb stairs or even run a marathon - even sky is not the limit for you once you get a new pain-free walk.Thanks to the expertise of globally recognised experts, the accuracy & preciseness of the revolutionary robot, post-surgery rehabilitation and optimum care at the centre.</p>
                    </div>
                </div>
           <div class="row py-5">
               <div class="col-lg-3">
                   <div class="cardlayout rounded shadow"> 
                    <div class="iconsmenu pb-3">
                    <i class="fa-solid fa-users"></i>
                    </div>
                    <h4 class="mb-0">50,000+</h4>
                    <p>Patients Experience</p>
                   </div>
               </div>
                  <div class="col-lg-3">
                   <div class="cardlayout rounded shadow"> 
                    <div class="iconsmenu pb-3">
                  <i class="fa-solid fa-bed-pulse"></i>
                    </div>
                    <h4 class="mb-0">25,000+</h4>
                    <p>Patients Experience</p>
                   </div>
               </div>   
               <div class="col-lg-3">
                   <div class="cardlayout rounded shadow"> 
                    <div class="iconsmenu pb-3">
                    <i class="fa-solid fa-globe"></i>
                    </div>
                    <h4 class="mb-0">55+</h4>
                    <p>Patients Experience</p>
                   </div>
               </div>  
               <div class="col-lg-3">
                   <div class="cardlayout  shadow rounded"> 
                    <div class="iconsmenu pb-3">
                  <i class="fa-solid fa-house-medical"></i>
                    </div>
                    <h4 class="mb-0">Insurance</h4>
                    <p>All Major Insurances Accepted</p>
                   </div>
               </div>
           </div>
               
    </div>
</div>
</section>
  
  
<section>
    <div class="counter-wrap pt-0  ">
    <div class="container">
          <div class="appointment-content text-center">
                    <div class="content-title style1">
                       <h3>Patient Testimonials</h3>
                    </div>
                </div>
      
            <div class="row py-5">
     <div class="owl-carousel owl-theme" id="reviewslandingpage">
    <div class="item">
     <div class="partner-item">
      <iframe width="100%" height="300" class="rounded" src="https://www.youtube.com/embed/NJYnDgesprM" title="How to take care of your Eyes after any Eye Surgery ?" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen=""></iframe>
     </div>
    </div>
    <div class="item">
      <div class="partner-item">
      <iframe width="100%" height="300" class="rounded" src="https://www.youtube.com/embed/NJYnDgesprM" title="How to take care of your Eyes after any Eye Surgery ?" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen=""></iframe>
     </div>
    </div>
    <div class="item">
      <div class="partner-item">
      <iframe width="100%" height="300" class="rounded" src="https://www.youtube.com/embed/NJYnDgesprM" title="How to take care of your Eyes after any Eye Surgery ?" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen=""></iframe>
     </div>
        </div>
    <div class="item">  
    <div class="partner-item">
      <iframe width="100%" height="300" class="rounded" src="https://www.youtube.com/embed/NJYnDgesprM" title="How to take care of your Eyes after any Eye Surgery ?" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen=""></iframe>
     </div>
        </div>
    <div class="item"> 
   <div class="partner-item">
      <iframe width="100%" height="300" class="rounded" src="https://www.youtube.com/embed/NJYnDgesprM" title="How to take care of your Eyes after any Eye Surgery ?" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen=""></iframe>
     </div>
        </div>
</div>
            </div>
  
            
        </div>
    </div>
</div>
</section>


<section>
    <div class="counter-wrap  mb-50  ">
    <div class="container">
          <div class="appointment-content text-center">
                    <div class="content-title style1">
                       <h3>FAQs</h3>
                    </div>
                </div>
                   <div class="row">
                     <div class="col-lg-12 mx-auto">
                         <div class="faqmenu pt-4">
                      <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
       What is Robotic Joint Replacement?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
    In joint replacement surgery, the arthritic portion of the knee is removed and replaced by an artificial joint that forms the new surfaces of the knee joint.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      How does a Fully Active Joint Replacement Robot work?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
  During Cuvis Joint Robot total knee replacement, surgeons use computed tomography (CT) scans to build a 3D model of the patient's knee. With that virtual model as a guide, the surgeon then uses the robotic arm to make accurate bone cuts and insert the knee components precisely.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
    Will there be stitches post-surgery?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
       After surgery, you'll have two or three stitches secured with a bandage, which will be taken out 7 to 10 days later.
      </div>
    </div>
  </div>
</div>

                         </div>
                     </div>
                 </div>
   </div>
    </div>
</div>
</section>



<section>
    <div class="copyrightsection py-3">
        @ NoorMediCare. Copyright ©2024 All rights reserved
    </div>
</section>



 <div class="madalsection">
         <!-- Modal -->
         <div class="madalbtn">
             <button type="button" class="btn modalupup" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Book Appointment
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
                             
                              <form id="allenquery" class="appointment-form p-0" method="post">

<!--                        <h2>Book Free Consultancy!-->
<!--</h2>-->
                        <div class="mb-3">
                            <label for="" class="form-label required">Name</label><br>
                            <input type="text" required class="form-control" name="name">
                        </div>
                        <div class="mb-3">
                         <label for="" class="form-label required">Phone Number</label><br>
                            <input type="tel"  id="phone1" class="form-control"  name="phone">
                        </div>
                         <div class="mb-3">
                         <label for="" class="form-label required">Location</label><br>
                            <select name="country" id="" class="form-control">
                                    <option> Select Location </option>
                                    <option>Jodhpur</option>
                                    <option>Jaipur</option>
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


<ul class="mob-action nav nav-fill d-sm-block d-lg-none">
        <li class="nav-item"><a style="color:#fff" href="https://m.me/jawedakhtar123?hash=AbaT5KScMo76ZEz6&amp;source=qr_link_share"> <i class="fab fa-facebook-messenger"></i> Messenger </a></li>
        <li class="nav-item enqModal en"><a style="color:#fff" href="mailto:support@noormedicare.com"> <i class="fa fa-envelope" aria-hidden="true"></i> Enquire </a></li>
        <li class="nav-item" onclick="window.open('https://api.whatsapp.com/send?phone=9555197411&amp;text=Hi%21+I%27m+Interested+In+Please+Share+More+Details.', '_blank');">
            <img data-src="https://herohomesmohali.realtynivesh.com/wp-content/themes/herohomes-theme/images/icons/whatsapp.png" class=" ls-is-cached lazyloaded" src="https://herohomesmohali.realtynivesh.com/wp-content/themes/herohomes-theme/images/icons/whatsapp.png"><noscript><img data-src='https://herohomesmohali.realtynivesh.com/wp-content/themes/herohomes-theme/images/icons/whatsapp.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img data-src='https://herohomesmohali.realtynivesh.com/wp-content/themes/herohomes-theme/images/icons/whatsapp.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img src="https://herohomesmohali.realtynivesh.com/wp-content/themes/herohomes-theme/images/icons/whatsapp.png"></noscript>
                    WhatsApp
        </li>
    </ul>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
  $("#reviewslandingpage").owlCarousel({
        nav: false,
        dots: true,
        loop: true,
        navText: ['<i class="ri-arrow-left-s-line"></i>', '<i class="ri-arrow-right-s-line"></i>'],
        margin: 20,
        items: 1,
        thumbs: false,
        smartSpeed: 1300,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: false,
        responsiveClass: true,
        autoHeight: true,
        responsive: {
            0: {
                items:1,
            },
            768: {
                items: 2,
            },
            1200: {
                items: 3,
            },
            1400: {
                items: 3,
            }
        }
    });
    </script>
    
@endsection