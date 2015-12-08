<?php 
//Variable de configuration




//fonction de connexion à la basz de donnée.

function connexion(){

$host = 'localhost';
$dbName = 'algobhz';
$user = 'root';
$pwd = '';
	
try {
	$connexion = new PDO('mysql:host='.$host.';dbname='.$dbName.'',$user,$pwd,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (Exception $e) {
	
	echo "Impossible de se connecter à la base de donnée, Erreur:". $e->getMessage() . "</br>";
}return $connexion;
}

//fonction qui éxécute des requétes sql rentrée en paramétre

function requeteExe($connexion, $requete){


$resultat = $connexion->query($requete);

return $resultat;
}


//fonction qui vérifie l'éxistance d'un nom d'utilisateur entré en paramètre dans la base de donnée 

function verifUserExist($connexion, $pseudo){
	
		
	$req = "SELECT id FROM utilisateur WHERE id ='".$pseudo."'";	
	$res = $connexion->query($req);
	$res = $res->fetch();
	if ($res['id'] == $pseudo){
		
		$exist = true;
		
	}else {
		
		$exist = false;
	}
	
	return $exist;
	
}

//fonction qui vérifie l'éxistance d'un couple nom d'utilisateur et mot de passe renté en paramète dans la base de donnée

function testMdp($connexion, $pseudo, $mdp){
	
	
	$req = "select mdp from utilisateur where id ='".$pseudo."'";
	$res = $connexion->query($req);
	$mdpTest = $res->fetch();
	$hash = hashMdp($mdp);
	
	if ($mdpTest['mdp'] == $hash){
		
		$exist = true;
	}else{
		
		$exist = false;
	}
	
	return $exist;
}


//fonction qui vérifie l'existance du numéro client

function verifNumCli($numCli){
	
	$co = connexion();
	$req = "SELECT id FROM utilisateur WHERE id = '".$numCli."'";
	$res = requeteExe ($co, $req);
	$test = $res->fetch();
	
	if ($test['id'] == $numCli){
		
		$exist = true;
		
	}else{
		
		$exist = false;
		
	}
	
	return $exist;
	
}

function stockMdp($co, $mdp, $numCli){
	
	$co = connexionSql();
	$req = "INSERT INTO utilisateur VALUES ('".$numCli."', '".$mdp."')";
	$res = requeteExe ($co, $req);

	
}



//fonction qui hashe le mod de passe renté en parmaétre et retourne ce dernier hashé

function hashMdp($mdp){
	
	$hash = password_hash($mdp,PASSWORD_BCRYPT ,array('cost'=>12, 'salt'=>"FlI78FilMgi86hgeOGHEoghnesom",));
	$tabMdp =  explode("-", $hash);	
	return $hash;
}


function recupMail($numCli){
  
  $co = connexion();
  $req = "SELECT mail FROM utilisateur WHERE id ='".$numCli."'";
  $res = requeteExe($co, $req);
  $res = $res->fetchColumn();
  return ($res);

}



?>