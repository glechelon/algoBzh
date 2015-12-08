<?php
    
if ($session->checkConnexion()) {

    include "vues/espaceClientVue.php";

} else {
    
    echo"Erreur 4012";

}

?>
    