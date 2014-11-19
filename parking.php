<?php

include_once('car.php');
include_once("racecar.php");

//$car = new Car();

//echo $car->helloCar();

$myCar = new Car("Skoda","Fabia","Silver", 5);
$myRaceCar = new RaceCar(300,200,500);

// $otherCar = new Car("FSO","Polonez","marine", 5);

//echo $myCar->helloCar();
// echo $otherCar->helloCar();

// echo $otherCar->getColor()."\n";
// $otherCar->setColor("pink");
// echo $otherCar->getColor()."\n";

// echo $myCar->helloCar();
// echo $otherCar->helloCar();

// echo $myRaceCar->getVMax();
// $myRaceCar->calcVelocity();

// echo $myRaceCar->getVMax();
// echo $myRaceCar->getAcceleration();

// $myRaceCar->calcAcc();
// echo $myRaceCar->getAcceleration();
// echo $myRaceCar->getHP();

// $myRaceCar->calcHP();
// echo $myRaceCar->getHP();



function introduceCar(Car $c){
	return "Hello! It's me - your car: ".$c->getColor(). " ".$c->getBrand()." ".$c->getModel()." ".$c->getNumberOfDoors()."\n";
}
echo introduceCar($myCar);

echo "My Horse Power is equal to : " . $myRaceCar->getHP() . "\n";
echo "My Maximum velocity is equal to: " . $myRaceCar->getVMax() . "\n";
echo "My Acceleration is equal to: " . $myRaceCar->getAcceleration() . "\n";


?>
