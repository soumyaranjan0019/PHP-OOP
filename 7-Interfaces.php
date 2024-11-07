<?php

//  Interface : Multiple classes can be inherited in a derived class.(Work like Abstract class.)
//            : No property can asign in interface
//            : Only declare but can't implement.

interface parent1{

    function cal($a, $b);

}

interface parent2{
    function sub($c, $d);

}

class childClass implements parent1, parent2{
    public function cal($a, $b){
        echo "<h1>" . $a + $b . "</h1>";
    }
    public function sub($c, $d){
        echo "<h1>" . $c - $d . "</h1>";
    }
}

    $test = new childClass();

    $test->cal(12,3);
    $test->sub(122,23);


?>