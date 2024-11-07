<?php

    // Overriding-properties/methods : When we use the same properties/methods in the derived class.

class A{
   public $name = "Parent class";

   public function cal($a, $b){
        return $a * $b;
   }

}
class B extends A{
   public $name = "Child class";
   
   public function cal($a, $b){
        return $a + $b;
   }
}

$check = new A();
echo $check->cal(9,12) . "\n";
echo $check->name . "<br>";


$check = new B();
echo $check->cal(3,6) . "\n";
echo $check->name;
?>