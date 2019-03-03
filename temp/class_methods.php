<?php 



class Cars {

function greetting1(){


}



function greettings(){


}



}

$the_metods = get_class_methods('Cars');

foreach ($the_metods as $methods) {
	echo "$methods". "<br>";
}







 ?>