<?php
    $servername = "localhost";
    $database = "lce";
    $username = "root";
    $password = "";

    try
    {
        $bdd = new PDO('mysql:host='.$servername.';dbname='.$database, $username, $password);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //die("Hello db");
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }