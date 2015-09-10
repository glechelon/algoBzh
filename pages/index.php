<?php 

//Inclusion des différentes librairies/outils
include ('../outils/outilsSql.php');
include ('../outils/pdoSession.php');


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
   <title>accueil</title>
   
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
    
 if (!($session->checkConnexion())){
     
include("boutonConnex.php");

 }else if ($session->checkConnexion()){
       
include("boutonDeco.php");

echo "<a href='index.php?page=espaceClient'>Expace client</a> ";

    
 }
?>


</header>

<div class="container">
	<div class="navigation">
		<a href="index.php" class="bouton" id="bouton1">accueil</a>
		<a href="#" class="bouton" id="bouton2">produits</a>
		<a href="#" class="bouton" id="bouton3">informations</a>
	</div>
	
	<div class="barre_horizontale"></div>

<?php
    
if (!isset($_GET["page"])){
    
    $_GET["page"] = "accueil";
}
    
include ("".$_GET['page'].".php");
?>
</div>

<footer>
</footer>	

</body>
</html>