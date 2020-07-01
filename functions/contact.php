<?php

  if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message']) ) {
    include_once '../../config/db.php';
    $req = $bdd->prepare('INSERT INTO contacts(nom, email,
                      objet, message) VALUES(:nom,:email, :objet, :message)');
    $req->execute(array(
        'nom' => $_POST['name'],
        'email' => $_POST['email'],
        'objet' => $_POST['subject'],
        'message' => $_POST['message']
    ));

    die('Message envoyé avec succès !');

  } else {
    die('Remplissez tout les champs svp !');
  }


    $receiving_email_address = 'contact@.com';



  // Replace contact@example.com with your real receiving email address
  /*$

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];*/

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

 /* $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();*/

