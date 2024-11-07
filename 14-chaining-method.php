<?php

// Chaining-method : To make chain of methods to call all the methods at the same time.

class chain{
    public function first(){
        echo "<h1>This is 1st function.</h1> \n";
        return $this;
    }
    public function second(){
        echo "<h1>This is 2nd function.</h1> \n";
        return $this;
    }
    public function third(){
        echo "<h1>This is 3rd function.</h1>";
    }
}

$test = new chain();

$test->first()->second()->third();

?>