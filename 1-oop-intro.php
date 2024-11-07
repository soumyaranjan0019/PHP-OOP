<?php

class calculation{
    public $a, $b, $c; //Propertes (public = Access Modifier)

//Methods
    function sum(){
        $this->c = $this->a + $this->b;
        return $this->c;
    }

    function sub(){
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}

// Object
    $c1 = new calculation();

    $c1->a = 20;
    $c1->b = 10;

    $c2 = new calculation();

    $c2->a = 50;
    $c2->b = 35;

    echo "<h1>sum value of c1 : " . $c1->sum() . "</h1>" . "\n";
    echo "<h1>sub value of c2 : " . $c2->sub() . "</h1>";

?>