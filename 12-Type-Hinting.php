<?php

//  Type-Hinting : It declares the type of the value.(Datatypes used as type hinting.)
//  Datatypes : Int, Float, String, Boolean, Array, Class/Interface name, Object.


    // function sum(int $v){
    //     echo $v + 10 . "<br>";
    // }

    // sum(12);


    // function fruits(array $names){
    //     foreach($names as $name){
    //         echo "<h1 style='text-align:center;'>" . $name . "</h1>" . "\n";
    //     }
    // }

    // $test = array("Mango","Apple","Orange");
    // fruits($test);

    
    class school{
        public function getNames(student $names){
            foreach ($names->Names() as $name) {
                echo "$name" . "<br>";
            }
        }
    }

    class student{
        public function Names(){
            return array("SRS","IAMSRS","SRS-SRS");
        }
    }

    class library{

    }

    // function hey(hello $c){
    //         $c->sayHello();
    //     }

    //     $test = new hi();
    //     hey($test);

    $lib = new library();

    $stu = new student();
    $sch = new school();

    $sch->getNames($stu);

?>