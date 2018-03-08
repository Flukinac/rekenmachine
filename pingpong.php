<?php
session_start();

if(isset($_GET['termVanURL'])){         //Om iets uit de url te halen gebruik je de term GET en hiermee 
    $var = $_GET['termVanURL'];         //beschrijf je de naam van het php bestand en in de url in de browser 
}                                       //na php komt bijvoorbeeld ?termVanURL=3

$i = count($_SESSION['array']);         //Deze counter werkt nog steeds na een verversing van de browser 
                                        //omdat hij checkt hoeveel posities er al in de array van session zitten. 
                                        //Session vergeet zijn array variabele niet na een verversing 

$_SESSION['array'][$i] = $var;          //Hier wordt er een nieuw nummer toegevoegd aan de array in session. 
                                        //afhankelijk van hoever de counter is, die weer afhangt van de posities in 
                                        //de session array, geeft $i aan welke positie de waarde van $var krijgt

echo $_SESSION['array'][$i];            //Stukje gegevens checking in de browser
echo "    counter = ";
echo $i;


if($i == 5){                                               //na vijf iteraties van dit hele programma of vijf verversingen van de 
   echo "   5 cijfers/rondes gehad en positie 4 is nu: ";  //browser met een waarde in de url toegekend, gaat hier een if statement 
   echo $_SESSION['array'][4];                             //af met een notificatie dat er al 5 rondes zijn geweest. daarbij wordt 
                                                           //ook de waarde van positie 4 uit de session geprint                                
}
?><!--
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//de volgende code laat een waarde uitlezen uit een textbalkje en javascript zet de waarde in de URL zodat php deze weer kan uitlezen en echoen// 
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
-->
  <script>
    function test(){                                            //de functie zorgt bij activering dat de ingevulde waarde van het textbalkje           
       ingevult = document.getElementById("newid").value;       //wordt overgenomen in de nieuwe variabele "ingevult" deze wordt daarna in de 
       document.location = 'pingpong.php?nummer='+ingevult;     //URL gezet met de naam "nummer" zodat PHP deze weer kan uitlezen
    }
</script>
    
<input type="text" id="newid">         <!--hier wordt in HTML een knop en een invoerveld gemaakt waarbij het invoerveld een id heeft. de knop roept-->
                                       <!--een functie aan in javascript die het attribut "value" van het invoerbalkje uitleest en in een nieuwe   -->                                                              
<input type="button" onclick="test()"> <!--variabele stopt. hierna wordt de URL ingevult met een naam en de waarde van deze nieuwe variabele       -->

<?php

if(isset($_GET['nummer'])){             //wanneer de URL is ingevult door javascript met de waarde van het 
    echo $_GET['nummer'];               //textbalkje kan PHP met $_GET deze weer uitlezen en opnieuw echoen
}