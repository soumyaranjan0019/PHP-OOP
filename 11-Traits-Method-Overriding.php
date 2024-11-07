<?php

//  Traits-Method-Overriding : Traits can declare methods and abstract methods that can be used in multiple classes & the methods can have any access modifier (public, private, or protected).


trait hello{
    private function show(){
        echo "Hello from hello trait" . "<br>";
    }
}

trait hi{
    public function show(){
        echo "Hello from hi trait" . "<br>";
    }
}

// class base{
//     use hello, hi{

//         hi::show insteadof hello;
//         hello::show as newhello;

//     }
// }

class base{
    use hello{
        hello::show as public newhello;
    }
}



// class base{
//     public function show(){
//         echo "Hello from class" . "<br>";
//     }
// }

// class child extends base{
//     use hello;
//     public function show(){
//         echo "Hello from base class" . "<br>";
//     }
// }

// 1st priority = function inside child class.
// 2nd priority = trait inside child class.
// 3rd priority = base class inside child class.

// $test = new child();
// $test->show();

$test = new base();
// $test->show();
$test->newhello();

?>