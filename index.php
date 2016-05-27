<?php
      

require "modeles/portail/outilsSql.php";
require "modeles/portail/pdoSession.php";
require "modeles/portail/connexion.php";
require "modeles/portail/lib.php";

if (!isset($_GET["c"])) {
    
     
      include "controlleurs/portail/index.php";


} else if ($_GET["c"] == "portail") {
         

         include "controlleurs/portail/index.php";


} else if ($_GET["c"] == "espaceUtilisateur") {
         


         include "controlleurs/espaceUtilisateur/index.php";

}


?>