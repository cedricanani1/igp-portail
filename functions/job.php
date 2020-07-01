<?php
var_dump($_FILES);
if ( (!isset($_FILES['cvfile']) || UPLOAD_ERR_NO_FILE == $_FILES['cvfile']['error']))
{
    echo 'Voici quelques informations de débogage :';

}
die($_POST['cvfile']);
print_r($_FILES);




/* if (isset($_POST['poste']) && isset($_POST['name']) &&
     isset($_FILES['cv']) && $_FILES['cv']['error'] == 0) {

     // Testons si le fichier n'est pas trop gros
     if ($_FILES['cv']['size'] <= $_POST['MAX_FILE_SIZE']) {
         $infosFichier = pathinfo($_FILES['cv']['name']);
         $extension_upload = $infosFichier['extension'];
         $extensions_autorisees = array('pdf', 'docx', 'doc', 'pptx');
         if (in_array($extension_upload, $extensions_autorisees))
         {
             $dateSaving = new DateTime();
             $resultDate = $dateSaving->format('Y-m-d H:i:s');
             $resultDate = explode('-', $resultDate);
             $resultDate = implode("", $resultDate);
             if (move_uploaded_file($_FILES['cv']['tmp_name'], 'job_file/' .$_POST['name'].'_'.
                 basename($_FILES['cv']['name']).'_'.$resultDate)) {

                 include_once '../../config/db.php';

                 $req = $bdd->prepare('INSERT INTO job (poste, nom,
                     cv, date_envoi) VALUES(:poste,:nom, :cv, NOW())');
                 $req->execute(array(
                     'poste' => $_POST['poste'],
                     'nom' => $_POST['nom'],
                     'cv' => $_POST['name'].'_'.basename($_FILES['cv']['name']).'_'.$resultDate
                 ));
             } else {
                 die('Impossible de télécharger le fichier !');
             }
         }
     } else {
         die('Votre fichier est trop lourd, veuillez reduire svp !');
     }

   die('Message envoyé avec succès !');

 } else {
   die('Remplissez tout les champs svp !');
 }*/
