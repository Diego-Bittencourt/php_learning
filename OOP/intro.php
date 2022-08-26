<?php 

//Defining a class
//first letter is capitalized
class Car {

    function moveWheels() {
        echo "Wheels move";
    }


}

$mercedez = new Car();
$bmw = new Car();

$bmw->moveWheels();
$mercedes->moveWheels();


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