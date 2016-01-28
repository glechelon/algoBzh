<?php

include "Famille.php";
include "Produits.php";
include "../portail/outilsSql.php";





echo'<table class = "table tableProd" >';



   echo' <tr> <th> Image du produit </th>  <th> Libellé du produit </th>  <th class="pCenter"> Prix </th> <th> Unité </th> <th> Ajouter au panier </th>  </tr>';



    if($_GET["f"] == "0"){

        $produits = new Produits();
        $produits->affichage();

    } else {

        $famille = new Famille($_GET["f"]);
        $famille->affichage();

    }


echo'</table>';



?>


