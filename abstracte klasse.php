<?php

class paard extends boerderijdieren{
 
}
class koe extends boerderijdieren{
  
}  

class kip extends boerderijdieren{
   
}

$paard1 = new paard("2meter",4,"harig");
$paard2 = new paard("2,5meter",4,"harig");
$paard3 = new paard("3meter",4,"harig");

$koe1 = new koe("3meter",4,"kaal");
$koe2 = new koe("2meter",4,"kaal");
$koe3 = new koe("1,5meter",4,"kaal");

$kip1 = new kip("50cm",2,"veren");
$kip2 = new kip("40cm",2,"kaal");
$kip3 = new kip("55cm",2,"vacht");

abstract class boerderijdieren{
    public $grootte="tbd";
    public $poten="tbd";      
    public $vachtsoort="tbd";
}
   
echo $paard->grootte;

    
    
       