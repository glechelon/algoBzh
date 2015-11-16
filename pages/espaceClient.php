<script src="../JS/modifCss.js"></script>

</script>

<?php
 
echo "<script> cssConnected(); </script>";

if ($session->checkConnexion()) {
   
    echo "je suis un espace client";


} else {
        
        echo "t'as pas accès ah ah";
}

?>
