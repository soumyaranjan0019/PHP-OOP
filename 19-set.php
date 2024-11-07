<?php

// Set method : 

class xyz{
    public $data = ["name"=>"SRS","course"=>"PHP","fee"=>"10,00,000"];

    public function __get($key){
        // echo "<h1>You are trying to access a private property($property)</h1>";
        
        if(array_key_exists($key, $this->data)){
            return "<h1>" . $this->data[$key] . "</h1>" . "\n";
        }else{
            return "<h1>This key($key) is not defined.</h1>";
        }
    }
}

// Object

$test = new xyz();
// print_r($test->data);

echo $test->name;
echo $test->course;
echo $test->fee;
echo $test->age;

?>