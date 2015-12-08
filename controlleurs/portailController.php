<?php





if (isset($_GET["p"])) {

    if ($_GET["p"] == "formConnexion") {
    
        include "modeles/portail/connexion.php";
        testCo($connexion);


    }
} else {
    
    $content = "vues/parts/form.html";

    include "vues/portailVue.php";
}

?>


