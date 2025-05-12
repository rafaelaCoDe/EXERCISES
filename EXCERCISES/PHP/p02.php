<?php

class Car{
    private $make;
	private $model;
	private$year;
	private $color;
	private $speed;
	
	public function __construct($make, $model, $year, $color){
		$this->make 	= $make;
		$this->model 	= $model;
		$this->year 	= $year;
		$this->color 	= $color;
		$this->speed 	= 0;
	}
	public function setMake($make) {
		$this->make = $make;
	}
	public function setModel($model) {
		$this->model = $model;
	}
	public function setYear($year) {
		$this->year = $year;
	}
	public function setColor($color) {
		$this->color = $color;
	}
	public function setSpeed($speed) {
		$this->speed = $speed;
	}
	public function getMake() {
		return $this->make ;
	}
	public function getModel() {
		return $this->model;
	}
	public function getYear() {
		return $this->year;
	}
	public function getColor() {
		return $this->color ;
	}
	public function getSpeed() {
		return $this->speed;
	}
	public function  start() {
		echo "Το αυτοκινητο ξεκιναει.\n";
	}
	public function  stop() {
		$this->speed= 0;
		echo "Το αυτοκινητο σταματαει.\n";
	}
	public function accerate($amount) {
		$this->speed += $amount;
		echo"Η ταχυτητα αυξανεται στα {$this->speed} km/h.\n";
	}
	public function brake($amount) {
		$this->speed -= $amount;
		if ($this->speed <0) {
			$this->speed=0;
			echo"Η ταχυτητα μειωνεται στα {$this->speed} km/h.\n";
		}
	}
}	
	$myCar = new Car("Toyota", "Corolla", 2020, "Μπλε");
	echo "Μαρκα: {$myCar->getMake()}, Μοντελο:{$myCar->getModel()}, ετος:{$myCar->getYear()},
	χρωμα: {$myCar->getColor()}\n";
	
	$myCar->start();
	$myCar->accerate(50);	
	$myCar->brake(20);
	$myCar->stop();
	?>