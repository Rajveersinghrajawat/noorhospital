<html <?php language_attributes(); ?><?php echo blocksy_html_attr() ?>>
<head>
    <!-- Required meta tags -->

 	<?php do_action('blocksy:head:start') ?>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, viewport-fit=cover">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <!-- Link of CSS files -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://noormedicare.com/doctor/public/frontend/assets/css/flaticon.css">
    <link rel="stylesheet" href="https://noormedicare.com/doctor/public/frontend/assets/css/remixicon.css">
    <link rel="stylesheet" href="https://noormedicare.com/doctor/public/frontend/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://noormedicare.com/doctor/public/frontend/assets/css/odometer.min.css">
    <link rel="stylesheet" href="https://noormedicare.com/doctor/public/frontend/assets/css/fancybox.css">
    <link rel="stylesheet" href="https://noormedicare.com/doctor/public/frontend/assets/css/aos.css">
    <link rel="stylesheet" href="https://noormedicare.com/doctor/public/frontend/assets/css/style.css">
    <link rel="stylesheet" href="https://noormedicare.com/doctor/public/frontend/assets/css/responsive.css">
    <link rel="stylesheet" href="https://noormedicare.com/doctor/public/frontend/assets/css/dark-theme.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="icon" type="image/png" href="https://noormedicare.com/doctor/public/frontend/assets/img/Logo_1/doctor-svgrepo-com.svg">
    <?php wp_head(); ?>
	<?php do_action('blocksy:head:end') ?>
<style>
    .error {
        color: red !important;
        width: 100%;
        text-transform: lowercase;

    }

    .error::first-letter {
        text-transform: uppercase;
    }
    .header-wrap {
    position: sticky;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 99;
    -webkit-transition: 0.4s;
    transition: 0.4s;
}
    @media only screen and (max-width: 991px){
.mobile-menu {
    display: inline-block;
    position: absolute;
    right: 42px;
    top: -25px;
}
}
</style></head>



<?php
	ob_start();
	blocksy_output_header();
	$global_header = ob_get_clean();
?>

<body <?php body_class(); ?> <?php echo blocksy_body_attr() ?>>

<a class="skip-link show-on-focus" href="<?php echo apply_filters('blocksy:head:skip-to-content:href', '#main') ?>">
	<?php echo __('Skip to content', 'blocksy'); ?>
</a>

<?php
	if (function_exists('wp_body_open')) {
		wp_body_open();
	}
?>

<div id="main-container">
<div class="page-wrapper">
        <!-- Header Section Start -->   
        <header class="header-wrap style1">
            <div class="header-top px-3">             
                    <div class="row align-items-center">
                        <div class="col-lg-9">
                            <div class="header-top-left">
                                <ul class="contact-info list-style">
                                    <li>
                                        <span><i class="flaticon-email-1"></i></span>
                                        <p> <a href="mailto:support@noormedicare.com" target="" rel="">support@noormedicare.com</a></p>
                                    </li>
                                    <li>
                                        <span><i class="ri-phone-fill"></i></span>
                                        <a href="tel:9555197411">9555197411</a>
                                    </li>
                                    <li>
                                        <span><i class="ri-map-pin-fill"></i></span>
                                        <p>F-89, Vishwakarma colony Pul Pehladpur, New Delhi - 110044 India</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="header-top-right">
                                <ul class="social-profile list-style style1">
                                    <li>
                                        <a href="https://www.facebook.com/">
                                            <i class="ri-facebook-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/">
                                            <i class="ri-twitter-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/">
                                            <i class="ri-linkedin-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="asd">
                                            <i class="ri-pinterest-line"></i>

                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="header-bottom px-2">
                
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="https://noormedicare.com/doctor">
                        <img class="logo-light" src="https://noormedicare.com/doctor/public/frontend/assets/img/Logo_2/Noor.svg" style=" width: 100%; height: 50px; " alt="logo">
                        <img class="logo-dark" src="https://noormedicare.com/doctor/public/frontend/assets/img/Logo_2/Noor.svg" style=" width: 100%; height: 80px; " alt="logo">
                    </a>
                    <div class="collapse navbar-collapse main-menu-wrap" id="navbarSupportedContent">
                        <div class="menu-close d-lg-none">
                            <a href="javascript:void(0)">
                                <i class="ri-close-line"></i></a>
                        </div>
                        <ul class="navbar-nav ">
                            <li class="nav-item">
                                <a href="https://noormedicare.com/doctor" class="nav-link active">
                                    HOME
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://noormedicare.com/doctor/about-us" class="nav-link">
                                    ABOUT
                                </a>
                            </li>
                            <li class="nav-item"><span class="menu-expand"><i class="ri-arrow-down-s-line"></i></span>
                                <a href="#" class="nav-link">
                                    SPECIALITIES
                                    <i class="ri-arrow-down-s-line"></i>
                                </a>
                                <ul class="dropdown-menu" style="display: none;">
                                                                        <li class="nav-item">
                                        <a href="https://noormedicare.com/doctor/Speciality/neurology-b" class="nav-link">
                                            Neurology &amp; brain surgery
                                            <!-- <i class="ri-arrow-down-s-line"></i> -->
                                        </a>

                                        <ul>
                                                                                    </ul>
                                    </li>
                                                                        <li class="nav-item">
                                        <a href="https://noormedicare.com/doctor/Speciality/orthopaedic" class="nav-link">
                                            Orthopaedic
                                            <!-- <i class="ri-arrow-down-s-line"></i> -->
                                        </a>

                                        <ul>
                                                                                        <li class="nav-item">
                                                <a href="https://noormedicare.com/doctor/sub_speciality/as" class="nav-link">as</a>
                                            </li>
                                                                                    </ul>
                                    </li>
                                                                        <li class="nav-item">
                                        <a href="https://noormedicare.com/doctor/Speciality/cardiology" class="nav-link">
                                            Cardiology
                                            <!-- <i class="ri-arrow-down-s-line"></i> -->
                                        </a>

                                        <ul>
                                                                                    </ul>
                                    </li>
                                                                    </ul>
                            </li>
                            <li class="nav-item"><span class="menu-expand"><i class="ri-arrow-down-s-line"></i></span>
                                <a href="#" class="nav-link">
                                    HOSPITALS
                                    <i class="ri-arrow-down-s-line"></i>
                                </a>
                                <ul class="dropdown-menu" style="display: none;">
                                                                        <li class="nav-item">
                                        <a href="https://noormedicare.com/doctor/hospital/institute-of-medical-sciences" class="nav-link">Institute Of Medical Sciences</a>
                                    </li>
                                                                        <li class="nav-item">
                                        <a href="https://noormedicare.com/doctor/hospital/artemis-hospital" class="nav-link">Artemis Hospital</a>
                                    </li>
                                                                        <li class="nav-item">
                                        <a href="https://noormedicare.com/doctor/hospital/fortis-fmri" class="nav-link">Fortis FMRI</a>
                                    </li>
                                                                        <li class="nav-item">
                                        <a href="https://noormedicare.com/doctor/hospital/medanta" class="nav-link">Medanta</a>
                                    </li>
                                                                    </ul>
                            </li>
                            <li class="nav-item"><span class="menu-expand"><i class="ri-arrow-down-s-line"></i></span>
                                <a href="#" class="nav-link">
                                    OUR SPECIALISTS
                                    <i class="ri-arrow-down-s-line"></i>
                                </a>
                                <ul class="dropdown-menu" style="display: none;">
                                    
                                    <li class="nav-item">
                                        <a href="https://noormedicare.com/doctor/doctor/raju" class="nav-link">
                                            Raju, Cardiology
                                        </a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="https://noormedicare.com/doctor/doctor/naresh" class="nav-link">
                                            Naresh, Orthopaedic
                                        </a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="https://noormedicare.com/doctor/doctor/dr-arun-prasad" class="nav-link">
                                            Dr. Arun Prasad, Orthopaedic
                                        </a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="https://noormedicare.com/doctor/doctor/naresh-trehan" class="nav-link">
                                            Naresh Trehan, Cardiology
                                        </a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <!-- <li class="nav-item">
                                        <a href="contact.php" class="nav-link">GALLERY</a>
                                    </li> -->
                            <li class="nav-item">
                                <a href="https://noormedicare.com/doctor/gallery" class="nav-link">GALLERY</a>
                            </li>
                              <li class="nav-item">
                                <a href="https://noormedicare.com/doctor/blog/" class="nav-link">BLOG</a>
                            </li>     
                            <li class="nav-item">
                                <a href="https://noormedicare.com/doctor/contact-us" class="nav-link">CONTACT US</a>
                            </li>

                            <li class="nav-item d-lg-none">
                                <a href="https://noormedicare.com/doctor/appointment" class="nav-link btn style1">Book Appointment</a>
                            </li>
                        </ul>
                        <div class="other-options md-none">
                            <div class="option-item">
                                <a href="https://noormedicare.com/doctor/appointment" class="btn style1">Book Appointment</a>
                            </div>
                        </div>
                    </div>
                
                  <div class="search-area">
                    <input type="search" placeholder="Search Here..">
                    <button type="submit"><i class="ri-search-line"></i></button>
                </div>
                <div class="mobile-bar-wrap">
                    <!-- <button class="searchbtn d-lg-none"><i class="ri-search-line"></i></button> -->
                    <div class="mobile-menu d-lg-none">
                        <a href="javascript:void(0)"><i class="ri-menu-line"></i></a>
                    </div>
                </div>
                </nav>
            </div>
      
</header></div>
	<main <?php echo blocksy_main_attr() ?>>

		<?php
			do_action('blocksy:content:top');
			blocksy_before_current_template();
		?>
