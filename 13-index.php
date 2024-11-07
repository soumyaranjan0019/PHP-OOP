<?php
require "13-Namespace1.php";
require "13-Namespace2.php";


function show(){
    echo "index page. <br>";
}

// short-hand
    use pro\v1\srs as cmd;


// $obj1 = new test\names();
$obj2 = new cmd\names();

// test\show();
// pro\show();


?>