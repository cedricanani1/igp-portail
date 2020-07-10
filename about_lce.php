<?php include_once('include/header.php'); ?>

<section class="cor_inf" id="about_us" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 300ms; animation-name: fadeInDown;">
                <h2 class="text-left" style=" color: white;font-size: 44px;" data-aos="fade-up"><?php echo $lang['about']['lce']['f1_t']; ?></h2>
                <p data-aos="fade-up" style=" color: white; font-size: 21px;text-align: justify;line-height: 35px;margin: 0 0 10px;">
                    <?php echo $lang['about']['lce']['f1']; ?>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="cor_cul" id="mission" data-aos="fade-up">
    <div class="container">
        <div class="row content">
            <div class="col-md-5 aos-init" data-aos="fade-right">
                <img src="assets/img/about/mission2.jpg" style="width: 100%; border-radius:45px " alt=""/> 
            </div>
            <div class="col-md-7 pt-7  aos-init" data-aos="fade-center" data-wow-duration="500ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 300ms; animation-name: fadeInDown;">
            <br> <br> <h2 class="text-center" style="color: #222;font-size: 44px;" data-aos="fade-up"><?php echo $lang['about']['lce']['f2_t']; ?></h2>
                <p style="color: #222; font-size: 21px;text-align: justify;line-height: 35px;margin: 0 0 10px;" data-aos="fade-up">
                    <?php echo $lang['about']['lce']['f2']; ?>
                </p> 
               
            </div>
        </div>
    </div>
</section>
<section class="cor_gov" id="mission" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="col-md-5 aos-init" data-aos="fade-right">
                <img src="assets/img/about/mission.jpg" style="width: 100%; border-radius:45px " alt=""/> 
            </div>
            <div class="col-md-7 pt-7  aos-init" data-aos="fade-left" data-wow-duration="500ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 300ms; animation-name: fadeInDown;">
            <br> <br> <h2 data-aos="fade-up" class="text-center" style="color: #222;font-size: 44px;">  <?php echo $lang['about']['lce']['f3_t']; ?></h2> <br> <br>
                <p style="color: #222; font-size: 21px;text-align: justify;line-height: 35px;margin: 0 0 10px;" data-aos="fade-up">
                    <?php echo $lang['about']['lce']['f3']; ?>
                </p>
            </div>
        </div>
    </div>
</section>
<section class="cor_gov" id="mission" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="col-md-5 aos-init" data-aos="fade-right">
                <img src="assets/img/about/valeur.png" style="width: 100%; border-radius:45px " alt=""/> 
            </div>
            <div class="col-md-7 pt-7  aos-init" data-aos="fade-left" data-wow-duration="500ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 300ms; animation-name: fadeInDown;">
            <br> <br> <h2 data-aos="fade-up" class="text-center" style="color: #222;font-size: 44px;"> <?php echo $lang['about']['lce']['f4_t']; ?></h2> <br> <br>
                <p style="color: #222; font-size: 21px;text-align: justify;line-height: 35px;margin: 0 0 10px;" data-aos="fade-up">
                <ul data-aos="fade-up" style="list-style-type: none;">
                    <?php echo $lang['about']['lce']['f4_s1']; ?>
                </ul>

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
