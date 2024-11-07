<?php

// Autoload method : 

    spl_autoload_register(function($class){
        require "Autoload_class/" . $class . ".php";
    });

// Object

$test = new first();
$test = new second();

?>