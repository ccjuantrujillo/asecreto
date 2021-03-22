<?php
$result="";
if (isset($_POST['submit'])) {
    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->Port=587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';
    $mail->Username='ciechinalatam@gmail.com';
    $mail->Password='CIE2020china';
    $mail->setFrom($_POST['email'],$_POST['name']);
    $mail->addAddress('consultas@ciechinalatam.com');
    $mail->addReplyTo($_POST['email'],$_POST['name']);
    $mail->isHTML(true);
    $mail->Subject='Enviado por '.$_POST['name'];
    $mail->Body='<h1>Nombre: '.$_POST['name'].'</h1> <br> 
    <h1>Correo Electronico: '.$_POST['email'].'</h1> <br>
    <h1>Telefono: '.$_POST['telefono'].'</h1> <br>
    <h1>Empresa: '.$_POST['empresa'].'</h1> <br>
    <h1>Cargo: '.$_POST['cargo'].'</h1> <br>
    <h1>Descripcion: '.$_POST['descripcion'].'</h1> <br>
    <h1>Ciudad: '.$_POST['ciudad'].'</h1> <br>
    <h1>Pagina Web: '.$_POST['paginaweb'].'</h1>';
    if(!$mail->send()){
        $result="Algo esta mal, intentelo de nuevo por favor";
    }
    else{
        $result="Gracias ". $_POST['name']. " por contactarnos, espere la respuesta muy pronto!";    
    }
}
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <!-- title -->
        <title>Centro de Innovación y Emprendimiento China- Latam</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="author" content="ThemeZaa">
        <!-- description -->
        <meta name="description" content="">
        <!-- keywords -->
        <meta name="keywords" content="creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal, masonry, grid, coming soon, faq">
        <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.png">
        <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
        <!-- animation -->
        <link rel="stylesheet" href="css/animate.css" />
        <!-- bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <!-- et line icon --> 
        <link rel="stylesheet" href="css/et-line-icons.css" />
        <!-- font-awesome icon -->
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <!-- themify icon -->
        <link rel="stylesheet" href="css/themify-icons.css">
        <!-- swiper carousel -->
        <link rel="stylesheet" href="css/swiper.min.css">
        <!-- justified gallery  -->
        <link rel="stylesheet" href="css/justified-gallery.min.css">
        <!-- magnific popup -->
        <link rel="stylesheet" href="css/magnific-popup.css" />
        <!-- revolution slider -->
        <link rel="stylesheet" type="text/css" href="revolution/css/settings.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
        <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">
        <!-- bootsnav -->
        <link rel="stylesheet" href="css/bootsnav.css">
        <!-- style -->
        <link rel="stylesheet" href="css/style.css" />
        <!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css" />
        <!--[if IE]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->
    </head>
    <body>   
        <!-- start header -->
        <header style="background-color: white;">
            <div class="col-auto pl-lg-0" style="width:400px !important;object-fit: cover !important;">
                        <a title="Pofo" class=""><img src="images/CHINA-LATAM Es__PNG.png" data-rjs="" class="" alt="" style="width:400px !important;object-fit: cover !important;height:150px">
                        </a>
            </div>
            <!-- start navigation -->
            
            <nav class="navbar navbar-default bootsnav navbar-top header-dark background-transparent navbar-expand-lg" >
                <div class="container" style="margin-top:0px;padding-top:0px;">
                    <!-- start logo -->
                    <!-- end logo -->
                    <div class="col accordion-menu pr-0 pr-md-3">
                            <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbar-collapse-toggle-1">
                            <span class="sr-only">toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        <div class="navbar-collapse collapse justify-content-end" id="navbar-collapse-toggle-1">
                            <ul id="accordion" class="nav navbar-nav no-margin alt-font text-normal" data-in="fadeIn" data-out="fadeOut">
                                <!-- start menu item -->

                                <li class="dropdown">
                                    <a href="index.html">INICIO</a>
                                </li>

                                <!-- end menu item -->
                                <li class="dropdown">
                                    <a href="nosotros.html">NOSOTROS</a>
                                </li>

                                <li class="dropdown simple-dropdown megamenu-fw"><a href="red_cie.php">RED CIE</a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>

                                    <!-- start sub menu -->
                                    <ul class="dropdown-menu" role="menu">
                                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="red_cie.php">Nuestra RED CIE</a>
                                        </li>
                                        <li class="dropdown"><a class="" data-toggle="" href="red_cie.php#section-down">Únete</a>
                                        </li>
                                    </ul>
                                </li>


                                <li class="dropdown simple-dropdown megamenu-fw" style="padding-right:20px;"><a href="#" title="Blog">RECURSOS</a>
                                    <i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>

                                    <!-- start sub menu -->
                                    <ul class="dropdown-menu" role="menu">
                                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Blog</a>
                                        </li>
                                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Eventos</a>
                                        </li>
                                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="contactanos.php">Contáctanos</a>
                                        </li>
                                    </ul>
                                    <!-- end sub menu -->
                                </li>
                            </ul>

                            <div class="header-searchbar">
                            <a href="#search-header" class="header-search-form"><i class="fas fa-search search-button"></i></a>
                            <!-- search input-->
                        </div>
                        <div class="heder-menu-button d-none d-lg-inline-block">
                            <button class="navbar-toggle mobile-toggle right-menu-button" type="button" id="showRightPush">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                            
                        </div>
                    </div>
                </div>
            </nav>
            
            <!-- end navigation --> 
            
            <!-- end navigation -->  
        </header>
        
        <!-- end header -->
        <!-- start page title section -->
        <section class="wow fadeIn bg-light-gray padding-35px-tb page-title-small" style="padding-top: 36px !important;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-8 col-md-6 text-center text-md-left">
                        <!-- start page title -->
                        <h1 class="alt-font text-extra-dark-gray font-weight-600 mb-0 text-uppercase">
                        Red CIE
                        </h1>
                        <!-- end page title -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title section -->
        <!-- start feature box section -->

        

        <!-- end  feature box section -->
        <!-- start feature box section -->

        <section class="p-0 wow fadeIn bg-light-gray" style="padding-top: 0px !important;">
            <div class="container-fluid">
                <div class="row" style="background-color: white;">
                    <div class="col-12 col-lg-6 cover-background wow fadeInLeft md-height-450px"  style="background-image:url('images/Foto_Home_seccion_3.jpg');margin-top: 80px;"></div>
                    <div class="col-12 col-lg-6 padding-five-all md-padding-ten-all sm-padding-50px-tb md-padding-15px-lr wow fadeInRight " style="padding-top:0px !important;margin-top: 80px;">
                        <div class="row m-0">
                            <div class="col-12 col-xl-11 margin-five-bottom lg-margin-six-bottom md-margin-40px-bottom sm-margin-30px-bottom sm-no-padding-lr" >
                                <h4 class="alt-font text-extra-dark-gray font-weight-600 text-center text-lg-left md-width-70 mx-auto mx-lg-0 md-no-margin-bottom sm-width-100"
                                style="font-size: 30px;">
                                Algunas razones para unirte a esta plataforma
                                </h4>
                            </div>
                            <!-- start feature box item -->
                            <div class="col-12 col-xl-6 col-lg-12 col-md-6 margin-six-bottom md-margin-30px-bottom last-paragraph-no-margin sm-no-padding-lr">
                                <div class="feature-box-5 position-relative">
                                    <i class="icon-desktop text-medium-gray icon-medium"></i>
                                    <div class="feature-content">
                                        <div class="text-extra-dark-gray margin-5px-bottom alt-font font-weight-600">
                                        Conocimiento   
                                        </div>
                                        <p class="width-95 md-width-100">
                                        Conoce las tecnologías más innovadoras, para enfrentar los nuevos desafíos de esta era y crear un mundo nuevo y mejor.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end feature box item -->
                            <!-- start feature box item -->
                            <div class="col-12 col-xl-6 col-lg-12 col-md-6 margin-six-bottom md-margin-30px-bottom last-paragraph-no-margin sm-no-padding-lr">
                                <div class="feature-box-5 position-relative">
                                    <i class="icon-pricetags text-medium-gray icon-medium"></i>
                                    <div class="feature-content">
                                        <div class="text-extra-dark-gray margin-5px-bottom alt-font font-weight-600">
                                        Desarrollo
                                        </div>
                                        <p class="width-95 md-width-100">
                                        Aprovecha tu potencial para trabajar juntos en el desarrollo de nuestra región e impulsar la transformación que tanto necesitamos.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end feature box item -->
                            <!-- start feature box item -->
                            <div class="col-12 col-xl-6 col-lg-12 col-md-6 md-margin-six-bottom md-no-margin-bottom sm-margin-30px-bottom last-paragraph-no-margin sm-no-padding-lr">
                                <div class="feature-box-5 position-relative">
                                    <i class="icon-chat text-medium-gray icon-medium"></i>
                                    <div class="feature-content">
                                        <div class="text-extra-dark-gray margin-5px-bottom alt-font font-weight-600">
                                        Red de contactos
                                        </div>
                                        <p class="width-95 md-width-100">
                                        Accede a una red de contactos global donde la mentalidad emprendedora y la colaboración son el común denominador. La distancia nunca más limitará nuestra visión.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end feature box item -->
                            <!-- start feature box item -->
                            <div class="col-12 col-xl-6 col-lg-12 col-md-6 last-paragraph-no-margin">
                                <div class="feature-box-5 position-relative ">
                                    <i class="icon-mobile text-medium-gray icon-medium"></i>
                                    <div class="feature-content">
                                        <div class="text-extra-dark-gray margin-5px-bottom alt-font font-weight-600">
                                        Oportunidades
                                        </div>
                                        <p class="width-95 md-width-100">
                                        Identifica nuevas oportunidades de negocio a través de la transformación digital de las industrias tradicionales y la creación de valor en las nuevas industrias.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end feature box item -->
                        </div>
                    </div> 
                </div>
            </div>
        </section>

        <!-- end feature box section -->

        <section class="wow fadeIn" style="padding-bottom:20px !important;padding-top:60px !important;">
            <div class="container">
                <div class="row justify-content-center" style="height:100px !important;">
                    <div class="col-12 col-xl-7 col-lg-6 col-md-8 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center">
                        <div class="alt-font text-medium-gray margin-10px-bottom text-uppercase text-small">
                        </div>
                        <h5 class="alt-font text-extra-dark-gray font-weight-600 mb-0">
                        Nuestros principales campos de acción 
                        </h5>
                    </div>
                </div>
                <div class="row">
                    <!-- start feature box item -->
                    <div class="col-12 col-md-4 text-center text-md-left sm-margin-30px-bottom last-paragraph-no-margin wow fadeInUp">
                        <div class="margin-ten-bottom overflow-hidden image-hover-style-1 md-margin-20px-bottom">
                            <a href="services-modern.html"><img src="images/Foto_Home_sección_4_1.jpg" alt=""/></a>
                        </div>
                        <p href="services-modern.html" class="alt-font margin-5px-bottom d-block text-extra-dark-gray font-weight-600 text-uppercase text-small">
                        CUMBRE ANUAL CIE
                        </p>
                        <p class="width-95 md-width-100">
                        Nuestro gran evento anual donde participan diferentes emprendedores y referentes del ecosistema de China y Latinoamérica compartiendo su visión sobre las principales tendencias, oportunidades y desafíos en diferentes industrias en torno a la innovación y tecnología.
                        </p>
                        <div class="separator-line-horrizontal-full bg-medium-light-gray margin-20px-tb md-margin-15px-tb"></div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col-12 col-md-4 text-center text-md-left last-paragraph-no-margin sm-margin-30px-bottom wow fadeInUp" data-wow-delay="0.2s">
                        <div class="margin-ten-bottom overflow-hidden image-hover-style-1 md-margin-20px-bottom">
                            <a href="services-modern.html"><img src="images/Foto_Home_sección_4_2.jpg" alt=""/></a>
                        </div>
                        <p href="services-modern.html" class="alt-font margin-5px-bottom d-block text-extra-dark-gray font-weight-600 text-uppercase text-small">
                        EVENTOS Y NETWORKING
                        </p>
                        <p class="width-95 md-width-100">
                        Espacios para establecer conexiones valiosas, compartir nuestras experiencias, fomentar el aprendizaje y mantener el vínculo en este ecosistema global. 
                        </p>
                        <div class="separator-line-horrizontal-full bg-medium-light-gray margin-20px-tb md-margin-15px-tb" style="margin-top:70px;"></div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col-12 col-md-4 text-center text-md-left last-paragraph-no-margin wow fadeInUp" data-wow-delay="0.4s">
                        <div class="margin-ten-bottom overflow-hidden image-hover-style-1 md-margin-20px-bottom">
                            <a href="services-modern.html"><img src="images/Foto_Home_sección_4_3.jpg" alt=""/></a>
                        </div>
                        <p href="services-modern.html" class="alt-font margin-5px-bottom d-block text-extra-dark-gray font-weight-600 text-uppercase text-small">
                        RECURSOS
                        </p>
                        <p class="width-95 md-width-100">
                        Información vigente y relevante sobre el acontecer de los ecosistemas de emprendimiento de China y Latinoamérica y sus principales actores. Recursos que nos permitan darle tracción a nuestras iniciativas. 
                        </p>
                        <div class="separator-line-horrizontal-full bg-medium-light-gray margin-20px-tb md-margin-15px-tb" style="margin-top:70px;"></div>   
                    </div>                    
                    <!-- end feature box item -->
                </div>
            </div>
        </section>
        

        <!-- start tabs section -->

        <section class="wow fadeIn big-section" id="section-down" style="padding-top:40px;padding-bottom:60px;">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 md-margin-30px-bottom wow fadeInLeft">
                        <div class="padding-fifteen-all bg-light-gray border-radius-6 lg-padding-seven-all sm-padding-30px-all h-100">
                            <span class="text-extra-dark-gray alt-font text-large font-weight-600 margin-25px-bottom d-block">
                            ¿Estas listo para unirte? 
                            </span> 
                            <form id="contact-form" action="" method="post">
                                <div>
                                    <div id="success-contact-form" class="mx-0"></div>
                                    <input type="text" name="name" id="name" placeholder="Nombre*" class="border-radius-4 bg-white medium-input">
                                    <input type="text" name="email" id="email" placeholder="Correo*" class="border-radius-4 bg-white medium-input">
                                    <input type="text" name="telefono" id="telefono" placeholder="Telefono*" class="border-radius-4 bg-white medium-input">
                                    <input type="text" name="empresa" id="empresa" placeholder="Nombre del emprendimiento o de la institución*" class="border-radius-4 bg-white medium-input">
                                    <input type="text" name="cargo" id="cargo" placeholder="Cargo que ocupa*" class="border-radius-4 bg-white medium-input">
                                    <textarea name="descripcion" id="descripcion" placeholder="Descripción del emprendimiento*" rows="5" class="border-radius-4 bg-white medium-textarea"></textarea>
                                    <input type="text" name="ciudad" id="ciudad" placeholder="Donde se encuentra (Ciudad y País)*" class="border-radius-4 bg-white medium-input">
                                    <input type="text" name="paginaweb" id="paginaweb" placeholder="Página web o link a redes sociales*" class="border-radius-4 bg-white medium-input">
                                    <button id="contact-us-button" type="submit" name="submit" class="btn btn-small border-radius-4 btn-dark-gray">Enviar Consulta</button>
                                    <h5 class="notifCorrecto"><?= $result; ?></h5>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 last-paragraph-no-margin wow fadeInRight">
                        <div class="padding-ten-all bg-light-gray border-radius-6 lg-padding-seven-all sm-padding-30px-all h-100 text-center text-lg-left" style="padding-top:90px;">
                            <img src="images/New_Services_seccion 3_formulario.jpg" alt="" class="border-radius-6 margin-35px-bottom sm-margin-30px-bottom">
                            <span class="text-large font-weight-600 alt-font text-extra-dark-gray margin-5px-bottom d-block">
                            Nos pondremos en contacto contigo a la brevedad.
                            </span>
                            <p>
                            </p>
                            <a href="about-us-modern.html" class="btn btn-dark-gray btn-small text-extra-small border-radius-4 margin-25px-top">Nosotros</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end tabs section -->        
        <!-- start information section -->
        <!-- end information box section  -->
        <!-- start pricing box section  -->
        <!-- end price box section -->  
        <!-- start section -->
        <section class="wow fadeIn" style="padding-top:20px;">
            <div class="container">
                <div class="row justify-content-center" style="width:100% !important;margin-left:0px !important;text-align:center !important;">
                    <div class="col-12 col-xl-5 col-md-6 margin-five-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center" >
                        <div class="alt-font text-medium-gray margin-5px-bottom text-uppercase text-small">
                        </div>
                        <h5 class="alt-font text-extra-dark-gray font-weight-600" 
                        style="font-size:30px;line-height: 1.0;">
                        China se ha convertido en una potencia innovadora
                        </h5>
                        <p class="mb-0">
                        China se está posicionando como el líder mundial en innovación y tecnología. Algunos de los principales polos de innovación del mundo, como Shenzhen, Beijing y Shanghai están ubicados en China.
                        </p>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center"><img src="images/Foto_Home_seccion_6.jpg" alt=""></div>
                </div>
            </div>
        </section>

        <!-- end section  -->
        <!-- start footer --> 
        <footer class="footer-standard-dark bg-extra-dark-gray"> 
            <div class="footer-widget-area padding-five-tb sm-padding-30px-tb" style="padding-bottom:40px;padding-top:40px;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 widget border-right border-color-medium-dark-gray md-no-border-right md-margin-30px-bottom sm-text-center" style="padding-right: 37px;">
                            <!-- start logo -->
                            <a href="index.html" class=""><img class="" src="images/CHINA-LATAM Es NEG__PNG.png" alt="" style="background-size: 1000px;margin-right:20px;"></a>
                            <!-- end logo -->
                            <p class="text-small width-95 sm-width-100" style="margin-top: 15px;">
                            Conectamos innovación y tecnología entre China y Latinoamérica. 
                            </p>
                            <!-- start social media -->
                            <div class="social-icon-style-8 d-inline-block vertical-align-middle">
                                <ul class="small-icon no-margin-bottom">
                                </ul>
                            </div>
                            <!-- end social media -->
                        </div>
                        <!-- start additional links -->
                        <!-- end additional links -->
                        <!-- start contact information -->
                        <div class="col-lg-3 col-md-6 widget border-right border-color-medium-dark-gray padding-45px-left md-padding-15px-left md-clear-both md-no-border-right sm-margin-30px-bottom text-center text-md-left" >
                            <div class="widget-title alt-font text-small text-medium-gray text-uppercase margin-10px-bottom font-weight-600" style="margin-top: 19px;">Contacto</div>
                            <p class="text-small d-block margin-15px-bottom width-80 sm-width-100">
                            
                            </p>
                            <div class="text-small" style="padding-bottom:10px;">Email: <a href="mailto:consultas@ciechinalatam.com">consultas@ciechinalatam.com</a></div>
                            <div class="text-small">

                            Linkedin: &nbsp &nbsp <a class="linkedin text-white-2" href="https://www.linkedin.com/company/centro-de-innovación-y-emprendimiento-china-latam/" target="_blank"><i class="fab fa-linkedin-in" style="font-size:15px;"></i></a>
                            
                            </div>
                            <a href="contact-us-modern.html" class="text-small text-uppercase text-decoration-underline">
                            
                            </a>
                        </div>
                        <!-- end contact information -->
                        <!-- start instagram -->
                        <!-- end instagram -->
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->
        <!-- start scroll to top -->
        <a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
        <!-- end scroll to top  -->
        <!-- javascript libraries -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/modernizr.js"></script>
        <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/skrollr.min.js"></script>
        <script type="text/javascript" src="js/smooth-scroll.js"></script>
        <script type="text/javascript" src="js/jquery.appear.js"></script>
        <!-- menu navigation -->
        <script type="text/javascript" src="js/bootsnav.js"></script>
        <script type="text/javascript" src="js/jquery.nav.js"></script>
        <!-- animation -->
        <script type="text/javascript" src="js/wow.min.js"></script>
        <!-- page scroll -->
        <script type="text/javascript" src="js/page-scroll.js"></script>
        <!-- swiper carousel -->
        <script type="text/javascript" src="js/swiper.min.js"></script>
        <!-- counter -->
        <script type="text/javascript" src="js/jquery.count-to.js"></script>
        <!-- parallax -->
        <script type="text/javascript" src="js/jquery.stellar.js"></script>
        <!-- magnific popup -->
        <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
        <!-- portfolio with shorting tab -->
        <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
        <!-- images loaded -->
        <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
        <!-- pull menu -->
        <script type="text/javascript" src="js/classie.js"></script>
        <script type="text/javascript" src="js/hamburger-menu.js"></script>
        <!-- counter  -->
        <script type="text/javascript" src="js/counter.js"></script>
        <!-- fit video  -->
        <script type="text/javascript" src="js/jquery.fitvids.js"></script>
        <!-- skill bars  -->
        <script type="text/javascript" src="js/skill.bars.jquery.js"></script> 
        <!-- justified gallery  -->
        <script type="text/javascript" src="js/justified-gallery.min.js"></script>
        <!--pie chart-->
        <script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
        <!-- instagram -->
        <script type="text/javascript" src="js/instafeed.min.js"></script>
        <!-- retina -->
        <script type="text/javascript" src="js/retina.min.js"></script>
        <!-- revolution -->
        <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
        <!-- revolution slider extensions (load below extensions JS files only on local file systems to make the slider work! The following part can be removed on server for on demand loading) -->
        <!--<script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>-->
        <!-- setting -->
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>