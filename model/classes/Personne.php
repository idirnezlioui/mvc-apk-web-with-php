<?php
class Personne
{
    private int $id;
    private string $nom;
    private int $age;
    private int $arm_id;

    

    //les function qui permette de retourne les infos de la personne 
    function getid()
    {
        return $this->id;
    }
    function getnom()
    {
        return $this->nom;
    }
    function getage()
    {
        return $this->age;
    }
    function getidarms()
    {
        return $this->arm_id;
    }
}
