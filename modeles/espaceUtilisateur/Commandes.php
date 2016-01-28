<?php


class Commandes
{

    private $commandes;

    function Commandes(){

        $co = connexion();
        $req = "SELECT * FROM commandes, details WHERE commandes.idCommande = details.idCommande and valide = 0";
        $res = requeteExe($co,$req);
        $res = $res->fetchAll(PDO::FETCH_ASSOC);
        $this->commandes = $res;

    }



    public function affichage()
    {

        if (!empty($this->commandes)) {

            foreach ($this->commande as $commande){

                echo $commande["idComande"];

            }

        } else{


            echo "Il n'a aucune commandes à afficher!";


        }
    }






}