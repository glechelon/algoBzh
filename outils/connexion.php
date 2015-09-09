<?php 

session_start();
include("outilsSql.php");

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