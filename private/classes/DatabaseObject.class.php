<?php
class DatabaseObject {
	
	static protected $database;
	static protected $table_name="";
	static protected $columns=[];
	

  static public function set_database($database) {
    self::$database = $database;
  }

  static public function find_by_sql($sql) {
    $result = self::$database->query($sql);
    if(!$result) {
      exit("Database query failed.");
    }

    // results into objects
    $object_array = [];
    while($record = $result->fetch(PDO::FETCH_ASSOC)) {
      $object_array[] = static::instantiate($record);
    }

  //  $result->free();

    return $object_array;
  }

  static public function find_all() {
    $sql = "SELECT * FROM " . static::$table_name;
    return static::find_by_sql($sql);
  }

  
  
  static protected function instantiate($record) {
    $object = new static;
    // Could manually assign values to properties
    // but automatically assignment is easier and re-usable
    foreach($record as $property => $value) {
      if(property_exists($object, $property)) {
        $object->$property = $value;
      }
    }
    return $object;
  }

  

  public function create() {

    $attributes = $this->attributes();
    $sql = "INSERT INTO " . static::$table_name . " (";
    $sql .= join(', ', array_keys($attributes));
    $sql .= ") VALUES ('";
    $sql .= join("', '", array_values($attributes));
    $sql .= "')";
    $result = self::$database->query($sql);
    if($result) {
  //    $this->id = self::$database->insert_id;
    }
    return $result;
  }



  protected function validate() {
    $this->errors = [];

    // Add custom validations

    return $this->errors;
  }


  static public function find_by_id($id) {
	
	  
    $sql = "SELECT * FROM " . static::$table_name . " ";  
    $sql .= "WHERE CustomerId= '" .$id. "'";

    $obj_array = static::find_by_sql($sql);

    if(!empty($obj_array)) {
     // echo "inside true";
      return array_shift($obj_array);
      
    } else {
		
      return false;
    }
  }

		 static public function find_by_Order_id($id) {
	
	  
    $sql = "SELECT * FROM " . static::$table_name . " ";  
    $sql .= "WHERE OrderId= '" .$id. "'";

    $obj_array = static::find_by_sql($sql);

    if(!empty($obj_array)) {
     // echo "inside true";
      return array_shift($obj_array);
      
    } else {
		
      return false;
    }
  }	
  static public function find_by_email($email,$pass) {
	   $sql = "SELECT * FROM " . static::$table_name . " ";  
    $sql .= "WHERE email='" .$email. "'"." AND password='".$pass. "'";
    $obj_array = static::find_by_sql($sql);
    if(!empty($obj_array)) {
      return array_shift($obj_array);
    } else {
      return false;
    }
  }



  protected function update() {
 
    $this->validate();
    if(!empty($this->errors)) { return false; }

    $attributes = $this->attributes();
    $attribute_pairs = [];
    foreach($attributes as $key => $value) {
      $attribute_pairs[] = "{$key}='{$value}'";
    }

    $sql = "UPDATE " . static::$table_name . " SET ";
    $sql .= join(', ', $attribute_pairs);
    $sql .= " WHERE id='" . self::$database->escape_string($this->id) . "' ";
    $sql .= "LIMIT 1";
    $result = self::$database->query($sql);
    return $result;
    
    
  }
  
  public function attributes() {
    $attributes = [];
    foreach(static::$db_columns as $column) {
      if($column == 'id') { continue; }
      $attributes[$column] = $this->$column;
    }
    return $attributes;
  }

 public function save() {
    // A new record will not have an ID yet
    if(isset($this->id)) {
      return $this->update();
    } else {
      return $this->create();
    }
  }

   public function delete($id) {
	  
    $sql = "DELETE FROM " . static::$table_name . " ";
    $sql .= "WHERE OrderId='".$id. "' ";
    $sql .= "LIMIT 1";
   
    $result = self::$database->query($sql);
    return $result;

    // After deleting, the instance of the object will still
    // exist, even though the database record does not.
    // This can be useful, as in:
    //   echo $user->first_name . " was deleted.";
    // but, for example, we can't call $user->update() after
    // calling $user->delete().
  }
  
}


?>

