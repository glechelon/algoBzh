

<ul class = "list-inline liste_h">

    <li class ="t_en_ligne">

        Filter:

    </li>

    <?php
    $familles->affichage();
    ?>

    <li>

        <li><a href='#' onclick='getFamille(0);'>  Tous les produits </a></li>

    </li>

</ul>


<div id = "zoneTab">
    <table class = "table tableProd" >



        <tr> <th> Image du produit </th>  <th> Libellé du produit </th>  <th class="pCenter"> Prix </th> <th> Unité </th> <th class = "pCenter"> Ajouter au panier </th>   </tr>





        <?php $produits->affichage(); ?>



    </table>

</div>