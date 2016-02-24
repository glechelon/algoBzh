<?php



//fonction d'envoi du mail contenant le mot de passe du client

function sendPass($pass, $mail){




    $message = "Cher client,\r\n \r\n Voici votre mot de passe: ".$pass;
    mail($mail, "mot de passe", $message, " OUI");




}

function generPass (){

    $mdp ="";
    $allChar = "a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z,A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z,0,1,2,3,4,5,6,7,8,9";
    $tabChar = array();
    $tabChar = explode(",",$allChar);
    $maxT = count($tabChar);
    $max = 6;

    for ($i =0; $i <= $max ; $i++ ){

        $mdp .= $tabChar[rand(1, $maxT)];

    }

    return $mdp;

}




function inscription()
{


    if (!empty($_POST["numCli"]) and verifInscrit()) {


        $numCli = $_POST['numCli'];
        $exist = verifNumCli($numCli);

        if ($exist == true) {

            if (!checkInscrit($_POST['numCli'])){

            if (!empty($_POST["mail"]) and !empty($_POST["mailC"])) {


                if ($_POST["mail"] == $_POST["mailC"]) {


                    insertMail($_POST["numCli"] ,$_POST["mail"]);
                    $mdp = generPass();
                    sendPass($mdp ,$_POST["mail"]); 
                    $log = fopen('logs/log.txt', 'a+');

                    fputs($log, $mdp);
                    fclose($log);
                    $mdp = hashMdp($mdp);
                    insertPass($_POST["numCli"], $mdp);

                    $content = "vues/parts/redirecting.php";
                    header("refresh:5;url=index.php ");


                } else {


                    $content = "vues/parts/demandeMpd.php";
                    $_SESSION["errorSend"] = "les deux adresse mails ne sont pas identiques.";
                }


            } else {

                $content = "vues/parts/demandeMdp.php";
                $_SESSION["errorSend"] = "Tout les champs ne sont pas remplis";

            }


            } else {


                $content = "vues/parts/demandeMdp.php";
                $_SESSION["errorSend"] = "Vous êtes déjà inscrit.";

            }


        } else {

            $content = "vues/parts/demandeMdp.php";
            $_SESSION["errorSend"] = "Le numéro de client que vous avez rentré ne semble pas exister";

        }
    } else {

        $content = "vues/parts/demandeMdp.php";
        $_SESSION["errorSend"] = "Tout les champs ne sont remplis";

    }

    return $content;

}













?>