<?php


class Factures
{

    private $factures;

    function Factures($code){

        $co = connexion();
        $req = "SELECT * FROM commandes WHERE valide = 1 AND codeClient = '".$code."' ORDER BY dateCommande DESC LIMIT 20";
        $res = requeteExe($co, $req);
        $res = $res->fetchAll(PDO::FETCH_ASSOC);
        $this->factures = $res;

    }

    function affichage()
    {

        if (!empty($this->factures)) {

            foreach ($this->factures as $facture) {

                echo "</br>";
                echo "<table class='table table-striped'>";
                echo "<tr>";
                echo "<th> Numéro de commande: ";
                echo $facture["idCommande"]."</th>";
                $c = "c" + $facture["idCommande"];
                echo "<th colspan='3'>";
                echo "Date de la commande: ".$facture["dateCommande"];
                echo "</th>";
                echo "</tr>";
                $$c = new Commande();
                $$c->detail($facture["idCommande"]);
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

        } else {


            echo "<tr> <td colspan='5'>Il n'a aucune facture à afficher!</td> </tr>";


        }
    }







}