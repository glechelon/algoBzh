<?php 

$session = new Session();
$connexion = connexion();

if (!isset($_GET["p"])) {
        
    $content = "vues/parts/form.html";
    include "vues/portailVue.php";
    
} else if ($_GET["p"] == "formConnexion") {
    
    testCo($connexion);
    
    if (isset($_SESSION["isConnected"])){

            if ($_SESSION["isConnected"] == "TRUE") {
          
                  header("location: index.php?c=espaceClient");

            } else {
          
                   $content = "vues/parts/form.html";
                   include "vues/portailVue.php";
            }

    } else {
          
          $content = "vues/parts/form.html";
          include "vues/portailVue.php";
    }

}









?>