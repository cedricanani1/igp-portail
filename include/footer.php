<?php

?>
    <footer id="footer">
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
                    <h5>Accès rapide</h5>
                    <ul class="list-inline-item"
                        style="list-style-type: '-';font-size: 20px;text-align: left;
                    ">
                        <li data-aos="fade-up">
                            <a href="./home.php">Accueil</a>
                        </li>
                        <li data-aos="fade-up">
                            <a href="./services.php"> Nos solutions </a>
                        </li>
                        <li data-aos="fade-up">
                            <a href="./about_us.php"> A propos</a>
                        </li>
                        <li data-aos="fade-up">
                            <a href="./contacts.php"> Contacts</a>
                        </li>
                    </ul>

                </div>
                <div class="col-lg-3 text-center">
                    <h5>Client & Partners</h5>
                    <ul class="list-inline-item"
                        style=" list-style-type: '-';font-size: 20px; text-align: left;
                    text-decoration: none;">
                        <li data-aos="fade-up">
                            <a href="./clients.php">Solution partners</a>
                        </li>
                        <li data-aos="fade-up">
                            <a href="./clients_become.php">Channel partners</a>
                        </li>
                        <li data-aos="fade-up">
                            <a href="./clients_programs.php">Services partners</a>
                        </li>
                    </ul>

                </div>
                <div class="col-lg-2 text-center">
                    <h5>Support</h5>
                    <ul class="list-inline-item"
                        style=" list-style-type: '-';font-size: 20px; text-align: left;
                    text-decoration: none;">
                        <li data-aos="fade-up">
                            <a href="#">B2B support</a>
                        </li>
                        <li data-aos="fade-up">
                            <a href="#">B2C support</a>
                        </li>
                        <li data-aos="fade-up">
                            <a href="#">B2E support</a>
                        </li>
                        <li data-aos="fade-up">
                            <a href="#">Security bulletin</a>
                        </li>
                    </ul>

                </div>
                <div class="col-lg-2 text-center">
                    <h5>Press & Events</h5>
                    <ul class="list-inline-item"
                        style="list-style-type: '-';font-size: 20px; text-align: left;
                    text-decoration: none;">
                        <li data-aos="fade-up">
                            <a href="#">News</a>
                        </li>
                        <li data-aos="fade-up">
                            <a href="#">Events</a>
                        </li>
                        <li data-aos="fade-up">
                            <a href="#">Top realizations</a>
                        </li>
                        <li data-aos="fade-up">
                            <a href="#">Photo galley</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 text-center">
                    <h5>Portals</h5>
                    <ul class="list-inline-item"
                        style="list-style-type: '-';font-size: 20px; text-align: left;
                    text-decoration: none;">
                        <li data-aos="fade-up">
                            <a href="#">Careers</a>
                        </li>
                        <li data-aos="fade-up">
                            <a href="#">Developpers</a>
                        </li>
                        <li data-aos="fade-up">
                            <a href="#">Suppliers</a>
                        </li>
                        <li data-aos="fade-up">
                            <a href="#">LCE Blog</a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; <strong><span>Lce-ci</span></strong>. 2020
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
                            typeSpeed: 250, // typing speed
                            backDelay: 1500 // pause before backspacing
                            });
                        });
    </script>
</body>
</html>
