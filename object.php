<?php

class Car {
    public $brand;
    public $model;
    
    public function startEngine() {
        echo "Starting the engine...";
    }
}

// Creating an object from the Car class
$myCar = new Car();

// Assigning values to object properties
// $myCar->brand = "Toyota";
// $myCar->model = "Camry ";
$myCar->model = "BMW ";


// Accessing object properties
echo $myCar->brand; 
echo $myCar->model;  

// Calling object methods
$myCar->startEngine();  


?>