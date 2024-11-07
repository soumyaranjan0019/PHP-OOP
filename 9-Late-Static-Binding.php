<?php

//  Late-Static-Binding : It can be used to reference the called class in a context of static inheritance.
//                      : 'Static' replaces 'self' to print Static value in derived class.


    class A{
        protected static $name = "SRS";
        public function show(){

            echo self::$name . "<br>";
            echo static::$name;
        }
    }

    class B extends A{
        protected static $name = "Iamsrs";
    }
    $test = new B();
    $test->show();
?>