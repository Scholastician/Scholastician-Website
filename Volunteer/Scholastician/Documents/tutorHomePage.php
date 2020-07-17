<?php
session_start();
if(!isset($_SESSION['username']) || $_SESSION['student'] == '1')
{
    echo "<script type='text/javascript'>alert('Not Logged In');</script>";
    header("Location: index.php");
    die;
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PHNLKK7');</script>
    <!-- End Google Tag Manager -->
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--====== Title ======-->
    <title>Tutor Home Page</title>
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

    <style>
        #helloStudent {

            margin-bottom: 50px;


        }
        #matched {

            color: #8533ff;
        }
        #unmatched {

            color: #999999;
        }
        .boxes {

            width: 50px;
        }
        #hi {
            padding: 10%;
            margin-right: 10px;
            max-width: 100em;
            position: relative;
            bottom: 15px;


        }
        .background {

            background-color: gainsboro;
            padding-bottom: 2em;
            padding-left: 2em;
            padding-right: 2em;
        }
        #intro {
            font-size: 2em;
            padding: 2em;
        }


        #split {

            margin-top: 5em;
        }
        #call-to-action {

            margin-bottom: 5em;
        }
        .title {

            margin-top: 2em;
        }

    </style>




</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PHNLKK7"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
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
                            <img src="assets/images/logo1.png" width="165" height="40" alt="Logo">
                        </a> <!-- Logo -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">

                                <li class="nav-item"><a class="page-scroll" href="#ft">Find Student</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#helloThree">Process</a></li>
                                <li class="nav-item"><a class="" href="logout.php">Logout</a></li>
                            </ul>
                        </div> <!-- navbar collapse -->
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- navigation -->
</header>
<!--====== HEADER PART ENDS ======-->
<!--====== ABOUT PART START ======-->
<section id="student" class="services-area gray-bg pt-150 pb-130">
    <div class="container">
        <div class="row justify-content-center" id = "helloStudent">
            <div class="col-lg-8">
                <div class="section-title text-center pb-30" id = "positionOne">
                    <?php
                    $link = mysqli_connect("localhost", "nihal", "12345", "account");

                    // Check connection
                    if($link === false){
                        die("ERROR: Could not connect. " . mysqli_connect_error());
                    }
                    else
                    {
                    }
                    $uname = $_SESSION['username'];
                    $getInfo = "SELECT Name FROM userinfo WHERE Username = '$uname'";
                    $query = mysqli_query($link, $getInfo);

                    $row = mysqli_fetch_array($query);
                    $name = $row['Name'];
                    echo "<h2 class=\"title\" > Hello $name </h2>";
                    ?>


                    <!-- NIHAL&PAVAN :::::: can you do php stuff to show the person's status if they are matched or not? you can delete it if you dont want to do that work -->



                    <p ><br>Tutors should register and login here for our matching program. Once you are paired with a student, we will send one email to both of you, so that you can communicate with each other. Please contact us via email or through the contact page on our website if you have any issues during your <span id = "helloTwo">tutoring session.</span> </p>


                </div> <!-- section title -->
            </div>
        </div> <!-- row -->






        <div id = "split">
            <div id = "ft" class = "background text-center">
                <div class="row justify-content-center">
                    <h5 id = "intro">Ready to tutor?</h5>


                </div> <!-- row -->
                <div class="row justify-content-center text-center">

                    <h5 id = "hi" class="col-md-6 col-sm-8">Before matching, if you have any questions over our program, feel free to contact us or look over the details through the icon to the right.</h5>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-service text-center mt-30">
                            <div class="service-icon">
                                <i class="lni-website"></i>
                            </div>
                            <div class="service-content">
                                <h4 class="service-title"><a href="readMoreTutors.html">Read More</a></h4>
                                <p>Want to learn more about registering as a tutor?</p>
                            </div>
                        </div> <!-- single service -->
                    </div>

                </div> <!-- row -->
                <div class="row justify-content-center text-center">

                    <h5 id = "hi" class="col-md-6 col-sm-8">Make sure you are choosing the right classes! Please confirm your classes and elgibility through the icon to the right. </h5>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-service text-center mt-30">
                            <div class="service-icon">
                                <i class="lni-write"></i>
                            </div>
                            <div class="service-content">
                                <h4 class="service-title"><a href="tutorRegistration2.php">Choose Classes</a></h4>
                                <p>Sign up for classes you can teach.</p>
                            </div>
                        </div> <!-- single service -->
                    </div>

                </div> <!-- row -->
                <div class="row justify-content-center text-center">

                    <h5 id = "hi" class="col-md-6 col-sm-8 ">Submit your unofficial AP Score Report so we can better certify you for the AP courses you can tutor. To find your unofficial score report:<a style="color:#754ef9" href="https://apscore.collegeboard.org/scores/view-your-scores" target="_blank">Click Here</a></h5>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-service text-center mt-30">
                            <div class="service-icon">
                                <i class="lni lni-book"></i>
                            </div>
                            <div class="service-content">
                                <h4>Upload Your AP Scores</h4>
                                <form action="insertAP.php" method="POST" enctype="multipart/form-data">
                                    <br>
                                    <input type="file" name="file" required>
                                    <input type="submit" value="Upload AP Scores" name="submit">
                                </form>
                            </div>
                        </div> <!-- single service -->
                    </div>
                </div>
                <div class="row justify-content-center text-center">

                    <h5 id = "hi" class="col-md-6 col-sm-8 ">Grades updated? No Problem! Update your transcript now:</h5>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-service text-center mt-30">
                            <div class="service-icon">
                                <i class="lni-graduation"></i>
                            </div>
                            <div class="service-content">
                                <h4>Upload Your Transcript</h4>
                                <form action="insertTranscript.php" method="POST" enctype="multipart/form-data">
                                    <br>
                                    <input type="file" name="file" required>
                                    <input type="submit" value="Upload Transcript" name="submit">
                                </form>
                            </div>
                        </div> <!-- single service -->
                    </div>



                </div> <!-- row -->
                <div class="row justify-content-center text-center">

                    <h5 id = "hi" class="col-md-6 col-sm-8 "><br> <br>After select and verify all your classes, it's time to find a student. You will be prompted to enter some information to begin the matching process.</h5>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-service text-center mt-80">
                            <div class="service-icon">
                                <i class="lni lni-search"></i>
                            </div>
                            <div class="service-content">
                                <h4 class="service-title"><a href="matchingtutor.php">Find a Student to Tutor</a></h4>
                                <p>You will recieve an email when matched.</p>
                            </div>
                        </div> <!-- single service -->
                    </div>


                </div> <!-- row -->


            </div>

        </div>


























        <!-- now what? -->

        <div id = "split">
            <div  id="helloThree" class = "background text-center">
                <div class="row justify-content-center">
                    <h5 id = "intro">What's next?</h5>


                </div> <!-- row -->
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-service text-center mt-30">
                            <div class="service-icon">
                                <i class="lni lni-timer"></i>
                            </div>
                            <div class="service-content">
                                <h4 class="service-title">Algorithms At Work</h4>
                                <p><br>To find a match, it may take time. Just be patient!</p>
                            </div>
                        </div> <!-- single service -->
                    </div>
                    <h5 id = "hi" class="col-md-6 col-sm-8">Once you start your search for a tutor, that's it! Our computers will be working on pairing you with a student.</h5>

                </div> <!-- row -->
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-service text-center mt-30">
                            <div class="service-icon">
                                <i class="lni lni-envelope"></i>
                            </div>
                            <div class="service-content">
                                <h4 class="service-title">Look Out For an Email</h4>
                                <p>You can be matched again with another student if you would like.</p>
                            </div>
                        </div> <!-- single service -->
                    </div>
                    <h5 id = "hi" class="col-md-6 col-sm-8">Once our computer finds a match, we will send you an email with you and your student's details.</h5>


                </div> <!-- row -->


                <div class="row justify-content-center" >
                    <div class="col-lg-4 col-md-6 col-sm-7">
                        <div class="contact-box text-center mt-30">
                            <div class="contact-icon">
                                <i class="lni lni-bubble"></i>
                            </div>
                            <div class="contact-content">
                                <h6 class="contact-title">Contact Us</h6>
                                <a href="mailto:support@scholastician.org">support@scholastician.org </a>
                            </div>
                        </div> <!-- contact box -->
                    </div>
                    <h5 id = "hi" class="col-md-6 col-sm-8">Once you recieve the email, it is up to you and your student on how you are going to communicate. If there are some delays, please contact us. </h5>

                </div>

            </div>

        </div>
    </div>






</section>
<section id="call-to-action" class="call-to-action pt-125 pb-130 bg_cover" style="background-image: url(assets/images/call-to-action.jpg)" >
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-9">
                <div class="call-action-content text-center">
                    <h2 class="action-title">Thank You</h2>
                    <p>We hope that you found our services helpful, and we wish you a successful journey in what lies ahead!</p>

                </div> <!-- call action content -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>
<!--====== ABOUT PART START ======-->

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