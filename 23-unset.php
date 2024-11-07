<?php

// unset method : Used to destroy any property.

class zxc{

   private $name;
   public $course = "PHP OOP";

   public function setName($fullname){
      $this->name = $fullname;
   }

   public function __unset($property){
      unset($this->$property);
   }
}

// Object

$test = new zxc();


$test->setName("SRS");

unset($test->name);

echo "<h1><pre>";
print_r($test);
echo "</pre></h1>";

// unset($test->course);
// echo $test->course;

?>