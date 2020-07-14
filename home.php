<?php
include_once './config/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Lce-ci</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">
    <meta charset="utf-8">
    <!-- Favicons -->
    <link href="./assets/img/fac.ico" rel="icon">
    <link href="./assets/img/fac.ico" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="./assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="./assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="./assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="./assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="./assets/css/style.css" rel="stylesheet">

</head>

<body>
<header id="header">
    <div class="header-bottom" style= "background: #f36400">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="header-contact">
                        <ul>
                            <li>
                                <div class="phone">
                                    <i class="fa fa-phone" style="color:rgb(92, 63, 63);"></i>
                                    <a href="#" style="color:rgb(255, 255, 255);">
                                        <b>+225 07 96 96 72</b>
                                        <b> </b>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="mail">
                                    <i class="fa fa-envelope" style="color:white;"></i>
                                    <a href="mailto:hotline@lce-ci.com" style="color:white;"><b>hotline@lce-ci.com</b></a>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container d-flex">

        <div class="logo mr-auto">
            <a href="./index.php"><img src="./assets/img/logo.png" alt=""></a>
        </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class=""><a href="home.php"><b><?php echo $lang['header']['h1']; ?></b></a></li>
                <li class="drop-down"><a href="solutions.php"><b><?php echo $lang['header']['h2']; ?></b></a>
                    <ul>
                        <li class="drop-down"><a href=""><?php echo $lang['header']['h2_']['1']; ?></a>
                            <ul>
                                <li><a href="solutions.php#digit_trans"><?php echo $lang['header']['h2_']['1_']['1']; ?></a></li>
                                <li><a href="solutions.php#digit_trans"><?php echo $lang['header']['h2_']['1_']['2']; ?></a></li>

                                <li><a href="solutions.php#soft_dev"><?php echo $lang['header']['h2_']['1_']['3']; ?></a></li>
                                <li><a href="solutions.php#services_"><?php echo $lang['header']['h2_']['1_']['4']; ?></a></li>
                                <li><a href="solutions.php#services_"><?php echo $lang['header']['h2_']['1_']['5']; ?></a></li>
                                <li><a href="solutions.php#services_"><?php echo $lang['header']['h2_']['1_']['6']; ?></a></li>
                                <li><a href="solutions.php#security"><?php echo $lang['header']['h2_']['1_']['7']; ?></a></li>
                                <li><a href="solutions.php#iot"><?php echo $lang['header']['h2_']['1_']['8']; ?></a></li>
                                <li><a href="solutions.php#ai"><?php echo $lang['header']['h2_']['1_']['9']; ?></a></li>
                                <!--<li><a href="solutions.php#consumptiom">Consumption</a>-->
                            </ul>
                        </li>
                        <li class="drop-down"><a href=""><?php echo $lang['header']['h2_']['2']; ?></a>
                            <ul>
                                <li class=""><a href="telecoms.php#thinks"><?php echo $lang['header']['h2_']['2_']['1']; ?></a></li>
                                <li class=""><a href="telecoms.php#build"><?php echo $lang['header']['h2_']['2_']['2']; ?></a></li>
                                <li><a href="telecoms.php#operate"><?php echo $lang['header']['h2_']['2_']['3']; ?></a></li>
                                <li><a href="telecoms.php#support"><?php echo $lang['header']['h2_']['2_']['4']; ?></a></li>
                                <!--<li><a href="telecoms.php#support"><?php /*echo $lang['header']['h2_']['2_']['5']; */?></a></li>-->
                            </ul>
                        </li>
                        <li><a href="404.php"><?php echo $lang['header']['h2_']['3']; ?></a></li>
                        <li><a href="404.php"><?php echo $lang['header']['h2_']['4']; ?></a></li>
                        <li><a href="404.php"><?php echo $lang['header']['h2_']['5']; ?></a></li>
                    </ul>
                </li>
                <li class=""><a href="404.php"><b><?php echo $lang['header']['h3']; ?></b></a></li>
                <li class="drop-down"><a href="#"><b><?php echo $lang['header']['h4']; ?></b></a>
                    <ul>
                        <li><a href="about_lce.php"><?php echo $lang['header']['h4_']['1']; ?></a></li>
                        <!--<li class="drop-down"><a href="#">About LCE</a>
                            <ul>
                                <li><a href="#">Corporate information</a></li>
                                <li><a href="#">Corporate culture</a></li>
                                <li><a href="#">Corporate governance</a></li>
                                <li><a href="#">Executives</a></li>
                                <li><a href="#">Sustainability</a></li>
                                <li><a href="#">Trust</a></li>
                            </ul>
                        </li>-->
                        <li><a href="partners.php"><?php echo $lang['header']['h4_']['2']; ?></a></li>
                        <!-- <li><a href="#">Top realizations</a></li>-->
                        <!--<li class="drop-down"><a href="#">Partners</a>
                            <ul>
                                <li><a href="#">Find a partner</a></li>
                                <li><a href="#">Become a partner</a></li>
                                <li><a href="#">Partner programs</a></li>
                            </ul>
                        </li>-->
                        <li><a href="portals.php"><?php echo $lang['header']['h4_']['3']; ?></a></li>

                        <li><a href="404.php"><?php echo $lang['header']['h4_']['4']; ?></a>
                            <!--<li class="drop-down"><a href="#">Press & Events</a>
                                <ul>
                                    <li><a href="press_events.php#news">News</a></li>
                                    <li><a href="press_events.php#events">Events</a></li>
                                    <li><a href="press_events.php#gallery">Photo Gallery</a></li>
                                </ul>
                            </li>-->
                            <!-- <li class="drop-down"><a href="#">Portals</a>
                                 <ul>
                                     <li><a href="#">Careers</a></li>
                                     <li><a href="job.php">Job</a></li>
                                     <li><a href="#">Developpers</a></li>
                                     <li><a href="#">Suppliers</a></li>
                                     <li><a href="#">LCE Blog</a></li>
                                 </ul>
                             </li>-->
                        <li><a href="contacts.php"><?php echo $lang['header']['h4_']['5']; ?></a></li>
                    </ul>
                </li>
                <!--<li class="ml-auto ml-2 mt-1"  style="right:-32px">
                    <a href="./contacts.php?lang=en" class="badge badge-light">En</a>
                </li>
                <li class="ml-auto mt-1" style="right:-32px">
                    <a href="./contacts.php?lang=fr" class="badge badge-light">Fr</a>
                </li>-->

            </ul>
        </nav>
        <div class="ml-auto ml-5 mt-2"  style="right:-32px;">
            <span>Fr</span>
            <a href="./home.php?lang=fr"><img src="./assets/img/lang/fr.png"
                                                  width="26" height="26" alt=""
                                                  title="<?php echo $lang['fr'];  ?>"
                ></a>
            <span>En</span>
            <a href="./home.php?lang=en"><img class="img img-fluid" src="./assets/img/lang/en.png"
                                                  width="26" height="26" alt=""
                                                  title="<?php echo $lang['en'];  ?>"
                ></a>
        </div>
    </div>
    <!-- <hr style="width:100%;text-align:center"> -->
</header>
<!-- END MENU -->

<section class="py-0" > 
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="15000">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li> 
        <!--    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>-->
        
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/home/digital.jpg" style="width:73.718vw; height:32.379vw" class="d-block w-100" alt="Slide 2">
                <div class="carousel-caption d-md-block" style="font-weight: bold;">
                    <h1 style="font-size: 2.4vw;">
                        <b class="kouame" data-elements="<?php echo $lang['home']['f3']; ?>"></b>
                    </h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/home/performance.jpg" style="width:73.718vw; height:32.379vw" class="d-block w-100" alt="Slide 2">
                <div class="carousel-caption d-md-block" style="font-weight: bold;">
                    <h1 style="font-size: 2.4vw;">
                        <b class="kouame" data-elements="<?php echo $lang['home']['f3']; ?>"></b>
                    </h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/home/test1.jpg" style="width:73.718vw; height:32.379vw" class="img-responsive d-block w-100" alt="Slide 1">
                <div class="carousel-caption d-md-block">
                    <h3><span class="kouame" data-elements="<?php echo $lang['home']['f1']; ?> >>> <?php echo $lang['home']['f2']; ?>" style="font-weight: bold; font-size: 2.4vw; color:white"></span></h3>
                </div>
            </div>
       <!--     <div class="carousel-item">
                <img src="assets/img/home/iot.jpg" style="width:73.718vw; height:32.379vw" class="d-block w-100" alt="Slide 2">
                <div class="carousel-caption d-md-block" style="font-weight: bold;">
                    <h1 style="font-size: 2.4vw;">
                      <b class="kouame" data-elements="<?php /*echo $lang['home']['f2']; */?> Le Futur c'est Maintenant !"></b>
                    </h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/home/blockchain.jpeg" style="width:73.718vw; height:32.379vw" class="d-block w-100" alt="Slide 2">
                <div class="carousel-caption d-md-block" style="font-weight: bold;">
                    <h1 style="font-size: 2.4vw;">
                      <b class="kouame" data-elements="<?php /*echo $lang['home']['f3']; */?>"></b>
                    </h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/home/croissance.jpg" style="width:73.718vw; height:32.379vw" class="d-block w-100" alt="Slide 2">
                <div class="carousel-caption d-md-block" style="font-weight: bold;">
                    <h1 style="font-size: 2.4vw;">
                      <b class="kouame" data-elements="<?php /*echo $lang['home']['f3']; */?>"></b>
                    </h1>
                </div>
            </div>-->
          <!--  <div class="carousel-item">
                <img src="assets/img/home/img4.jpg" width="1366" height="600" class="d-block w-100" alt="Slide 3">
                <div class="carousel-caption d-none d-md-block" style="font-weight: bold;">
                    <h3>
                    <span style="font-weight: bold">
                        Nous vous aidons à mieux comprendre vos besoins
                        afin d'obtenir un meilleur produit.
                    </span>
                    </h3>
                </div>
            </div>-->

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

<section class="home_pres" >
    <div class="container">
        <div class="section-title">
            <h2 data-aos="" class="aos-init aos-animate"><?php echo $lang['home']['cpy_name']; ?></h2>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 canvas-box magin30 text-center wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 300ms; animation-name: fadeInDown;">
                <div class="container aos-init aos-animate" style="color: #222; font-size: 21px;text-align: justify;line-height: 35px;margin: 0 0 10px;">
                    <p class="text-justify interligne" data-aos="fade-in">
                            <?php echo $lang['home']['f4']; ?>
                    </p>
                    <p class="text-center pt-4">
                        <a href="about_lce.php" class="btn btn-outline-secondary"><?php echo $lang['home']['f5']; ?></a>    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container p-t-3">
    <div class="section-title">
        <h2 data-aos="fade-in" class="aos-init">Services & solutions</h2>
    </div>
    <div class="row content">
        <div class="col-md-4 icon-box aos-init">
            <a href="solutions#soft_dev">
                <div class="card">
                    <img src="assets/img/home/DevOps.jpg" width="420" height="281"
                        class="card-img-top" alt="Image cyber-security">
                    <div class="card-body">
                        <p class="card-text">
                        <h4 class="text-center">DevOps</h4>
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 icon-box aos-init">
            <a href="solutions#security">
                <div class="card">
                    <img src="assets/img/services/cyber_secu.jpg" width="420" height="281"
                        class="card-img-top" alt="Image cyber-security">
                    <div class="card-body">
                        <p class="card-text">
                        <h4 class="text-center">Cyber security</h4>
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 icon-box aos-init">
            <a href="solutions#security">
                <div class="card">
                    <img src="assets/img/services/VIDEOSURVEILLANCE.jpg" width="420" height="281"
                        class="card-img-top" alt="Image vidéo surveillance">
                    <div class="card-body">
                        <p class="card-text">
                        <h4 class="text-center">Video surveillance</h4>
                        </p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <br>
    <div class="row content">
        <div class="col-md-4 icon-box aos-init">
            <a href="solutions.php#cloud-computing">    
                <div class="card">
                    <img src="assets/img/home/cloud-computing.jpg" width="420" height="281"
                        class="card-img-top" alt="Image cyber-security">
                    <div class="card-body">
                        <p class="card-text">
                        <h4 class="text-center">Cloud Computing</h4>
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 icon-box aos-init">
            <a href="solutions.php#business-coach">
                <div class="card">
                    <img src="assets/img/home/business-coach.jpg" width="420" height="281"
                        class="card-img-top" alt="Image cyber-security">
                    <div class="card-body">
                        <p class="card-text">
                        <h4 class="text-center">Business Coach</h4>
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 icon-box aos-init">
            <a href="solutions.php#digit_trans"> 
                <div class="card">
                    <img src="assets/img/home/transformation-digital.jpg" width="420" height="281" class="card-img-top" alt="Image vidéo surveillance">
                    <div class="card-body">
                        <p class="card-text">
                            <h4 class="text-center">Digital transformation</h4>
                        </p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!--<div class="container">
        <div class="row no-gutters clients-wrap clearfix wow fadeInUp">
            <div class="col-lg-2 col-md-4 col-6">
                <div class="client-logo">
                    <img src="assets/img/techs/java-96.png" alt="java slide" class="img-fluid" data-aos="flip-right">
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <div class="client-logo">
                    <img src="assets/img/techs/php-96.png" alt="php slide" class="img-fluid" data-aos="flip-right" data-aos-delay="100">
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <div class="client-logo">
                    <img src="assets/img/techs/python-96.png" alt="python slide" class="img-fluid" data-aos="flip-right" data-aos-delay="200">
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <div class="client-logo">
                    <img src="assets/img/techs/javascript-96.png" alt="javascript slide" class="img-fluid" data-aos="flip-right" data-aos-delay="300">
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <div class="client-logo">
                    <img src="assets/img/techs/android-os-96.png" alt="android slide" class="img-fluid" data-aos="flip-right" data-aos-delay="400">
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <div class="client-logo">
                    <img src="assets/img/techs/flutter-96.png" alt="flutter slide" class="img-fluid" data-aos="flip-right" data-aos-delay="500">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row no-gutters clients-wrap clearfix wow fadeInUp">
            <div class="col-lg-2 col-md-4 col-6">
                <div class="client-logo">
                    <img src="assets/img/techs/django-96.png" alt="Django slide" class="img-fluid" data-aos="flip-right">
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <div class="client-logo">
                    <img src="assets/img/techs/symfony-96.png" alt="symfony slide" class="img-fluid" data-aos="flip-right" data-aos-delay="100">
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <div class="client-logo">
                    <img src="assets/img/techs/laravel-96.png" class="img-fluid" data-aos="flip-right" data-aos-delay="200">
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <div class="client-logo">
                    <img src="assets/img/techs/spring-logo-96.png" alt="spring slide" class="img-fluid" data-aos="flip-right" data-aos-delay="500">
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <div class="client-logo">
                    <img src="assets/img/techs/angularjs-96.png" alt="Angular slide" class="img-fluid" data-aos="flip-right" data-aos-delay="300">
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <div class="client-logo">
                    <img src="assets/img/techs/vuejs-96.png" alt="Vuejs slide" class="img-fluid" data-aos="flip-right" data-aos-delay="400">
                </div>
            </div>

        </div>
    </div>-->
</section>

<section id="pricing customers" class="pricing customers section-bg">
    <div class="container">

        <div class="section-title">
            <h2 data-aos="fade-in" class="aos-init aos-animate"><?php echo $lang['home']['f6']; ?></h2>
            <p data-aos="fade-in" class="aos-init aos-animate">
                <?php echo $lang['home']['f7']; ?>
            </p>
        </div>

        <div class="row no-gutters">

            <div class="col-lg-4 box aos-init aos-animate" data-aos="zoom-in" style="cursor: pointer;">
                <h3>B2C</h3>
                <h4><span><?php echo $lang['home']['c_1']; ?></span></h4>
                <ul>
                    <li><i class="bx bx-check"></i> <?php echo $lang['home']['c_3']; ?></li>
                    <li><i class="bx bx-check"></i> <?php echo $lang['home']['c_4']; ?></li>
                </ul>
            </div>

            <div class="col-lg-4 box aos-init aos-animate" data-aos="zoom-in">
                <h3>B2B</h3>
                <h4><span><?php echo $lang['home']['c_4']; ?></span></h4>
                <ul>
                    <li><i class="bx bx-check"></i> <?php echo $lang['home']['c_5']; ?></li>
                    <li><i class="bx bx-check"></i> <?php echo $lang['home']['c_6']; ?></li>
                    <li><i class="bx bx-check"></i> <?php echo $lang['home']['c_7']; ?></li>
                    <li><i class="bx bx-check"></i> ISP</li>

                   
                </ul>
            </div>

            <div class="col-lg-4 box aos-init aos-animate" data-aos="zoom-in">
                <h3>B2E</h3>
                <h4><span><?php echo $lang['home']['c_8']; ?></span></h4>
                <ul>
                    <li><i class="bx bx-check"></i> <?php echo $lang['home']['c_9']; ?></li>
                    <li><i class="bx bx-check"></i> <?php echo $lang['home']['c_10']; ?></li>
                    <li><i class="bx bx-check"></i> <?php echo $lang['home']['c_11']; ?></li>
                    <li><i class="bx bx-check"></i> <?php echo $lang['home']['c_12']; ?></li>
                </ul>
            </div>

        </div>

    </div>
</section>


<div class="container mb-3">
    <div class="row">

        <div class="bx-pull-right">
            <a type="button" class="btn btn-outline-primary"
               href="clients_project.php"
            ><?php echo $lang['ask_1']; ?></a>
        </div>
        <div class="bx-pull-right">
            <a type="button" class="btn btn-outline-primary"
               href="contacts.php"
            ><?php echo $lang['ask_2']; ?></a>
        </div>
    </div>
</div>
<br>

<?php include_once('include/footer.php') ?>
