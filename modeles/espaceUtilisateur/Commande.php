<?php

/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 30/01/2016
 * Time: 16:28
 */
class Commande
{

    private $detail;




    public function creer($montant, $date, $code, $id){

        $co = connexion();
        $req = "INSERT into commandes (montant, dateCommande, codeClient, valide, idUtilisateur) VALUES (".$montant.", '".$date."', '".$code."', 0, ".$id.")";
        $res = requeteExe($co, $req);

    }


    public function detail($id){

        $co = connexion();
        $req = "SELECT * FROM details WHERE idCommande_commandes ='".$id."'";
        $res = requeteExe($co, $req);
        $res = $res->fetchAll(PDO::FETCH_ASSOC);
        $this->detail = $res;


    }



    public function valider($id){

        $co = connexion();
        $req = "UPDATE commandes SET valide = 1 WHERE idCommande =".$id;
        $res = requeteExe($co, $req);

    }


    public function total(){


        $t = 0;

        foreach ($this->detail as $produit){


            $t = $t + $produit["montant"] * $produit["qteArticle"];




        }

        return $t;



    }





    public function affichage(){

        $t = $this->total();

        foreach ($this->detail as $produit){

;
            echo "<tr>";
            echo "<td>";
            echo $produit["codeArticle"];
            echo "<td>";
            echo $produit["qteArticle"];
            echo "</td>";
            echo "<td>";
            echo $produit["montant"]." €";
            echo "</td>";
            echo "<td>";
            $tot = $produit["montant"] * $produit["qteArticle"]." €";
            echo $tot;
            echo "</td>";
            echo "</tr>";



        }

        echo "<tr>";
        echo "<td colspan='5' class='pCenter'> Total de la commande: ".$t." €</td>";
        echo "</tr>";

    }

}