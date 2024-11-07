<?php

// callStatic method : 

class xyz{

    private static function hello($name){
        echo "<h1> Hello $name </h1>";
    }

    public static function __callStatic($method, $arg){
        // echo "<h1>This is a private Static method : $method </h1>";
        if(method_exists(__class__, $method)){
            call_user_func_array([__class__, $method], $arg);
        }else{
            echo "<h1> Method does not exist($method) </h1>";
        }
    }
}

// Object

xyz::hello("SRS");

?>