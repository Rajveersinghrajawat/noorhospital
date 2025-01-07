@php
$admin= Auth::guard('admin')->user();

@endphp
<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">

                <li>
                    <a href="{{route('admin_dashboard')}}">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('appointments_request')}}">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">Appointments</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('page')}}">
                        <i class="bx bx-file"></i>
                        <span key="t-dashboards">Pages</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('faq')}}">
                        <i class="bx bx-file"></i>
                        <span key="t-dashboards">FAQ</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('feature')}}">
                        <i class="bx bx-file"></i>
                        <span key="t-dashboards">Feature</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('content')}}">
                        <i class="bx bx-file"></i>
                        <span key="t-dashboards">Home Content</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('banner')}}">
                        <i class="bx bx-file"></i>
                        <span key="t-dashboards">Slider</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('gallery')}}">
                        <i class="bx bx-file"></i>
                        <span key="t-dashboards">Gallery</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('city')}}">
                        <i class="bx bx-file"></i>
                        <span key="t-dashboards">Cities</span>
                    </a>
                </li>


                <li>
                    <a href="{{route('category')}}">
                        <i class="fas fa-book"></i>
                        <span key="t-dashboards">
                            Specialities
                        </span>
                    </a>
                </li>

                <li>
                    <a href="{{route('sub_category')}}">
                        <i class="fas fa-book"></i>
                        <span key="t-dashboards">
                            Sub Specialities
                        </span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-user-detail"></i>
                        <span key="t-dashboards">Service</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('service_category')}}" key="t-tui-calendar">Service Category</a></li>
                        <li><a href="{{route('service')}}" key="t-tui-calendar">Service</a></li>

                    </ul>
                </li>
                
                 <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-user-detail"></i>
                        <span key="t-dashboards">Landing Page 2</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                         <li>
                            <a href="{{route('gallery2')}}">
                                <i class="bx bx-file"></i>
                                <span key="t-dashboards">Gallery</span>
                            </a>
                         </li>
                          <li>
                                <a href="{{route('doctor2')}}">
                                    <i class="fas fa-book"></i>
                                    <span key="t-dashboards">Specialities Doctors</span>
                                </a>
                         </li>
                            <li>
                                <a href="{{route('hospitall2')}}">
                                    <i class="fas fa-book"></i>
                                    <span key="t-dashboards">Hospitals</span>
                                </a>
                            </li>
                    </ul>
                </li>


                <li>
                    <a href="{{route('procedure')}}">
                        <i class="bx bx-file"></i>
                        <span key="t-dashboards">Procedure</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('doctor')}}">
                        <i class="fas fa-book"></i>
                        <span key="t-dashboards">Specialities Doctors</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('hospital')}}">
                        <i class="fas fa-book"></i>
                        <span key="t-dashboards">Hospitals</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('blog')}}">
                        <i class="fas fa-blog"></i>
                        <span key="t-dashboards">Blogs</span>
                    </a>
                </li>
                
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-user-detail"></i>
                        <span key="t-dashboards">Testimonial</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('testimonial')}}" key="t-tui-calendar">Testimonial</a></li>
                        <li><a href="{{route('video_testimonial')}}" key="t-tui-calendar">Video Testimonial</a></li>
                        
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-user-detail"></i>
                        <span key="t-dashboards">Enquiry and Request</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('hospital_request')}}" key="t-tui-calendar">Hospital Enquiry</a></li>
                        <li><a href="{{route('doctor_request')}}" key="t-tui-calendar">Doctors Enquiry</a></li>
                        <li><a href="{{route('specialities_request')}}" key="t-tui-calendar">Specialities Enquiry</a></li>
                        <li><a href="{{route('contact_request')}}" key="t-tui-calendar">Conctact Enquiry</a></li>
                    </ul>
                </li>


            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->