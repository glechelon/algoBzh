<?php


class Factures
{

    private $factures;

    function Factures(){

        $co = connexion();
        $req = "SELECT * FROM commandes, details WHERE commandes.idCommande = details.idCommande and valide = 1";
        $res = requeteExe($co, $req);
        $res = $res->fetchAll(PDO::FETCH_ASSOC);
        $this->factures = $res;

    }

    function affichage(){

        if (!empty($this->factures)) {

            foreach ($this->factures as $facture){

                echo $facture["idCommande"];

            }

        } else{


            echo "<tr> <td colspan='5'>Il n'a aucune facture à afficher!</td> </tr>";


        }



    }



}