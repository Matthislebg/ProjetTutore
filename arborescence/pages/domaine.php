<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page_Domaine</title>
    <!-- <link rel="stylesheet" href="../styles/header.css"> -->
    <link rel="stylesheet" href="../styles/domaine.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>    
    <script src=".../scripts/domaine.js"></script>
</head>
<body>
    <header>
        <?php
            include 'header.php';
        ?>
    </header>

    <section>
        <h1>PRESENTATION</h1>
        <div class="container">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae cupiditate laboriosam dolor esse natus ab animi quisquam, inventore consequatur quas aperiam, possimus omnis quibusdam minus voluptatem accusantium autem eum modi.</p>
            <img src="" alt="illustration"> 
        </div>
    </section>
    
    <section>
        <h1>LES METIERS</h1>
        <div class="container">
            <div class="ligne1">
                <div class="metierItem">métier 1</div>
                <div class="metierItem">métier 2</div>
            </div>
            <div class="ligne2">
                <div class="metierItem">métier 3</div>
                <div class="metierItem">métier 4</div>
            </div>
        </div>
    </section>

    <section>
        <h1>INTERVIEW</h1>
        <div class="interview">
            <div class="description">
                <h2>Description</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda nobis ullam dolorum nam, quasi voluptas officiis. Inventore dolor facilis quibusdam, pariatur nihil laboriosam sint numquam quas corporis obcaecati! Ab, enim.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam dolorum iure sequi in labore necessitatibus vel delectus nam eum quaerat molestiae et tempora nostrum ut, blanditiis perspiciatis hic quidem similique.
                </p>
            </div>
            
            <div class="video">

                <!-- taille à régler soit ici soit en css (en supprimant la ligne ci dessous)-->
                <iframe 
                width="100%" height="100%" 
                src="https://www.youtube.com/embed/k_ks5g1ejuI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                
            </div>
        </div>
    </section>
    <section>
        <h1>MINI-JEU</h1>
        <div class="jeu">
            <!-- INCLUDE -->
        </div>
    </section>

    <section>
        <h1>PROJET</h1>
        <P>...</P>
    </section>
    <footer>FOOTER</footer>
</body>
</html>