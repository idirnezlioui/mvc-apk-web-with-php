<?php
// la fonction qui nous permet de faire un select sur la table personnage

function selectpersonnes($pdo)
{
    // la reqeutte sql qui permet de recuperet tt les personnes
    $reqeutte = "select * from personnes ";
    // preparation de la reqeutte 
    $stm = $pdo->prepare($reqeutte);
    //execution de la reqeutte 
    $stm->execute();
    //recuperation du resutas dans un tableau d'objet  avec fetchclass
    // le nom de la classe vas etre passe en parametre comme ça il vas detecte les methode de la classe et il vas les charger 

    $stm->setFetchMode(PDO::FETCH_CLASS, "Personne");
    // recuper  le resultas dans un tableau d'objet 
    return $stm->fetchAll();
}
