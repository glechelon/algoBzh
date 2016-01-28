
<?php //Controlleur espace  client.


include "modeles/espaceUtilisateur/Commandes.php";
include "modeles/espaceUtilisateur/Factures.php";
include "modeles/espaceUtilisateur/Produits.php";
include "modeles/espaceUtilisateur/Familles.php";
include "modeles/espaceUtilisateur/Panier.php";
include "modeles/espaceUtilisateur/ProduitS.php";


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

            $factures = new Factures();
            $contenu = "vues/parts/affFacture.php";
            include "vues/espaceClientVue.php";

        } else if ($_GET["p"] == "commandes") {


            $commandes = new Commandes();
            $contenu = "vues/parts/affCommande.php";
            include "vues/espaceClientVue.php";

        } else if ($_GET["p"] == "saisir"){

            $panier = new Panier();
            $produits = new Produits();
            $familles = new Familles();
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