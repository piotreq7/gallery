<?php 

class Cars {

	public $wheels_count=4;
	static $doors_count=4;


function __construct(){
echo $this->wheels_count;
echo self::$doors_count++;
echo "<br>";
	}

 

function car_detail(){


}

}


$bmw = new Cars();
$audi = new Cars();
$aud1i = new Cars();
$audaai = new Cars();

// echo $bmw->wheels_count;
// echo $bmw->doors_count;
// echo $bmw->seat_count;

// echo $bmw->car_detail();





 ?>



