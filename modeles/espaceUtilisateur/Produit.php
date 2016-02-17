<?php

class Produit
{

    private $id;
    private $code;
    private $libelle;
    private $image;
    private $prix;
    private $unite;
    private $tva;
    private $famille;
    private $qte;

    function Produit($id)
    {

        $co = connexion();
        $req = "SELECT * FROM articles WHERE idArticle =" . $id;
        $res = requeteExe($co, $req);
        $res = $res->fetch(PDO::FETCH_ASSOC);
        $this->id = $res["idArticle"];
        $this->code = $res["codeArticle"];
        $this->libelle = $res["libelleArticle"];
        $this->image = $res["imagesArticle"];
        $this->prix = $res["prix"];
        $this->unite = $res["unite"];
        $this->tva = $res["TVA"];
        $this->famille = $res["idFamille"];
        $this->qte = 1;
    }

    public function setQte($q)
    {

        $this->qte = $q;

    }



    public function PrixT()
    {

        return ($this->prix * $this->qte);

    }



    public function affichage()
    {

        echo "<tr>";
        echo "<td>".$this->code."</td>";
        echo "<td>".$this->qte."</td>";
        echo "<td>".$this->prix." €</td>";
        echo "<td>".$this->prixT()." €</td>";
        echo "</tr>";

    }

    public function inserer(){

        $co = connexion();
        $req = "INSERT INTO details (codeArticle, qteArticle, montant, idCommande_commandes, idArticle) VALUES ('".$this->code."', ".$this->qte.", ".$this->prixT()." , (SELECT MAX(idCOmmande) FROM commandes) , ".$this->id." )";
        $res = requeteExe($co, $req);

    }

}


