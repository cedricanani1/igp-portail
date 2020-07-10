<?php include_once('include/header.php'); ?>

<section class="py-0">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/partners/partn1.jpg" width="1366" height="660" class="d-block w-100" alt="Slide 1">
                <div class="carousel-caption d-none d-md-block">
                    <h3><span style="font-weight: bold">Find a partner</span></h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/partners/partn2.jpg" width="1366" height="660" class="d-block w-100" alt="Slide 2">
                <div class="carousel-caption d-none d-md-block" style="font-weight: bold;">
                    <h3><span style="font-weight: bold">Become a partner</span></h3>
                </div>
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

<section class="partners_find" id="partners_find" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 300ms; animation-name: fadeInDown;">
                <h2 class="text-left" style="color: #222;font-size: 44px;" data-aos="fade-up"><?php echo $lang['about']['partners']['f1_t']; ?></h2>
                <p style="color: #222; font-size: 21px;text-align: justify;line-height: 35px;margin: 0 0 10px;" data-aos="fade-up">
                    <?php echo $lang['about']['partners']['f1']; ?>
                </p>
            </div>
        </div>
    </div>
</section>

<section id="partners_become" class="partners_become"  data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center wow fadeIn about_block_head animated" data-wow-duration="500ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 300ms; animation-name: fadeIn;">
                <h2 data-aos="fade-up" class="text-left" style="color: #222;font-size: 44px;"><?php echo $lang['about']['partners']['f2_t']; ?></h2>
                <p data-aos="fade-up" style="color: #222; font-size: 21px;text-align: justify;line-height: 35px;margin: 0 0 10px;">
                    <?php echo $lang['about']['partners']['f2']; ?>
                </p>
            </div>
        </div>
    </div>
</section>

<section id="partners_prog" class="partners_prog" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 canvas-box magin30 text-center wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 300ms; animation-name: fadeInDown;">
                <h2 class="text-left" style="color: #222;font-size: 44px;"><?php echo $lang['about']['partners']['f3_t']; ?></h2>
                <p data-aos="fade-up" style="color: #222; font-size: 21px;text-align: justify;line-height: 35px;margin: 0 0 10px;">

                    <?php echo $lang['about']['partners']['f3']; ?>

                </p>
            </div>
        </div>
    </div>
</section>

<!-- <section id="clients" class="clients section-bg">
    <div class="container">

      <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

        <div class="col-lg-2 col-md-4 col-6">
          <div class="client-logo">
            <img src="../assets/img/clients/client-1.png" class="img-fluid" alt="" data-aos="flip-right">
          </div>
        </div>

        <div class="col-lg-2 col-md-4 col-6">
          <div class="client-logo">
            <img src="../assets/img/clients/client-2.png" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="100">
          </div>
        </div>

        <div class="col-lg-2 col-md-4 col-6">
          <div class="client-logo">
            <img src="../assets/img/clients/client-3.png" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="200">
          </div>
        </div>

        <div class="col-lg-2 col-md-4 col-6">
          <div class="client-logo">
            <img src="../assets/img/clients/client-4.png" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="300">
          </div>
        </div>

        <div class="col-lg-2 col-md-4 col-6">
          <div class="client-logo">
            <img src="../assets/img/clients/client-5.png" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="400">
          </div>
        </div>

        <div class="col-lg-2 col-md-4 col-6">
          <div class="client-logo">
            <img src="../assets/img/clients/client-6.png" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="500">
          </div>
        </div>

      </div>

    </div>
  </section> -->

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
