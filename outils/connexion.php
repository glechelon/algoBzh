<?php 

require "outilsSql.php";
require "lib.php";
require "pdoSession.php";

//Inclusion des différentes librairies/outils



$connexion = connexion();
$session = new session();


$pseudo = $_POST['id'];
$mdp = $_POST['mdp'];
$exist = verifUserExist($connexion, $pseudo);

if ($exist == true) {
	
    if (testMdp($connexion, $pseudo, $mdp) == true) {
		
            $acces = true;
		
	}
	
	else{
		
		$acces = false;
	}
}

else {
	
	$acces = false;
}

if ($acces == true){
	
	header("location: ../pages/espaceUtilisateur.php");
    $_SESSION['isConnected'] = TRUE;

}

else{
	
	echo "c'pas bon";
	echo "<br/>";
	
	

}









?>