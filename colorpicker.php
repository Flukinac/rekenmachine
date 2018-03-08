<script>
    function kleurkiezen(kleurKnop){
      
        switch(kleurKnop) {
            case 'red':
                document.location = "colorpicker.php?kleur="+kleurKnop;
            break;
            case 'blue':
                document.location = "colorpicker.php?kleur="+kleurKnop;
            break;
            case 'yellow':
                document.location = "colorpicker.php?kleur="+kleurKnop; 
            break;
        }
    }
    
   function textNaarPlaatje(variab){
       var deText = document.getElementById("welkomnaam");
       if(deText == "deze text is goed"){
           document.location = "colorpicker.php?dezeTextIsGoed"+deText;
       }else{
           deText = "deze text is fout";
           document.location = "colorpicker.php?dezeTextIsGoed"+deText;
       }
   }
</script>

<?php
session_start();

$kleur1 ="red";
$kleur2 ="blue";
$kleur3 ="yellow";
    if(isset($_GET['kleur'])){
        $_SESSION = $_GET['kleur'];
    }else{
        $_SESSION = "green";
        
    }
    
    
$variab = "test";
 

echo "<input type=button value=rood onclick=kleurkiezen('".$kleur1."')>";
echo "<input type=button value=blauw onclick=kleurkiezen('".$kleur2."')>";
echo "<input type=button value=geel onclick=kleurkiezen('".$kleur3."')><br>";
echo "<input type=text id=welkomnaam value=testing style=background-color:'".$_SESSION."'><br>";
echo "<img src='C:\wamp64\www\afbeeldingen\dia.png' onclick=textNaarPlaatje('".$variab."')>";


echo $_SESSION;

if(isset($_GET['dezeTextIsGoed'])){
        echo $_GET['dezeTextIsGoed'];
    }else{
        echo "<br> nog niet goed";
    };


