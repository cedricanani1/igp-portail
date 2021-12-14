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

    <!-- Style  -->
    <?php include_once('./include/style.php') ?>
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
<section class="home_pres" >
    <div class="container">
        <div class="section-title">
            <h2 data-aos="" class="aos-init aos-animate">A propos de IGP</h2>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 canvas-box magin30 text-center wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 300ms; animation-name: fadeInDown;">
                <div class="container aos-init aos-animate" style="color: #222; font-size: 21px;text-align: justify;line-height: 35px;margin: 0 0 10px;">
                    <p class="text-justify interligne" data-aos="fade-in">
                        Ivoire Goodies Performances en abrégé IGP est une entreprise spécialisée dans le Marketing Opérationnel, la Régie Publicitaire, le Placement de Personnel Temporaire, la Confection de Gadgets d’entreprise et l’Evénementiel.
                    </p>
                    <p class="text-center pt-4">
                        <a href="about.php" class="btn btn-outline-secondary">Lire la suite ... </a></a>    
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container p-t-3">
    <div class="section-title">
        <h2 data-aos="fade-in" class="aos-init">Nos services</h2>
    </div>
    <div class="row content">
        <div class="col-md-4 icon-box aos-init">
            <a href="#">
                <div class="card">
                    <img src="assets/img/services/VIDEOSURVEILLANCE.jpg" width="420" height="281"
                        class="card-img-top" alt="Image cyber-security">
                    <div class="card-body">
                        <p class="card-text">
                        <h4 class="text-center">Vente de Matériel</h4>
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 icon-box aos-init">
            <a href="#">
                <div class="card">
                    <img src="assets/img/service/Goodies.jpg" width="420" height="281"
                        class="card-img-top" alt="Image cyber-security">
                    <div class="card-body">
                        <p class="card-text">
                        <h4 class="text-center">Confection Goodies</h4>
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 icon-box aos-init">
            <a href="#">
                <div class="card">
                    <img src="assets/img/service/location-vehicule.jpg" width="420" height="281"
                        class="card-img-top" alt="Image vidéo surveillance">
                    <div class="card-body">
                        <p class="card-text">
                        <h4 class="text-center">Location Véhicules</h4>
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
                    <img src="assets/img/service/service-gadgets-publicitaires-1024x480.png" width="420" height="281"
                        class="card-img-top" alt="Image cyber-security">
                    <div class="card-body">
                        <p class="card-text">
                        <h4 class="text-center">Régie Publicitaire</h4>
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 icon-box aos-init">
            <a href="solutions.php#business-coach">
                <div class="card">
                    <img src="assets/img/service/service-regie.jpg" width="420" height="281"
                        class="card-img-top" alt="Image cyber-security">
                    <div class="card-body">
                        <p class="card-text">
                        <h4 class="text-center">Evènementiel</h4>
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
                            <h4 class="text-center">Affichage Numérique Dynamique</h4>
                        </p>
                    </div>
                </div>
            </a>
        </div>
    </div>

</section>
<section id="pricing customers" class="pricing customers section-bg">
    <div class="container">

        <div class="section-title">
          <!--  <h2 data-aos="fade-in" class="aos-init aos-animate"><?php echo $lang['home']['f6']; ?></h2>-->
            <h2 data-aos="" class="aos-init aos-animate"> Nos réalisations</h2>
        </div>

        <div class="row no-gutters">

            <div class="col-lg-4 box aos-init aos-animate" data-aos="zoom-in" style="cursor: pointer;">
            <img src="assets/img/service/service-evenementiel.jpg" width="420" height="281"
                        class="card-img-top" alt="Image vidéo surveillance">
              <!--  <h3>B2C</h3>
                <h4><span><?php echo $lang['home']['c_1']; ?></span></h4>
                <ul>
                    <li><i class="bx bx-check"></i> <?php echo $lang['home']['c_3']; ?></li>
                    <li><i class="bx bx-check"></i> <?php echo $lang['home']['c_4']; ?></li>
                </ul>-->
            </div>

            <div class="col-lg-4 box aos-init aos-animate" data-aos="zoom-in">
            <img src="assets/img/service/service-marketing.jpg" width="420" height="281"
                        class="card-img-top" alt="Image vidéo surveillance">
                <!--<h3>B2B</h3>
                <h4><span><?php echo $lang['home']['c_4']; ?></span></h4>
                <ul>
                    <li><i class="bx bx-check"></i> <?php echo $lang['home']['c_5']; ?></li>
                    <li><i class="bx bx-check"></i> <?php echo $lang['home']['c_6']; ?></li>
                    <li><i class="bx bx-check"></i> <?php echo $lang['home']['c_7']; ?></li>
                    <li><i class="bx bx-check"></i> ISP</li>

                   
                </ul>-->
            </div>

            <div class="col-lg-4 box aos-init aos-animate" data-aos="zoom-in">
            <img src="assets/img/service/service-regie.jpg" width="420" height="281"
                        class="card-img-top" alt="Image vidéo surveillance">
                <!--<h3>B2E</h3>
                <h4><span><?php echo $lang['home']['c_8']; ?></span></h4>
                <ul>
                    <li><i class="bx bx-check"></i> <?php echo $lang['home']['c_9']; ?></li>
                    <li><i class="bx bx-check"></i> <?php echo $lang['home']['c_10']; ?></li>
                    <li><i class="bx bx-check"></i> <?php echo $lang['home']['c_11']; ?></li>
                    <li><i class="bx bx-check"></i> <?php echo $lang['home']['c_12']; ?></li>
                </ul>-->
            </div>

        
            <div class="col-lg-4 box aos-init aos-animate" data-aos="zoom-in" style="cursor: pointer;">
            <img src="assets/img/home-slide/evenementiel-image-accueil-site-web.png" width="420" height="281"
                        class="card-img-top" alt="Image vidéo surveillance">
              <!--  <h3>B2C</h3>
                <h4><span><?php echo $lang['home']['c_1']; ?></span></h4>
                <ul>
                    <li><i class="bx bx-check"></i> <?php echo $lang['home']['c_3']; ?></li>
                    <li><i class="bx bx-check"></i> <?php echo $lang['home']['c_4']; ?></li>
                </ul>-->
            </div>

            <div class="col-lg-4 box aos-init aos-animate" data-aos="zoom-in">
            <img src="assets/img/service/realisations.jpg" width="420" height="281"
                        class="card-img-top" alt="Image vidéo surveillance">
                <!--<h3>B2B</h3>
                <h4><span><?php echo $lang['home']['c_4']; ?></span></h4>
                <ul>
                    <li><i class="bx bx-check"></i> <?php echo $lang['home']['c_5']; ?></li>
                    <li><i class="bx bx-check"></i> <?php echo $lang['home']['c_6']; ?></li>
                    <li><i class="bx bx-check"></i> <?php echo $lang['home']['c_7']; ?></li>
                    <li><i class="bx bx-check"></i> ISP</li>

                   
                </ul>-->
            </div>

            <div class="col-lg-4 box aos-init aos-animate" data-aos="zoom-in">
            <img src="assets/img/service/service-evenementiel.jpg" width="420" height="281"
                        class="card-img-top" alt="Image vidéo surveillance">
                <!--<h3>B2E</h3>
                <h4><span><?php echo $lang['home']['c_8']; ?></span></h4>
                <ul>
                    <li><i class="bx bx-check"></i> <?php echo $lang['home']['c_9']; ?></li>
                    <li><i class="bx bx-check"></i> <?php echo $lang['home']['c_10']; ?></li>
                    <li><i class="bx bx-check"></i> <?php echo $lang['home']['c_11']; ?></li>
                    <li><i class="bx bx-check"></i> <?php echo $lang['home']['c_12']; ?></li>
                </ul>-->
            </div>

        </div>

    </div>
</section>

<section class="container p-t-3">
    <div class="section-title">
        <h2 data-aos="fade-in" class="aos-init">Nos Partenaires</h2><br/>
    </div>
    <div class="container">
        <div class="row offset-lg-1 no-gutters clients-wrap clearfix wow fadeInUp">
            <div class="col-lg-2 col-md-4 col-6">
                <div class="client-logo">
                    <img src="assets/img/partenaires/Image1.png" alt="java slide" class="img-fluid" data-aos="flip-right">
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <div class="client-logo">
                    <img src="assets/img/partenaires/Image2.png" alt="php slide" class="img-fluid" data-aos="flip-right" data-aos-delay="100">
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <div class="client-logo">
                    <img src="assets/img/partenaires/Image3.png" alt="python slide" class="img-fluid" data-aos="flip-right" data-aos-delay="200">
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <div class="client-logo">
                    <img src="assets/img/partenaires/Image4.png" alt="javascript slide" class="img-fluid" data-aos="flip-right" data-aos-delay="300">
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <div class="client-logo">
                    <img src="assets/img/partenaires/Image5.jpg" alt="android slide" class="img-fluid" data-aos="flip-right" data-aos-delay="400">
                </div>
            </div>

           
        </div>
    </div>
    <div class="container">
        <div class="row offset-lg-1 no-gutters clients-wrap clearfix wow fadeInUp">
            <div class="col-lg-2 col-md-4 col-6">
                <div class="client-logo">
                    <img src="assets/img/partenaires/Image7.png" alt="Django slide" class="img-fluid" data-aos="flip-right">
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <div class="client-logo">
                    <img src="assets/img/partenaires/Image8.png" alt="symfony slide" class="img-fluid" data-aos="flip-right" data-aos-delay="100">
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <div class="client-logo">
                    <img src="assets/img/partenaires/Image9.jpg" class="img-fluid" data-aos="flip-right" data-aos-delay="200">
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <div class="client-logo">
                    <img src="assets/img/partenaires/Image10.jpg" alt="spring slide" class="img-fluid" data-aos="flip-right" data-aos-delay="500">
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6">
                <div class="client-logo">
                    <img src="assets/img/partenaires/sodeci.png" alt="sodeci" class="img-fluid" data-aos="flip-right" data-aos-delay="500">
                </div>
            </div>
        </div>
    </div>
</section>


<br>

<?php include_once('include/footer.php') ?>

<?php include_once('include/script.php') ?>
</body>
</html>