<?php
  if (isset($_POST['email']) && isset($_POST['details'])) {

      $nameClient = $_POST['nom'];
      $lastNameClient = $_POST['prenom'];
      $telephoneClient = $_POST['telephone'];
      $emailClient = $_POST['email'];
      $subjectClient = $_POST['intitule'];
      $messageClient = $_POST['details'];

      include_once '../emails/sendProject.php';

      $sendEmailClient = new sendProject($nameClient, $lastNameClient, $emailClient, $telephoneClient, $subjectClient, $messageClient);
      $sendEmailClient->sendMailCustomer();
      $sendEmailClient->sendMailLce();

      include_once '../config/db.php';

      try {


          $req = $bdd->prepare('INSERT INTO projets(nom,prenom,
                        email, telephone, intitule, details, date_envoi) 
                        VALUES (:nom, prenom, :email, :telephone, :intitule, :details, NOW())');
          $req->execute(array(
              'nom' => $_POST['nom'],
              'prenom' => $_POST['prenom'],
              'email' => $_POST['email'],
              'telephone' => $_POST['telephone'],
              'intitule' => $_POST['intitule'],
              'details' => $_POST['details']
          ));

          die('Message envoyé avec succès !');
      } catch (Exception $e) {
          die('Impossible d\'enregistrer les données');
      }

  } else {
    die('Remplissez tout les champs svp !');
  }






