<?php

function testCo ($connexion) {

    if (isset($_POST["id"]) && isset($_POST["mdp"])) {


        $pseudo = $_POST['id'];
        $mdp = $_POST['mdp'];
        $exist = verifUserExist($connexion, $pseudo);

        if ($exist == true) {

            if (testMdp($connexion, $pseudo, $mdp) == true) {

                $acces = true;

            } else {

                $acces = false;

            }
        } else {

            $acces = false;
        }

        if ($acces == true) {


            $_SESSION['isConnected'] = "TRUE";
            $_SESSION['codeClient'] = $_POST["id"];
            $_SESSION['typeCompte'] = selectType($_POST["id"]);


        } else {

            $_SESSION["isConnected"] = "FALSE";


            ob_start();

            ?>

            <p>Une erreur s'est produite dans l'authantification (identifiant ou mot de passe incorrect).</p>




            <?php

            $_SESSION["error"] = ob_get_clean();

        }
    } else {


    }

}
?>

