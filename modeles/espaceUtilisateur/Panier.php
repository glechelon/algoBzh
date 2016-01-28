<?php

/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 28/01/2016
 * Time: 22:44
 */



class Panier
{
    private $panier;
    private $i;

    function Panier(){

        $this->panier = array();
        $this->i = 0;

    }


    public function addProduit($id){

        $var = "produit".$this->i;
        $$var = new Produit($id);
        array_push($this->panier, $$var);
        $this->i = $this->i + 1;

    }

    public function affichage(){

        foreach ($this->panier as $produit){

            echo $produit["idArticle"];

        }



    }


}