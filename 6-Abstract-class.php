<?php

// Abstract-class : Doesn't have objects. (Only declare but can't implement.)
//                : Used to store personal info.


abstract class parentClass{
    public $name;

    abstract protected function cal($a, $b);
}

class childClass extends parentClass{

    public function cal($c, $d){
        echo  "<h1>" . $c + $d . "</h1>";
    }
}

$check = new childClass();

$check->cal(12, 15);
?>