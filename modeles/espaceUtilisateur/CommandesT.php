<?php


class CommandesT
{

    private $commandes;


    function CommandesT(){

        $co = connexion();
        $req = "SELECT * FROM commandes WHERE valide = 0 ORDER BY dateCommande DESC ";
        $res = requeteExe($co,$req);
        $res = $res->fetchAll(PDO::FETCH_ASSOC);
        $this->commandes = $res;



    }





    function affichage(){



        if (!empty($this->commandes)) {



            foreach ($this->commandes as $commande){
                echo "</br>";
                echo "<table class='table table-striped'>";
                echo "<tr>";
                echo "<th> Numéro de commande: ".$commande["idCommande"]."</th>";
                echo "<th colspan='3' class='pCenter'>";
                $c = "c" + $commande["idCommande"];
                echo "Code du client:  ".$commande["codeClient"];
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
                echo "<tr class='success'>";
                echo "<td colspan='4' class='pCenter' id ='v".$commande['idCommande']."'>";
                echo "<button type='submit' value ='valider' onclick='valider(".$commande['idCommande'].")'> Valider <span class='glyphicon glyphicon-ok-sign'>  </span></input>";
                echo "</td>";
                echo "</tr>";
                echo "</table>";
                echo "</br>";
                echo "<hr>";




            }



        } else {


            echo "<tr> <td colspan='5'>Il n'a aucune facture à afficher!</td> </tr>";


        }





    }



}