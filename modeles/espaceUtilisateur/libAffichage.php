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
            echo "<tr>";
            echo "<td> <img src=".$produit["imagesArticle"]."><img/><td/>";
            echo "<td>".$produit["libelleArticle"]." <br/> <div class = 'enPetit'>". $produit["codeArticle"]."<div/><td/>";
            echo "<td class='pCenter'>".$produit["prix"]." € <td/>";
            echo "<td>".$produit["unite"]."<td/>";
            echo "<tr/>";
        }
    } else {

        echo "il n'y a pas de produits à afficher!";
    }


}