<?php

    // $host = "sqletud.u-pem.fr";
    // $dbname = "crexharr_db";
    // $username = "crexharr";
    // $password = "celine";
   
    $host = "localhost";
    $dbname = "mmifyw";
    $username = "root";
    $password = "";
    
    try {
        $db = new PDO ("mysql:host={$host};dbname={$dbname};", $username, $password, array
        (PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    }
    catch (Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
?>