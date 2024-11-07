<?php

// class person{
//     public $name;
//     public $age;

//     function __construct($name = "No Name", $age = 0){
//         $this->name = $name;
//         $this->age = $age;
//     }

//     function show(){
//         echo $this->name . " - " . $this->age . "<br>";
//     }
// }

// Object

// $p1 = new person("SRS",25);
// $p2 = new person();
// $p3 = new person();

// $p1->show();
// $p2->show();
// $p3->show();

?>

<?php

class person{
   public $name,$age;

   function __construct($name="No name", $age=0){
        $this->name = $name;
        $this->age = $age;
   }

   function show(){
    echo "<h2>" . $this->name . " - " . $this->age ."</h2>" . "\n";
   }
}

// Object

$p1 = new person("SRS", 21);
$p2 = new person("qwe", 41);
$p3 = new person("poi", 91);

$p1->show();
$p2->show();
$p3->show();
?>