<?php

include_once('car.php');
include_once("racecar.php")

// $car = new Car();

// echo $car->helloCar();

$myCar = new Car("Skoda","Fabia","Silver", 5);
$myRaceCar = new RaceCar(300,200,500);

// $otherCar = new Car("FSO","Polonez","marine", 5);

// echo $myCar->helloCar();
// echo $otherCar->helloCar();

// echo $otherCar->getColor()."\n";
// $otherCar->setColor("pink");
// echo $otherCar->getColor()."\n";

// echo $myCar->helloCar();
// echo $otherCar->helloCar();

echo $myRaceCar->getMaxV();
$myRaceCar->calcVelocity();

echo $myRaceCar->getMaxV();
echo $myRaceCar->getAcceleration();

$myRaceCar->calcAcc();
echo $myRaceCar->getAcceleration();
echo $myRaceCar->getHorsePower();

$myRaceCar->calcHorsePower();
echo $myRaceCar->getHorsePower();

public function introduceCar(Car $c){
	echo "Hello! It's me - your car: ".$c->getColor()." ".$c->getBrand()." ".$c->getModel()." ".$c->getNoOfDoors()."\n"
		"I have".$c->getHorsePower." horse power,".$c->getAcceleration." - Velocity, and my acceleration is equal to: ".$c->getAcceleration.;
}



?>
