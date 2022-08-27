<?php 


class Car {

    static $wheels = 4;
	// when using the keyword static, you create a static data that can't be accessed in the objects
	// created by the class.
	// to access them, we have to use the class name followed by two colon
	// Car::$wheels;

    var $hood = 1;

    function moveWheels() {
        $this->wheels = 10; // error
		Car::$wheels = 10; // changes successfully;
    }
};

$bmw = new Car();

echo $bmw->wheels; // error
echo $bmw->hood; // output 1

echo Car::$wheels; // output 4
echo Car::$hood; // error

$bmw->moveWheels(); // error
echo Car::$wheels;

?>