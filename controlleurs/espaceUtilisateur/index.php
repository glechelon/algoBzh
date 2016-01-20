
<?php //Controlleur espace  client.

include "modeles/espaceUtilisateur/requetesSql.php";
include "modeles/espaceUtilisateur/libAffichage.php";

$session = new Session();
if (isset($_SESSION["isConnected"]) && $_SESSION["isConnected"] == "TRUE") {

    if ($_SESSION["typeCompte"] == 0) {
        if (!isset($_GET["p"])) {

            $contenu = "vues/parts/acc.html";
            include "vues/espaceClientVue.php";

        } else if ($_GET["p"] == "deco") {

            $session->deconnexion();
            header("location:index.php");

        } else if ($_GET["p"] == "factures") {

            $r = selectFactures();
            $contenu = "vues/parts/affFacture.php";
            include "vues/espaceClientVue.php";

        } else if ($_GET["p"] == "commandes") {

            $r = selectCommandes();
            $contenu = "vues/parts/affCommande.php";
            include "vues/espaceClientVue.php";

        } else if ($_GET["p"] == "saisir"){

            $r = selectProduits();
            $contenu = "vues/parts/produits.php";
            include "vues/espaceClientVue.php";
        }

    } else {

        echo "Espace Teleprospecteur.";
    }

} else {
    

     include "vues/error.php";

}
?>