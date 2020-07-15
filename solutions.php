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
                                <li><a href="solutions.php#soft_dev"><?php echo $lang['header']['h2_']['1_']['1']; ?></a></li>
                                <li><a href="solutions.php#digit_trans"><?php echo $lang['header']['h2_']['1_']['2']; ?></a></li>

                                <li><a href="solutions.php#soft_dev_1"><?php echo $lang['header']['h2_']['1_']['3']; ?></a></li>
                                <li><a href="solutions.php#services_"><?php echo $lang['header']['h2_']['1_']['4']; ?></a></li>
                                <li><a href="solutions.php#services_"><?php echo $lang['header']['h2_']['1_']['5']; ?></a></li>
                    <!--            <li><a href="solutions.php#services_"><?php /*echo $lang['header']['h2_']['1_']['6']; */?></a></li>-->
                                <li><a href="solutions.php#security"><?php echo $lang['header']['h2_']['1_']['7']; ?></a></li>
                                <li><a href="solutions.php#iot"><?php echo $lang['header']['h2_']['1_']['8']; ?></a></li>
                                <!--
                                <li><a href="solutions.php#ai"><?php echo $lang['header']['h2_']['1_']['9']; ?></a></li>
                                <li><a href="solutions.php#consumptiom">Consumption</a>-->
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
        <div id="lang" class="ml-auto ml-5 mt-2"  style="right:-32px">
            <span style="background-color:transparent; font-size: 17px;" class="badge badge-light">Fr <a href="./solutions.php?lang=fr">
                    <img src="./assets/img/lang/fr.png" width="26" height="26" alt=""
                         title="<?php echo $lang['fr'];  ?>"
                    ></a>
            </span>
            <span style="background-color:transparent; font-size: 17px;" class="badge badge-light">
                 En<a href="./solutions.php?lang=en"><img src="./assets/img/lang/en.png"
                                                         width="26" height="26" alt=""
                                                         title="<?php echo $lang['en'];  ?>"
                    ></a>
            </span>
        </div>
    </div>

    <!-- <hr style="width:100%;text-align:center"> -->
</header>
<!-- END MENU -->

<section id="soft_dev" class="soft_dev section-bg">
    <div class="container">
        <div class="section-title">
            <h2 data-aos="fade-in" class="aos-init"><?php echo $lang['solutions']['it']['webmaster']['title']; ?></h2>
        </div>
        <div class="row content" id="">
            <div class="col-md-5 aos-init" data-aos="fade-right">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/img/services/site-internet-responsif.jpg" class="d-block w-100" height="300px" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5></h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                            <img src="assets/img/services/site-internet.jpeg" class="d-block w-100" height="300px" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5></h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/services/SAAS1.jpg" class="d-block w-100" height="300px" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5></h5>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            
            <!--<img src="assets/img/services/software_dev.jpg" alt="Image solution 3" class="img-fluid img-thumbnail">-->
        </div>
        <div class="col-md-7 pt-7 aos-init" data-aos="fade-left">
            <h3><?php echo $lang['solutions']['it']['webmaster']['subtitle']; ?></h3>
            <p style="color: black; font-size: 18px;text-align: justify;line-height: 35px;">
                <?php echo $lang['solutions']['it']['webmaster']['content1']; ?>
            </p>
            <p style="color: black; font-size: 18px;text-align: justify;line-height: 35px;">
                <?php echo $lang['solutions']['it']['webmaster']['content2']; ?>
            </p>
            <p style="color: black; font-size: 18px;text-align: justify;line-height: 35px;">
                <?php echo $lang['solutions']['it']['webmaster']['content3']; ?>
            </p>
        </div>

        </div>
        <!-- Start Web Master Service   -->

        </div>
    </div>
</section>

<section id="soft_dev_1" class="soft_dev section-bg">
    <div class="container">
        <div class="section-title">
            <h2 data-aos="fade-in" class="aos-init"><?php echo $lang['solutions']['it']['saas']['title']; ?></h2>
        </div>
        <div class="row content" id="">
            <div class="col-md-5 aos-init" data-aos="fade-right"> <br> 
                <div id="carouselExampleCaptionsK" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptionsK" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptionsK" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptionsK" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                                <img src="assets/img/services/software.jpeg" class="d-block w-100"height="300px"  alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5></h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/services/logiciel-gestion.png" class="d-block w-100" height="300px" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5></h5>
                                <p></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/services/gestion.png" class="d-block w-100" height="300px" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5></h5>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptionsK" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptionsK" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            
            <!--<img src="assets/img/services/software_dev.jpg" alt="Image solution 3" class="img-fluid img-thumbnail">-->
            </div>
            <div class="col-md-7 pt-7 aos-init" data-aos="fade-left"> <br>
                <h3><?php echo $lang['solutions']['it']['saas']['subtitle']; ?></h3>
                <p style="color: black; font-size: 18px;text-align: justify;line-height: 35px;">
                    <?php echo $lang['solutions']['it']['saas']['content1']; ?>
                <p style="color: black; font-size: 18px;text-align: justify;line-height: 35px;">
                    <?php echo $lang['solutions']['it']['saas']['content2']; ?>
                </p>
                <p style="color: black; font-size: 18px;text-align: justify;line-height: 35px;">
                    <?php echo $lang['solutions']['it']['saas']['content3']; ?>
                </p>
            </div>

        </div>
    </div>
</section>

<section id="digit_trans" class="digit_trans section-bg">
    <div class="container">
        <div class="section-title">
            <h2 data-aos="fade-in" class="aos-init"><?php echo $lang['solutions']['it']['digit_trans']['title']; ?></h2>
        </div>
        <div class="row content" id="">
            <div class="col-md-5 aos-init" data-aos="fade-right">
                
                <div id="carouselExampleCaptions1" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions1" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions1" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions1" data-slide-to="2"></li>
                        <li data-target="#carouselExampleCaptions1" data-slide-to="3"></li>
                        <li data-target="#carouselExampleCaptions1" data-slide-to="4"></li>
                        <li data-target="#carouselExampleCaptions1" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/img/services/digital-transformation.png" height="300px" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5></h5>
                                <p></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/services/transformation-digitale.jpg" height="300px" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5></h5>
                                <p></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/services/digital-transformation1.png" height="300px" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5></h5>
                                <p></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/services/digit-transt.jpg" height="300px" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5></h5>
                                <p></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/services/5G.jpg" height="300px" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5></h5>
                                <p></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                        <img src="assets/img/services/transformation-digitale2.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5></h5>
                            <p></p>
                        </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    </div>
            
                
                 <!--<img src="assets/img/services/digit_trans.jpg" alt="Image solution 3" class="img-fluid img-thumbnail">-->
            </div>
            <div class="col-md-7 pt-7 aos-init" data-aos="fade-left">
                <h3><?php echo $lang['solutions']['it']['digit_trans']['subtitle']; ?></h3>
                <p style="color: black; font-size: 18px;text-align: justify;line-height: 35px;">
                    <?php echo $lang['solutions']['it']['digit_trans']['content1']; ?>
                </p>
                <p style="color: black; font-size: 18px;text-align: justify;line-height: 35px;">
                    <?php echo $lang['solutions']['it']['digit_trans']['content2']; ?>
                </p>
            </div>

        </div>
    </div>
</section>
<section id="services_" class="services section-bg">
    <div class="container">
        <div class="section-title">
            <h2 data-aos="fade-in" class="aos-init">Services</h2>
        </div>
        <div class="row content" id="cloud-computing">
            <div class="col-md-5 aos-init" data-aos="fade-right">
                
                <div id="carouselExampleCaptions2" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions2" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions2" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions2" data-slide-to="2"></li>

                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="assets/img/services/Cloud_computing.png" style="height: 300px;" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="assets/img/services/cloud_computing.jpg" style="height: 300px;" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5><?php echo $lang['solutions']['it']['cloud_c']['img2_t']; ?>
                                </h5>
                            <p><?php echo $lang['solutions']['it']['cloud_c']['img2_text']; ?></p>
                        </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/services/Cloud-computing.jpg" style="height: 300px;" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5></h5>
                                <p></p>
                            </div>
                        </div>
                       
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions2" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions2" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            <!--<img src="assets/img/services/cloud_computing.jpg" alt="Image cloud computing" class="img-fluid img-thumbnail">-->
            </div>
            <div class="col-md-7 pt-1 aos-init aos-animate" data-aos="fade-left">
                <h3><?php echo $lang['solutions']['it']['cloud_c']['title']; ?></h3>
                <p style="color: black; font-size: 18px;text-align: justify;line-height: 35px;">
                    <?php echo $lang['solutions']['it']['cloud_c']['content1']; ?>
                </p>
                <p style="color: black; font-size: 18px;text-align: justify;line-height: 35px;">
                    <?php echo $lang['solutions']['it']['cloud_c']['content2']; ?>
                </p>

            </div>
        </div>

        <div class="row content">
            <div class="col-md-5 order-1 order-md-2 aos-init" data-aos="fade-left">
                
                <div id="carouselExampleCaptions3" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions3" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions3" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions3" data-slide-to="2"></li>
                        <li data-target="#carouselExampleCaptions3" data-slide-to="3"></li>

                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="assets/img/services/entreprise_network.jpg" style="height: 300px;" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5></h5>
                            <p></p>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="assets/img/services/enterprise-networking1.jpeg" style="height: 300px;" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5></h5>
                            <p></p>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="assets/img/services/Enterprise-Networking.jpg" style="height: 300px;" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5></h5>
                            <p></p>
                        </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/services/operate.png" style="height: 300px;" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5></h5>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions3" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions3" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    </div>
                <!--<img src="assets/img/services/entreprise_network.jpg" alt="Image entreprise network" class="img-fluid img-thumbnail">-->
            </div>
            <div class="col-md-7 pt-5 order-2 order-md-1 aos-init" data-aos="fade-right">
                <h3><?php echo $lang['solutions']['it']['enter_net']['title']; ?></h3>
                <p style="color: black; font-size: 18px;text-align: justify;line-height: 35px;">
                    <?php echo $lang['solutions']['it']['enter_net']['content1']; ?>
                </p>
            </div>
        </div>

        <div class="row content" id="business-coach">
            <div class="col-md-5 aos-init" data-aos="fade-right">

                <div id="carouselExampleCaptions4" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions4" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions4" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions4" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner"> <br> <br>
                        <div class="carousel-item active">
                            <img src="assets/img/services/business-coaching.jpg" style="height: 330px;" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5></h5>
                                <p></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/services/business-coach.png" style="height: 330px;" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5></h5>
                                <p></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/services/business_coaching.jpg" style="height: 330px;" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5></h5>
                                <p></p>
                            </div>
                        </div>
                     
                       
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions4" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions4" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    </div>
               <!-- <img src="assets/img/services/business_coaching.jpg" alt="Image business_coaching" class="img-fluid img-thumbnail">-->
            </div>
            <div class="col-md-7 pt-5 aos-init" data-aos="fade-left">
                <h3><?php echo $lang['solutions']['it']['bc']['title']; ?></h3>
                <p style="color: black; font-size: 18px;text-align: justify;line-height: 35px;">
                    <?php echo $lang['solutions']['it']['bc']['content1']; ?>
                </p>
                <p style="color: black; font-size: 18px;text-align: justify;line-height: 35px;">
                </p>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
        <div class="col-md-5 aos-init" data-aos="fade-right">

<div id="carouselExampleCaptions14" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselVas" data-slide-to="0" class="active"></li>
        <li data-target="#carouselVas" data-slide-to="1"></li>
        <li data-target="#carouselVas" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/img/services/VAS1.jpg" style="height: 300px;" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="assets/img/services/VAS2.jpg" style="height: 300px;" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="assets/img/services/VAS3.png" style="height: 300px;" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions14" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions14" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
<!-- <img src="assets/img/services/business_coaching.jpg" alt="Image business_coaching" class="img-fluid img-thumbnail">-->
</div>
            <div class="col-md-7 pt-7 aos-init" data-aos="fade-left">
                <h3><?php echo $lang['solutions']['it']['sva']['title']; ?></h3>
                <p>
                    <?php echo $lang['solutions']['it']['sva']['content1']; ?>
                </p>
            </div>

           <!-- <div class="col-md-6 pt-6 aos-init" data-aos="fade-left">
                <h3>Learning Services</h3>
                <p style="color: black; font-size: 18px;text-align: justify;line-height: 35px;">
                    La Locomotive accompagne ces clients à s'adapter aux nouvelles technologies.
                </p>
            </div>-->
        </div>
    </div>
</section>
<section id="iot" class="iot section-bg">
    <div class="container">
        <div class="section-title">
            <h2 data-aos="fade-in" class="aos-init"><?php echo $lang['solutions']['it']['iot']; ?></h2>
        </div>
        <div class="row content" id="">
            <div class="col-md-5 aos-init" data-aos="fade-right">


            <div id="carouselExampleCaptions5" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions5" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions5" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions5" data-slide-to="2"></li>
                        <li data-target="#carouselExampleCaptions5" data-slide-to="3"></li>
                        <li data-target="#carouselExampleCaptions5" data-slide-to="4"></li>


                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="assets/img/services/rfid.png" style="height: 300px;" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5></h5>
                            <p></p>
                        </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/services/RFID2.jpg" style="height: 300px;" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5></h5>
                                <p></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/services/RFID3.png"  style="height: 300px;" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5></h5>
                                <p></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/services/RFID4.png" style="height: 300px;" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5></h5>
                                <p></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/services/RFID5.png" style="height: 300px;" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5></h5>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions5" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions5" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    </div>

                <!--<img src="assets/img/services/RFID2.jpg" alt="Image solution 3" class="img-fluid img-thumbnail">-->
            </div>
            <div class="col-md-7 pt-7 aos-init" data-aos="fade-left">
                <h3><?php echo $lang['solutions']['it']['iot_rfid']['title']; ?></h3>
                <p style="color: black; font-size: 18px;text-align: justify;line-height: 35px;">
                    <?php echo $lang['solutions']['it']['iot_rfid']['content1']; ?>
                </p>
                <p style="color: black; font-size: 18px;text-align: justify;line-height: 35px;">
                    <?php echo $lang['solutions']['it']['iot_rfid']['content2']; ?>
                </p>
            </div>

        </div>
        <div class="row content mt-3" id="">
            <div class="col-md-5 aos-init" data-aos="fade-right">
            <div id="carouselExampleCaptions6" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions6" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions6" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions6" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="assets/img/services/NFC2.jpg" style="height: 250px;" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5></h5>
                            <p></p>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="assets/img/services/NFC3.png" style="height: 250px;" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5></h5>
                            <p></p>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="assets/img/services/NFC4.png" style="height: 250px;" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5></h5>
                            <p></p>
                        </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions6" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions6" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    </div>
                <!--<img src="assets/img/services/NFC2.jpg" alt="Image solution 3" class="img-fluid img-thumbnail">-->
            </div>
            <div class="col-md-7 pt-7 aos-init" data-aos="fade-left">
                <h3><?php echo $lang['solutions']['it']['iot_nfc']['title']; ?></h3>
                <p style="color: black; font-size: 18px;text-align: justify;line-height: 35px;">
                    <?php echo $lang['solutions']['it']['iot_nfc']['content1']; ?>
                </p>
                <p style="color: black; font-size: 18px;text-align: justify;line-height: 35px;">
                    <?php echo $lang['solutions']['it']['iot_nfc']['content2']; ?>
                </p>
            </div>

        </div>
    </div>
</section>
<section id="ai" class="ai section-bg">
    <div class="container">
        <div class="section-title">
            <h2 data-aos="fade-in" class="aos-init"><?php echo $lang['solutions']['it']['ia']; ?></h2>
        </div>
        <div class="row content" id="">
            <div class="col-md-5 aos-init" data-aos="fade-right">
                <img src="assets/img/services/machine-learning.jpg" alt="Image business_coaching" class="img-fluid img-thumbnail">
            </div>
            <div class="col-md-7 pt-1 aos-init" data-aos="fade-left">
                <h3><?php echo $lang['solutions']['it']['ia_1']['title']; ?></h3>
                <p style="color: black; font-size: 18px;text-align: justify;line-height: 35px;">
                    <?php echo $lang['solutions']['it']['ia_1']['content1']; ?>
                </p>
            </div>
        </div>
        <div class="row mt-3 content">
            <div class="col-md-5 aos-init" data-aos="fade-right">
                <img src="assets/img/services/Big-Data-2.jpg" alt="Image cloud computing" class="img-fluid img-thumbnail">
            </div>
            <div class="col-md-7 pt-1 aos-init aos-animate" data-aos="fade-left">
                <h3><?php echo $lang['solutions']['it']['ia_2']['title']; ?></h3>
                <p style="color: black; font-size: 18px;text-align: justify;line-height: 35px;">
                    <?php echo $lang['solutions']['it']['ia_2']['content1']; ?>
                </p>
                <p style="color: black; font-size: 18px;text-align: justify;line-height: 35px;">
                    <?php echo $lang['solutions']['it']['ia_2']['content2']; ?>
                </p>

            </div>
        </div>

        <div class="row mb-4 content">
        <div class="col-md-5 aos-init" data-aos="fade-right">
                <img src="assets/img/services/correlation.png" alt="Image business_coaching" class="img-fluid img-thumbnail">
            </div>
            <div class="col-md-7 pt-1  aos-init" data-aos="fade-right">
                <h3><?php echo $lang['solutions']['it']['ia_3']['title']; ?></h3>
                <p style="color: black; font-size: 18px;text-align: justify;line-height: 35px;">
                    <?php echo $lang['solutions']['it']['ia_3']['content1']; ?>
                </p>
                <p style="color: black; font-size: 18px;text-align: justify;line-height: 35px;">
                    <?php echo $lang['solutions']['it']['ia_3']['content2']; ?>
                </p>

            </div>
        </div>

        <div class="row content" id="">
            <div class="col-md-5 aos-init" data-aos="fade-right">
                <img src="assets/img/services/call-center-solution.jpg" alt="Image business_coaching" class="img-fluid img-thumbnail">
            </div>
            <div class="col-md-7 pt-1 aos-init" data-aos="fade-left">
                <h3><?php echo $lang['solutions']['it']['ia_4']['title']; ?></h3>
                <p style="color: black; font-size: 18px;text-align: justify;line-height: 35px;">
                    <?php echo $lang['solutions']['it']['ia_4']['content1']; ?>
                </p>
            </div>
        </div>
    </div>
</section>
<section id="security" class="security">
    <div class="container">
        <div class="section-title">
            <h2 data-aos="fade-in" class="aos-init"><?php echo $lang['solutions']['it']['secu']; ?></h2>
        </div>
        <div class="row content">
            <div class="col-md-4 icon-box aos-init">
                <div class="card">
                    <img src="assets/img/services/cyber_secu.jpg" width="420" height="281"
                         class="card-img-top" alt="Image cyber-security">
                    <div class="card-body">
                        <p class="card-text">
                            <h4 class="text-center"><a href="#"><?php echo $lang['solutions']['it']['secu_1']; ?></a></h4>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 icon-box aos-init">
                <div class="card">
                    <img src="assets/img/services/VIDEOSURVEILLANCE.jpg" width="420" height="281"
                         class="card-img-top" alt="Image vidéo surveillance">
                    <div class="card-body">
                        <p class="card-text">
                            <h4 class="text-center"><a href="#">
                                <?php echo $lang['solutions']['it']['secu_2']; ?>
                                </a></h4>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 icon-box aos-init">
                <div class="card">
                    <img src="assets/img/services/tracking.jpg"  width="420" height="281"
                         class="card-img-top" alt="Image tracking">
                    <div class="card-body">
                        <p class="card-text">
                            <h4 class="text-center"><a href="#"><?php echo $lang['solutions']['it']['secu_3']; ?></a></h4>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<br><br>

<div class="container mb-3">
    <div class="row">
        <div class="bx-pull-right">
            <a type="button" class="btn btn-outline-primary"
               href="clients_project.php"
            ><?php echo $lang['ask_1']; ?></a>
        </div>
        <div class="bx-pull-right">
            <a type="button" class="btn btn-outline-secondary"
               href="contacts.php"
            ><?php echo $lang['ask_2']; ?></a>
        </div>
    </div>
</div>
<br>

<?php include_once('include/footer.php') ?>
