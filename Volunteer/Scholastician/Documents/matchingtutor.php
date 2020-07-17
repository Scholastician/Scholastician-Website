<!doctype html>
<?php
session_start();
if(!isset($_SESSION['username']) || $_SESSION['student'] == '1')
{
  echo "<script type='text/javascript'>alert('Not Logged In');</script>";
  header("Location: index.php");
  die;
}
 ?>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-169012141-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-169012141-1');
    </script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PHNLKK7');</script>
    <!-- End Google Tag Manager -->
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
    <title>Tutor Matching</title>
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
    <style media="screen">
    .select-css {
      width: 100%;
  height: 55px;
  border-radius: 5px;
  border: 1px solid #ddd;
  padding: 0 25px;
  font-size: 16px;
  color: #8a8fa3;
    }
    .select-css::-ms-expand {
      display: none;
    }
    .select-css:hover {
      border-color: #888;
    }
    .select-css:focus {
      border-color: #aaa;
      box-shadow: 0 0 1px 3px rgba(59, 153, 252, .7);
      box-shadow: 0 0 0 3px -moz-mac-focusring;
      color: #222;
      outline: none;
    }
    .select-css option {
    font-weight:normal;
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
                        <h2 class="title">Match with a student</h2>
                        <p></p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form pt-30">
                      <?php if (isset($name_error)) {

                        echo "<script type='text/javascript'>alert('username taken');</script>";
                      } ?>
                        <form id="contact-form" action="insertMatchingTutor.php" onsubmit="">


                          <div class="single-form">
                            <h5 class="about-title">What times best suit you?</h5>
                            <p>We cannot guarantee that you have a student to tutor exactly these times.</p>
                              <textarea name="times" maxlength="200"></textarea>
                          </div>

                            <br>

                                <button class="main-btn" type="submit">Submit</button>
                            </div> <!-- single form -->
                        </form>
                    </div> <!-- contact form -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
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
    <script src"assets/js/passwordValidation.js"></script>
    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>
</body>
</html>
