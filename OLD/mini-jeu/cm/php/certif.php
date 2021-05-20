<?php
    $db = new PDO('mysql:host=localhost;dbname=mmifyw', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $sql = "UPDATE `jeucm` SET `certif` = :certif  WHERE `id` = :id";
    $stmt = $db->prepare($sql);

    if($_GET['certif']){
        $certif = 0;
    }else{
        $certif = 1;
    }

    $stmt->bindParam(':certif', $certif, PDO::PARAM_STR);
    $stmt->bindParam(':id', $_GET['id'], PDO::PARAM_STR);
    $stmt->execute();
?>