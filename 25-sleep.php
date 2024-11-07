<?php

// Serialize function : Used to save the object in File/Session/Database by converting it into an Array.

// Sleep method : it calls before serialize. used to Convert into an array after working.

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
}

// Object

$test = new xyz();

$test->setName('IAM','SRS');

$serial = serialize($test);

echo $serial;

?>