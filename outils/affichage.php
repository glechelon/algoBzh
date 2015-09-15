 <?php 


 
function affBouton($session){
    if (!($session->checkConnexion())){
     
        include("boutonConnex.php");

    }else if ($session->checkConnexion()){
       
        include("boutonDeco.php");

        echo "<a href='index.php?page=espaceClient'>Expace client</a> ";
    }
}


?>   