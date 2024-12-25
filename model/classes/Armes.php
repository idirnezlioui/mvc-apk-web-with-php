<?php
class Armes{
    private int $id;
    private string $name;
    private string $type;
    private int $puissance;
    private string $description;

    //declaration des getter
    function getid(){
        return $this->id;
    }
    function getname(){
        return $this->name;
    }
    function getpuis(){
        return $this->puissance;
    }
    function gettype(){
        return $this->type;
    }
    function getdesc(){
        return $this->description;
    }
}