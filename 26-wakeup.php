<?php

// Unserialize function : Used to convert Array into an object.
// wakeup method : Runs automatically after unserialize.

  class xyz{
   public $course = "PHP OOP";
   private $first_name;
   private $last_name;

   public function setName($fname, $lname){
      $this->first_name = $fname;
      $this->last_name = $lname;
   }

   public function __sleep(){
        return array('first_name', 'last_name');
   }

   public function __wakeup(){
        echo "<h1>This is wakeup method.</h1>";
   }
}

// Object

$test = new xyz();

$test->setName('IAM','SRS');

$serial = serialize($test);

$unserial = unserialize($serial);

echo "<h1><pre>";
print_r($unserial);
echo "</pre></h1>";

// echo $serial;

?>