<?php
      

require "outils/outilsSql.php";
require "outils/pdoSession.php";
require "modeles/portail/connexion.php";
      
if (!isset($_GET["c"])) {
    
      
      include "controlleurs/portail/index.php";


} else if ($_GET["c"] == "portail") {
         

         include "controlleurs/portail/index.php";


} else if ($_GET["c"] == "espaceClient") {
         

         include "controlleurs/espaceClient/index.php";
}


?>