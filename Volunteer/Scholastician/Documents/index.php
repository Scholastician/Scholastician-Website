<?php
  session_start();
   if (isset($_SESSION['username']))
   {
     if($_SESSION['student'] == '1')
     {
        header("Location: studentHomePage.php");
        die;
     }
     header("Location: tutorHomePage.php");

   }
 ?>
<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Scholastician</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.jpg" type="image/jpg">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="assets/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/style.css">


</head>

<body>

    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader_34">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER ENDS START ======-->

    <!--====== HEADER PART START ======-->

    <header id="home" class="header-area">
        <div class="navigation fixed-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.php">
                                <img src="assets/images/logo1.png" alt="Logo">
                            </a> <!-- Logo -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active"><a class="page-scroll" href="#home">Home</a></li>
                                    <li class="nav-item"><a class="page-scroll" href="#about">About</a></li>
                                    <li class="nav-item"><a class="page-scroll" href="#student">Students</a></li>
                                    <li class="nav-item"><a class="page-scroll" href="#tutor">Tutors</a></li>
                                    <li class="nav-item"><a class="page-scroll" href="#contact">Contact</a></li>
                                    <li class="nav-item"><a class="page-scroll" href="loginpage.php">Login</a></li>
                                </ul>
                            </div> <!-- navbar collapse -->
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navigation -->

        <div id="parallax" class="header-content d-flex align-items-center">
            <div class="header-shape shape-one layer" data-depth="0.10">
                <img src="assets/images/banner/shape/shape-1.png" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-tow layer" data-depth="0.30">
                <img src="assets/images/banner/shape/shape-2.png" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-three layer" data-depth="0.40">
                <img src="assets/images/banner/shape/shape-3.png" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-fore layer" data-depth="0.60">
                <img src="assets/images/banner/shape/shape-2.png" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-five layer" data-depth="0.20">
                <img src="assets/images/banner/shape/shape-1.png" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-six layer" data-depth="0.15">
                <img src="assets/images/banner/shape/shape-4.png" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-seven layer" data-depth="0.50">
                <img src="assets/images/banner/shape/shape-5.png" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-eight layer" data-depth="0.40">
                <img src="assets/images/banner/shape/shape-3.png" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-nine layer" data-depth="0.20">
                <img src="assets/images/banner/shape/shape-6.png" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-ten layer" data-depth="0.30">
                <img src="assets/images/banner/shape/shape-3.png" alt="Shape">
            </div> <!-- header shape -->
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-6">
                        <div class="header-content-right">
                            <h4 class="sub-title">Welcome to</h4>
                            <h1 class="title">Scholastician</h1>
                            <p>Do you need help in your high school courses? We pair students to certified tutors for free!</p>
                            <a class="main-btn page-scroll" href="#student">Register Now</a>
                        </div> <!-- header content right -->
                    </div>
                    <div class="col-lg-6 offset-xl-1">
                        <div class="header-image d-none d-lg-block">
                            <!-- <img src="assets/images/banner/hero.png" alt="hero"> -->
                        </div> <!-- header image -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div class="header-social">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header-social-icon">
                                <ul>
                                  <li><a href="https://www.facebook.com/Scholastician-111874543877312" target="_blank"><i class="lni-facebook-filled"></i></a></li>
                                  <li><a href="https://www.instagram.com/v_scholastician/?hl=en" target="_blank"><i class="lni-instagram-filled"></i></a></li>
                                  <li><a href="https://twitter.com/v_scholastician" target="_blank"><i class="lni-twitter-original"></i></a></li>
                                  <li><a href="https://www.linkedin.com/company/65567603" target="_blank"><i class="lni-linkedin-original"></i></a></li>
                                </ul>
                            </div> <!-- header social -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- header social -->
        </div> <!-- header content -->
    </header>

    <!--====== HEADER PART ENDS ======-->

    <!--====== ABOUT PART START ======-->
    <!--====== ABOUT PART START ======-->

        <section id="about" class="about-area pt-95 pb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title text-center">
                            <h2 class="title">About Us</h2>
                            <p>We are truly passionate in fighting the global inequality in education, which has been especially underscored by the lack of opportunities as a result of financial and social issues during COVID-19. That’s why we developed Scholastician, a platform which provides equal access to education for all people, no matter one’s financial background. It has become ever so important to give back to the community and because education has been so negatively affected by our current crisis, we felt that developing a virtual tutoring service in this time of uncertainty was the best way to support the community.
</p>
                        </div> <!-- section title -->
                    </div>
                </div> <!-- row -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-content mt-50">
                            <h5 class="about-title">We can help in many courses!</h5>
                            <p>We are currently offering assistance in numerous on-level, PAP, & AP courses. We will match students to certified tutors for the selected courses. Additionally, we offer tutoring for the SAT and ACT.</p>
                            <ul class="clearfix">
                                <li>
                                    <div class=" d-flex align-items-center">
                                        <div class="info-text">
                                            <p>•Algebra 1 & 2</p>
                                            <p>•Geometry</p>
                                            <p>•Pre-Calculus</p>
                                            <p>•AP Calculus AB & BC</p>
                                            <br>
                                            <p>•Biology & AP Biology</p>
                                            <p>•Chemistry & AP Chemistry</p>
                                            <p>•Physics 1, 2, C</p>
                                            <p>•Environmental Science</p>
                                        </div>
                                    </div> <!-- single info -->
                                </li>


                                <li>
                                    <div class=" d-flex align-items-center">
                                        <div class="info-icon">
                                          <p>•AP Human Geography</p>
                                          <p>•AP World History</p>
                                          <p>•AP US History</p>
                                          <p>•AP Government & Economics </p>
                                          <br>
                                          <p>•English 1-4</p>
                                          <p>•SAT English</p>
                                          <p>•AP Language and Composition</p>
                                          <p>•AP Literature & Composition</p>
                                        </div>
                                        <div class="info-text">

                                        </div>
                                    </div> <!-- single info -->
                                </li>

                            </ul>
                        </div> <!-- about content -->
                    </div>
                    <div class="col-xl-5 offset-xl-1 col-lg-6">
                        <div class="about-skills pt-25">
                            <div class="skill-item mt-25">
                                <div class="skill-header">
                                    <h6 class="skill-title">Average Tutor SAT Score</h6>
                                    <div class="skill-percentage">
                                        <div class="count-box counted">
                                            <span class="counter">1550</span>
                                        </div>

                                    </div>
                                </div>
                                <div class="skill-bar">
                                    <div class="bar-inner">
                                        <div class="bar progress-line" data-width="97"></div>
                                    </div>
                                </div>
                            </div> <!-- skill item -->
                            <div class="skill-item mt-25">
                                <div class="skill-header">
                                    <h6 class="skill-title">Average Tutor ACT Score</h6>
                                    <div class="skill-percentage">
                                        <div class="count-box counted">
                                            <span class="counter">35</span>
                                        </div>

                                    </div>
                                </div>
                                <div class="skill-bar">
                                    <div class="bar-inner">
                                        <div class="bar progress-line" data-width="97"></div>
                                    </div>
                                </div>
                            </div> <!-- skill item -->
                            <div class="skill-item mt-25">
                                <div class="skill-header">
                                    <h6 class="skill-title">Average Tutor AP Score</h6>
                                    <div class="skill-percentage">
                                        <div class="count-box counted">
                                            <span class="counter">4.7</span>
                                        </div>

                                    </div>
                                </div>
                                <div class="skill-bar">
                                    <div class="bar-inner">
                                        <div class="bar progress-line" data-width="94"></div>
                                    </div>
                                </div>
                            </div> <!-- skill item -->
                            <div class="skill-item mt-25">
                                <div class="skill-header">
                                    <h6 class="skill-title">Average Tutor GPA</h6>
                                    <div class="skill-percentage">
                                        <div class="count-box counted">
                                            <span class="counter">3.97</span>
                                        </div>

                                    </div>
                                </div>
                                <div class="skill-bar">
                                    <div class="bar-inner">
                                        <div class="bar progress-line" data-width="99"></div>
                                    </div>
                                </div>
                            </div> <!-- skill item -->
                        </div> <!-- about skills -->
                    </div>
                </div>
                <!-- row -->
                        </div> <!-- section title -->
                    </div>
                </div>
            </div> <!-- container -->
        </section>
        <section id="call-to-action" class="call-to-action pt-125 pb-130 bg_cover" style="background-image: url(assets/images/call-to-action.jpg)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-9">
                        <div class="call-action-content text-center">
                            <h2 class="action-title">Read More</h2>
                            <p>Want to learn more about how Scholastician works? Click below.</p>
                            <ul>
                                <li><a class="main-btn custom" href="readMoreStudents.html">Students</a></li>
                                <li><a class="main-btn custom-2" href="readMoreTutors.html">Tutors</a></li>
                            </ul>
                        </div> <!-- call action content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </section>

        <!--====== ABOUT PART ENDS ======-->
    <!--====== STUDENT PART START ======-->

    <section id="student" class="services-area gray-bg pt-100 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center pb-30">
                        <h2 class="title">Students</h2>
                        <p>Students should register and login here for our matching program. Once you are paired with a tutor, we will send one email to both of you, so that you can communicate with each other. Please contact us via email if you have any issues during your tutoring session. </p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-service text-center mt-30">
                        <div class="service-icon">
                            <i class="lni-pencil-alt"></i>
                        </div>
                        <div class="service-content">
                            <h4 class="service-title"><a href="userRegistration.php">Register as a Student</a></h4>
                            <p>Want to register as a student to get matched with a tutor? Click here.</p>
                        </div>
                    </div> <!-- single service -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-service text-center mt-30">
                        <div class="service-icon">
                            <i class="lni-lock"></i>
                        </div>
                        <div class="service-content">
                            <h4 class="service-title"><a href="loginpage.php">Login</a></h4>
                            <p>Already have an account? Login here.</p>
                        </div>
                    </div> <!-- single service -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-service text-center mt-30">
                        <div class="service-icon">
                            <i class="lni-website"></i>
                        </div>
                        <div class="service-content">
                            <h4 class="service-title"><a href="readMoreStudents.html">Read More</a></h4>
                            <p>Want to learn more about registering as a student? Click here. </p>
                        </div>
                    </div> <!-- single service -->
                </div>



            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== STUDENT PART ENDS ======-->
    <!--====== TUTOR PART START ======-->

    <section id="tutor" class="services-area gray-bg pt-30 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center pb-30">
                        <h2 class="title">Tutors</h2>
                        <p>Tutors should register and login here for our matching program. Once your credentials are checked and you are paired with a student, we will send one email to both of you, so that you can communicate with each other. If you need volunteer hours, please request them from the student. Please contact us via email if you have any issues during your tutoring session. </p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-service text-center mt-30">
                        <div class="service-icon">
                            <i class="lni-pencil-alt"></i>
                        </div>
                        <div class="service-content">
                            <h4 class="service-title"><a href="tutorRegistration.php">Register as a Tutor</a></h4>
                            <p>Want to register as a tutor to get matched with a student? Click here.</p>
                        </div>
                    </div> <!-- single service -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-service text-center mt-30">
                        <div class="service-icon">
                            <i class="lni-lock"></i>
                        </div>
                        <div class="service-content">
                            <h4 class="service-title"><a href="loginpage.php">Login</a></h4>
                            <p>Already have an account? Login here.</p>
                        </div>
                    </div> <!-- single service -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-service text-center mt-30">
                        <div class="service-icon">
                            <i class="lni-website"></i>
                        </div>
                        <div class="service-content">
                            <h4 class="service-title"><a href="readMoreTutors.html">Read More</a></h4>
                            <p>Want to learn more about registering as a tutor? Click here.</p>
                        </div>
                    </div> <!-- single service -->
                </div>

            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== TUTOR PART ENDS ======-->

    <!--====== CALL TO ACTION PART START ======-->



    <!--====== CALL TO ACTION PART ENDS ======-->

    <!--====== WORK PART START ======-->


    <!--====== CONTACT PART START ======-->

    <section id="contact" class="contact-area pt-100 pb-130 white-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center pb-25">
                        <h2 class="title">Contact Us</h2>
                        <p>If you have any questions or had issues with one of your sessions, please email us and we will get back to you as soon as possible.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-7">
                    <div class="contact-box text-center mt-30">
                        <div class="contact-icon">
                            <i class="lni-laptop"></i>
                        </div>
                        <div class="contact-content">
                            <h6 class="contact-title">Web Developers</h6>
                            <p><a href="https://www.linkedin.com/in/nihal-bhatnagar-5361901a2/" target="_blank">Nihal Bhatnagar</a>, <a href="https://www.linkedin.com/in/alluri-pavan/" target="_blank">Pavan Alluri</a>,
                                <a href="https://www.linkedin.com/in/pranay-shah/" target="_blank"> Pranay Shah</a>, <a href="https://www.linkedin.com/in/abhinav-bichal-64687a1a8/" target="_blank">Abhinav Bichal</a>, & <a href="https://www.linkedin.com/in/yatin-pokle-225b5a1a0/" target="_blank"> Yatin Pokle</a></p>
                        </div>
                    </div> <!-- contact box -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-7">
                    <div class="contact-box text-center mt-30">
                        <div class="contact-icon">
                            <i class="lni-map-marker"></i>
                        </div>
                        <div class="contact-content mb-55">
                            <h6 class="contact-title">Location</h6>
                            <p>Plano, Texas</p>


                        </div>
                    </div> <!-- contact box -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-7">
                    <div class="contact-box text-center mt-30">
                        <div class="contact-icon">
                            <i class="lni-envelope"></i>
                        </div>
                        <div class="contact-content mb-58">
                            <h6 class="contact-title">Email</h6>
                            <a href="mailto:support@scholastician.org">support@scholastician.org </a>
                        </div>
                    </div> <!-- contact box -->
                </div>
            </div> <!-- row -->
           <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CONTACT PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    <footer id="footer" class="footer-area">
        <div class="footer-widget pt-40 pb-40">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="footer-content text-center">
                            <a href="index.php" style = "color: white; font-size: 30px; ">
                                SCHOLASTICIAN
                            </a>
                            <p class="mt-">Bridging the Gap in Educational Inequality</p>
                            <ul>
                                <li><a href="https://www.facebook.com/Scholastician-111874543877312" target="_blank"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="https://www.instagram.com/v_scholastician/?hl=en" target="_blank"><i class="lni-instagram-filled"></i></a></li>
                                <li><a href="https://twitter.com/v_scholastician" target="_blank"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/65567603" target="_blank"><i class="lni-linkedin-original"></i></a></li>
                            </ul>
                        </div> <!-- footer content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer widget -->
        <div class="footer-copyright pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text text-center pt-20">
                            <p>Copyright © Scholastician 2020</p>
                        </div> <!-- copyright text -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer widget -->
    </footer>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->







    <!--====== jquery js ======-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Parallax js ======-->
    <script src="assets/js/parallax.min.js"></script>

    <!--====== Counter Up js ======-->
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>


    <!--====== Appear js ======-->
    <script src="assets/js/jquery.appear.min.js"></script>

    <!--====== Scrolling js ======-->
    <script src="assets/js/scrolling-nav.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>


    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>

</body>

</html>
