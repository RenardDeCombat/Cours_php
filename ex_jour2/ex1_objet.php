<?php

class Person {
    public string $name ;
    public string $phoneNumber ;
    public string $emailAdress ;


    public function purchaseParkingPass(){

    }

    public function __construct($monNom, $monNumeroTel, $monAdresseMail){
        $this->name = $monNom;
        $this->phoneNumber = $monNumeroTel;
        $this->emailAdress = $monAdresseMail;
    }

}

$unePersonne = new Person("Pierre","06");

class Student extends Person {
    public int $studentNumber ;
    public int $averageMark ;

    public function isEligibleToEnroll(string $uneChaine):bool{
        return false;
    }

    public function getSeminars():int{

    }

    public function __construct(string $monNom, string $monNumeroTel, string $monAdresseMail, int $monNumEtudiant, int $noteMoyenne){
        parent::__construct($monNom, $monNumero, $monAdresseMail);
        $this->studentNumber = $monNumEtudiant;
        $this->averageMark = $noteMoyenne;
    }
}


$unEtudiant = new Student("Thibaut","0661848611","bourlier.thibaut27@gmail.com",854,14);


class Professor extends Professor {
    public int $salary ;
    protected int $staffNumber ;
    private int $yearsOfService ; 
    public int $numberOfClasses ;

    public function __construct(){
        $this->salary= $monSalaire ; 
        $this->staffNumber = $monNumProf ;
        $this->yearsOfService = $monAnneeDeService ;
        $this->numberOfClasses = $monNombreDeClasse ;
    }

}


















?>