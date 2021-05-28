<?php

    include "../connexionPDO.php";

    // REQUETE 1
    if ($_GET['page'] == "programmation" || $_GET['page'] == "audiovisuel" || $_GET['page'] == "design" || $_GET['page'] == "communication"){
        $domaine = $_GET['page'];

      } else {
        header("Location: erreur.php");
    }

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
    <link rel="stylesheet" href="../styles/footer.css">
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/domaine.css">
    <link rel="stylesheet" href="../styles/projetmmi.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../scripts/domaine.js"></script>
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
                // echo $description;
            ?>

            <!-- en attendant de mettre dans la bdd -->
                <h2>Description</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda nobis ullam dolorum nam, quasi voluptas officiis. Inventore dolor facilis quibusdam, pariatur nihil laboriosam sint numquam quas corporis obcaecati! Ab, enim.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam dolorum iure sequi in labore necessitatibus vel delectus nam eum quaerat molestiae et tempora nostrum ut, blanditiis perspiciatis hic quidem similique.
                </p>


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
        <h1>MINI-JEU</h1>
        <div class="jeu">
            <?php
                include 'jeu_'. $domaine . '.php';
            ?>
        </div>
    </section>

    <section>
        <h1>PROJETS</h1>
        <div class="carrousel">
    <h2> <span class="domaineprojet">Audiovisuel</span></h2>
    <input type="radio" name="diapos" id="radio-1" checked>
    <input type="radio" name="diapos" id="radio-2">
    <input type="radio" name="diapos" id="radio-3">
    <input type="radio" name="diapos" id="radio-4">
    <ul class="diapos">
      <!-- DIAPO 1 -->
      <li class="diapo">
        <p>
          <h3>CV Vidéo</h3>
          <span class="presentation">
            <img src="https://festival2020.iutmmi.fr/img/project/avc_164.jpg">
            <p class="description">
              Ce CV vidéo est un projet commun en audiovisuel et en anglais. Ce n'est pas un CV traditionnel comme on a
              l'habitude de voir, en effet Anastasiya Balan, ancienne élève à l'IUT Gustave Eiffel a cherché à démontrer
              ses compétences et son savoir-être sans simplement les énoncer.
              Ce CV Vidéo présenté au Festival MMI 2020 a obtenu le premier prix dans la catégorie Audiovisuel.
              <p>
                <a href="https://www.youtube.com/watch?v=PV3bbVQLLYg&feature=youtu.be&ab_channel=FestivalMMI"> Lien vers
                  l'oeuvre</a>

          </span>
        </p>
      </li>
      <!-- DIAPO 2 -->
      <li class="diapo">
        <p>
          <h3>Shoot</h3>
          <span class="presentation">
            <img src="https://festival2020.iutmmi.fr/img/project/ksm_405.png">
            Ce projet est un court-métrage réalisé par des anciens élèves en DUT MMI à Limoges en 2020. Cette vidéo
            raconte l'histoire de Ben, un photographe qui, après avoir essuyé plusieurs échecs, se voit proposer un
            ultime contrat qui déterminera son avenir dans l’agence. Il n’a qu’un seul cliché à prendre mais cette
            mission s’annonce périlleuse car la concurrence est rude. Ce court-métrage présenté au Festival MMI 2020 a
            obtenu un prix dans la catégorie Audiovisuel (2e position) et un prix du public (3e position).
          </span>
        </p>
      </li>
      <!-- DIAPO 3 -->
      <li class="diapo">
        <p>
          <h3>Super MMI</h3>
          <span class="presentation">
            <img src="/medias/audio3.jpg">
            Super MMI est un projet personnel d'Enzo Cailleton ancien élève en DUT MMI à l'IUT de Laval réalisé de
            décembre 2019 à avril 2020 (scénario, animation, mixage audio, montage). C'est un court-métrage d'animation
            3D où l'on retrouve Sylvain un étudiant MMI. Le but de ce projet était de créer une œuvre parlant de la
            filière MMI de façon originale par rapport à ce qu'on a l'habitude de voir. Ce projet présenté au Festival
            MMI 2020 a obtenu un prix dans la catégorie Animation (1ère position) et dans la catégorie Son (1ère
            position)
          </span>
        </p>
      </li>
      <!-- SLIDE 4 -->
      <li class="diapo">
        <p>
          <h3>Plongée Astrale</h3>
          <span class="presentation">
            <img src="https://festival2020.iutmmi.fr/img/project/eps_313.png">
            Cette animation est un projet personnel d'une ancienne étudiante en DUT MMI à l'IUT de Tarbes. Doralice
            Macaire a souhaité réaliser un film animé pour le concours Un'Anime 2019 dans le département MMI de Rouen
            dont le thème imposé était « La tête dans les étoiles ». Ce projet présenté au Festival MMI 2020 a obtenu un
            prix dans la catégorie Animation (2e position).
          </span>
        </p>
      </li>
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
        <svg width="100%" height="100%" viewBox="0 0 16 17" fill="none"><circle cx="8" cy="8" r="8" fill="#1DB250"/></svg>
      </div>
      <div class="btnNavClick">
        <svg width="100%" height="100%" viewBox="0 0 16 17" fill="none"><path d="M15 8.5C15 12.7001 11.8097 16 8 16C4.19026 16 1 12.7001 1 8.5C1 4.29989 4.19026 1 8 1C11.8097 1 15 4.29989 15 8.5Z" stroke="#1DB250" stroke-width="2"/></svg>
      </div>
      <div class="btnNavClick">
        <svg width="100%" height="100%" viewBox="0 0 16 17" fill="none"><path d="M15 8.5C15 12.7001 11.8097 16 8 16C4.19026 16 1 12.7001 1 8.5C1 4.29989 4.19026 1 8 1C11.8097 1 15 4.29989 15 8.5Z" stroke="#1DB250" stroke-width="2"/></svg>
      </div>
      <div class="btnNavClick">
        <svg width="100%" height="100%" viewBox="0 0 16 17" fill="none"><path d="M15 8.5C15 12.7001 11.8097 16 8 16C4.19026 16 1 12.7001 1 8.5C1 4.29989 4.19026 1 8 1C11.8097 1 15 4.29989 15 8.5Z" stroke="#1DB250" stroke-width="2"/></svg>
      </div>
      <div class="btnNavClick">
        <svg width="100%" height="100%" viewBox="0 0 16 17" fill="none"><path d="M15 8.5C15 12.7001 11.8097 16 8 16C4.19026 16 1 12.7001 1 8.5C1 4.29989 4.19026 1 8 1C11.8097 1 15 4.29989 15 8.5Z" stroke="#1DB250" stroke-width="2"/></svg>
      </div>
      <!-- <svg width="100%" height="100%" viewBox="0 0 16 17" fill="none" class="BtnNavPlainCircle"><circle cx="8" cy="8" r="8" fill="#1DB250"/></svg> -->
    </div>
  </div>

</body>
</html>
