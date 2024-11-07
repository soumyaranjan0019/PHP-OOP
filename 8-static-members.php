<?php

//  Static-members : It can be implemented without creating Objects.
//                 : 'self' replaces 'this'
//                 : 'static' replaces 'class'
//                 : 'static' = used in self class.
//                 : 'parent' = used in derived class.


    class base{
        public static $name = "SRS";

        public static function show(){
            echo self::$name . "<br>";
        }

        // public function __construct($n){
        //     // self::show();

        //     self::$name = $n;
        // }
    }

    // echo base::$name . "<br>";
    // base::show();

    class derived extends base{
        public static function show(){
            echo parent::$name;
        }
    }
    $test = new derived();

    // $test = new base("IAMSRS");
    $test->show();

?>