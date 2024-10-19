<?php
class Consultation{

    private $Objet, $Typeanim, $age, $description, $idUser ;

    function __construct($Objet, $Typeanim, $age, $description, $idUser)
    {
        $this->Objet = $Objet;
        $this->Typeanim = $Typeanim;
        $this->age = $age;
        $this->description = $description;
        $this->idUser = $idUser;
    }

    function getObjet(){
        return  $this->Objet;
    }

    function getIdUser(){
        return  $this->idUser;
    }
    function getTypeAnim(){
        return $this->Typeanim ;
    }
    function getAge(){
        return $this->age;
    }
    function getDescription(){
        return $this->description;
    }
    function setObjet($Objet){
        $this->Objet = $Objet;
    }

    function setTypeanim($Typeanim){
        $this->Typeanim = $Typeanim;
    }
    function setage($age){
        $this->age = $age;
    }
    function setdescription($description){
        $this->description = $description;
    }
}

?>