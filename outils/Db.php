<?php

class Db{
      

      private $host;
      private $dbName;
      private $user;
      private $pwd;
      private $connexion;

     function Db ($host, $dbName, $user, $pwd){
            
           $this->host = $host;
           $this->dbName = $dbName;
           $this->user = $user;
           $this->pwd = $pwd;
      }

      function connexion (){
            
            try {
	            $connexion = new PDO('mysql:host='.$this->host.';dbname='.$this->dbName.'',$this->user,$this->pwd,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            } catch (Exception $e) {
	
	            echo "Impossible de se connecter à la base de donnée, Erreur:". $e->getMessage() . "</br>";
            }
      }

      function query ($requete){
            
            $resultat = $this->connexion->query($requete);
            return $resultat;
      }

      function deconnexion (){
            

      }
      
}





?>



