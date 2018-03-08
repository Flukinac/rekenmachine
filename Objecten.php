<?php

include "klassen.php";
$student1 = new Student();
$student1->voornaam = "alexander";
$student1->achternaam = "lexis";
$student1->leeftijd = 29;

$student2 = new Student();
$student2->voornaam = "steven";
$student2->achternaam = "visser";
$student2->leeftijd = 30;

$student1->voorstellen();
$student2->voorstellen();

$studenten = [$student1, $student2];

    for ($a=0; $a< count($studenten);$a++){
        $studenten[$a]->voorstellen();
    }

administreren($student1);

function administreren($destudent){
    echo "de student: ".$destudent->voornaam."is geadministreerd";
}
?>

