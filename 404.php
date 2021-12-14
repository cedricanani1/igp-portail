<?php
include_once './config/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>IGP.CI </title>
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

<section class="cor_gov" id="mission" data-aos="fade-up" style="background-color:#f8f8f8;">
    <div class="container">
        <div class="row"><br/><br/><br/><br/>
            <div class="col-md-5 aos-init" data-aos="fade-right" data-aos="fade-up"><br/><br/><br/><br/>
                <img src="assets/img/home/cons.jpg" style="width: 100%; border-radius:45px " alt=""/> 
            </div><br/><br/><br/><br/>
            <div class="col-md-7 pt-7  aos-init" data-aos="fade-left" data-wow-duration="500ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 300ms; animation-name: fadeInDown;">
            <br> <br> <h2 data-aos="fade-up" class="text-center" style="color: #222;font-size: 44px;">  </h2> <br> <br>
                <p style="color: #222; font-size: 21px;text-align: justify;line-height: 35px;margin: 0 0 10px;" data-aos="fade-up">
                <ul data-aos="fade-up" style="list-style-type: none;">
                    <li data-aos="fade-up" class="text-left" style="font-size: 28px;" > <u></u></li><br>
                    <p data-aos="fade-up" class="text-left" style="font-size:50px;margin: 0; padding: 20px 0; color: #00539F; text-shadow: 3px 3px 1px black;">
                    <?php echo $lang['working']; ?>
                </p>
                     

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
            >Demander Un Devis ?</a>
        </div>
        <div class="bx-pull-right">
            <a type="button" class="btn btn-outline-secondary"
               href="404.php"
            >Contactez - Nous !</a>
        </div>
    </div>
</div>

<br>
<?php include_once('include/footer.php') ?>
<?php include_once('include/script.php') ?>

</body>
</html>