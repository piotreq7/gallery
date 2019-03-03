<?php 

class User{


public $id;
public $username;
public $password;
public $firstname;
public $lastname;



public static function find_all_users(){

return self::find_this_query("SELECT * FROM users");

}

public static function find_user_by_id($user_id){


$the_result_array= self::find_this_query("SELECT * FROM users WHERE id=$user_id LIMIT 1");

return !empty($the_result_array) ? array_shift($the_result_array) : false;


// if(!empty($the_result_array)){

// 	$first_item=array_shift($the_result_array);
// 	return $first_item;
// }else{

// return false;

// }


}


public static function find_this_query($sql){
global $database;
$result_set= $database->query($sql);
$the_object_array = array();

while ($row = mysqli_fetch_array($result_set)) {
	
$the_object_array[]= self::instantation($row);
}



return $the_object_array;





}


public static function instantation($the_record){  //inicjalizuje obiekt i przypisuje wartości 

$the_object = new self;

//pola w bazie muszą nazywać się identycznie jak zmienne w klasie aby to działało.

///the_record - tablica z zapytania do bazy danych
foreach ($the_record as $the_atribute => $value) {

//sprawdzamy czy obiekt posiada atrybuty
if($the_object->has_the_attribute($the_atribute)){



// przypisanie wartości z bazy danych do zmiennych obiektu
//the_atribute - zmienna klasy users, the_object - obiekt klasy users
// value - wartość z bazy danych

$the_object->$the_atribute = $value;   

}

}



return $the_object;

}


private function has_the_attribute($the_atribute){  //sprawdza czy obiekt posiad atrybuty

$object_properties = get_object_vars($this); //tablica ze zmiennymi obiektu

return array_key_exists($the_atribute, $object_properties); //sprawdza czy atrybut jest w tablicy object properties, zwraca true or false 


}











}
 ?>