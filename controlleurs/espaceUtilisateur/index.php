
<?php //Controlleur espace  client.


include "modeles/espaceUtilisateur/Commandes.php";
include "modeles/espaceUtilisateur/CommandesT.php";
include "modeles/espaceUtilisateur/Factures.php";
include "modeles/espaceUtilisateur/Produits.php";
include "modeles/espaceUtilisateur/Familles.php";
include "modeles/espaceUtilisateur/Panier.php";
include "modeles/espaceUtilisateur/Produit.php";
include "modeles/espaceUtilisateur/Utilisateur.php";
include "modeles/espaceUtilisateur/Commande.php";



$session = new Session();
if (isset($_SESSION["isConnected"]) && $_SESSION["isConnected"] == "TRUE") {

    $utilisateur = new Utilisateur($_SESSION["codeClient"]);
    $_SESSION["utilisateur"] = serialize($utilisateur);

    if ($_SESSION["typeCompte"] == 0) {
        if (!isset($_GET["p"])) {

            $contenu = "vues/parts/acc.html";
            include "vues/espaceClientVue.php";

        } else if ($_GET["p"] == "deco") {

            $session->deconnexion();
            header("location:index.php");

        } else if ($_GET["p"] == "factures") {

            $factures = new Factures($utilisateur->getCode());
            $contenu = "vues/parts/affFacture.php";
            include "vues/espaceClientVue.php";

        } else if ($_GET["p"] == "commandes") {


            $commandes = new Commandes($utilisateur->getCode());
            $contenu = "vues/parts/affCommande.php";
            include "vues/espaceClientVue.php";

        } else if ($_GET["p"] == "saisir"){





            if (!isset($_GET["a"])) {
                if (isset($_SESSION["panier"])){

                    unset($_SESSION["panier"]);
                }
                $panier = new Panier();
                $_SESSION["panier"] = serialize($panier);
                $produits = new Produits();
                $familles = new Familles();
                $contenu = "vues/parts/produits.php";
                include "vues/espaceClientVue.php";

            } else {


                if ($_GET["a"] == "add"){
                    $panier = unserialize($_SESSION["panier"]);
                    $panier->addProduit($_GET["id"], $_GET["q"]);
                    $_SESSION["panier"] = serialize($panier);
                    echo "reussi";


                }

            }

        } else if ($_GET["p"] == "valider" ) {




            if (isset($_SESSION["panier"])){

                $panier = unserialize($_SESSION["panier"]);
                $contenu =  "vues/parts/valider.php";
                include "vues/espaceClientVue.php";
                $_SESSION["panier"] = serialize($panier);


            }else{


                include "vues/error.php";
            }


        } else if ($_GET["p"] == "envoyer"){


            $panier = unserialize($_SESSION["panier"]);
            $commande = new Commande();
            $date = date("Y-m-d H:i:s");
            $commande->creer($panier->total(), $date, $utilisateur->getCode(), $utilisateur->getId());
            $panier->inserer();
            $contenu = "vues/parts/reussi.php";
            include "vues/espaceClientVue.php";





        }

    } else {

        if (!isset($_GET["p"])){

            $utilisateur = unserialize($_SESSION["utilisateur"]);
            $commandes = new CommandesT();
            $contenu = "vues/parts/affCommandesT.php";
            include "vues/espaceTele.php";



        }else {


            if ($_GET["p"] == "commandes") {

                $commandes = new CommandesT();
                $contenu = "vues/parts/affCommandesT.php";
                include "vues/espaceTele.php";

            } else if ($_GET["p"] == "validation") {

                $commande = new Commande();
                $commande->valider($_GET["id"]);


            } else if ($_GET["p"] == "deco") {

                $session->deconnexion();
                header("location:index.php");

            } else if ($_GET["p"] == "ajoutProduit"){


                $contenu = "vues/parts/formAProd.php";
                include "vues/espaceTele.php";

            } else if ($_GET["p"] == "insererProduit"){
                
                $produit = new Produit(null);
                $produit->creer($_POST["code"], $_POST["libelle"], $_POST["image"], $_POST["prix"], $_POST["unite"], $_POST["tva"], $_POST["famille"]);

                    $produit->add();
                    $contenu = "vues/parts/prodAjoute.html";
                    include "vues/espaceTele.php";

                


            }
        }
    }

//CAS NON PRIS EN CHARGE -> ERREUR 

} else {


     include "vues/error.php";

}
?>