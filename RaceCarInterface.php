<?php
interface EngineInterface{
	public function getHP();
	public function newEngine();

}
interface RaceCarInterface extends EngineInterface{
	public function getVMax();
	public function getAcceleration();
	public function calcVelocity();
	public function calcAcc();
	public function calcHP();

}
?>