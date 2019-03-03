<?php 

class Cars {

	static $wheels_count=4;
	static $doors_count=4;


static function car_detail(){

echo Cars::$wheels_count;
echo Cars::$doors_count;


}

}


$bmw = new Cars();

Cars::car_detail();




 ?>



