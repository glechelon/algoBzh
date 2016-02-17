
function getFamille(n){

	var xmlHttp = new XMLHttpRequest();
	xmlHttp.onreadystatechange	= function(){

		document.getElementById("zoneTab").innerHTML = "";
		document.getElementById("zoneTab").innerHTML = xmlHttp.responseText;
	}

	xmlHttp.open("GET", "modeles/espaceUtilisateur/famillesAjax.php?f=" + n , true);
	xmlHttp.send();


}


function addProduit(id) {


	qte = document.getElementById("qte" + id).value;
	qt = parseInt(qte);
	if (Number.isInteger(qt) && qte != null && qte != 0 && qte <= 999 && qte.charAt(0) != "0"){

		var xmlHttp = new XMLHttpRequest();
		xmlHttp.onreadystatechange = function () {

			document.getElementById("td" + id).innerHTML = "";
			document.getElementById("td" + id).innerHTML = "pris en compte";

		}

		xmlHttp.open("GET", "index.php?c=espaceUtilisateur&p=saisir&a=add&id=" + id + "&q=" + qte, true);
		xmlHttp.send();

	}else {

		alert("Erreur: Vous avez tempté de rentrer une valeur erronée (seul les valuers numériques sont autorisées, les champs ne peuvent être vide et la quantité doit être comprise entre 1 et 999 )!");

	}


}

function valider(id){

	var xmlHttp = new XMLHttpRequest();
	xmlHttp.onreadystatechange = function(){

		document.getElementById("v" + id).innerHTML = "";
		document.getElementById("v" + id).innerHTML = "Validé!";

	}

	xmlHttp.open("GET", "index.php?c=espaceUtilisateur&p=validation&id=" +id, true);
	xmlHttp.send();

}