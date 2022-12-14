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
    <title>Agenda tu Cita</title>
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
                        <h2>Agenda tu Cita</h2>
                        <div class="links">
                            <ul>
                                <li><a href="index.html">Inicio</a></li>
                                <li><span>/</span></li>
                                <li><a class="active" href="appointment.html">Agenda tu Cita</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--  BreadCrumb Area Start  -->

    <!-- Make an Appointment Section Start -->
    <section id="appointment" class="appointment">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="box">
                        <div class="icon"><i class="icofont-doctor"></i></div>
                        <h4>Professional Doctors</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's .</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box">
                        <div class="icon"><i class="icofont-blood-drop"></i></div>
                        <h4>Exclusive Blood Bank</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's .</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box">
                        <div class="icon"><i class="icofont-dna-alt-1"></i></div>
                        <h4>Track your Progress</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's .</p>
                    </div>
                </div>
            </div>
            <!-- Cuadro de Citas buenardo -->
            <div class="row appointmentForm">
                <div class="col-12">
                    <h3 class="bg1"> AGENDA TU CITA</h3>
                    <h3 class="bg2"><i class="fas fa-phone"></i>(222) 324 2526</h3>
                </div>
                <div class="col-12">
                    <form class="appointmentinputs" action="#">
                        <div class="form-row">
                            <div class="form-group col-md-6"><input type="text" class="form-control"
                                    placeholder="Nombre Completo" required></div>
                            <div class="form-group col-md-6"><input type="email" class="form-control"
                                    placeholder="E-Mail" required></div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6"><input type="text" class="form-control"
                                    placeholder="Número Telefónico" required></div>
                            <div class="form-group col-md-6"><select>
                                    <option value="0">Departamento</option>
                                    <option value="1">Dental</option>
                                    <option value="2">Heart</option>
                                    <option value="2">Pathology</option>
                                </select></div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6"><input type="text" class="form-control"
                                    placeholder="Información Adicional" required></div>
                            <div class="form-group col-md-6"><input id="datetimepicker" type="text" class="form-control"
                                    placeholder="Fecha y Hora" required></div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12"><input type="submit" class="form-control submit"
                                    value="AGENDAR MI CITA"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section><!-- Make an Appointment Section End -->

    <!-- Video Section Start -->
    <section id="videoSection" class="videoSection">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="sectionHeader">
                        <h2>a minimal video section</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="videoBox"><img class="img-fluid" src="img/video/video.jpg" alt=""><a
                            class="videoBtn venobox" href="#"><i class="fas fa-play"></i></a></div>
                </div>
            </div>
        </div>
    </section><!-- Video Section End -->

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