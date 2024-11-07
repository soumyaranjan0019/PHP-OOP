<?php

// Destruct function : It calls automatically in the end.


class xyz{

   private $conn;

   public function __construct(){
    $this->conn = mysqli_connect("localhost","root","","xyz");
   }

   public function insert(){
    echo "<h1>Insert class</h1> \n";
   }

   public function update(){
    echo "<h1>Update class</h1> \n";
   }

   public function delete(){
    echo "<h1>Delete class</h1> \n";
   }

   public function __destruct(){
    mysqli_close($this->conn);
   }
}

// Object

$test = new xyz();

$test->insert();
$test->update();
$test->delete();

?>