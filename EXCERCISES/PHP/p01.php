<?php

class Car{
    public $make;
	public $model;
	public $year;
	public $color;
	private $speed;
	
	public function __construct($make, $model, $year, $color){
		$this->make 	= $make;
		$this->model 	= $model;
		$this->year 	= $year;
		$this->color 	= $color;
		$this->speed 	= 0;
	}
	public function start() {
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
	$myCar = new Car("Toyota", "Corola", 2020, "Μπλε");
	echo "Μαρκα: {$myCar->make}, Μοντελο:{$myCar->model}, ετος:{$myCar->year},
	χρωμα: {$myCar->color}\n";
	
	$myCar->start();
	$myCar->accerate(50);	
	$myCar->brake(20);
	$myCar->stop();
	?>