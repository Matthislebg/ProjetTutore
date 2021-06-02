<?php
    include "../connexionPDO.php";

    if (isset($_POST['search'])){   // La valeur de search est récupéré grace au code ajax (js)

    $cherche = $_POST['search'];

    $sql = "SELECT `nomMetier`, `idMetier`, `nomDomaine` FROM `metier`, `domaine` WHERE metier.domaineId=domaine.idDomaine AND nomMetier LIKE '%$cherche%' ORDER BY `domaineId` ASC LIMIT 4";
    $req = $db -> prepare($sql);
    $req -> execute();

    while($data = $req -> fetch()){
        echo ('<a href="../pages/metier.php?page='.$data['idMetier'].'" class="elemSearch '.$data['nomDomaine'].'">'.$data['nomMetier'].'</a>');
    }
}
?>