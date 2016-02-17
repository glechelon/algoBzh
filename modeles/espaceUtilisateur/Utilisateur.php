<?php

/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 30/01/2016
 * Time: 16:49
 */
class Utilisateur
{

    private $id;
    private $code;
    private $email;
    private $nom;
    private $prenom;
    private $ville;
    private $codePostal;
    private $adresse;
    private $telephone;
    private $mdp;

    function Utilisateur($code){

        $co = connexion();
        $req = "SELECT * FROM utilisateurs WHERE codeCLient ='".$code."'";
        $res = requeteExe($co,$req);
        $res = $res->fetch(PDO::FETCH_ASSOC);
        $this->id = $res["idUtilisateur"];
        $this->code = $res["codeClient"];
        $this->email = $res["email"];
        $this->nom = $res["nom"];
        $this->prenom = $res["prenom"];
        $this->ville = $res["ville"];
        $this->codePostal = $res["codePostal"];
        $this->adresse = $res["adresse"];
        $this->telephone = $res["telephone"];
        $this->mdp = $res["motDePasse"];



    }


    public function getCode(){

        return $this->code;

    }

    public function getId(){

        return $this->id;

    }

    public function affNom(){

        echo $this->nom;

    }

}