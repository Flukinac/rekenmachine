<?php
session_start();
        
include "klassen.php";

$boek1 = new boek();
$boek1->titel="de rooie kater";
$boek1->auteur="jan de wit";
$boek1->paginas=120;

$boek2 = new boek();
$boek2->titel="de boom";
$boek2->auteur="bert ruiter";
$boek2->paginas=85;   

$boek3 = new boek();
$boek3->titel="Fantastisch";
$boek3->auteur="Merel Fransen";
$boek3->paginas=385;


?>
<script>



function opslaan(){
    
    echo "test";
     
    }
    
<script/>
<?php
//$eenarray = $_SESSION[];
//echo $eenarray[2];
//echo $_SESSION[‘array’][];

$boek1var = 1;
$boek2var = 2;
$boek3var = 3;

?>

<br><input type="button value="opslaan" boek 1 <input type=button onclick=opslaan(<?php .$boek1var."')/>";
echo "<br>opslaan boek 2 <input type=button onclick=opslaan('".$boek2var."')/>";
echo "<br>opslaan boek 3 <input type=button onclick=opslaan('".$boek3var."')/>";
echo "<br><br>ophalen boek 1 <input type=button onclick=ophalen('".$boek1var."')/>";
echo "<br>ophalen boek 2 <input type=button onclick=ophalen('".$boek2var."')/>";
echo "<br>ophalen boek 3 <input type=button onclick=ophalen('".$boek3var."')/>";

?>
<input type=text 
