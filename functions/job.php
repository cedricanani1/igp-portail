<?php

if( isset($_POST['poste']) && isset($_POST['name']) &&
    isset($_POST['phone']) && isset($_FILES['cvfile']) &&
    $_FILES['cvfile']['error'] == 0 ) {

    $nameClient = $_POST['name'];
    $posteClient = $_POST['poste'];
    $telephoneClient = $_POST['phone'];

    $nomCV = "";
    $nomLM = "";

    $errors= array();
    $file_name = $_FILES['cvfile']['name'];
    $file_size =$_FILES['cvfile']['size'];
    $file_tmp =$_FILES['cvfile']['tmp_name'];
    $file_type=$_FILES['cvfile']['type'];
    $infosFichier = pathinfo($_FILES['cvfile']['name']);
    $file_ext = $infosFichier['extension'];

    $extensions= array("pdf", "docx", "doc", "pptx");

    if(in_array($file_ext,$extensions)=== false){
        $errors[]="extension not allowed, please choose a doc, docx, pdf or pptx file.";
    }

    if($file_size > 10097152){
        $errors[]='File size must be excately 10 MB';
    }
    if(empty($errors)==true){
        $dateSaving = new DateTime();
        $resultDate = $dateSaving->format('Y-m-d H:i:s');
        $resultDate = explode('-', $resultDate);
        $resultDate = implode("", $resultDate);

        $nomCV = $_POST['name'].'_CV_'.$resultDate.'.'.$file_ext;

        if (move_uploaded_file($file_tmp, "../assets/job_file/".$_POST['name'].'_CV_'.$resultDate.'.'.$file_ext)) {
            include_once '../config/db.php';

            $req = $bdd->prepare('INSERT INTO job (poste, nom,telephone,
                     cv, lm, date_envoi) VALUES(:poste,:nom,:telephone,:cv,:lm, NOW())');
            $req->execute(array(
                'poste' => $_POST['poste'],
                'nom' => $_POST['name'],
                'telephone' => $_POST['phone'],
                'cv' => $_POST['name'].'_CV_'.$resultDate.''.$file_ext,
                'lm' => $_POST['name'].'_LM_'.$resultDate.''.$file_ext
            ));
            //S'il soumet un LM
            if (isset($_FILES['lmfile']) && $_FILES['lmfile']['error'] == 0 ) {
                $errors= array();
                $file_name_LM = $_FILES['lmfile']['name'];
                $file_size_LM =$_FILES['lmfile']['size'];
                $file_tmp_LM =$_FILES['lmfile']['tmp_name'];
                $file_type_LM =$_FILES['lmfile']['type'];
                $infosFichier_LM = pathinfo($_FILES['lmfile']['name']);
                $file_ext_LM = $infosFichier_LM['extension'];

                if(in_array($file_ext_LM,$extensions)=== false){
                    $errors[]="extension not allowed, please choose a doc, docx, pdf or pptx file for second file.";
                }

                if($file_size_LM > 10097152){
                    $errors[]='File size must be excately 10 MB for second file.';
                }
                $nomLM = $_POST['name'].'_LM_'.$resultDate.'.'.$file_ext_LM;
                move_uploaded_file($file_tmp_LM,"../assets/job_file/".$_POST['name'].'_LM_'.$resultDate.'.'.$file_ext_LM);
            }

            //On envoi le mail
            include_once '../emails/sendForJob.php'; //'../assets/job_file/'

            $sendEmailClient = new sendForJob($nameClient, $posteClient, $telephoneClient, $nomCV, $nomLM);
            $sendEmailClient->sendMailLce();

            echo "<script>alert('Message envoyé avec succès !');</script>";
            header('location:../confirm_jobsms.php');
        } else {
            echo "<script>alert('Impossible de télécharger le fichier !');</script>";
        }
    }else{
        echo "<script>alert($errors);</script>";
    }
} else {
    echo "<script>alert('Remplissez tous les champs svp !');</script>";
}
