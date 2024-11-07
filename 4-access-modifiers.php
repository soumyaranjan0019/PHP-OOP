<?php

// ACCESS MODIFIER :Who can access the properties & the methods.(Restrictions)
// 3-Types 
                //  Class Itself    Outside class   Derived class
// 1) public            Run             Run             Run
// 2) protected         Run            Not-Run          Run
// 3) private          Not-Run         Not-Run         Not-Run


class base{
    private $name;

    public function __construct($n){
        $this->name = $n;
    }

    private function show(){
        echo "Your name : " . $this->name . "<br>";
    }
}

class derived extends base{
    public function show(){
        echo "Your name : " . $this->name . "<br>";
    }
}

$check = new base("SRS");

$check->show();
// $check->get();

?>