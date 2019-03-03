<?php 

class Cars {

	public $wheels_count=4;
	private $doors_count=4;
	protected $seat_count=5;

function car_detail(){

echo $this->wheels_count;
echo $this->doors_count;
echo $this->seat_count;

}

}


$bmw = new Cars();

// echo $bmw->wheels_count;
// echo $bmw->doors_count;
// echo $bmw->seat_count;

echo $bmw->car_detail();





 ?>



