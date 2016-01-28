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

    function Produit($id){

        $co = connexion();
        $req = "SELECT * FROM articles WHERE idArticle =".$id;
        $res = requeteExe($co, $req);
        $res = $res->fetch(PDO::FETCH_ASSOC);
        $this->id = $res["idArticle"];
        $this->code = $res["codeArticle"];
        $this->libelle = $res["libelleArticle"];
        $this->image = $res["imagesArticle"];
        $this->prix = $res["prix"];
        $this->unite = $res["unite"];
        $this->tva = $res["tva"];
        $this->famille = $res["idFamille"];
    }

    public function getId()
    {
        return $this->id;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function getLibelle()
    {
        return $this->libelle;
    }

    public function getFamille()
    {
        return $this->famille;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function getTva()
    {
        return $this->tva;
    }

    public function getUnite()
    {
        return $this->unite;
    }
}
