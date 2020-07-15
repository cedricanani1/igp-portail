<?php
    include_once './config/config.php';
?>
    <footer id="footer" style="background-color:#F36400">
        <div class="footer-top">
            <div class="container aos-init aos-animate" data-aos="fade-up">
                <div class="social-links">
                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="youtube"><i class="bx bxl-youtube"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom container">
            <div class="row">
                <div class="col-lg-3 text-center">
                    <h5><?php echo $lang['footer']['1']; ?></h5>
                    <ul class="list-inline-item"
                        style="list-style-type: '-';font-size: 20px;text-align: left;
                    ">
                        <li data-aos="fade-up">
                            <a href="./home.php"><?php echo $lang['footer']['1_']['1']; ?></a>
                        </li>
                        <li data-aos="fade-up">
                            <a href="./services.php"><?php echo $lang['footer']['1_']['2']; ?></a>
                        </li>
                        <li data-aos="fade-up">
                            <a href="./about_us.php"><?php echo $lang['footer']['1_']['3']; ?></a>
                        </li>
                        <li data-aos="fade-up">
                            <a href="./contacts.php"><?php echo $lang['footer']['1_']['4']; ?></a>
                        </li>
                    </ul>

                </div>
                <div class="col-lg-3 text-center">
                    <h5><?php echo $lang['footer']['2']; ?></h5>
                    <ul class="list-inline-item"
                        style=" list-style-type: '-';font-size: 20px; text-align: left;
                    text-decoration: none;">
                        <li data-aos="fade-up">
                            <a href="partners.php"><?php echo $lang['footer']['2_']['1']; ?></a>
                        </li>
                        <li data-aos="fade-up">
                            <a href="partners.php"><?php echo $lang['footer']['2_']['2']; ?></a>
                        </li>
                        <li data-aos="fade-up">
                            <a href="partners.php"><?php echo $lang['footer']['2_']['3']; ?></a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 text-center">
                    <h5><?php echo $lang['footer']['3']; ?></h5>
                    <ul class="list-inline-item"
                        style=" list-style-type: '-';font-size: 20px; text-align: left;
                    text-decoration: none;">
                        <li data-aos="fade-up">
                            <a href="#"><?php echo $lang['footer']['3_']['1']; ?></a>
                        </li>
                        <li data-aos="fade-up">
                            <a href="#"><?php echo $lang['footer']['3_']['2']; ?></a>
                        </li>
                        <li data-aos="fade-up">
                            <a href="#"><?php echo $lang['footer']['3_']['3']; ?></a>
                        </li>
                        <li data-aos="fade-up">
                            <a href="#"><?php echo $lang['footer']['3_']['4']; ?></a>
                        </li>
                    </ul>

                </div>
                <div class="col-lg-2 text-center">
                    <h5><?php echo $lang['footer']['4']; ?></h5>
                    <ul class="list-inline-item"
                        style="list-style-type: '-';font-size: 20px; text-align: left;
                    text-decoration: none;">
                        <li data-aos="fade-up">
                            <a href="#"><?php echo $lang['footer']['4_']['1']; ?></a>
                        </li>
                        <li data-aos="fade-up">
                            <a href="#"><?php echo $lang['footer']['4_']['2']; ?></a>
                        </li>
                        <li data-aos="fade-up">
                            <a href="#"><?php echo $lang['footer']['4_']['3']; ?></a>
                        </li>
                        <li data-aos="fade-up">
                            <a href="#"><?php echo $lang['footer']['4_']['4']; ?></a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 text-center">
                    <h5><?php echo $lang['footer']['5']; ?></h5>
                    <ul class="list-inline-item"
                        style="list-style-type: '-';font-size: 20px; text-align: left;
                    text-decoration: none;">
                        <li data-aos="fade-up">
                            <a href="#"><?php echo $lang['footer']['5_']['1']; ?></a>
                        </li>
                        <li data-aos="fade-up">
                            <a href="#"><?php echo $lang['footer']['5_']['2']; ?></a>
                        </li>
                        <li data-aos="fade-up">
                            <a href="#"><?php echo $lang['footer']['5_']['3']; ?></a>
                        </li>
                        <li data-aos="fade-up">
                            <a href="#"><?php echo $lang['footer']['5_']['4']; ?></a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
        
        <div class="footer_bottom">
        <div class="container">
            <div class="row" >
                <div class="col-12" >
                    <center>
                        <p class="crp" >
                            <h5 style="color:white;">© Copyright 2020 LCE-CI</h5>
                        </p>
                    </center>

                </div>
            </div>
        </div>
    </div>

        <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
    </footer>

  <!-- Vendor JS Files -->
  <script src="./assets/vendor/jquery/jquery.min.js"></script>
  <script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="./assets/vendor/php-email-form/validate.js"></script>
  <script src="./assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="./assets/vendor/venobox/venobox.min.js"></script>
  <script src="./assets/vendor/aos/aos.js"></script>
  <script src="./assets/js/typed.js"></script>

  <!-- Template Main JS File -->
  <script src="./assets/js/main.js"></script>

    <script>
        $(".kouame").each(function()
                        {
                            var $this = $(this);
                            $this.typed({
                            strings: $this.attr('data-elements').split(','),
                            typeSpeed: 30, // typing speed
                            backDelay: 800 // pause before backspacing
                            });
                        });
      /*  $("#lang").bind('change', function(){
            switch($(this).val()){
                case "1":
                    alert("Bonjour");
                    location.href = "contacts.php?lang=fr"
                    break;

                case "2":
                    alert("Bonjour");
                    location.href = "contacts.php?lang=en"
                    break;
            }
        });*/
      function helloWorld() {
        alert("Hello world !!!!");
      }
    </script>
</body>
</html>
