<?php include_once('include/header.php');?>

<div class="container mt-4">
    <div class="section-title">
        <h2 data-aos="fade-in"><?php echo $lang['about']['carreers']['title_f']; ?></h2>
    </div>
</div>

<div class="container">
    <section class="contact section-bg" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 canvas-box magin30 text-center wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 300ms; animation-name: fadeInDown;">
                    <h4 style="color: #222;font-size: 35px;"><?php echo $lang['about']['carreers']['f1']; ?></h4>
                    <div class="container aos-init aos-animate" style="color: #222; font-size: 21px;text-align: justify;line-height: 35px;margin: 0 0 10px;">
                        <p>
                        <form enctype="multipart/form-data"
                              action="functions/job.php" method="POST" role="form"
                        >
                            <div class="form-row">
                                <div class="col-md-12 form-group">
                                    <label for="poste"><?php echo $lang['about']['carreers']['f1']; ?></label>
                                    <select class="form-control form-control" name="poste" id="poste" required>
                                        <option value="Développeur">Développeur</option>
                                        <option value="Comptable">Comptable</option>
                                    </select>
                                    <div class="validate"></div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-12 form-group">
                                    <label for="name"><?php echo $lang['about']['carreers']['f2']; ?></label>
                                    <input type="text" name="name" class="form-control" id="name" data-rule="required"
                                           data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 form-group">
                                    <label for="phone"><?php echo $lang['about']['carreers']['f3']; ?></label>
                                    <input type="text" name="phone" class="form-control" id="phone" data-rule="required"
                                           data-rule="minlen:8" data-msg="Please enter at least 8 chars" />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 form-group">
                                    <label for="cv"><?php echo $lang['about']['carreers']['f4']; ?></label>
                                    <input type="hidden" name="MAX_FILE_SIZE_CV" value="1000000" />
                                    <input type="file" name="cvfile"/>
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 form-group">
                                    <input type="hidden" name="MAX_FILE_SIZE_LM" value="1000000" />
                                    <label for="lm"><?php echo $lang['about']['carreers']['f5']; ?></label>
                                    <input type="file" id="lm" class="form-control-file" name="lmfile">
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 mb-3 form-group">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-secondary btn-lg btn-block"><?php echo $lang['about']['carreers']['btn']; ?></button>
                                    </div>
                                </div>
                            </div>

                        </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

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

<?php include_once('include/footer.php')?>
