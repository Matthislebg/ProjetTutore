<?php
    include "../connexionPDO.php";          
    
    $idMetier = $_GET['page'];
    
    $sql = "SELECT * FROM metier WHERE idMetier = '" . $idMetier . "'";
    $req = $db -> prepare($sql);
    $req -> execute();
    while ($data = $req -> fetch()){
        $metier = $data['nomMetier'];
        $presentation = $data['presentation'];
        $qualite = $data['qualite'];
        $competence = $data['competence'];
        $formation = $data['formation'];
        $salaire = $data['salaire'];
        $structure = $data['structure'];
        $image = $data['imageUrl'];
    }
    $req = null;
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php 
        echo $metier . " - MMI FYW";
    ?></title>
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/metier.css">
</head>

<body>
    <header><?php
        $titre = "";
        include 'header.php';
    ?></header>
    <div class="image">
        <h1><?php 
            echo $metier;
        ?></h1> 
    </div>
    <!-- <h2>Développeur front</h2> -->
    <section>
        <div class="container">
            <img src="../medias/presentation.svg">
            <div class="bar_1"></div>
            <div class="text_container">
                <h3>PRÉSENTATION</h3>
                    <?php 
                        echo $presentation;
                    ?>
            </div>
        </div>
        <div class="container">
            <img src="../medias/qualites.svg">
            <div class="bar_2"></div>
            <div class="text_container">
                <h3>QUALITÉS</h3>
                <p>
                    <?php 
                        echo $qualite;
                    ?>
                </p>
            </div>
        </div>
        <div class="container">
            <img src="../medias/competences.svg">
            <div class="bar_3"></div>
            <div class="text_container">
                <h3>COMPÉTENCES</h3>
                <p>
                <?php 
                    echo $competence;
                ?>
                </p>
            </div>
        </div>
        
        <div class="container last">
            <img src="../medias/formation.svg">
            <div class="bar_4"></div>
            <div class="text_container">
                <h3>FORMATION ET SALAIRE</h3>
                <p>
                <?php 
                    echo $formation;
                ?>
                <?php 
                    echo $salaire;
                ?>
                <?php 
                    echo $structure;
                ?>
                </p>
            </div>
        </div>
    </section>
    <footer><?php 
        include 'footer.php';
    ?></footer>
</body>

</html>