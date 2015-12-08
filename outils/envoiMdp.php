<?php
      
include "outilsSql.php";
include "lib.php";

$numCli = "";
$numCli = $_POST['numCli'];
$exist = verifNumCli ( $numCli );

if ($exist == true) {
	
	sendPass($numCli);
	
	
	
} else {
	
	echo "<p> Ce numéro de client semble ne pas exister, veuillez réessayer </p>";
	
	include "../pages/demandeMdp.php";
}

?>