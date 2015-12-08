<?php 



//fonction d'envoi du mail contenant le mot de passe du client

function sendPass($numCli){

  ini_set("SMTP","smtp.gmail.com" );
  ini_set('sendmail_from', "guichou9@gmail.com");
  ini_set('smtp_port',465);
		
	$mail = recupMail($numCli);
	$pass = generPass();
	
	$message = "Cher client,\r\n \r\n Voici votre mot de passe: ".$pass;
	
	
	
	$hash = hashMdp($pass);

    echo'<a href="mailto:'.$mail.'?Subject=Mot%de%passe3" target="_top">Send Mail</a>';
}

function generPass (){
	
  $mdp ="";
	$allChar = "a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z,A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z,0,1,2,3,4,5,6,7,8,9";
	$tabChar = array();
	$tabChar = explode(",",$allChar);
	$maxT = count($tabChar);
	$max = rand (8, 12);
	
	for ($i =0; $i <= $max ; $i++ ){
		
		$mdp = $mdp + $tabChar[rand(0, $maxT)];
		
	}
	
	return $mdp;
	
}












?>