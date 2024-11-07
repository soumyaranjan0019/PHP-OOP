<?php

// Inheritance = One class can use another class'property & methods.

class employee
{
    public $name, $age, $salary;

    function __construct($n, $a, $s)
    {
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }

    function info()
    {
        echo "<h1>Employee Profile :</h1>";
        echo "<h3>" . "Name" . " - " . $this->name . "</h3>" . "\n";
        echo "<h3>" . "Age" . " - " . $this->age . "</h3>" . "\n";
        echo "<h3>" ."Salary" . " - " . $this->salary . "</h3>";
    }
}

// Inherit
class manager extends employee
{
    public $ta = 100000;
    public $phone = 60000;
    public $total;

    function info()
    {
        $this->total = $this->salary + $this->ta + $this->phone;

        echo "<h1>Manager Profile :</h1>";
        echo "<h3>" . "Name" . " - " . $this->name . "</h3>" . "\n";
        echo "<h3>" . "Age" . " - " . $this->age . "</h3>" . "\n";
        echo "<h3>" . "Salary" . " - " . $this->total . "</h3>";
    }
}

$p1 = new manager("SRS", 21, 10000000);
$p2 = new employee("QWE", 81, 1000000);

$p1->info();
$p2->info();

?>