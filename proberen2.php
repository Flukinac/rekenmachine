<?php

session_start();

$_SESSION['leven'] = 8;
$_SESSION['arry'] = [".","2","4",".",".",".",".",".",".","."];

echo $_SESSION['arry'][2];

echo $_SESSION['leven'];

//maak een tweede (controle)array die ook ingevuld wordt wanneer er een letter 
//gekozen wordt en goedgekeurd is en laat deze array matchen met de hoofdarray 
//waar het juiste woord inzit. bij een reset vul je deze controle array op met 
//iig iets anders dan de puntjes uit de woordarray uiteraard