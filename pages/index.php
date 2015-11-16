<?php

//Inclusion des différentes librairies/outils
require '../outils/outilsSql.php';
require '../outils/pdoSession.php';
require '../outils/affichage.php';
require '../outils/Db.php';



//Ouverture/accès Session
$session = new session();

//Connexion à la base de donnèe
$connexion = connexion();


?>

<!doctype html>
<html lang='fr'>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="style.css">
   <title>Accueil</title>
   
   <script type="text/javascript" src="../JS/lib.js"></script>
</head>

<body class = "site">

<header>


<div id="titre">

  <div class="titreG">

<h1>Espace Client</h1>

</div>
	<h1>
	<img src="../img/AlgoBreizh_Logo_128px.png" alt="#">
	AlgoBreizh</h1>
</div>

<?php
 //on affiche le bouton connexion/deconnexion + options liées à ce dernier   
affBouton($session);

?>
</header>




  <div class="container">
      
 <?php 

if (isset($_GET['group'])) {

    if ($_GET['group'] == "outils") {
            
      
        if (isset($_GET['page'])) {

                include "../".$_GET['group']."/".$_GET['page'].".php";
        }  
    } else if ($_GET['group'] == "pages") {
          
        if (isset($_GET['page'])) {
                
                include $_GET['page'].".php";
               
        }


    }
}




?>

</div>



<footer>
</footer>	

</body>
</html>