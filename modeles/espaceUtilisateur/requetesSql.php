<?php


function selectCommandes(){

    $co = connexion();
    $req = "SELECT * FROM commandes, details WHERE commandes.idCommande = details.idCommande and valide = 0";
    $res = requeteExe($co,$req);
    $res = $res->fetch(PDO::FETCH_ASSOC);

    return $res;


}


function selectFactures(){

    $co = connexion();
    $req = "SELECT * FROM commandes, details WHERE commandes.idCommande = details.idCommande and valide = 1";
    $res = requeteExe($co, $req);
    $res = $res->fetch(PDO::FETCH_ASSOC);

    return $res;


}


function selectProduits(){


    $co = connexion();
    $req = "SELECT * FROM articles";
    $res = requeteExe($co, $req);

    return $res;
}

