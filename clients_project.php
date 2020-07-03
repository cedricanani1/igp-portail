<?php include_once('include/header.php');?>
<section class="submit_project section-bg mt-4" id="project_submit">
    <div class="container">

        <div class="section-title">
            <h2 data-aos="fade-in">Vous avez une demande ou un besoin, nos experts sont à votre écoute.</h2>
        </div>

        <div class="row">

            <div class="col-lg-12">
                <form action="functions/submit_project.php" method="post" role="form" class="php-email-form" data-aos="fade-up">
                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="nom" class="form-control" id="firstname" placeholder="Entrer votre nom"
                                   data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validate"></div>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" name="prenom" class="form-control" id="lastname" placeholder="Entrer votre prénom"
                                   data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            <input type="email" class="form-control" name="email" id="email"
                                   placeholder="Entrer votre email" data-rule="email"
                                   data-msg="Please enter a valid email"/>
                            <div class="validate"></div>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" class="form-control" name="telephone" id="phone"
                                   placeholder="Entrer votre téléphone" data-rule="minlen:8" data-msg="Please enter a valid phone number" />
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="intitule" id="subject"
                               placeholder="Intitulé" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="details" rows="5" data-rule="required"
                                  data-msg="Please write something for us" placeholder="Quels détails sur votre demande"></textarea>
                        <div class="validate"></div>
                    </div>
                    <div class="mb-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Votre message a été envoyé avec succès !</div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-outline-secondary btn-lg">
                            Soumettre</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
</section>

<br>

<?php include_once('include/footer.php') ?>
