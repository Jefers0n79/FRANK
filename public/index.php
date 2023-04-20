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
    <link rel="shortcut icon" type="image/png" href="img/favicon2.png" />
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
    <!-- Borrar caché para pruebas -->
    <link rel="stylesheet" href="/css/mi_estilo.css?v=<?php echo(rand()); ?>" />
    <script src="/js/mi_script.js?v=<?php echo(rand()); ?>"></script>
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

    <!--Start Slider Area-->
    <section id="slider-area" class="slider-area">
        <div class="overlay"></div>
        <div class="container">
            <div class="row sbanner">
                <div class="col-lg-7">
                    <div class="slide-item">
                        <div class="slide-caption">
                            <div class="slider-inner">
                                <div class="innerSize">
                                    <h1 class="caption-title">
                                        Queremos ayudar y ofrecer mejor calidad de vida
                                    </h1>
                                    <p class="caption-desc">
                                        Nuestro prinicpal objetivo es ayudar a llevar de una mejor manera los
                                        problemas que presente nuestro sistema inmunológico. Aseguramos una
                                        mejor calidad de vida gracias a la amplia experiencia profesional de
                                        nuestro doctor en este campo de la salud.
                                    </p>
                                    <div class="slide-btn">
                                        <a class="mybtn" href="aboutdoctor.php">Saber Más</a>
                                        <!--
                                        <a class="venobox" data-vbtype="video" data-autoplay="true"
                                            href="https://www.youtube.com/watch?v=GT6-H4BRyqQ">
                                            <i class="fa fa-play"></i>
                                            <span>INTRO VIDEO</span>
                                        </a>
                                        -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Slider Area-->

    <!-- Make an Appointment Section Start -->
    <section id="appointment" class="appointment">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="box">
                        <div class="icon"><i class="icofont-doctor"></i></div>
                        <h4>Médicos Certificados</h4>
                        <p>
                            Médicos certificados, con una larga trayectoria profesional.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box">
                        <div class="icon"><i class="icofont-search-2"></i></div>
                        <h4>Detección Temprana</h4>
                        <p>
                            Nosotros podemos detectar cualquier problema o enfermedad
                            para poder tartarla pronto.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box">
                        <div class="icon"><i class="icofont-chart-histogram"></i></div>
                        <h4>Seguimiento Personal</h4>
                        <p>
                            Llevamos un seguimiento cuidadoso sobre los avances de cada pacinete.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Formato de "Cita"
            <div class="row appointmentForm">
                <div class="col-12">
                    <h3 class="bg1"> MAKE AN APPOINTMENT</h3>
                    <h3 class="bg2"><i class="fas fa-phone"></i>+00 11 22 33 44</h3>
                </div>
                <div class="col-12">
                    <form class="appointmentinputs" action="#">
                        <div class="form-row">
                            <div class="form-group col-md-6"><input type="text" class="form-control"
                                    placeholder="Full Name" required></div>
                            <div class="form-group col-md-6"><input type="email" class="form-control"
                                    placeholder="Email" required></div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6"><input type="text" class="form-control"
                                    placeholder="Phone Number" required></div>
                            <div class="form-group col-md-6"><select>
                                    <option value="0">DepartMent</option>
                                    <option value="1">Dental</option>
                                    <option value="2">Heart</option>
                                    <option value="2">Pathology</option>
                                </select></div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6"><input type="text" class="form-control"
                                    placeholder="Additional Information" required></div>
                            <div class="form-group col-md-6"><input id="datetimepicker" type="text" class="form-control"
                                    placeholder="Date And Time" required></div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12"><input type="submit" class="form-control submit"
                                    value="book and appoinment"></div>
                        </div>
                    </form>
                </div>
            </div>
            Fin de Formato de Cita -->
        </div>
    </section>
    <!-- Make an Appointment Section End -->

    <!-- About Section Start -->
    <div class="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="sectionHeader">
                        <h2>¿HACE CUÁNTO NO VISITAS AL MÉDICO?</h2><!--
                        <p>
                            Un alergólogo/inmunólogo es un médico que diagnostica y trata las alergias,
                             el asma y otras afecciones del sistema inmunitario.
                        </p>-->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-xl-6">
                    <div class="slider"><img class="img-fluid" src="img/about/about.jpg" alt=""></div>
                </div>
                <div class="col-lg-7 col-xl-6">
                    <div class="right_content">
                        <h5 style="text-align:center;">LA IMPORTANCIA DE VISITAR A TU MÉDICO AL MENOS UNA VEZ AL AÑO</h5>
                        <p style="text-align:justify;">
                            Visitar a tu médico debe convertirse en una prioridad pues la recurrencia te ayuda a prevenir 
                            cualquier condición médica que pueda presentarse
                        </p>
                        <div class="list">
                            <div class="row">
                                <div>
                                    <ul>
                                        <li><i class="fas fa-check"></i> Prevenir los riesgos de sufrir una enfermedad antes que ésta aparezca.</li>
                                        <li><i class="fas fa-check"></i> Detectar enfermedades a tiempo para controlarlas y eliminarlas.</li>
                                        <li><i class="fas fa-check"></i> Minimizar el daño ya causado por alguna enfermedad.</li>
                                    </ul>
                                </div><!--
                                <div class="col-md-6">
                                    <ul>
                                        <li><i class="icofont-test-bulb"></i> Radiografías de Pecho (Tórax) </li>
                                        <li><i class="icofont-test-bulb"></i> Análisis de Sangre</li>
                                        <li><i class="icofont-test-bulb"></i> Pruebas Cutáneas</li>
                                        <li><i class="icofont-test-bulb"></i> Inmunoglobulinas</li>
                                        <li><i class="icofont-test-bulb"></i> Espirometrías</li>
                                    </ul>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- About Section End -->

<!-- Secciones Ocultas hasta encontrarles utilidad 
    Service Section Start
    <section id="serviceSection" class="serviceSection">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="sectionHeader">
                        <h2>Services We provide</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 serviceSlider owl-carousel">
                    <div class="item">
                        <div class="box">
                            <div class="icon"><i class="icofont-tooth"></i></div><a href="serviceDetails.html">
                                <h4>Dental care</h4>
                            </a>
                            <p>We have a dedicated space for dental care. We have dedicated team for dental services.
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="icon"><i class="icofont-tablets"></i></div><a href="serviceDetails.html">
                                <h4>phurmacy care</h4>
                            </a>
                            <p>We have a dedicated space for dental care. We have dedicated team for dental services.
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="icon"><i class="icofont-operation-theater"></i></div><a
                                href="serviceDetails.html">
                                <h4>sergary care</h4>
                            </a>
                            <p>We have a dedicated space for dental care. We have dedicated team for dental services.
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="icon"><i class="icofont-surgeon"></i></div><a href="serviceDetails.html">
                                <h4>cancer care</h4>
                            </a>
                            <p>We have a dedicated space for dental care. We have dedicated team for dental services.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    Service Section End
    Video Section Start
    <section id="videoSection" class="videoSection">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="sectionHeader">
                        <h2> a minimal video section</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="videoBox"><img class="img-fluid" src="img/video/video.jpg" alt=""><a
                            class="videoBtn venobox" data-vbtype="video" data-autoplay="true"
                            href="https://www.youtube.com/watch?v=GT6-H4BRyqQ"><i class="fas fa-play"></i></a></div>
                </div>
            </div>
        </div>
    </section>
    Video Section End
-->

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
                    <div class="right"><a href="../admin/registro.php">REGISTRARME</a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Get a Call End -->

<!-- Seccion oculta hasta encontrarle utilidad
    Testimonial Area Start
    <section id="testimonial" class="testimonial">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="sectionHeader">
                        <h2>special clients comments</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="leftSlider">
                        <div class="testiminal-carousel">
                            <div class="testimonial-item">
                                <div class="img">
                                    <div class="imgOverlay"></div><img class="img-fluid"
                                        src="img/testimonial/bigimg.png" alt="">
                                    <div class="text"><img class="quot" src="img/quot.png" alt="">
                                        <p> When an unknown printer took a galley and scrambled it to make a type It has
                                            survived not only five centuries, leap into electronic typesetting has
                                            survived not make a type.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-item">
                                <div class="img">
                                    <div class="imgOverlay"></div><img class="img-fluid"
                                        src="img/testimonial/bigimg2.png" alt="">
                                    <div class="text"><img class="quot" src="img/quot.png" alt="">
                                        <p> When an unknown printer took a galley and scrambled it to make a type It has
                                            survived not only five centuries, leap into electronic typesetting has
                                            survived not make a type.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-item">
                                <div class="img">
                                    <div class="imgOverlay"></div><img class="img-fluid"
                                        src="img/testimonial/bigimg.png" alt="">
                                    <div class="text"><img class="quot" src="img/quot.png" alt="">
                                        <p> When an unknown printer took a galley and scrambled it to make a type It has
                                            survived not only five centuries, leap into electronic typesetting has
                                            survived not make a type.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-item">
                                <div class="img">
                                    <div class="imgOverlay"></div><img class="img-fluid"
                                        src="img/testimonial/bigimg2.png" alt="">
                                    <div class="text"><img class="quot" src="img/quot.png" alt="">
                                        <p> When an unknown printer took a galley and scrambled it to make a type It has
                                            survived not only five centuries, leap into electronic typesetting has
                                            survived not make a type.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="rightSlider">
                        <ul id="tesitmonial_right_item">
                            <li data-owl-item="1">
                                <div class="item">
                                    <div class="left">
                                        <div class="leftInner"><img class="img-fluid" src="img/testimonial/people1.png"
                                                alt="">
                                            <div class="info align-self-center">
                                                <h5> Glenn Martin</h5>
                                                <p>web developer</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <div class="rightInner"><img class="aimg-fluid" src="img/testimonial/brand1.png"
                                                alt=""></div>
                                    </div>
                                </div>
                            </li>
                            <li data-owl-item="2">
                                <div class="item">
                                    <div class="left">
                                        <div class="leftInner"><img class="img-fluid" src="img/testimonial/people2.png"
                                                alt="">
                                            <div class="info align-self-center">
                                                <h5>Danny Moser</h5>
                                                <p>web developer</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <div class="rightInner"><img class="img-fluid" src="img/testimonial/brand2.png"
                                                alt=""></div>
                                    </div>
                                </div>
                            </li>
                            <li data-owl-item="3">
                                <div class="item">
                                    <div class="left">
                                        <div class="leftInner"><img class="img-fluid" src="img/testimonial/people3.png"
                                                alt="">
                                            <div class="info align-self-center">
                                                <h5>Protik Khan</h5>
                                                <p>web developer</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <div class="rightInner"><img class="img-fluid" src="img/testimonial/brand3.png"
                                                alt=""></div>
                                    </div>
                                </div>
                            </li>
                            <li data-owl-item="4">
                                <div class="item">
                                    <div class="left">
                                        <div class="leftInner"><img class="img-fluid" src="img/testimonial/people4.png"
                                                alt="">
                                            <div class="info align-self-center">
                                                <h5>Ramon Shaw</h5>
                                                <p>web developer</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <div class="rightInner"><img class="img-fluid" src="img/testimonial/brand4.png"
                                                alt=""></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    Testimonial Area End
-->

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