<?php


//$aantal = $_GET['aantalleden'];

$voorNaam = "me";
$achterNaam = "string";
$nieuwsbrief = FALSE;
$hoeveel = $_GET['hoeveelheid'];






for($i=0; $i<$hoeveel;$i++){

echo 'Username  <input type=text/".$voorNaam."/><input type=text/".$achterNaam."/><input type="checkbox"".$nieuwsbrief."/><br>';

};

//echo $_GET[$voorNaam];
//echo "$voorNaam";




































// Onze bankrekening app
/*

session_start();




    if (isset($_GET['getal1'])){
        $getal1 = $_GET['getal1'];
    }else{
        $getal1 = $_SESSION['huidig'];
    };
    if (isset($_GET['getal2'])){
        $getal2 = $_GET['getal2'];
    }else{
        $getal2 = $_SESSION['huidig'];        
    };


$operator = $_GET['operator'];

      
$antwoord = Operator($operator, $getal1, $getal2);
$_SESSION['huidig'] = $antwoord;

echo $_SESSION['huidig'];


function Operator($operator, $getal1, $getal2){
	switch($operator){
		case "optellen";
                    return $getal1 + $getal2;
			
		case "aftrekken";
                    return $getal1 - $getal2;
			
		case "delen";
                    return $getal1 / $getal2;
			
                case "vermenigvuldigen";
                    return $getal1 * $getal2;
                        
		default;
			echo "geen operator ingevult!";
                    	}
}
?>
*/

