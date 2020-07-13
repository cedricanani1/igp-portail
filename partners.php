<?php include_once('include/header.php'); ?>

<section class="py-0">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/partners/partn1.jpeg" width="1200" height="660" class="d-block w-100" alt="Slide 1">
               <!-- <div class="carousel-caption d-none d-md-block">
                    <h3><span style="font-weight: bold">Find a partner</span></h3>
                </div>-->
            </div>
            <div class="carousel-item">
                <img src="assets/img/partners/partn2.jpeg" width="1366" height="660" class="d-block w-100" alt="Slide 2">
              <!--  <div class="carousel-caption d-none d-md-block" style="font-weight: bold;">
                    <h3><span style="font-weight: bold">Become a partner</span></h3>
                </div>-->
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
        <div class="section-title">
            <h2 data-aos="fade-in" class="aos-init"><?php echo $lang['about']['partners']['f1_t']; ?></h2>
        </div>
        <div class="row content" id="">
            <div class="col-md-5 aos-init" data-aos="fade-right">
                <img src="assets/img/partners/partn4.jpeg" alt="Image partner" class="img-fluid img-thumbnail">
            </div>
            <div class="col-md-7 pt-7 aos-init" data-aos="fade-left">
                <p style="color: black; font-size: 18px;text-align: justify;line-height: 35px;">
                    <?php echo $lang['about']['partners']['f1']; ?>
                </p>
            </div>

        </div>
    </div>
</section>

<section class="partners_find" id="partners_find" data-aos="fade-up">
    <div class="container">
        <div class="section-title">
            <h2 data-aos="fade-in" class="aos-init"><?php echo $lang['about']['partners']['f2_t']; ?></h2>
        </div>
        <div class="row content" id="">
            <div class="col-md-5 aos-init" data-aos="fade-right">
                <img src="assets/img/partners/partn5.jpeg" alt="Image partner" class="img-fluid img-thumbnail">
            </div>
            <div class="col-md-7 pt-7 aos-init" data-aos="fade-left">
                <p style="color: black; font-size: 18px;text-align: justify;line-height: 35px;">
                    <?php echo $lang['about']['partners']['f2']; ?>
                </p>
            </div>

        </div>
    </div>
</section>

<section class="partners_find" id="partners_find" data-aos="fade-up">
    <div class="container">
        <div class="section-title">
            <h2 data-aos="fade-in" class="aos-init"><?php echo $lang['about']['partners']['f3_t']; ?></h2>
        </div>
        <div class="row content" id="">
            <div class="col-md-5 aos-init" data-aos="fade-right">
                <img src="assets/img/partners/partn3.jpeg" alt="Image partner" class="img-fluid img-thumbnail">
            </div>
            <div class="col-md-7 pt-7 aos-init" data-aos="fade-left">
                <p style="color: black; font-size: 18px;text-align: justify;line-height: 35px;">
                    <?php echo $lang['about']['partners']['f3']; ?>
                </p>
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
