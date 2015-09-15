<?php 

//Inclusion des différentes librairies/outils
include ('../outils/outilsSql.php');
include ('../outils/pdoSession.php');
include ('../outils/affichage.php');


//Ouverture/accès Session
$session = new session();

//Connexion à la base de donnèe
connexionSql();

?>

<!doctype html>
<html lang=''>
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
<?php include 'menu.html';?>
	
	<div class="barre_horizontale"></div>

<?php
    
if (!isset($_GET["page"]) && !isset($_GET["group"])){
    
    $_GET["page"] = "accueil";
}
 
elseif($_GET["group"] == "pages"){
  
include ("".$_GET['page'].".php");

}

else{
    
    include ("../".$_GET["group"]."/".$_GET["page"].".php");
}

?>
</div>

<footer>
</footer>	

</body>
</html>