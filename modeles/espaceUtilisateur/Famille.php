<?php


class Famille
{


    private $famille;



    function Famille($n){
        $n = intval($n);
        $co = connexion();
        $req = "SELECT * FROM articles WHERE idFamille =".$n;
        $res = requeteExe($co, $req);
        $res =  $res->fetchAll(PDO::FETCH_ASSOC);
        $this->famille = $res;

    }

    function affichage(){


        if (!empty($this->famille)) {

            foreach ($this->famille as $f) {
               /* echo "<tr>";
                echo "<td> <img src=" . $f["imagesArticle"] . "><img/></td>";
                echo "<td>" . $f["libelleArticle"] . " <br/> <div class = 'enPetit'>" . $f["codeArticle"] . "</div></td>";
                echo "<td class='pCenter'>" . $f["prix"] . " € </td>";
                echo "<td>" . $f["unite"] . "</td>";
                echo "<td class='pCenter' id ='td".$f["idArticle"]."'> <input type='number' min='1' max='999' value='1' size='1'id ='qte".$f["idArticle"]."'> <button onclick='addProduit(".$f['idArticle'].");'><span class='glyphicon glyphicon-plus-sign'></span></button></td>";
                echo "</tr>";*/

				echo "<div>";
				echo "<figure class='effect-Beauty'>";
                echo "<img src=" . $f["imagesArticle"] . "><img/>";
                echo "<figcaption><h2>" . $f["libelleArticle"] . "" . $f["codeArticle"] . "</h2>";
                echo "<p>" . $f["prix"] . " €";
                echo " " . $f["unite"] . "</p>";
                echo "<div id ='td".$f["idArticle"]."'><input type='number' min='1' max='999' value='1' size='1'id ='qte".$f["idArticle"]."'> <a href='#ancreprod' onclick='addProduit(".$f['idArticle'].");' >ajoutez au panier</a></div>";
               echo "</figcaption></figure>";
			   echo "</div>";
            }

        } else {

            echo "<tr><td colspan='5'>Il n'y a pas de produits à afficher</td></tr>";
        }



    }


}