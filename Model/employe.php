<?php

class Employe{
    private $lastName;
    private $firstName;
    private $password;
    private $phone;
    private $email;
    private $dOB;

    public function getLastName(){
        return $this->lastName;
    }
    public function setLastName($a){
        $this->lastName=$a;
    }
    public function getFirstName(){
        return $this->firstName;
    }
    public function setFirtName($a){
        $this->firstName=$a;
    }
    public function getPassword(){
        return $this->paswword;
    }
    public function setPassword($a){
        $this->password=$a;
    }
    public function getPhone(){
        return $this->phone;
    }
    public function setPhone($a){
        $this->phone=$a;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($a){
        $this->email=$a;
    }
    public function getDOB(){
        return $this->dOB;
    }
    public function setDOB($a){
        $this->dOB=$a;
    }
    
    /*public function__construct(){
        $this->lastName="";
        $this->$firstName="";
        $this->password="";
        $this->phone="";
        $this->email="";
        $this->dOB="";
    }*/
    public function__construct($a,$b,$c,$d,$e,$f){
        $this->lastName=$a;
        $this->$firstName=$b;
        $this->password=$c;
        $this->phone=$d;
        $this->email=$e;
        $this->dOB=$f;
    }

    public function Afficher(){
        echo "nom:".$this->lastName="";
        echo "prenom:".$this->$firstName="";
        echo "password:".$this->password="";
        echo "phone:".$this->phone="";
        echo "email:".$this->email="";
        echo "Date of birth:".$this->dOB="";
    }
}
//$personne1= new Employe();
$personne1= new Employe("Doe","Jane","1234","2222","foulen@gmail.com","21/07/2002");
$personne1->Afficher();
?>