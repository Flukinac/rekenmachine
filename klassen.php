<?php

class Student{
    public $voornaam = "tbd";
    public $achternaam = "tbd";    
    public $leeftijd = 0;   
    
    function voorstellen(){
      echo "\n hallo, mijn naam is " . $this->voornaam . " " . $this->achternaam . "\n en ik ben ".$this->leeftijd;
    }
}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

class koppeling{
    public $materiaal = "tbd";
    public $diameter = 0;
    public $config = "tbd";
    public $keurmerk = "tbd";
    public $medium = "tbd";
    
    public function installeren(){
        if($this->keurmerk == "GASTEC"){
             echo "deze ".$this->materiaal." ".$this->config." koppeling mag geinstalleerd worden voor gas toepassingen<br>";
        }else{
             echo "deze ".$this->materiaal." ".$this->config." koppeling mag NIET geinstalleerd worden voor gas toepassingen<br>";
        }
    }
    public function __construct($dia) {
        $this->diameter = $dia;
        echo "deze methode ".$this->diameter."<br>";
    }
}

class boek{
    public $titel = "tbd";
    public $paginas = 0;
    public $auteur = "tbd";
    
}

