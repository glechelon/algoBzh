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
                echo "<tr>";
                echo "<td> <img src=" . $f["imagesArticle"] . "><img/></td>";
                echo "<td>" . $f["libelleArticle"] . " <br/> <div class = 'enPetit'>" . $f["codeArticle"] . "</div></td>";
                echo "<td class='pCenter'>" . $f["prix"] . " € </td>";
                echo "<td>" . $f["unite"] . "</td>";
                echo "<td class = 'pCenter'> <span class=''></span>   </td>";
                echo "</tr>";
            }

        } else {

            echo "<tr><td colspan='5'>Il n'y a pas de produits à afficher</td></tr>";
        }



    }


}