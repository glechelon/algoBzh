<?php 

//Inclusion des différentes librairies/outils


//session_start();


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
	
	header("location: ../pages/index.php?group=pages&page=espaceClient");
    $_SESSION['isConnected'] = TRUE;

}

else{
	
	echo "c'pas bon";
	echo "<br/>";
	
	

}









?>