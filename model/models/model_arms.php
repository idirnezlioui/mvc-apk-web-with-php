<?php
// function qui permet de recuper la liste des arms
function selctarms($pdo) {
    //la requtte
    $reqeutte="select * from arms";
    //preparation de la reqeutte
    $stm=$pdo->prepare($reqeutte);
    //excution de la reqeutte
    $stm->execute();
    //recuper le resultas dans un tableu d'objet
    $stm->setFetchMode(PDO::FETCH_CLASS,"Armes");
    //recupere le resultas 
    return $stm->fetchAll();
}