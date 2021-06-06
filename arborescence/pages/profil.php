<?php
  include "../connexionPDO.php";
  $id = $_GET['id'];

  if ($id == 4){
    $couleur = "audiovisuel";
  } else if ($id == 2){
    $couleur = "communication";
  } else if ($id == 3){
    $couleur = "programmation";
  } else {
    $couleur = "design";
  }

  // REQUETE contenu du profil
  $sql = "SELECT * FROM profil WHERE id = '" . $id . "'";
  $req = $db -> prepare($sql);
  $req -> execute();
  while ($data = $req -> fetch()){
      $nom = $data['nom'];
      $role = $data['role'];
      $content = $data['texte'];
      $photo = $data['urlPhoto'];
      $cvNum = $data['urlCvNum'];
      $cvPapier = $data['urlCvPapier'];
  }
  $req = null;
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>L'équipe - MMI Find Your Way</title>
    <link rel="stylesheet" href="../styles/profil.css" />
    <link rel="stylesheet" href="../styles/header.css" />
    <link rel="stylesheet" href="../styles/footer.css" />
    <link rel="icon" href="../medias/icon.png" type="image/png">
  </head>

  <body class="<?php echo $couleur ?>">
    <header><?php
      $titre = $nom;
      include 'header.php';
    ?></header>
    <section>
      <div class="container_1">
        <h2><?php echo $role ?></h2>
        <?php echo $content ?>
      </div>
      <div class="blob"><img src="<?php echo $photo ?>" alt="" /></div>
    </section>
    <div class="containerCvLinks">
      <a href="<?php echo $cvNum ?>" target="_blank" >CV NUMÉRIQUE</a>
      <a href="<?php echo $cvPapier ?>" target="_blank" >CV PAPIER</a>
    </div>

    <div class="wave"></div>
    <?php
        include 'footer.php';
    ?>
  </body>
</html>
