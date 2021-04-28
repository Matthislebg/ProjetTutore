<?php


//  page pour réunir toutes les requetes sql et le code php associé avant l'intégration dans les pages html existantes
// n'oubliez pas de commenter le code selon la syntaxe existante (nom de la page + section concernée, description explicative, commentaire de fin du code)
// et testez vos requêtes sql dans phpmyadmin bien sûr avant d'écrire votre code

// MODELE EXEMPLE


    // include '../../connexion.php';     ne sera rajoutée que une fois passé sur le serveur upem

    // link pour utiliser avec xampp
    $link = new PDO('mysql:host=localhost;dbname=MMIFYW', 'root', '', array
    (PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

    // requête sql
    $sql = "SELECT presentation, nomDomaine FROM `Domaine` WHERE nomDomaine = 'programmation'";
    $req = $link -> prepare($sql);
    $req -> execute();

    // boucle pour récupérer les données
    while ($data = $req -> fetch()){

        // afficher les informations tirées de la bdd
        echo $data['presentation'];

    }

    $req = null;
    // fin du code




// PAGE DOMAINE

// presentation

    // présentation > description (page programmation)

    $link = new PDO('mysql:host=localhost;dbname=MMIFYW', 'root', '', array
    (PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

    $sql = "SELECT presentation, nomDomaine FROM `Domaine` WHERE nomDomaine = 'programmation'";
    $req = $link -> prepare($sql);
    $req -> execute();
    $data = $req -> fetch();
    echo $data['presentation'];
    $req = null;

    // présentation > description (page design)

    $link = new PDO('mysql:host=localhost;dbname=MMIFYW', 'root', '', array
    (PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

    $sql = "SELECT presentation, nomDomaine FROM `Domaine` WHERE nomDomaine = 'design'";
    $req = $link -> prepare($sql);
    $req -> execute();
    $data = $req -> fetch();
    echo $data['presentation'];
    $req = null;

    // présentation > description (page communication)

    $link = new PDO('mysql:host=localhost;dbname=MMIFYW', 'root', '', array
    (PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

    $sql = "SELECT presentation, nomDomaine FROM `Domaine` WHERE nomDomaine = 'communication'";
    $req = $link -> prepare($sql);
    $req -> execute();
    $data = $req -> fetch();
    echo $data['presentation'];
    $req = null;

    // présentation > description (page audiovisuel)

    $link = new PDO('mysql:host=localhost;dbname=MMIFYW', 'root', '', array
    (PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

    $sql = "SELECT presentation, nomDomaine FROM `Domaine` WHERE nomDomaine = 'audiovisuel'";
    $req = $link -> prepare($sql);
    $req -> execute();
    $data = $req -> fetch();
    echo $data['presentation'];
    $req = null;


// métiers

    // métiers > métiers 1 (page programmation)

    // ...

// fin



// PAGE METIER

// PAGE ACCUEIL

// PAGE EN SAVOIR PLUS




?>