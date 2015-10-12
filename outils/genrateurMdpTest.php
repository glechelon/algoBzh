<?php 

include "outilsSql.php";

$id = "jambon";
$test = "fromage";
$hash = hashMdp($test);
$co = connexion();
$sql = "INSERT INTO utilisateur VALUES ('".$id."', '".$hash."')";
$res = requeteExe($co, $sql);





















?>