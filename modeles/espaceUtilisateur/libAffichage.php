<?php

function affCommandes($r)
{

    if ($r) {

        while ($commande = $r) {

            echo $commande["idComande"];

        }

    } else if (!$r){


        echo "Il n'a aucune commandes à afficher!";


    }
}


function affFactures($r){

 if ($r) {


     while ($facture = $r){


         echo $facture["idCommande"];
     }
 } else {

     echo "Il n'y a pas de factures à afficher! ";


 }




}


function affProduits($r){

    if ($r) {


        while ($produit = $r->fetch(PDO::FETCH_ASSOC)){

            echo   $produit["codeArticle"];
            echo "<br/>";
        }
    } else {

        echo "il n'y a pas de produits à afficher!";
    }


}