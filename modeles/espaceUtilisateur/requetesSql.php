<?php


function selectCommandes(){

    $co = connexion();
    $req = "SELECT * FROM commandes, details WHERE commandes.idCommande = details.idCommande";
    $res = requeteExe($co,$req);
    $res = $res->fetch(PDO::FETCH_ASSOC);

    return $res;


}

