<?php
  if (isset($_POST['email']) && isset($_POST['details'])) {
    include_once '../config/db.php';
    $req = $bdd->prepare('INSERT INTO projets(nom, prenom,
                        email, telephone, intitule, details) 
                        VALUES (:nom,:prenom, :email, :telephone, :intitule, :details)');
    $req->execute(array(
        'nom' => $_POST['nom'],
        'prenom' => $_POST['prenom'],
        'email' => $_POST['email'],
        'telephone' => $_POST['telephone'],
        'intitule' => $_POST['intitule'],
        'details' => $_POST['details']
    ));
    die('Projet envoyé avec succès !');

  } else {
    die('Remplissez tout les champs svp !');
  }






