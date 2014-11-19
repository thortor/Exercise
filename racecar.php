<?php
include_once ("RaceCarInterface.php");
include_once ("car.php");

class RaceCar extends Car implements RaceCarInterface{
	private $MaxV;
	private $Acceleration;
	private $HP;
	public function RaceCar($MaxV, $Acceleration, $HorsePower){
	$this->MaxV=$MaxV;
	$this->Acceleration=$Acceleration;
	$this->HorsePower=$HorsePower;
}

public function getMaxV(){
	return $this->MaxV;
}
public function getAcceleration(){
	return $this->Acceleration;
}
public function getHorsePower(){
	return $this->HorsePower;
}
public function calcVelocity(){
	$this->MaxV=(($this->HorsePower)*1.75);
}
public function calcAcc(){
	$this->Acceleration=(($this->HorsePower)*($this->MaxV)*0.1);
}
public function calcHorsePower(){
	$this->HP=((($this->MaxV)+($this->Acceleration))*0.1);
}
}
?>