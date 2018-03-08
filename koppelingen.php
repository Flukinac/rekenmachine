<?php

include "klassen.php";

$koppeling1 = new koppeling();
$koppeling1->materiaal = "staal";
$koppeling1->config = "t-stuk";
$koppeling1->diameter = 15;
$koppeling1->keurmerk = "KIWA";
$koppeling1->medium = "cv";

$koppeling2 = new koppeling(22);
$koppeling2->materiaal = "messing";
$koppeling2->config = "bocht";
$koppeling2->keurmerk = "GASTEC";
$koppeling2->medium = "gas";

$koppeling3 = new koppeling(28);
$koppeling3->materiaal = "messing";
$koppeling3->config = "recht";
$koppeling3->keurmerk = "KIWA";
$koppeling3->medium = "drink";

$koppeling4 = new koppeling(15);
$koppeling4->materiaal = "messing";
$koppeling4->config = "t-stuk";
$koppeling4->keurmerk = "GASTEC";
$koppeling4->medium = "gas";



    $koppelingen = [$koppeling1, $koppeling2, $koppeling3, $koppeling4];

        for ($a=0; $a< count($koppelingen);$a++){
            $koppelingen[$a]->installeren();
        }

 
