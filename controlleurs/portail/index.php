

<?php //je suis le controlleur du portail de connexion

$session = new Session();
$connexion = connexion();

if (!isset($_GET["p"])) {

    unset($_SESSION["error"]);
    $content = "vues/parts/form.html";
    include "vues/portailVue.php";

} else if ($_GET["p"] == "formConnexion") {

    testCo($connexion);

    if (isset($_SESSION["isConnected"])) {

        if ($_SESSION["isConnected"] == "TRUE") {

            header("location: index.php?c=espaceUtilisateur");

        } else {

            $content = "vues/parts/form.html";
            include "vues/portailVue.php";
        }

    } else if ($_GET["p"] == "demandeMdp") {



        $content = "vues/parts/demandeMdp.php";
        include "vues/portailVue.php";

    } else {

        $content = "vues/parts/form.html";
        include "vues/portailVue.php";
    }

} else if ($_GET["p"] == "inscription"){

    unset($_SESSION["errorSend"]);
    $content = "vues/parts/demandeMdp.php";
    include "vues/portailVue.php";

} else if ($_GET["p"] == "inscriptionSend"){


    $content = inscription();
     include "vues/portailVue.php";



}










?>