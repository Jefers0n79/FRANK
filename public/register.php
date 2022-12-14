<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="zxx">
<!--<![endif]-->

<!-- Aquí se obtienen los segmentos de codigo del header y el footer -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script>
    $(function () {
        $('#header').load("header.html");
    })
    $(function () {
        $('#footer').load("footer.html");
    })
</script>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Registro</title>
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
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
    <!--End Preloader-->

    <!-- Header Area -->
    <div id="header"></div>
    <!-- Header Area -->

    <!-- BreadCrumb Area Start -->
    <section id="Mediflexbreadcrumb" class="Mediflexbreadcrumb extraPaddimg">
        <div class="bcoverlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="Content">
                        <h2>REgistro</h2>
                        <div class="links">
                            <ul>
                                <li><a href="index.html">Inicio</a></li>
                                <li><span>/</span></li>
                                <li><a class="active" href="register.html">Registro</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--  BreadCrumb Area Start  -->
    <!-- SignUP Area Start -->
    <section class="logRegForm">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-10">
                    <div class="contact_form_wrappre2">
                        <div class="row justify-content-center">
                            <div class="col-lg-9">
                                <div class="sectionHeader">
                                    <h2>Register</h2>
                                </div>
                            </div>
                        </div>
                        <form action="add_banner.html">
                            <div class="inputArea">
                                <div class="form-row">
                                    <div class="col">
                                        <div class="input-group"><input type="text" class="form-control"
                                                placeholder="Enter username" aria-describedby="username" required>
                                            <div class="input-group-prepend"><span class="input-group-text"
                                                    id="username"><i class="fas fa-user"></i></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="input-group"><input type="email" class="form-control"
                                                placeholder="Enter Email Address" aria-describedby="Site" required>
                                            <div class="input-group-prepend"><span class="input-group-text" id="Site"><i
                                                        class="fas fa-phone"></i></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="input-group"><input type="text" class="form-control"
                                                placeholder="Enter Phone Number" aria-describedby="phone" required>
                                            <div class="input-group-prepend"><span class="input-group-text"
                                                    id="phone"><i class="fas fa-envelope"></i></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="input-group"><input type="password" class="form-control"
                                                placeholder="Your Password" aria-describedby="url" required>
                                            <div class="input-group-prepend"><span class="input-group-text" id="url"><i
                                                        class="fas fa-key"></i></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6"><button class="loginnow" type="submit">Signup</button></div>
                                    <div class="col-md-6"><a href="login.html" class="lostpass">Already signin</a></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- SignUp Area End -->

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
    <script src="js/waypoints.min.js"></script><!-- Owl carosul js -->
    <script src="js/owl.carousel.min.js"></script><!-- Venobox JS-->
    <script src="js/venobox.min.js"></script>
    <!--Main-->
    <script src="js/main.js"></script>
</body>

</html>