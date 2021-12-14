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
    <link href="./assets/img/logo1.jpg" rel="icon">
    <link href="./assets/img/logo1.jpg" rel="apple-touch-icon">

    <!-- Style -->
    <?php include_once('include/style.php') ?>

</head>

<body>
<?php include_once('./include/header.php') ?>
<!-- END MENU -->
<main id="main">
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in"><?php echo $lang['about']['contact']['f1']; ?></h2>
          <p data-aos="fade-in">
              <?php echo $lang['about']['contact']['f2']; ?>
          </p>
        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box" data-aos="fade-up">
                  <i class="bx bx-map"></i>
                  <h3>Adresse</h3>
                  <p>Riviera BONOUMIN LAURIER 6 VILLA N°151 – Cocody </p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-envelope"></i>
                  <h3>Email</h3>
                  <p>info@igp.ci <br></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-phone-call"></i>
                  <h3><?php echo $lang['about']['contact']['f6']; ?></h3>
                  <p>+225 27 22 49 95 04</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="functions/contact.php" method="post" role="form" class="php-email-form" data-aos="fade-up">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="<?php echo $lang['about']['contact']['f4']; ?>"
                        data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" 
                        placeholder="<?php echo $lang['about']['contact']['f5']; ?>" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="phone" id="phone"
                           placeholder="<?php echo $lang['about']['contact']['f6']; ?>" data-rule="minlen:8" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validate"></div>
                </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" 
                        placeholder="<?php echo $lang['about']['contact']['f7']; ?>" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" 
                    data-msg="Please write something for us" placeholder="<?php echo $lang['about']['contact']['f8']; ?>"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message"><?php echo $lang['about']['contact']['sms_v']; ?></div>
              </div>

              <!-- fin de modif de captcha -->
              <div class="text-center"><button type="submit"><?php echo $lang['about']['contact']['btn']; ?></button></div>

            </form>
          </div>
        </div>

      </div>
        <div class="container mt-4">
            <div class="row">
              <div class="mapouter"><div ><iframe width="1080" height="500"  id="gmap_canvas" src="https://maps.google.com/maps?q=ivoire%20goodies&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
            </div>
        </div>

    </section><!-- End Contact Section -->

</main>


<br><br><br><br>

<?php include_once('include/footer.php') ?>
<?php include_once('include/script.php') ?>

</body>
</html>