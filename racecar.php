<?php
include_once ("RaceCarInterface.php");
include_once ("car.php");

class RaceCar extends Car implements RaceCarInterface{
	private $VMax;
	private $Acceleration;
	private $HP;
	public function RaceCar($VMax, $Acceleration, $HP){
	$this->VMax=$VMax;
	$this->Acceleration=$Acceleration;
	$this->HP=$HP;
}

public function getVMax(){
	return $this->VMax;
}
public function getAcceleration(){
	return $this->Acceleration;
}
public function getHP(){
	return $this->HP;
}

	// public function getVMax(){
	// 	return $this->VMax;
	// }
	// public function setBrand($VMax){
	// 	$this->VMax=$VMax;
	// }
	// public function getAcceleration(){
	// 	return $this->Acceleration;
	// }
	// public function setColor($Acceleration){
	// 	$this->Acceleration=$Acceleration;
	// }
	// public function getHP(){
	// 	return $this->HP;
	// }
	// public function setModel($HP){
	// 	$this->HP=$HP;
	// }

public function tuning(){
	return $this->NewEngine;

}


public function calcVelocity(){
	$this->VMax=(($this->HP)*1.75);
}
public function calcAcc(){
	$this->Acceleration=(($this->HP)*($this->VMax)*0.1);
}
public function calcHP(){
	$this->HP=((($this->VMax)+($this->Acceleration))*0.1);
}
}
?>