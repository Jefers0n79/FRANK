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
    <title>Servicio Social - Sistema Médico de Gestión de Citas</title>
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />
    <!--Bootstrap Stylesheet-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <!--Slick Slider-->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!--Web Icon Font Stylesheet-->
    <link rel="stylesheet" type="text/css" href="css/fontawesome.all.min.css">
    <link rel="stylesheet" type="text/css" href="css/pe-icon-7-stroke.css">
    <link rel="stylesheet" type="text/css" href="css/helper.css">
    <link rel="stylesheet" type="text/css" href="css/icofont.min.css">
    <!--Animate Stylesheet-->
    <link rel="stylesheet" type="text/css" href="css/animate.css"><!-- date and time picker -->
    <link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css">
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
                        <h2>CONOZCA A NUESTROS DOCTORES</h2>
                        <div class="links">
                            <ul>
                                <li><a href="index.php">INICIO</a></li>
                                <li><span>/</span></li>
                                <li><a class="active" href="aboutdoctor.php">CONOZCA A NUESTROS DOCTORES</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  BreadCrumb Area Start  -->

    <!-- About Doctor Page Start -->
    <section id="aboutDoctor" class="aboutDoctor">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="doctor-list doctor-view">
                        <div class="doctor-inner"><img class="img-fluid" alt="" src="img/doctors/doctor4.jpg">
                            <div class="doctor-details">
                                <div class="doctor-info">
                                    <h4 class="doctor-name">Dr. 1</h4>
                                    <p><span class="depart">Pediatra</span></p>
                                </div>
                                <ul class="social-list">
                                    <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a class="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a class="g-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="info">
                        <div class="about-doctor">
                            <h3 class="sub-title">CONOZCA A NUESTRO DOCTOR</h3>
                            <p class="margin_bottomP">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In porta
                                luctus est interdum pretium. Fusce id tortor fringilla, suscipit turpis ac, varius ex.
                                Cras vel metus ligula. Nam enim ligula, bibendum a iaculis ut, cursus id augue. Proin
                                vitae purus id tortor vehicula scelerisque non in libero.</p>
                            <p>In porta suscipit turpis ac, varius ex. Cras vel metus ligula. Nam enim ligula, bibendum
                                a iaculis ut, cursus id augue. Proin vitae purus id tortor vehicula scelerisque non in
                                libero.</p>
                        </div>
                        <div class="experience-widget">
                            <h3 class="sub-title">EXPERIENCIA</h3>
                            <div class="experience-box">
                                <ul class="experience-list">
                                    <li>
                                        <div class="timeline-content">
                                            <h4>HISPITAL DE LA MUJER (2016 - 2019)</h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="timeline-content">
                                            <h4>HOSPITAL ANGELES (2019 - 2023)</h4>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="education-widget">
                            <h3 class="sub-title">FOMRACIÓN PROFESIONAL</h3>
                            <div class="experience-box">
                                <ul class="experience-list">
                                    <li>
                                        <div class="timeline-content">
                                            <h4>BUAP (2012 - 2016)</h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="timeline-content">
                                            <h4>IPN (2016 - 2019)</h4>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Doctor Page End -->

    <!-- About Doctor Page Start -->
    <section id="aboutDoctor" class="aboutDoctor">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="info">
                        <div class="about-doctor">
                            <h3 class="sub-title">CONOZCA A NUESTRO DOCTOR</h3>
                            <p class="margin_bottomP">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In porta
                                luctus est interdum pretium. Fusce id tortor fringilla, suscipit turpis ac, varius ex.
                                Cras vel metus ligula. Nam enim ligula, bibendum a iaculis ut, cursus id augue. Proin
                                vitae purus id tortor vehicula scelerisque non in libero.</p>
                            <p>In porta suscipit turpis ac, varius ex. Cras vel metus ligula. Nam enim ligula, bibendum
                                a iaculis ut, cursus id augue. Proin vitae purus id tortor vehicula scelerisque non in
                                libero.</p>
                        </div>
                        <div class="experience-widget">
                            <h3 class="sub-title">EXPERIENCIA</h3>
                            <div class="experience-box">
                                <ul class="experience-list">
                                    <li>
                                        <div class="timeline-content">
                                            <h4>HISPITAL DE LA MUJER (2016 - 2019)</h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="timeline-content">
                                            <h4>HOSPITAL ANGELES (2019 - 2023)</h4>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="education-widget">
                            <h3 class="sub-title">FOMRACIÓN PROFESIONAL</h3>
                            <div class="experience-box">
                                <ul class="experience-list">
                                    <li>
                                        <div class="timeline-content">
                                            <h4>BUAP (2012 - 2016)</h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="timeline-content">
                                            <h4>IPN (2016 - 2019)</h4>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="doctor-list doctor-view">
                        <div class="doctor-inner"><img class="img-fluid" alt="" src="img/doctors/doctor2.jpg">
                            <div class="doctor-details">
                                <div class="doctor-info">
                                    <h4 class="doctor-name">Dr. 2</h4>
                                    <p><span class="depart">Ginecólogo</span></p>
                                </div>
                                <ul class="social-list">
                                    <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a class="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a class="g-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Doctor Page End -->

    <!-- About Doctor Page Start -->
    <section id="aboutDoctor" class="aboutDoctor">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="doctor-list doctor-view">
                        <div class="doctor-inner"><img class="img-fluid" alt="" src="img/doctors/doctor3.jpg">
                            <div class="doctor-details">
                                <div class="doctor-info">
                                    <h4 class="doctor-name">Dr. 3</h4>
                                    <p><span class="depart">Cardiólogo</span></p>
                                </div>
                                <ul class="social-list">
                                    <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a class="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a class="g-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="info">
                        <div class="about-doctor">
                            <h3 class="sub-title">CONOZCA A NUESTRO DOCTOR</h3>
                            <p class="margin_bottomP">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In porta
                                luctus est interdum pretium. Fusce id tortor fringilla, suscipit turpis ac, varius ex.
                                Cras vel metus ligula. Nam enim ligula, bibendum a iaculis ut, cursus id augue. Proin
                                vitae purus id tortor vehicula scelerisque non in libero.</p>
                            <p>In porta suscipit turpis ac, varius ex. Cras vel metus ligula. Nam enim ligula, bibendum
                                a iaculis ut, cursus id augue. Proin vitae purus id tortor vehicula scelerisque non in
                                libero.</p>
                        </div>
                        <div class="experience-widget">
                            <h3 class="sub-title">EXPERIENCIA</h3>
                            <div class="experience-box">
                                <ul class="experience-list">
                                    <li>
                                        <div class="timeline-content">
                                            <h4>HISPITAL DE LA MUJER (2016 - 2019)</h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="timeline-content">
                                            <h4>HOSPITAL ANGELES (2019 - 2023)</h4>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="education-widget">
                            <h3 class="sub-title">FOMRACIÓN PROFESIONAL</h3>
                            <div class="experience-box">
                                <ul class="experience-list">
                                    <li>
                                        <div class="timeline-content">
                                            <h4>BUAP (2012 - 2016)</h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="timeline-content">
                                            <h4>IPN (2016 - 2019)</h4>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Doctor Page End -->
    
    <!-- Get a Call Start -->
    <div class="getaCall">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="left">
                        <h1 style="color:white">
                            <span>
                                ¡AGENDE SU CITA HOY!
                            </span>
                        </h1>
                        <br>
                        <h4 style="color:whitesmoke">
                            ¿Cómo puedo agendar una cita?
                        </h4>
                        <br>
                        <h6 style="color:whitesmoke">
                            Para poder agendar una cita con nuestro doctor, primero deberá registrarse
                            en nuestro<br> sistema, ingresando un par de datos básicos y posteriormente
                            poder agendar un día en <br>la sección  "Citas" en el perfil que se creará
                            después de registrarse con nosotros.
                        </h6>
                    </div>
                    <div class="right"><a href="../admin/registro.php">Registrarme</a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Get a Call End -->

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
    <script src="js/venobox.min.js"></script><!-- date and time picker -->
    <script src="js/jquery.datetimepicker.full.min.js"></script>
    <script src="js/dateandtimeactive.js"></script>
    <!--Main-->
    <script src="js/main.js"></script>
</body>

</html>