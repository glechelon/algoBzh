<?php 

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
    session_start();

}

else{
	
	echo "c'pas bon";
	echo "<br/>";
	
	include "../pages/formConnexion.php";
	

}









?>