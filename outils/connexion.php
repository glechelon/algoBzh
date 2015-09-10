<?php 

//Inclusion des différentes librairies/outils
include ('../outils/outilsSql.php');
include ('../outils/pdoSession.php');

//session_start();
$session = new session();

$pseudo = $_POST['id'];
$mdp = $_POST['mdp'];
$exist = verifUserExist($pseudo);

if ($exist == true){
	
	if (testMdp($pseudo,$mdp) == true){
		
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
	
	header("location: ../pages/index.php");
    $_SESSION['isConnected'] = TRUE;

}

else{
	
	echo "c'pas bon";
	echo "<br/>";
	
	include "../pages/formConnexion.php";
	

}









?>