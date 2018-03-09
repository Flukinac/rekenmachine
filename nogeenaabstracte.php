<?php

class wizard{
    public $skilltree1 = "tbd";
    public $skilltree2 = "tbd";
    public $skilltree3 = "tbd";
    public $arcane = 100;
    public $live = 1000;
    public function __construct($a,$b,$c,$d,$e) {
        $this->skilltree1 = $a;
        $this->skilltree2 = $b;
        $this->skilltree3 = $c;
        $this->arcane = $d;
        $this->live = $e;
    }    
    public function live($a){
        $this->live -= $a;
    }
}

class barbarian{
    public $skilltree1 = "tbd";
    public $skilltree2 = "tbd";
    public $skilltree3 = "tbd";
    public $live = 1600;
    public $spirit = 80;
    
    public function __construct($a,$b,$c,$d,$e) {
        $this->skilltree1 = $a;
        $this->skilltree2 = $b;
        $this->skilltree3 = $c;
        $this->live = $d;
        $this->spirit = $e;
    }
    public function live($live){
        $this->live -= $live;
    }
    public function spirit($spirit){
        $this->$spirit -= $spirit;
    }
}

class witchdoctor{
    public $skilltree1 = "tbd";
    public $skilltree2 = "tbd";
    public $skilltree3 = "tbd";
    public $live = 800;
    public $mana = 90;
    
    public function __construct() {
        $this->skilltree1 = $a;
        $this->skilltree2 = $b;
        $this->skilltree3 = $c;
        $this->live = 800;
        $this->mana = 80;                
    }
    public function live($live){
        $this->live -= $live;
    }

}














































































