
<?php //
if(isset($_GET['nummeris'])){
    echo $_GET['nummeris'];             
}

class Pizza{
    public $aantalIngredienten;
    public function opslaan(){ 
    }
}

$pizza = new Pizza();
$pizza->aantalIngredienten = $_GET['nummeris'];
$pizza->opslaan();
$var = 6;

?>

<script>
    function test(){
        nummer = document.getElementById("hetnummer").value;
        document.location = 'voorbeeld.php?nummeris='+nummer;
    }
</script>
<input type="text" id="hetnummer">
<input type="button" onclick="test()">
<?php


