<?php 

class Cars {

	var $wheels=4;
	var $doors;


function gretings(){
return "greeting";

}

}

$bmw = new Cars();

$mercedes = new Cars();

Class Trucks extends Cars{
var $wheels=10;

}



$man = new Trucks();

echo $man->wheels;















 ?>



