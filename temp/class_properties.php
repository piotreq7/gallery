<?php 



class Cars {

	var $wheel_count=4;
	var $dors =4;


function car_detail(){
return "This car has ". $this->wheel_count . " wheels";

}


}

$bmw = new Cars();

$mercedes = new Cars();



echo $bmw->wheel_count=10 . "<br>";
echo $mercedes->wheel_count. "<br>";

echo $mercedes->car_detail();




 ?>