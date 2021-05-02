<?php
    $db = new PDO('mysql:host=localhost;dbname=mmifyw', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $sql = "DELETE FROM `jeucm` WHERE `id` = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $_GET['id'], PDO::PARAM_STR);
    $stmt->execute();

    header('Location: ../admin.php');
?>