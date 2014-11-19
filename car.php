<?php

include_once('CarInterface.php');

class Car implements CarInterface{

	private $brand;
	private $model;
	private $color;
	private $numbeOfDoors;
	
	// public function Car(){
	// 	$this->brand="Ford";
	// 	$this->model="Fiesta";
	// 	$this->color="rainbow";
	// 	$this->numberOfDoors=5;
	// }

		public function Car($b, $m, $c, $nod){
		$this->brand=$b;
		$this->model=$m;
		$this->color=$c;
		$this->numberOfDoors=$nod;
	}

	public function helloCar(){
		return "Hello! it's me - your car: ".$this->color." ".$this->brand." ".$this->model." with ".$this->numberOfDoors." doors\n";

	}

	public function getBrand(){
		return $this->brand;
	}
	public function setBrand($brand){
		$this->brand=$brand;
	}
	public function getColor(){
		return $this->color;
	}
	public function setColor($color){
		$this->color=$color;
	}
	public function getModel(){
		return $this->model;
	}
	public function setModel($modelmodel){
		$this->model=$model;
	}
	public function getNumberOfDoors(){
		return $this->numberOfDoors;
	}
	public function setNumberOfDoors($numberOfDoors){
		$this->numberOfDoors=$numberOfDoors;
	}




}



?>
