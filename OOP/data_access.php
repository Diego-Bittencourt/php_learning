<?php 

class Car {

    public $wheels = "wheels";
    //a public property is open to be used anywhere in the progrma

    protected $hood = "hood";
    // a protected property can be used only inside the class and the extended classes

    private $engine = "engine";
    // a private property can only be used inside the class. Not available on the rest of the program
    // or in extended classes

	function showAll() {
		echo $this->wheels;
		echo $this->hood;
		echo $this->engine;
	}
};

class Kuruma extends Car {

	function showAllKuruma() {
		echo $this->wheels;
		echo $this->hood;
		echo $this->engine;
	}
};

//creating instance of the classes
$uno = new Car(); // from the car class
$aqua = new Kuruma(); // from the kuruma class


//accessing outside, in the outter part of the program.
echo $uno->wheels; //outputs 4
echo $uno->hood; //error
echo $uno->engine; //error


// accessing a public method form inside the Kuruma class object.
echo $aqua->showAll(); //show everything because it's a method inherited.
echo $aqua->showAllKuruma(); // show the wheels, the hood but DOESN'T SHOW THE ENGINE
// because it's a method created in the Kuruma class trying to reach private data from parent.


//accessing from inside the objects, calling a public method that access the property from inside the object.
// accessing a public method from inside the Car class object
echo $uno->showAll(); //show everything



?>