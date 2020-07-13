<?php

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message']) ) {

    $nameClient = $_POST['name'];
    $emailClient = $_POST['email'];
    $telephoneClient = $_POST['phone'];
    $subjectClient = $_POST['subject'];
    $messageClient = $_POST['message'];

    include_once '../emails/sendContact.php';
  /*  include_once '../config/config.php';

    $responseForCustomer = [
        $lang['mail_cont_ob'],
        $lang['mail_cont_t1'],
        $lang['mail_cont_t2'],
        $lang['mail_cont_t3'],
        $lang['mail_cont_t4'],
        $lang['mail_cont_t5']
    ];*/

    $sendEmailClient = new sendContact($nameClient, $emailClient, $telephoneClient, $subjectClient, $messageClient, []);
    $sendEmailClient->sendMailCustomer();
    $sendEmailClient->sendMailLce();

    include_once '../config/db.php';
    try {
        $req = $bdd->prepare('INSERT INTO contacts(nom, telephone, email,
                  objet, message, date_envoi) VALUES(:nom,:telephone, :email, :objet, :message, NOW())');
        $req->execute(array(
            'nom' => $nameClient,
            'telephone' => $telephoneClient,
            'email' => $emailClient,
            'objet' => $subjectClient,
            'message' => $messageClient
        ));
        die('Message envoyé avec succès !');
        //header('location:../confirm_contacts.php');
    } catch (Exception $e) {
        die('Impossible d\'enregistrer les données');
    }

} else {
    die('Remplissez tout les champs svp !');
}
