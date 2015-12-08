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
   <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./styleCss.css">
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
   <title>Accueil</title>
   
   <script type="text/javascript" src="../JS/lib.js"></script>
</head>

<body>


<div class="container-fluid">
<div class= "row en-tete">

<div class="col-lg-5"></div>
<div class="col-lg-1">	

<img src="../img/AlgoBreizh_Logo_128px.png" alt="#">
</div>
<div class="col-lg-1"><h1>AlgoBreizh</h1></div>
<div class="col-lg-5"></div>

</div>

<div class="row">
<div class="col-lg-4"></div>
<div class="col-lg-4 text-center" ><h3>Connexion à votre espace client:</h3></div>
<div class="col-lg-4"></div>  
</div>

<div class="row">
<div class="col-lg-5"></div> 
<div class="col-lg-2 panel panel-default">

	<form id="form_co" action="../controlleurs/portailController.php?r=formConnex" method="post">
	    <div class="form-group">
        <label for="id">Identifiant</label>
		<input class="form-control" id="id" name="id" />        
        </div>
        <div class="form-group">
        <label for="mdp">Mot de passe</label>
		<input class="form-control" id="mdp" type ="password" name="mdp" />
        </div>
        <button class="btn btn-success   btn-co">Connexion</button>

		
	</form>
    </br>
	<p>Vous avez oublié votre mot de passe... <a class="" href="index.php?group=pages&amp;page=demandeMdp" > Demander un mot de passe  </a></p>
	

</div>
<div class="col-lg-5"></div>
</div>
</div>
</div>

</div>	

</body>
</html>