<?php
// import autoload
include "../tools/autoload_class.php";
//import la classe personne
include "../model/classes/Peronne.php";
//import la connexion a la bd 
include "../model/sql/connexionBD.php";
//importe le model personnage ou ya le select
include "../model/models/model_personne.php";

//importe le la view personnne qui vas etre apple par la variable $personne 
include "../view/pages/liste_personnes.php";