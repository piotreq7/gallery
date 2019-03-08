<?php 




echo __FILE__ ."<BR>";


echo __LINE__ ."<BR>";

echo __DIR__ ."<BR>";




if(file_exists(__DIR__)){


echo "yes <BR>";

}

if(is_file(__DIR__)){


echo "yes <BR>";

} else {
	echo "no<BR>";
}



if(is_file(__FILE__)){


echo "yes <BR>";

} else {
	echo "no";
}



// echo file_exists(__FILE__)? "yes":"no";


$kkka=3;

echo $kkka==3?"tak 3":"nie 3";






 ?>