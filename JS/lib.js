function getFamille(n){

var xmlHttp = new XMLHttpRequest();
	xmlHttp.onreadystatechange	= function(){

		document.getElementById("zoneTab").innerHTML = "";
		document.getElementById("zoneTab").innerHTML = xmlHttp.responseText;
	}

	xmlHttp.open("GET", "modeles/espaceUtilisateur/famillesAjax.php?f=" + n , true);
	xmlHttp.send();


}