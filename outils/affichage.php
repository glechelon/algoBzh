 <?php 


 
function affBouton($session){
    if (!($session->checkConnexion())){
     
        include("boutonConnex.php");

    }else if ($session->checkConnexion()){
       
        include("boutonDeco.php");

       
    }
}


?>   