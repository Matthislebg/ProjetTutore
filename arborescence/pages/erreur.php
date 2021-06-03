<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Erreur</title>
    <link rel="stylesheet" href="../styles/erreur.css">
    <link rel="stylesheet" href="../styles/header.css">
  </head>
  <body>
    <header><?php 
        $titre = "";
        include 'header.php';
        ?></header>
    <div class="container">
      <img src="../medias/erreur.svg" />
      <p>La page que vous avez demandé n'existe pas</p>
      <a href="../index.php">ACCUEIL</a>
    </div>
    <footer></footer>
  </body>
</html>
