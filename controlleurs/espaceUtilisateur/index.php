
<?php //Controlleur espace  client.


$session = new Session();
if (isset($_SESSION["isConnected"]) && $_SESSION["isConnected"] == "TRUE") {

    if ($_SESSION["typeCompte"] == 0) {
        if (!isset($_GET["p"])) {

            $contenu = "vues/parts/acc.html";
            include "vues/espaceClientVue.php";

        } else if ($_GET["p"] == "deco") {

            $session->deconnexion();
            header("location:index.php");

        } else if ($_GET["p"] == "produits") {

            $contenu = "vues/parts/acc.html";
            include "vues/espaceClientVue.php";

        } else if ($_GET["p"] == "commandes") {

            $contenu = "vues/parts/acc.html";
            include "vues/espaceClientVue.php";

        }

    } else {

        echo "Espace Teleprospecteur.";
    }

} else {
    

     include "vues/error.php";

}
?>