<?php
//include l'autolouad pour l'utilisation des methode
include "../model/tools/autoload_class.php";
//inlude la classe 
include "../model/classes/Armes.php";
//include la vu de la liste des arms
//etablire la connexion a la bd
include "../model/sql/connexionBD.php";
//include le model ou ya la fonction select 
include "../model/models/model_arms.php";
//faire appel a la fonction connexion pour se connecte
$bdd=connexion();
//l'appel a la fonction select arms
$selectarms=selctarms($bdd);

include "../view/pages/liste_arms.php";









