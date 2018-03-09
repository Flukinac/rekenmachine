<?php 


class Kinderboerderij{
    public function voerronde(Dier $dier){
        echo "We doen een voerronde";
        echo get_class($dier);
        echo "GO:".$dier->eten();
        if($dier instanceof iBBQBaar){
            echo "Deze is te barbequen";
        }
    }
    public function barbequeHouden(iBBQBaar $bbq){
        echo "go";
    }
}
interface iBBQBaar{
    public function bbbqen();
}
class Mais implements iBBQBaar{
    public function bbbqen(){
        echo "bbqen in Mais";
    }
}
abstract class Dier implements iBBQBaar{
    public $naam = "eenNaam";
    public $dieet;
    public $carnivoor;
    public function eten(){
        echo get_class($this);
        echo "eten ".$this->naam;
    }
    
}
class Kip extends Dier {    
    public $kleurveren = "wit";
    public function kakelen(){
        echo "kukelekuu";
    }
    public function bbbqen() {
        echo "bbqen in Kip";
    }
    
}
class Varken extends Dier{
    public function bbbqen() {
        echo "bbqen in Kip";
    }    
}
class Spin extends Dier{
    public function bbbqen() {
        echo "bbqen in Kip";
    }
}
$kip = new Kip();
$varken = new Varken();
$mais = new Mais();
$spin = new Spin();
$kinderboerderij = new Kinderboerderij();
$kinderboerderij->voerronde($kip);
//$kinderboerderij->voerronde($mais);
//$kinderboerderij->voerronde($varken);
$kinderboerderij->barbequeHouden($mais);
//$kip->eten();
//$kip->naam = "Dagobert";
//echo $kip->naam;



    


    
    
       

