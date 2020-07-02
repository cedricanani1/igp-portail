<?php include_once('include/header.php'); ?>

<main id="main">
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Contacts</h2>
          <p data-aos="fade-in">
              Remplissez notre formulaire de contact en nous faisons part de vos besoins.
          </p>
        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box" data-aos="fade-up">
                  <i class="bx bx-map"></i>
                  <h3>Adresse</h3>
                  <p>Non loin du CHU d'Angré</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-envelope"></i>
                  <h3>Email</h3>
                  <p>hotline@lce-ci.com <br></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-phone-call"></i>
                  <h3>Téléphone</h3>
                  <p>+225 46 66 77 66 / +225 07 96 96 72</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="functions/contact.php" method="post" role="form" class="php-email-form" data-aos="fade-up">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Entrer votre nom" 
                        data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" 
                        placeholder="Entrer votre email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" 
                        placeholder="Objet" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" 
                    data-msg="Please write something for us" placeholder="Entrer votre message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Votre message a été envoyé avec succès !</div>
              </div>
              <div class="text-center"><button type="submit">Envoyer</button></div>
            </form>
          </div>

        </div>

      </div>
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-12">
                    <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d993.0269371233812!2d-3.9572721922949174!3d5.400551896827808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1933d4b2186d5%3A0xf64a1036251b83a4!2sCHU%20d&#39;Angr%C3%A9!5e0!3m2!1sfr!2sci!4v1593678771978!5m2!1sfr!2sci"
                            width="1110" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                    </iframe>
                </div>
            </div>
        </div>

    </section><!-- End Contact Section -->

</main>


<br><br><br><br>

<?php include_once('include/footer.php') ?>
