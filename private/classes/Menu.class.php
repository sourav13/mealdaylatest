<?php
class Menu extends DatabaseObject{
	
	public $Id;
	public $Name;
	public $Price;
	public $Category;
	
	public function __construct($args=[])
	{
		$this->Name = $args['Name'] ?? '';
		$this->Price = $args['Price'] ?? '';
		$this->Category = $args['Category'] ?? '';
	}
	
	  static  protected $table_name="menu";
      static protected $db_columns =['id','Name','Price','Category'];
      
  static public function find_Veg() {
   $sql = "SELECT * FROM  " . static::$table_name." Where Category='Veg'";
    return static::find_by_sql($sql);
  }
   static public function find_Categories() {
$sql = "SELECT DISTINCT Category FROM " . static::$table_name;   	
   	
  
    return static::find_by_sql($sql);
  }
    static public function find_Non_Veg() {
    $sql = "SELECT * FROM " . static::$table_name." Where Category='Non Veg'";
    return static::find_by_sql($sql);
  }
    static public function find_Rice() {
    $sql = "SELECT * FROM " . static::$table_name." Where Category='Rice'";
    return static::find_by_sql($sql);
  }
  
 
 
 
 
 
 
 
    
}




?>
