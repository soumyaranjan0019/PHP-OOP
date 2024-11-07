<?php

//  Traits : Traits can declare methods and abstract methods that can be used in multiple classes & the methods can have any access modifier (public, private, or protected).


trait test{
    public function show(){
        echo "Hello" . "<br>";
    }
}

trait hey{
    public function hello(){
        echo "Zzz..." . "<br>";
    }
    public function hi(){
        echo "Hi..." . "<br>";
    }
}

class A{
    use test;
    use hey;
}

class B{
    use test, hey;
}

$obj1 = new A();
$obj2 = new B();

$obj1->hello();
$obj2->show();
$obj2->hello();
$obj2->hi();

?>