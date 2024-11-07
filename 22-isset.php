<?php

// isset method : To check whether the value of the variable is set or not.
//              : It returns 2-values. (1=True & 0=False)

class zxc{

    public $course;
    private $name;
    private $detail = ["names"=>"SRS","age"=>"12"];

     public function setName($fullname){
        $this->name = $fullname;
     }

      public function __isset($names){
         echo isset($this->detail[$names]);
     }

}

// Object

$test = new zxc();
// $test->course  = "PHP OOP";
$test->setName("SRS");

echo isset($test->names) . "<br>";
echo isset($test->age);

// echo empty($test->age);

// echo isset($test->course);


?>