<?php


class Commandes
{

    private $commandes;


    function Commandes($code){

        $co = connexion();
        $req = "SELECT * FROM commandes WHERE valide = 0 AND codeCLient ='".$code."' ORDER BY dateCommande DESC LIMIT 20";
        $res = requeteExe($co,$req);
        $res = $res->fetchAll(PDO::FETCH_ASSOC);
        $this->commandes = $res;



    }



    public function affichage()
    {

        if (!empty($this->commandes)) {


            foreach ($this->commandes as $commande){
                echo "</br>";
                echo "<table class='table table-striped'>";
                echo "<tr>";
                echo "<th> Numéro de commande: ";
                echo $commande["idCommande"]."</th>";
                $c = "c" + $commande["idCommande"];
                echo "<th colspan='3'>";
                echo "Date de la commande:".$commande["dateCommande"];
                echo "</th>";
                echo "</tr>";
                $$c = new Commande();
                $$c->detail($commande["idCommande"]);
                echo "<tr>";
                echo "<th>Code du produit</th>";
                echo "<th>Quantité</th>";
                echo "<th>Prix unitaire </th>";
                echo "<th>Prix totale</th>";
                echo "</tr>";
                $$c->affichage();
                echo "</table>";
                echo "</br>";
                echo "<hr>";


            }

        } else{


            echo "Il n'a aucune commandes à afficher!";


        }
    }






}