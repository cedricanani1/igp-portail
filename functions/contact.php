<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "../vendor/autoload.php";

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message']) ) {
    include_once '../config/db.php';
    try {
      $req = $bdd->prepare('INSERT INTO contacts(nom, email,
                  objet, message, date_envoi) VALUES(:nom,:email, :objet, :message, NOW())');
      $req->execute(array(
          'nom' => $_POST['name'],
          'email' => $_POST['email'],
          'objet' => $_POST['subject'],
          'message' => $_POST['message']
      ));
    } catch (Exception $e) {
      die('Impossible d\'enregistrer les données');
    }

    //Envoi de mail
    $nameClient = $_POST['name'];
    $emailClient = $_POST['email'];
    $subjectClient = $_POST['subject'];
    $messageClient = $_POST['message'];
    $mailHeaders = "From: " . $nameClient . "<". $emailClient .">\r\n";

    $mailSend = new PHPMailer(true);

    //Enable SMTP debugging.
    //$mailSend->SMTPDebug = 3;
    $mailSend->isSMTP();
    $mailSend->Host = "smtp.gmail.com";
    $mailSend->WordWrap = 50;
    $mailSend->SMTPAuth = true;
    $mailSend->Username = "diakitesoumaila182@gmail.com";
    $mailSend->Password = "Ds56058826";
    $mailSend->SMTPSecure = "tls";
    $mailSend->Port = 587;
    $mailSend->SMTPOptions = array(
                            'ssl' => array(
                                'verify_peer' => false,
                                'verify_peer_name' => false,
                                'allow_self_signed' => true
                            )
                        );

    $mailSend->From = $emailClient;
    $mailSend->FromName = $nameClient;
    $mailSend->addAddress("soumdiakite182@gmail.com", "DIAKITE SOUMAILA");
    $mailSend->addReplyTo($emailClient, $nameClient);
    $mailSend->isHTML(true);
    $mailSend->Subject = $subjectClient;
    $mailSend->Body = $messageClient;

    try {
        $mailSend->send();
        die('Message envoyé avec succès !');
    } catch (Exception $e) {
        die("Mailer Error: " . $mailSend->ErrorInfo);
    }

} else {
    die('Remplissez tout les champs svp !');
}
