<script>

    function kijken(jojo){
        alert(jojo);
      document.location = "proberen.php?naam="+jojo;
    }

</script>

<?php





$var1 = "piet";
$var2 = "kees";
if(isset($_GET['naam'])){
    echo $_GET['naam'];
};

echo "<input type=button onclick=kijken('".$var1."')>";
echo "<input type=button onclick=kijken('".$var2."')>";

$array2 = ['a','f','d','e','a'];
$array1 = ['e','f','a','d',];

sort($array2);
sort($array1);

////////////////////////////arrays vergelijken

if ($array1 == $array2){
    echo "de arrays matchen";
}else{
    echo "de arrays matchen niet";
}

////////////////////////////array waarde zoeken



$a=array("a"=>5,"b"=>5,"c"=>5);
echo array_search(5,$a,true);


for($i=0;$i<10;$i++){
$ran = rand(0, 11);
echo $ran;
}