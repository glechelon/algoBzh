<?php
//Inclusion des différentes librairies/outils

require 'outils/outilsSql.php';
require 'outils/pdoSession.php';
require 'outils/affichage.php';
require 'outils/Db.php';

//Ouverture/accès Session
$session = new session();

//Connexion à la base de donnèe
$connexion = connexion();

if (isset($_GET["p"])) {

    if ($_GET["p"] == "espaceClient") {
    

        include "controlleurs/espaceClientController.php";


    } else if ($_GET["p"] == "deco") {
        
        $session->deconnexion();
        include "controlleurs/portailController.php";
        

    } else if ($_GET["p"] == "demandeMdp") {
        

    }
} else {
    
     include "controlleurs/portailController.php";
}



?>
