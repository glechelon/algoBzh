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
                echo "<td class='pCenter'>" . $produit["prix"]  . " € </td>";
                echo "<td>" . $produit["unite"] . "</td>";
                echo "<td class='pCenter' id ='td".$produit["idArticle"]."'> <input type='number' min='1' max='999' value='1' size='1'id ='qte".$produit["idArticle"]."'> <button onclick='addProduit(".$produit['idArticle'].");'><span class='glyphicon glyphicon-plus-sign'></span></button></td>";
                echo "</tr>";
            }

        } else {

            echo "<tr><td colspan='5'>Il n'y a pas de produits à afficher</td></tr>";
        }

    }





}