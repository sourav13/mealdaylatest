<?php
class  CustOrder extends DatabaseObject{

	public $CustomerId;
	public $OrderId;
	public $Dish;
	public $Dish1;
	public $Dish2;
	public $Dish3;
	public $Dish4;
	public $Dish5;
	public $Dish6;
	public $Dish7;
	public $Dish8;
	public $Dish9;
	public $Dish10;
	public $Dish11;
	
	
  public function __construct($args=[]){
  $this->CustomerId = $args['CustomerId'] ?? '';
  $this->Dish = $args['Dish'] ?? '';
  $this->Dish1 = $args['Dish1'] ?? '';
  $this->Dish2 = $args['Dish2'] ?? '';
   $this->Dish3 = $args['Dish3'] ?? '';
  $this->Dish4 = $args['Dish4'] ?? '';
  $this->Dish5 = $args['Dish5'] ?? '';
   $this->Dish6 = $args['Dish6'] ?? '';
  $this->Dish7 = $args['Dish7'] ?? '';
  $this->Dish8 = $args['Dish8'] ?? '';
   $this->Dish9 = $args['Dish9'] ?? '';
  $this->Dish10 = $args['Dish10'] ?? '';
  $this->Dish11 = $args['Dish11'] ?? '';
  
  }
  
      static  protected $table_name="orderz";
      static protected $db_columns =['id','CustomerId','Dish','Dish1','Dish2','Dish3','Dish4','Dish5','Dish6','Dish7','Dish8','Dish9','Dish10','Dish11'];
   

}

?>
