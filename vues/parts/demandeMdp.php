﻿

<form action="index.php?c=portail&amp;p=inscriptionSend" method="post">

	<label> Entrez votre numéro client: </label>
	<input type ="text" name="numCli" />
	<br/>
	<br/>
	<label>e-mail:</label>
	<br/>
	<input type="text" name="mail"/>
	<br/>
	<label>Confimation e-mail:</label>
	<br/>
	<input type="text" name="mailC">


	<br />

	<?php if (isset($_SESSION["errorSend"])){

		echo $_SESSION["errorSend"];

	} ?>

	<br />

	<input type = "submit" value = "Soumettre"/>

</form>