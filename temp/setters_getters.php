<?php 

class Cars {

	private $wheels_count=4;
	private $doors_count=4;

function get_values(){

echo $this->wheels_count;

}

function set_values(){

$this->wheels_count=10;

}


}


$bmw = new Cars();


$bmw->set_values();
$bmw->get_values();



 ?>



