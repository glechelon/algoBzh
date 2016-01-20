<?php

function affCommandes($r)
{

    if (count($r) != 0) {

        while ($commande = $r) {

            echo $commande["idComande"];

        }

    } else {




    }
}