<?php 

include "outilsSql.php";

//fonction d'envoi du mail contenant le mot de passe du client

function sendPass($numCli, $co){
		
	$mail = recupMail($numCli, $co);
	$pass = generPass();
	
	$message = "Cher client,\r\n \r\n Voici votre mot de passe: ".$pass;
	
	mail($mail, '[Algobzh]message-automatique: votre mot de passe ', $message);
	
	$hash = hashMdp($pass);
}

function generPass (){
	
	$allChar = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	$tabChar = array();
	$tabChar = explode($allChar);
	$maxT = count($tabChar);
	$max = rand (8, 12);
	
	for ($i =0; $i <= $max ; $i++ ){
		
		$mdp = $mdp + $tabChar[rand(0, $maxT)];
		
	}
	
	return $mdp;
	
}












?>