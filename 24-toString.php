<?php

// toString method : 

class xyz{

   public function __toString(){
    return "<h1> Can not print object as a string : " .  get_class($this) . "</h1>";
   }
}

// Object

$test = new xyz();

echo $test;

?>