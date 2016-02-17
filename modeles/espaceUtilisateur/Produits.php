<?php

class Produits
{

    private $produits;

    function Produits(){


        $co = connexion();
        $req = "SELECT * FROM articles";
        $res = requeteExe($co, $req);
        $res = $res->fetchAll(PDO::FETCH_ASSOC);
        $this->produits = $res;
    }


    function affichage(){


        if (!empty($this->produits)) {
            foreach ($this->produits as $produit) {
				echo "<div>";
				echo "<figure class='effect-Beauty'>";
                echo "<img src=" . $produit["imagesArticle"] . "><img/>";
                echo "<figcaption><h2>" . $produit["libelleArticle"] . "" . $produit["codeArticle"] . "</h2>";
                echo "<p>" . $produit["prix"] . " €";
                echo " " . $produit["unite"] . "</p>";
                echo "<div id ='td".$produit["idArticle"]."'><input type='number' min='1' max='999' value='1' size='1'id ='qte".$produit["idArticle"]."'> <a href='#ancreprod' onclick='addProduit(".$produit['idArticle'].");' class='ajoutprod' >Ajouter au panier</a></div>";
               echo "</figcaption></figure>";
			   echo "</div>";
            }

        } else {

            echo "<p>Il n'y a pas de produits à afficher</p>";
        }

    }









}