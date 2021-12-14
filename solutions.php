<?php
include_once './config/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>IGP</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">
    <meta charset="utf-8">
    <!-- Favicons -->
    <link href="igpicon.jpg" rel="icon">
    <link href="igpicon.jpg" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="./assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="./assets/vendor/icofont/icofont.min.css" rel="stylesheet"> -->
    <!-- <link href="./assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet"> -->
    <!-- <link href="./assets/vendor/venobox/venobox.css" rel="stylesheet"> -->
    <!-- <link href="./assets/vendor/aos/aos.css" rel="stylesheet"> -->

    <!-- Template Main CSS File -->
    <link href="./assets/css/style.css" rel="stylesheet">

</head>

<body>
<?php include_once('./include/header.php') ?>
<!-- END MENU -->
<section class="py-0" > 
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="15000">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/home-slide/evenementiel-image-accueil-site-web.png" style="width:70.718vw; height:32.379vw" class="d-block w-100" alt="Slide 2">

            </div>
            <div class="carousel-item">
                <img src="assets/img/home-slide/marketing-operationnel-image-accueil-site-web.png" style="width:70.718vw; height:32.379vw" class="d-block w-100" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="assets/img/home-slide/gadgets-publicitaires-image-accueil-site-web.png" style="width:70.718vw; height:32.379vw" class="img-responsive d-block w-100" alt="Slide 1">
               
            </div>
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
<div class="container">
    <div>
        <p class="font-weight-bold">Chez Ivoire Goodies Performances, Nous avons cumulé une expertise d’assistance partenaires au travers des nombreuses activités menées depuis notre création.</p>
        <p class="font-weight-bold">A ce jour, Nous comptons plus d’une dizaine de collaborateurs pour qui nous nous efforçons de toujours délivrer un service de qualité</p>
        <p class="font-weight-bold">Vu l’environnement assez compétitif dans lequel nos partenaires interagissent, il est important de noter que la discrétion et le secret professionnel sont incorporés dans notre méthodologie d’assistance</p>
        <p class="font-weight-bold">Nos réalisations les plus notable comprennent :</p>
    </div>
</div>
<section id="soft_dev" class="soft_dev section-bg">
    <div class="container">
        
        <div class="section-title">
            <h2 data-aos="fade-in" class="aos-init"><?php echo $lang['solutions']['it']['orange']['title']; ?></h2>
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
                            <img src="assets/img/realisations/orange.png" width="60%" class="d-block"  alt="...">
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
            <!-- <h3><?php echo $lang['solutions']['it']['orange']['subtitle']; ?></h3> -->
            <p style="color: black; font-size: 18px;text-align: justify;line-height: 30px;">
                <?php echo $lang['solutions']['it']['orange']['content1']; ?>
            </p>
            <p style="color: black; font-size: 18px;text-align: justify;line-height: 30px;">
                <?php echo $lang['solutions']['it']['orange']['content2']; ?>
            </p>
            <p style="color: black; font-size: 18px;text-align: justify;line-height: 30px;">
                <?php echo $lang['solutions']['it']['orange']['content3']; ?>
            </p>
            <p style="color: black; font-size: 18px;text-align: justify;line-height: 30px;">
                <?php echo $lang['solutions']['it']['orange']['content4']; ?>
            </p>
            <p style="color: black; font-size: 18px;text-align: justify;line-height: 30px;">
                <?php echo $lang['solutions']['it']['orange']['content5']; ?>
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
            <h2 data-aos="fade-in" class="aos-init"><?php echo $lang['solutions']['it']['sib']['title']; ?></h2>
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
                                <img src="assets/img/realisations/sib.jpg" width="60%" class="d-block" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5></h5>
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
                <p style="color: black; font-size: 18px;text-align: justify;line-height: 35px;">
                    <?php echo $lang['solutions']['it']['sib']['content1']; ?>
                <p style="color: black; font-size: 18px;text-align: justify;line-height: 35px;">
                    <?php echo $lang['solutions']['it']['sib']['content2']; ?>
                </p>
                <p style="color: black; font-size: 18px;text-align: justify;line-height: 35px;">
                    <?php echo $lang['solutions']['it']['sib']['content3']; ?>
                </p>
                <p style="color: black; font-size: 18px;text-align: justify;line-height: 35px;">
                    <?php echo $lang['solutions']['it']['sib']['content4']; ?>
                </p>
                
            </div>

        </div>
    </div>
</section>

<section id="digit_trans" class="digit_trans section-bg">
    <div class="container">
        <div class="section-title">
            <h2 data-aos="fade-in" class="aos-init"><?php echo $lang['solutions']['it']['nsia']['title']; ?></h2>
        </div>
        <div class="row content" id="">
            <div class="col-md-5 aos-init" data-aos="fade-right">
                
                <div id="carouselExampleCaptions1" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions1" data-slide-to="0"  class="active"></li>
                        <li data-target="#carouselExampleCaptions1" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions1" data-slide-to="2"></li>
                        <li data-target="#carouselExampleCaptions1" data-slide-to="3"></li>
                        <li data-target="#carouselExampleCaptions1" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/img/realisations/nsia.jpg" width="60%" class="d-block" alt="...">
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
            
                
                 <!--<img src="assets/img/services/nsia.jpg" alt="Image solution 3" class="img-fluid img-thumbnail">-->
            </div>
            <div class="col-md-7 pt-7 aos-init" data-aos="fade-left">
                <p style="color: black; font-size: 18px;text-align: justify;line-height: 35px;">
                    <?php echo $lang['solutions']['it']['nsia']['content1']; ?>
                </p>
                <p style="color: black; font-size: 18px;text-align: justify;line-height: 35px;">
                    <?php echo $lang['solutions']['it']['nsia']['content2']; ?>
                </p>
            </div>

        </div>
    </div>
</section>
<section id="services_" class="soft_dev section-bg">
    <div class="container">
        <div class="section-title">
            <!-- <h2 data-aos="fade-in" class="aos-init">Services</h2> -->
        </div>
        <div class="row content " id="cloud-computing" >
            <div class="col-md-5 aos-init" data-aos="fade-right">
                
                <div id="carouselExampleCaptions2" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions2" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions2" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions2" data-slide-to="2"></li>

                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="assets/img/realisations/oneci.png" width="60%" class="d-block" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            
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
            <!--<img src="assets/img/services/oneciomputing.jpg" alt="Image cloud computing" class="img-fluid img-thumbnail">-->
            </div>
            <div class="col-md-7 pt-1 aos-init aos-animate" data-aos="fade-left">
                <h3><?php echo $lang['solutions']['it']['oneci']['title']; ?></h3>
                <p style="color: black; font-size: 18px;text-align: justify;line-height: 30px;">
                    <?php echo $lang['solutions']['it']['oneci']['content1']; ?>
                </p>
                <p style="color: black; font-size: 18px;text-align: justify;line-height: 30px;">
                    <?php echo $lang['solutions']['it']['oneci']['content2']; ?>
                </p>
                <p style="color: black; font-size: 18px;text-align: justify;line-height: 30px;">
                    <?php echo $lang['solutions']['it']['oneci']['content3']; ?>
                </p>
                <p style="color: black; font-size: 18px;text-align: justify;line-height: 30px;">
                    <?php echo $lang['solutions']['it']['oneci']['content4']; ?>
                </p>
            </div>
        </div>
    </div>
    
</section>
<section id="iot" class="iot section-bg">
    <div class="container">
        <div class="section-title">
            <h2 data-aos="fade-in" class="aos-init"><?php echo $lang['solutions']['it']['sodeci']['title']; ?></h2>
        </div>
        <div class="row content ">
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
                        <img src="assets/img/realisations/sodeci.png" width="60%" class="d-block" alt="...">
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
                <h3></h3>
                <p style="color: black; font-size: 18px;text-align: justify;line-height: 35px;">
                    <?php echo $lang['solutions']['it']['sodeci']['content1']; ?>
                </p>
                <p style="color: black; font-size: 18px;text-align: justify;line-height: 35px;">
                    <?php echo $lang['solutions']['it']['sodeci']['content2']; ?>
                </p>
            </div>
        </div>
    </div>
</section>
<section id="ai" class="ai section-bg">
    <div class="container">
        <div class="section-title">
            <h2 data-aos="fade-in" class="aos-init"><?php echo $lang['solutions']['it']['cnps']['title']; ?></h2>
        </div>
        <div class="row content " id="business-coach">
            <div class="col-md-5 aos-init" data-aos="fade-right">

                <div id="carouselExampleCaptions4" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions4" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions4" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions4" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner"> <br> <br>
                        <div class="carousel-item active">
                            <img src="assets/img/realisations/cnps.png" width="60%" class="d-block " alt="...">
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
                <h3></h3>
                <p style="color: black; font-size: 18px;text-align: justify;line-height: 35px;">
                    <?php echo $lang['solutions']['it']['cnps']['content1']; ?>
                </p>
                <p style="color: black; font-size: 18px;text-align: justify;line-height: 35px;">
                    <?php echo $lang['solutions']['it']['cnps']['content2']; ?>
                </p>
                <p style="color: black; font-size: 18px;text-align: justify;line-height: 35px;">
                </p>
            </div>
        </div>
        
    </div>
</section>
<section id="security" class="security section-bg">
    <div class="container">
        <div class="section-title">
            <h2 data-aos="fade-in" class="aos-init"><?php echo $lang['solutions']['it']['cie']['title']; ?></h2>
        </div>
        <div class="row content ">
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
                        <img src="assets/img/realisations/cie.jpg" width="60%" class="d-block" alt="...">
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
                <h3</h3>
                <p style="color: black; font-size: 18px;text-align: justify;line-height: 30px;">
                    <?php echo $lang['solutions']['it']['cie']['content1']; ?>
                </p>
                <p style="color: black; font-size: 18px;text-align: justify;line-height: 30px;">
                    <?php echo $lang['solutions']['it']['cie']['content2']; ?>
                </p>
                <p style="color: black; font-size: 18px;text-align: justify;line-height: 30px;">
                    <?php echo $lang['solutions']['it']['cie']['content3']; ?>
                </p>
            </div>
        </div>
        
    </div>
</section>
<section id="iot" class="iot section-bg">
    <div class="container">
        <div class="section-title">
            <h2 data-aos="fade-in" class="aos-init"><?php echo $lang['solutions']['it']['jumia']['title']; ?></h2>
        </div>
        <div class="container mt-4 ">
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
                                <img src="assets/img/realisations/jumia.png" width="60%" class="d-block " alt="...">
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
                    <h3></h3>
                    <p>
                        <?php echo $lang['solutions']['it']['jumia']['content1']; ?>
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
    </div>
</section>
<section id="ai" class="ai section-bg">
    <div class="container">
        <div class="section-title">
            <h2 data-aos="fade-in" class="aos-init"><?php echo $lang['solutions']['it']['mtn']['title']; ?></h2>
        </div>
        <div class="row content ">
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
                        <img src="assets/img/realisations/mtn.png" width="60%"  class="d-block" alt="...">
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
                <h3></h3>
                <p style="color: black; font-size: 18px;text-align: justify;line-height: 30px;">
                    <?php echo $lang['solutions']['it']['mtn']['content1']; ?>
                </p>
                </p>
            </div>
        </div>
        
    </div>
</section>
<section id="security" class="security section-bg">
    <div class="container">
        <div class="section-title">
            <h2 data-aos="fade-in" class="aos-init"><?php echo $lang['solutions']['it']['boa']['title']; ?></h2>
        </div>
        <div class="container mt-4 ">
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
                                <img src="assets/img/realisations/boa.png" width="60%" class="d-block" alt="...">
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
                    <h3></h3>
                    <p>
                        <?php echo $lang['solutions']['it']['boa']['content1']; ?>
                    </p>
                    <p>
                        <?php echo $lang['solutions']['it']['boa']['content2']; ?>
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
    </div>
</section>


<br><br>
<br>

<?php include_once('include/footer.php') ?>
