<?php 

//Defining a class
//first letter is capitalized
class Car {
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

    function moveWheels() {
        echo "Wheels move";
    }

    function pneu_furado() {
        $this->wheels = 3;
        //the this keyword refers to the class that originated by the band.
    }
}

$mercedez = new Car();
$bmw = new Car();

$bmw->moveWheels();
$mercedes->moveWheels();

echo $bmw->wheels;
//we dont use the dollar sign $ to access a value inside an object.

$bmw->doors = 6;
//You can change a value inside the object with the syntax above.


if (method_exists("Car", "moveWheels")) {
    //the class_exists()/method_exists() are built in functions that checks the existence of a class.
echo "yayyyy nice";
} else {
    echo "NooooooOO";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>