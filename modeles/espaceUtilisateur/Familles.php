<?php


class Familles
{

    private $familles;


    function Familles(){


        $co = connexion();
        $req = "SELECT * FROM familles";
        $res = requeteExe($co, $req);
        $res = $res->fetchAll(PDO::FETCH_ASSOC);
        $this->familles = $res;

    }


    function affichage(){

        if (!empty($this->familles)) {

            foreach ($this->familles as $famille) {


                echo "<li class='elementprod'><a href='#' onclick='getFamille(" . $famille["idFamille"] . ");'>" . $famille["libelleFamille"] . "</a></li>";
            }

        } else {

            echo "Il n'y a aucunes familles à afficher";

        }
    }





}