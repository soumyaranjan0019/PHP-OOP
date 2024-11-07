<?php

// call method : 

class xyz{

    private $first_name;
    private $last_name;

    private function setName($fname, $lname){

        $this->first_name = $fname;
        $this->last_name = $lname;
    }

    public function __call($method, $arg){
        //  echo "<h1>You are trying to access a private or a non-existing method($method)</h1>";

        if(method_exists($this, $method)){
            call_user_func_array([$this, $method], $arg);
        }else{
            echo "<h1> Method does not exist : $method </h1>";
        }

        //  echo "<h1><pre>";
        //  print_r($arg);
        //  echo "</pre></h1>";

    }
}

// Object

$test = new xyz();

$test->setName("Iam","SRS");

         echo "<h1><pre>";
         print_r($test);
         echo "</pre></h1>";
?>