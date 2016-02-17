

<ul class = "list-inline produit"><!--liste_h-->

    <!--<li class ="t_en_ligne elementprod">

        Filtre:

    </li>-->

    <?php
    $familles->affichage();
    ?>

    <li class="elementprod"><a href='#' onclick='getFamille(0);'>  Tous les produits </a></li>

        <li><a href='#' onclick='getFamille(0);'>  Tous les produits </a></li>

    </li>

</ul>


<div id = "zoneTab">
    <!-- <table class = "table tableProd" > -->
	<div class="col-md-12 col-sm-12 col-xs-12">
        <div class="galleryimg" id="galleryimg">
        <!--<figure class='effect-Beauty'> -->
			<!--<div class="grid mix col-md-4 col-sm-6 col-xs-6">

       <!-- <tr> <th> Image du produit </th>  <th> Libellé du produit </th>  <th class="pCenter"> Prix </th> <th> Unité </th> <th class = "pCenter"> Ajouter au panier </th>   </tr> -->

       	 		<?php $produits->affichage(); ?>
			<!-- <figure> -->
			</div>
		</div>
    </div>
  <!--  </table> -->

   <form action="index.php?c=espaceUtilisateur&amp;p=valider" method="post">
    <div class ='container-fluid'>
        <div class="col-lg-4"></div>
        <button class="col-lg-4" id="ancreprod"><span class =" glyphicon glyphicon-ok"></span> Etape 2: validation  de la commande</button>
        <div class="col-lg-4"></div>
    </div>

        </form>
</div>