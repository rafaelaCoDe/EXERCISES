<?php 

    class Car {
        public $make ; 
        public $model ; 

       function __construct ($make , $model) {
            $this -> make = $make ; 
            $this -> model = $model ; 
       }

       function display() {
            echo "Kataskeuastis : " . $this->make . " , Montelo : " . $this->model ;
       }
    }

    $myCar = new Car("Toyota" , "Corolla") ; 

    $myCar->display() ; 
?>