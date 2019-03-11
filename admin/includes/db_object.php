<?php 

class Db_object{

protected static $db_table="users";

public static function find_all(){

return static::find_by_query("SELECT * FROM ".static::$db_table." ");

}

public static function find_by_id($user_id){


$the_result_array= static::find_by_query("SELECT * FROM ".static::$db_table." WHERE id=$user_id LIMIT 1");

return !empty($the_result_array) ? array_shift($the_result_array) : false;

}



public static function find_by_query($sql){
global $database;
$result_set= $database->query($sql);

$the_object_array = array();

while ($row = mysqli_fetch_array($result_set)) {
	
$the_object_array[]= static::instantation($row);
}

return $the_object_array;
}//end method



public static function instantation($the_record){  //inicjalizuje obiekt i przypisuje wartości 
$calling_class = get_called_class();
$the_object = new $calling_class;

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

}//end method



private function has_the_attribute($the_atribute){  //sprawdza czy obiekt posiad atrybuty

$object_properties = get_object_vars($this); //tablica ze zmiennymi obiektu

return array_key_exists($the_atribute, $object_properties); //sprawdza czy atrybut jest w tablicy object properties, zwraca true or false 

}



public function save(){

	return isset($this->id)? $this->update():$this->create();
} 





public function create(){
global $database;

$properties=$this->clean_properties();

$sql = "INSERT INTO " .static::$db_table. " (". implode(",", array_keys($properties)).") ";
$sql .= " VALUES ('";
$sql .= implode("','", array_values($properties)) ;
$sql .= "')" ;


if($database->query($sql)){
$this->id = $database->the_insert_id();
return true;
}else{

return false;

}
}//create method

public function update(){
global $database;
$properties=$this->clean_properties();
$properties_pairs=array();

foreach ($properties as $key => $value) {
	# code...
	$properties_pairs[] = "{$key}='{$value}'";

}

$sql = "UPDATE " .static::$db_table. " SET ";
$sql .= implode(", ",$properties_pairs) ;
$sql .= " WHERE id= " .$database->escape_string($this->id);

// echo $sql;



$database->query($sql);

return mysqli_affected_rows($database->connection)==1? true:false;

}//end update method

public function delete(){
global $database;

$sql = "DELETE FROM " .static::$db_table. " WHERE id=";
$sql .= $database->escape_string($this->id);
$sql .= " LIMIT 1";
$database->query($sql);
return mysqli_affected_rows($database->connection)==1? true:false;

	
}//end delete method 




protected function clean_properties(){
	global $database;

	$clean_properties = array();

	foreach ($this->properties() as $key => $value) {
		
		$clean_properties[$key] = $database->escape_string($value);
	}

return $clean_properties;



}//end clean_properties




protected function properties(){

	// return get_object_vars($this);
	$properties=array();
	foreach (static::$db_table_fields as $db_field) {
		if(property_exists($this, $db_field)){

			$properties[$db_field]= $this->$db_field;
		}

	}
	return $properties;
}//end properties method










}//end class


 ?>