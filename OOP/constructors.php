<?php 

//Defining a class
//first letter is capitalized
class Car {
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

    function __construct()
    {
        //a construct is a function that is called everytime you use the class to create an object.
        echo $this->wheels = 10;
    }

    function moveWheels() {
        echo "Wheels move";
    }

    function pneu_furado() {
        $this->wheels = 3;
        //the this keyword refers to the class that originated by the band.
    }
}

$jet = new Car(); //it runs the construct
$truck = new Car(); //it runs the construct again
$uno_de_firma_com_escada = new Car(); //it runs the construct again
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