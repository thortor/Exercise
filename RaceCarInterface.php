<?php
interface EngineInterface{
	public function getHorsePower();
}
interface RaceCarInterface extends EngineInterface{
	public function getMaxV();
	public function getAcceleration();
	public function calcVelocity();
	public function calcAcc();
	public function calcHorsePower();
}
?>