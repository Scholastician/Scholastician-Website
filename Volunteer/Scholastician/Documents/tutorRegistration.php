<!doctype html>
<html lang="en">

<head>
  <script type="text/javascript">
  function checkPasswordSame(form) {
            password1 = form.password.value;
            password2 = form.cpassword.value;

            // If password not entered

            // If Not same return False.
            if (password1 != password2) {
                alert ("\nPassword did not match: Please try again...")
                return false;
            }
            return true;


        }

  </script>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--====== Title ======-->
    <title>Tutor Registration</title>
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
                                <img src="assets/images/logo.png" alt="Logo">
                            </a> <!-- Logo -->
                            <!-- navbar collapse -->
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navigation -->
    </header>
    <section id="contact" class="contact-area pt-125 pb-130 white-bg">
        <div class="container">
            <div class="row justify-content-center mt-50">
                <div class="col-lg-8">
                    <div class="section-title text-center pb-25">
                        <h2 class="title">Tutor Registration</h2>
                        <p>Fill out the form below to continue registration.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form pt-30">
                        <form id="contact-form" action="insertTutor.php" onsubmit="return checkPasswordSame(this)">
                          <div class="single-form">
                            <h5 class="about-title">Username</h5>
                              <input type="text" name="username" placeholder="Username" required>
                          </div>
                          <div class="single-form">
                            <h5 class="about-title">Password</h5>
                              <input type="password" id = "password" name="password" placeholder="" required>
                          </div>
                          <div class="single-form">
                            <h5 class="about-title">Confirm Password</h5>
                              <input type="password" id = "cpassword" name="cpassword" placeholder="" required>
                          </div>
                            <div class="single-form">
                              <h5 class="about-title">Name</h5>
                                <input type="text" name="name" placeholder="Name" required>
                            </div> <!-- single form -->
                            <div class="single-form">
                              <h5 class="about-title">Email Address</h5>
                                <input type="email" name="email" placeholder="Email" required>
                            </div> <!-- single form -->
                            <div class="single-form">
                              <h5 class="about-title">Mobile Phone Number</h5>
                                <input type="number" name="phone_number" placeholder="Phone Number" min = "0" max = "9999999999" required>
                            </div>

                            <div class="single-form">
                              <h5 class="about-title">Grade Level</h5>
                                <input type="number" name="grade" placeholder="Grade Level" min = "0" max = "12" required>
                            </div>
                            <div class="single-form">
                              <h5 class="about-title">SAT Score(If Applicable)</h5>
                                <input type="number" name="SAT" placeholder="SAT Score" min = "0" max = "1600">
                            </div>
                            <div class="single-form">
                              <h5 class="about-title">ACT Score(If Applicable)</h5>
                                <input type="number" name="ACT" placeholder="ACT Score" min = "0" max = "36">
                            </div>
                            <p class="form-message">Please ensure all content is filled and accurate before submitting</p>
                            <div class="single-form">
                                <button class="main-btn" type="submit">Register</button>
                            </div> <!-- single form -->
                        </form>
                    </div> <!-- contact form -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <!--====== FOOTER PART START ======-->
    <footer id="footer" class="footer-area">
        <div class="footer-widget pt-130 pb-130">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="footer-content text-center">
                            <a href="index.php">
                                <img src="assets/images/logo.png" alt="Logo" style="display: inline; height:30%; width: inherit;">
                            </a>
                            <p class="mt-">Free Education for a Better Tommorow</p>
                            <ul>
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-pinterest"></i></a></li>
                                <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
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
                            <p>Copyright © 2022. Template Crafted by <a href="https://uideck.com" rel="nofollow">UIdeck</a></p>
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
