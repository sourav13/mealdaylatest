
<?php
class  User extends DatabaseObject{
      static  protected $table_name = "users";
      static protected $db_columns =['id','Name','Address','Email','Phone','Password'];
	public $Id;
	public $Name;
	public $Address;
	public $Email;
	public $Phone;
	public $Password;
	
	
  public function __construct($args=[]){
	
  $this->Name = $args['Name'] ?? '';
  $this->Address = $args['Address'] ?? '';
   $this->Email = $args['Email'] ?? '';
  $this->Phone = $args['Phone'] ?? '';
   $this->Password = $args['Password'] ?? '';
  
  }
  
    
    

}

?>
