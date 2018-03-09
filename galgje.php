<!DOCTYPE html>
<?php
session_start();

                              
$aantalLevens = 10;
        
if(!isset($_SESSION['toon'])){
    $_SESSION['toon'] = [];                             //array om de gekozen letters van de speler in op te slaan en te vergelijken met het antwoord                          
}

if(!isset($_SESSION['levens'])){
    $_SESSION['levens'] = $aantalLevens;    
}

if(isset($_GET['letter']) && $_GET['reset']=='reset' || !isset($_SESSION['begin'])){
    unset($_SESSION['woord']);
    unset($_SESSION['toon']);
    unset($_GET['letter']);                             //voorkomt dat het indrukken van de resetknop gezien wordt als foutieve keuze en zo een leven kost
    $_SESSION['geraden'] = FALSE;
    $_SESSION['levens'] = $aantalLevens;
    $ran = rand(0, 11);
    switch($ran){
		case 1;
			$_SESSION['woord'] = ['a','a','n','m','a','k','e','n'];
			break;
		case 2;
			$_SESSION['woord'] = ['k','e','y','b','o','a','r','d'];
			break;
                case 3;
			$_SESSION['woord'] = ['e','c','h','o','g','r','a','f','i','e'];
			break;
                case 4;
			$_SESSION['woord'] = ['h','u','m','e','r','u','s'];
			break;
                case 5;
			$_SESSION['woord'] = ['r','e','l','a','i','s'];
			break;
                case 6;
			$_SESSION['woord'] = ['b','e','c','h','t','e','r','e','w'];
			break;
                case 7;
			$_SESSION['woord'] = ['m','a','t','r','i','x'];
			break;
                case 8;
			$_SESSION['woord'] = ['y','o','t','t','a','b','y','t','e'];
			break;
                case 9;
			$_SESSION['woord'] = ['p','a','n','c','r','e','a','s'];
			break;
                case 10;
			$_SESSION['woord'] = ['a','o','r','t','a'];
			break;   
	}
    
}
$_SESSION['begin'] = TRUE;                      //de reset wordt de eerste keer doorlopen om een woord te krijgen. daarna zal deze weg nooit meer beschikbaar zijn

if($_SESSION['geraden'] == FALSE && isset($_GET['letter']) && $_SESSION['levens'] > 0){
    
    $letter = $_GET['letter'];
    $pos = 0; 
    $levenscheck = FALSE;                                   
        foreach($_SESSION['woord'] as $x){                          //vergelijk elke letter van de array waarin het juiste woord staat met de gekozen letter
            if($x == $letter){                                      //als er een match is dan moet de letter in de juiste vakjes verschijnen
                $_SESSION['toon'][$pos] = $letter;                  //zet de letter op de juiste plaats(en) in de tabel beneden als juiste letter is gevonden                        
                $levenscheck = TRUE;
                if($_SESSION['toon']==$_SESSION['woord']){
                    echo "woord geraden!!!!! voor het volgende spel klik RESET";
                    $_SESSION['geraden'] = TRUE;
                }
            }
        $pos++;
        }
    
    if($levenscheck == FALSE){
            $_SESSION['levens']--;
            
    }
}elseif($_SESSION['levens'] < 0){
    echo "you are dead man!";                               
}

?>
<script>

function test(a){
    document.location='galgje.php?letter='+a;       //de gekozen letter wordt in de URL gezet en daardoor met php uitgelezen
};
function reset(b){
    document.location='galgje.php?reset='+b;
};
</script>

<body bgcolor="blue">
    <input type="button" value="A" onclick="test('a')"/>
    <input type="button" value="B" onclick="test('b')"/>
    <input type="button" value="C" onclick="test('c')"/>
    <input type="button" value="D" onclick="test('d')"/>
    <input type="button" value="E" onclick="test('e')"/>
    <input type="button" value="F" onclick="test('f')"/>
    <input type="button" value="G" onclick="test('g')"/>
    <input type="button" value="H" onclick="test('h')"/>
    <input type="button" value="I" onclick="test('i')"/><br>
    <input type="button" value="J" onclick="test('j')"/>
    <input type="button" value="K" onclick="test('k')"/>
    <input type="button" value="L" onclick="test('l')"/>
    <input type="button" value="M" onclick="test('m')"/>
    <input type="button" value="N" onclick="test('n')"/>
    <input type="button" value="O" onclick="test('o')"/>
    <input type="button" value="P" onclick="test('p')"/>
    <input type="button" value="Q" onclick="test('q')"/>
    <input type="button" value="R" onclick="test('r')"/><br>
    <input type="button" value="S" onclick="test('s')"/>
    <input type="button" value="T" onclick="test('t')"/>
    <input type="button" value="U" onclick="test('u')"/>
    <input type="button" value="V" onclick="test('v')"/>
    <input type="button" value="W" onclick="test('w')"/>
    <input type="button" value="X" onclick="test('x')"/>
    <input type="button" value="Y" onclick="test('y')"/>
    <input type="button" value="Z" onclick="test('z')"/>
    
        <br><br><br>
    <table  class="tabel" border="3px" bordercolor="yellow" style="width:1000px; height:30px">
	<tr>
            <td  bgcolor=#2B83A1><?php if(isset($_SESSION['toon'][0])) {echo $_SESSION['toon'][0];}else{echo ".";}?></td>
            <td  bgcolor=#2B83A1><?php if(isset($_SESSION['toon'][1])) {echo $_SESSION['toon'][1];}else{echo ".";}?></td>
            <td  bgcolor=#2B83A1><?php if(isset($_SESSION['toon'][2])) {echo $_SESSION['toon'][2];}else{echo ".";}?></td>
            <td  bgcolor=#2B83A1><?php if(isset($_SESSION['toon'][3])) {echo $_SESSION['toon'][3];}else{echo ".";}?></td>
            <td  bgcolor=#2B83A1><?php if(isset($_SESSION['toon'][4])) {echo $_SESSION['toon'][4];}else{echo ".";}?></td>
            <td  bgcolor=#2B83A1><?php if(isset($_SESSION['toon'][5])) {echo $_SESSION['toon'][5];}else{echo ".";}?></td>
            <td  bgcolor=#2B83A1><?php if(isset($_SESSION['toon'][6])) {echo $_SESSION['toon'][6];}else{echo ".";}?></td>
            <td  bgcolor=#2B83A1><?php if(isset($_SESSION['toon'][7])) {echo $_SESSION['toon'][7];}else{echo ".";}?></td>
            <td  bgcolor=#2B83A1><?php if(isset($_SESSION['toon'][8])) {echo $_SESSION['toon'][8];}else{echo ".";}?></td>
            <td  bgcolor=#2B83A1><?php if(isset($_SESSION['toon'][9])) {echo $_SESSION['toon'][9];}else{echo ".";}?></td>
            <td  bgcolor=#2B83A1><?php if(isset($_SESSION['toon'][10])) {echo $_SESSION['toon'][10];}else{echo ".";}?></td>
            <td  bgcolor=#2B83A1><?php if(isset($_SESSION['toon'][11])) {echo $_SESSION['toon'][11];}else{echo ".";}?></td>
	</tr>
    </table>
        <br>
    <table>
        <tr>
            <td  bgcolor="red">Levens:<?php echo "levens= "+$_SESSION['levens']?></td>
            <input type="button" value="RESET" onclick="test('reset')"/>
        <tr>
    </table>
</body>

<!--
$array = [a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z];
    foreach($array as $x_value){
        <input type="button" value="A" onclick="test('a')"/>
}





}-->