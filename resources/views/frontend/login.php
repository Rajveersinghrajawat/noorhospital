<?php include('header.php'); ?>
            <!-- Content Wrapper Start -->
            <div class="content-wrapper">

                <!-- Breadcrumb Start -->
                <div class="breadcrumb-wrap bg-f br-1">
                    <div class="container">
                        <div class="breadcrumb-title">
                            <h2>Register</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li><a href="index-2.html">Home </a></li>
                                <li>Register</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Breadcrumb End -->

                <!-- Account Section start -->
                <section class="Login-wrap pt-100 pb-75">
                    <div class="container">
                        <div class="row gx-5">
                            <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                                <div class="login-form-wrap">
                                    <div class="login-header">
                                        <h3>Login</h3>
                                    </div>
                                    <form class="login-form" action="#">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input id="text" name="fname" type="text" placeholder="Username Or Email Address" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input id="pwd" name="pwd" placeholder="Password" type="password" >
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                <div class="checkbox style3">
                                                    <input type="checkbox" id="test_1">
                                                    <label for="test_1">
                                                        Remember Me</a>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-end mb-20">
                                                <a href="recover-password.html" class="link style1">Forgot Password?</a>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <button class="btn style1 w-100 d-block">
                                                        Login Now
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <p class="mb-0">Don't have an Account? <a class="link style1" href="register.html">Create One</a></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </section>
                <!-- Account Section end -->

            </div>
            <!-- Content wrapper end -->

    <?php include('footer.php'); ?>