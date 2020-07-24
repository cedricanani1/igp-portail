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
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="phone">
                                    <i class="fa fa-phone" style="color:rgb(92, 63, 63);"></i>
                                    <a href="#" style="color:rgb(255, 255, 255);">
                                        <b>+225 46 66 77 66 </b>
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
            <span style="background-color:transparent; font-size: 17px;" class="badge badge-light">Fr <a href="./press_events.php?lang=fr">
                    <img src="./assets/img/lang/fr.png" width="26" height="26" alt=""
                         title="<?php echo $lang['fr'];  ?>"
                    ></a>
            </span>
            <span style="background-color:transparent; font-size: 17px;" class="badge badge-light">
                 En<a href="./press_events.php?lang=en"><img src="./assets/img/lang/en.png"
                                                          width="26" height="26" alt=""
                                                          title="<?php echo $lang['en'];  ?>"
                    ></a>
            </span>
        </div>
    </div>

    <!-- <hr style="width:100%;text-align:center"> -->
</header>
<!-- END MENU -->

<!--<section id="news" class="news section-bg">
    <div class="container">
        <div class="section-title">
            <h2 data-aos="fade-in" class="aos-init">News</h2>
        </div>
        <div class="row content" id="">


        </div>
    </div>
</section>

<section id="events" class="events section-bg">
    <div class="container">
        <div class="section-title">
            <h2 data-aos="fade-in" class="aos-init">Events</h2>
        </div>
        <div class="row content" id="">


        </div>
    </div>
</section>-->

<section id="gallery" class="portfolio section-bg gallery">
    <div class="container">

        <div class="section-title">
            <h2 data-aos="fade-in" class="aos-init aos-animate">Photo Gallery</h2>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">App</li>
                    <li data-filter=".filter-card">Card</li>
                    <li data-filter=".filter-web">Web</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container aos-init aos-animate" data-aos="fade-up" style="position: relative; height: 877.5px;">

            <div class="col-lg-4 col-md-6 portfolio-item filter-app" style="position: absolute; left: 0px; top: 0px;">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox vbox-item" title="App 1"><i class="icofont-plus-circle"></i></a>
                        <a href="#" title="More Details"><i class="icofont-link"></i></a>
                    </div>
                    <div class="portfolio-info">
                        <h4>App 1</h4>
                        <p>App</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app" style="position: absolute; left: 760px; top: 0px;">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox vbox-item" title="App 2"><i class="icofont-plus-circle"></i></a>
                        <a href="#" title="More Details"><i class="icofont-link"></i></a>
                    </div>
                    <div class="portfolio-info">
                        <h4>App 2</h4>
                        <p>App</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app" style="position: absolute; left: 760px; top: 292.5px;">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox vbox-item" title="App 3"><i class="icofont-plus-circle"></i></a>
                        <a href="#" title="More Details"><i class="icofont-link"></i></a>
                    </div>
                    <div class="portfolio-info">
                        <h4>App 3</h4>
                        <p>App</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card" style="position: absolute; left: 0px; top: 585px;">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox vbox-item" title="Card 1"><i class="icofont-plus-circle"></i></a>
                        <a href="#" title="More Details"><i class="icofont-link"></i></a>
                    </div>
                    <div class="portfolio-info">
                        <h4>Card 1</h4>
                        <p>Card</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card" style="position: absolute; left: 380px; top: 585px;">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox vbox-item" title="Card 3"><i class="icofont-plus-circle"></i></a>
                        <a href="#" title="More Details"><i class="icofont-link"></i></a>
                    </div>
                    <div class="portfolio-info">
                        <h4>Card 3</h4>
                        <p>Card</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card" style="position: absolute; left: 0px; top: 292.5px;">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox vbox-item" title="Card 2"><i class="icofont-plus-circle"></i></a>
                        <a href="#" title="More Details"><i class="icofont-link"></i></a>
                    </div>
                    <div class="portfolio-info">
                        <h4>Card 2</h4>
                        <p>Card</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web" style="position: absolute; left: 380px; top: 0px;">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox vbox-item" title="Web 3"><i class="icofont-plus-circle"></i></a>
                        <a href="#" title="More Details"><i class="icofont-link"></i></a>
                    </div>
                    <div class="portfolio-info">
                        <h4>Web 3</h4>
                        <p>Web</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web" style="position: absolute; left: 380px; top: 292.5px;">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox vbox-item" title="Web 2"><i class="icofont-plus-circle"></i></a>
                        <a href="#" title="More Details"><i class="icofont-link"></i></a>
                    </div>
                    <div class="portfolio-info">
                        <h4>Web 2</h4>
                        <p>Web</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web" style="position: absolute; left: 760px; top: 585px;">
                <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox vbox-item" title="Web 3"><i class="icofont-plus-circle"></i></a>
                        <a href="#" title="More Details"><i class="icofont-link"></i></a>
                    </div>
                    <div class="portfolio-info">
                        <h4>Web 3</h4>
                        <p>Web</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<br><br><br><br>

<?php include_once('include/footer.php') ?>
