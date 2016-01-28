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
            echo "<tr>";
            echo "<td> <img src=" . $produit["imagesArticle"] . "><img/></td>";
            echo "<td>" . $produit["libelleArticle"] . " <br/> <div class = 'enPetit'>" . $produit["codeArticle"] . "</div></td>";
            echo "<td class='pCenter'>" . $produit["prix"] . " € </td>";
            echo "<td>" . $produit["unite"] . "</td>";
            echo "<td class = 'pCenter'> <span class=''></span>   </td>";
            echo "</tr>";
        }

    } else {

        echo "<tr><td colspan='5'>Il n'y a pas de produits à afficher</td></tr>";
    }

    }

}