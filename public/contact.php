<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="zxx">
<!--<![endif]-->

<script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script>
    $(function () {
        $('#header').load("header.php");
    })
    $(function () {
        $('#footer').load("footer.php");
    })
</script>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Insuron - Insurance Agency HTML5 Template</title>
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />
    <!--Bootstrap Stylesheet-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <!--Slick Slider-->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!--Font Awesome Stylesheet-->
    <link rel="stylesheet" type="text/css" href="css/fontawesome.all.min.css">
    <link rel="stylesheet" type="text/css" href="css/pe-icon-7-stroke.css">
    <link rel="stylesheet" type="text/css" href="css/helper.css">
    <!--Animate Stylesheet-->
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <!--Venobox Stylesheet-->
    <link rel="stylesheet" type="text/css" href="css/venobox.css">
    <!--Owl carosul-->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
    <!--Main Stylesheet-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--Responsive Stylesheet-->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
</head>

<body>
    <!--Start Preloader-->
    <div class="site-preloader">
        <div class="spinner"><img src="img/loader.gif" alt=""></div>
    </div>
    <!--End Preloader-->

    <!-- Header Area -->
    <div id="header"></div>
    <!-- Header Area -->

    <!-- BreadCrumb Area Start -->
    <section id="Mediflexbreadcrumb" class="Mediflexbreadcrumb">
        <div class="bcoverlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="Content">
                        <h2>CONTACTO</h2>
                        <div class="links">
                            <ul>
                                <li><a href="index.php">INICIO</a></li>
                                <li><span>/</span></li>
                                <li><a class="active" href="contact.php">CONTACTO</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--  BreadCrumb Area Start  -->
    <!--Start Contact Wrap-->
    <div class="contact-wrap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="sectionHeader">
                        <h2> Contact Us</h2><span class="sectionSeparator"></span>
                        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            the book type of spaciman and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center"></div>
            <div class="row address">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <!--Start Contact Form-->
                            <div class="contact-form">
                                <form action="contact.html" id="contact_form_submit" method="POST">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group form-element"><input type="text"
                                                    class="form-control input-field" id="name" name="name"
                                                    placeholder="First Name"></div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group form-element"><input type="text"
                                                    class="form-control input-field" id="lastName" name="lastName"
                                                    placeholder="Last Name"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group form-element"><input type="email"
                                                    class="form-control input-field" id="email" name="email"
                                                    placeholder="Your Email"></div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group form-element"><input type="text"
                                                    class="form-control input-field" id="phone" name="phone"
                                                    placeholder="Your Phone"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group form-element"><input type="text"
                                                    class="form-control input-field" id="subject" name="subject"
                                                    placeholder="Your Subject"></div>
                                            <div class="form-group form-element"><textarea id="message" cols="30"
                                                    rows="10" class="form-control" name="message"
                                                    placeholder="Write Your Message"></textarea></div>
                                        </div>
                                    </div>
                                    <div class="contact-frm-btn"><button type="submit" class="mr_btn_fill">SUBMIT
                                            NOW</button></div>
                                </form>
                            </div>
                            <!--End Contact Form-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="media">
                                <div class="left align-self-center mr-3"><i class="pe-7s-map-marker"></i></div>
                                <div class="media-body">
                                    <h4>Find Us</h4>
                                    <p>304 Mebanewood Dr, Huntingdon, TN, 38344</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="media">
                                <div class="left align-self-center mr-3"><i class="pe-7s-call"></i></div>
                                <div class="media-body">
                                    <h4>Call Us</h4>
                                    <p>+00 123 456 789</p>
                                    <p>+00 321 852 963</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="media">
                                <div class="left align-self-center mr-3"><i class="pe-7s-mail"></i></div>
                                <div class="media-body">
                                    <h4>Mail Us</h4>
                                    <p>info@domain.com</p>
                                    <p>example@domain.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Row-->
        </div>
        <!--End Container-->
    </div>
    <!--End Contact Wrap-->
    <!-- google map area start -->
    <div class="map-wrapper">
        <div id="map"></div>
    </div><!-- google map area end -->

    <!-- Footer Area -->
    <div id="footer"></div>
    <!-- Footer Area -->

    <!--Start ClickToTop-->
    <div class="totop"><a href="#top">
            <p><i class="fas fa-angle-up"></i></p>
        </a></div>
    <!--End ClickToTop-->
    <!--jQuery JS-->
    <script src="js/jquery.min.js"></script>
    <!--Bootstrap JS-->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.js"></script><!-- Way Point js -->
    <script src="js/waypoints.min.js"></script><!-- google map api -->
    <script src="http://ditu.google.cn/maps/api/js?key=AIzaSyBqFuLx8S7A8eianoUhkYMeXpGPvsXp1NM&callback=initMap" async
        defer></script><!-- google map activate js -->
    <script src="js/map-activate.js"></script><!-- Owl carosul js -->
    <script src="js/owl.carousel.min.js"></script><!-- Venobox JS-->
    <script src="js/venobox.min.js"></script>
    <!--Main-->
    <script src="js/main.js"></script>
</body>

</html>