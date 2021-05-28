<?php
    include "../../connexionPDO.php";

    $sql = "DELETE FROM `jeucm` WHERE `id` = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $_GET['id'], PDO::PARAM_STR);
    $stmt->execute();
?>