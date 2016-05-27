<?php
/**
 * Created by PhpStorm.
 * User: guillaume
 * Date: 24/03/16
 * Time: 10:09
 */


?>

<h2>Ajout d'un nouveau produit:</h2>

<form method="post" action="index.php?c=espaceUtilisateur&amp;p=insererProduit">
<div class="form-group">
    <label class ="labelA">Code du produit:  </label>
    <input type="text" name ="code" id ="code" required ="required" placeholder="Entrez un code">
    <br>
    <br>
    <label class ="labelA">Libelle: </label>
    <input type="text" name ="libelle" required ="required" placeholder="entrez un libelle">
    <br>
    <br>
    <libelle class ="labelA">Image: </libelle>
    <input type="url" name ="image" required ="required" placeholder="entrez l'url d'une image">
    <br>
    <br>
    <label class ="labelA">prix: </label>
    <input type ="number" name="prix" required ="required" placeholder="entrez le prix">
    <br>
    <br>
    <label class ="labelA">unite: </label>
    <input type ="text" name ="unite" required ="required" placeholder="entrez le typr d'unité">
    <br>
    <br>
    <label class ="labelA">TVA: </label>
    <input type ="number" name ="tva" required ="required" placeholder="entrez la TVA aplliquée">
    <br>
    <br>
    <label class ="labelA">Famille: </label>
    <input type ="number" name ="famille" required ="required" size ="1" min ="1" max="8" placeholder="numéro de la famille">
    <br>
    <br>
    <input type="submit" value="Ajouter">
</div>

</form>
