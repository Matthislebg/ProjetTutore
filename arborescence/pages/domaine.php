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
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>    
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
    </div>
   
    <div class="section"> 
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
            <div class="ligne2">
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
    </div>
   
    <div class="section">
    <section>
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
    </div>

    <div class="section">
    <section>
        <h1>MINI-JEU</h1>
        <div class="jeu">
            <?php 
                include 'jeu_'. $domaine . '.php';
            ?>
        </div>
    </section>

    <section>
        <h1>PROJET</h1>
        <P>...</P>
    </section>
    <footer><?php 
        include 'footer.php';
    ?></footer>
</body>
</html>