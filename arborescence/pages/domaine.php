<?php
    include "../connexionPDO.php";

    // récupérer nom domaine
    if ($_GET['page'] == "programmation" || $_GET['page'] == "audiovisuel" || $_GET['page'] == "design" || $_GET['page'] == "communication"){
        $domaine = $_GET['page'];

      } else {
        header("Location: erreur.php");
    }

    // REQUETE 1
    $sql = "SELECT * FROM domaine WHERE nomDomaine = '" . $domaine . "'";
    $req = $db -> prepare($sql);
    $req -> execute();
    while ($data = $req -> fetch()){
        $titre = $data['nomDomaine'];
        $presentation = $data['presentation'];
        $image = $data['imageUrl'];
        $video = $data['videoUrl'];
        $description = $data['videoDescription'];
    }
    $req = null;

    // REQUETE 2 : noms de métiers
    $sql = "SELECT * FROM domaine INNER JOIN metier ON domaine.idDomaine = metier.domaineId WHERE nomDomaine = '" . $domaine . "'";
    $req = $db -> prepare($sql);
    $req -> execute();
    $i = 0;
    while ($data = $req -> fetch()){
        $idMetier[$i] = $data['idMetier'];
        $metier[$i] = $data['nomMetier'];
        $i++;
    }
    $req = null;

    // REQUETE 3 : contenu section projet
    $sql = "SELECT nomProjet, nomAuteur, projet.presentation, projet.siteUrl, projet.imageUrl, projet.domaineId, domaine.idDomaine, nomDomaine FROM projet INNER JOIN domaine ON domaine.idDomaine = projet.domaineId WHERE nomDomaine = '" . $domaine . "'";
    $req = $db -> prepare($sql);
    $req -> execute();
    $i = 0;
    while ($data = $req -> fetch()){
      $nomProjet[$i] = $data['nomProjet'];
      $nomAuteur[$i] = $data['nomAuteur'];
      $imageProjet[$i] = $data['imageUrl'];
      $presentationProjet[$i] = $data['presentation'];
      $lienOeuvre[$i] = $data['siteUrl'];
      $i++;
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
        echo $titre . " - MMI FYW";
    ?></title>    
    <link rel="stylesheet" href="../styles/domaine.css">
    <link rel="stylesheet" href="../styles/projetDomaine.css">
    <link rel="stylesheet" href="../styles/footer.css">
    <link rel="stylesheet" href="../styles/header.css">

    <?php
      echo '<link rel="stylesheet" href="../styles/' . $domaine . 'Jeu.css">'
    ?>

    <?php
      echo '<link rel="stylesheet" href="../styles/' . $domaine . 'DomaineColor.css">'
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="../scripts/domaine.js"></script>
    <script src="../scripts/projetDomaine.js"></script>

    <?php
      echo '<script src="../scripts/'.$domaine.'Jeu.js"></script>'
    ?>

</head>
<body>
    <header><?php
        include 'header.php';
    ?></header>

    <section>
        <h1>PRÉSENTATION</h1>
        <div class="container">
            <p>
            <!-- PRESENTATION    -->
                <?php
                echo $presentation;
                ?>
            </p>
            <img src="<?php
                echo $image;
            ?>" alt="illustration">
        </div>
    </section>

    <section>
        <h1>LES MÉTIERS</h1>
        <div class="container">
            <div class="ligne1">
                <a href="metier.php<?php
                        echo "?page=" . $idMetier[0];
                    ?>">
                    <div class="metierItem"><?php
                            echo $metier[0];
                        ?></div>
                </a>
                <a href="metier.php<?php
                        echo "?page=" . $idMetier[1];
                    ?>">
                    <div class="metierItem"><?php
                            echo $metier[1];
                        ?></div>
                </a>
            </div>
            <div class="ligne2"></div>
            <div class="ligne3">
            <a href="metier.php<?php
                        echo "?page=" . $idMetier[2];
                    ?>">
                    <div class="metierItem"><?php
                            echo $metier[2];
                        ?></div>
                </a>
                <a href="metier.php<?php 
                        echo "?page=" . $idMetier[3];
                    ?>">
                    <div class="metierItem"><?php
                            echo $metier[3];
                    ?></div>
                </a>
        </div>
        </div>
    </section>

    <section class="interview2">
        <h1>INTERVIEW</h1>
        <div class="interview">
            <div class="description">
            <?php
                echo $description;
            ?>

            <!-- en attendant de mettre dans la bdd -->
                <!-- <h2>Description</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda nobis ullam dolorum nam, quasi voluptas officiis. Inventore dolor facilis quibusdam, pariatur nihil laboriosam sint numquam quas corporis obcaecati! Ab, enim.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam dolorum iure sequi in labore necessitatibus vel delectus nam eum quaerat molestiae et tempora nostrum ut, blanditiis perspiciatis hic quidem similique.
                </p> -->


            </div>

            <div class="video">

                                        <!-- /!\ REGLAGE TAILLE VIDEO A REVOIR /!\ -->

                <!-- taille à régler soit ici soit en css (en supprimant la ligne ci dessous)-->
                <iframe
                width="100%" height="100%"
                src="<?php

                    echo $video;

                ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


            </div>
        </div>
    </section>
    <section>
        <?php
            echo "<h1>TESTEZ VOS CAPACITÉS EN ".strtoupper($domaine)."</h1>";
        ?>
        <div class="jeu">
            <?php
                include $domaine . 'Jeu.php';
            ?>
        </div>
    </section>

    <section>
      <h1>PROJETS</h1>
      <div class="carrousel">
        <h2> <span class="domaineprojet"><?php

          echo $domaine;

        ?>
        <div class="projetCheck">
          <div class="projetCheckLast">
            <svg width="63" height="60" viewBox="0 0 63 60" fill="none">
  <path d="M61.8284 32.8284C63.3905 31.2663 63.3905 28.7337 61.8284 27.1716L36.3726 1.71573C34.8105 0.153635 32.2778 0.153634 30.7157 1.71573C29.1536 3.27783 29.1536 5.81049 30.7157 7.37259L53.3431 30L30.7157 52.6274C29.1536 54.1895 29.1536 56.7222 30.7157 58.2843C32.2778 59.8464 34.8105 59.8464 36.3726 58.2843L61.8284 32.8284ZM-3.49691e-07 34L59 34L59 26L3.49691e-07 26L-3.49691e-07 34Z" fill="black"/>
  </svg>
            <!-- <img src="../medias/projetArrow.svg" alt="naviguer vers le projet précédent"> -->
          </div>
          <div class="projetCheckNext">
          <svg width="63" height="60" viewBox="0 0 63 60" fill="none">
  <path d="M61.8284 32.8284C63.3905 31.2663 63.3905 28.7337 61.8284 27.1716L36.3726 1.71573C34.8105 0.153635 32.2778 0.153634 30.7157 1.71573C29.1536 3.27783 29.1536 5.81049 30.7157 7.37259L53.3431 30L30.7157 52.6274C29.1536 54.1895 29.1536 56.7222 30.7157 58.2843C32.2778 59.8464 34.8105 59.8464 36.3726 58.2843L61.8284 32.8284ZM-3.49691e-07 34L59 34L59 26L3.49691e-07 26L-3.49691e-07 34Z" fill="black"/>
  </svg>
            <!-- <img src="../medias/projetArrow.svg" alt="naviguer vers le projet suivant"> -->
          </div>
        </div>
        </span></h2>
        <input type="radio" name="diapos" id="radio-1" checked>
        <input type="radio" name="diapos" id="radio-2">
        <input type="radio" name="diapos" id="radio-3">
        <input type="radio" name="diapos" id="radio-4">
        <ul class="diapos">
          <!-- DIAPOS -->
          <?php 
            for ($i = 0; $i < count($nomProjet); $i++) {
              echo '<li class="diapo"><h3>'.$nomProjet[$i].'<span> - '.$nomAuteur[$i].'</span></h3><span class="presentation"><img src="'.$imageProjet[$i].'"><p class="description">'.$presentationProjet[$i].'</p><a href="'.$lienOeuvre[$i].'">Lien vers l\'oeuvre</a></span></li>';
            }
          ?>
        </ul>
        <div class="diaposNavigation">
          <label for="radio-1" id="dotForRadio-1"></label>
          <label for="radio-2" id="dotForRadio-2"></label>
          <label for="radio-3" id="dotForRadio-3"></label>
          <label for="radio-4" id="dotForRadio-4"></label>
        </div>
      </div>
    </section>
    <footer><?php
        include 'footer.php';
    ?></footer>

  <div class="btnNav">
    <div class="btnNavContainer">
      <div class="btnNavClick">
        <svg width="100%" height="100%" viewBox="0 0 16 17" fill="none"><circle cx="8" cy="8" r="8" stroke="none"/></svg>
      </div>
      <div class="btnNavClick">
        <svg width="100%" height="100%" viewBox="0 0 16 17" fill="none"><path d="M15 8.5C15 12.7001 11.8097 16 8 16C4.19026 16 1 12.7001 1 8.5C1 4.29989 4.19026 1 8 1C11.8097 1 15 4.29989 15 8.5Z" stroke-width="2"/></svg>
      </div>
      <div class="btnNavClick">
        <svg width="100%" height="100%" viewBox="0 0 16 17" fill="none"><path d="M15 8.5C15 12.7001 11.8097 16 8 16C4.19026 16 1 12.7001 1 8.5C1 4.29989 4.19026 1 8 1C11.8097 1 15 4.29989 15 8.5Z" stroke-width="2"/></svg>
      </div>
      <div class="btnNavClick">
        <svg width="100%" height="100%" viewBox="0 0 16 17" fill="none"><path d="M15 8.5C15 12.7001 11.8097 16 8 16C4.19026 16 1 12.7001 1 8.5C1 4.29989 4.19026 1 8 1C11.8097 1 15 4.29989 15 8.5Z" stroke-width="2"/></svg>
      </div>
      <div class="btnNavClick">
        <svg width="100%" height="100%" viewBox="0 0 16 17" fill="none"><path d="M15 8.5C15 12.7001 11.8097 16 8 16C4.19026 16 1 12.7001 1 8.5C1 4.29989 4.19026 1 8 1C11.8097 1 15 4.29989 15 8.5Z" stroke-width="2"/></svg>
      </div>
    </div>
  </div>

</body>
</html>
