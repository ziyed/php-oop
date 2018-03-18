
<?php

class Father{    
    public $money = 100;
	protected $doller = 50;
	Private $bankCheck = 85478;
	
	public function permission(){
		echo 'Father Permission Granted: '.$this->bankCheck.'<br/>';
	}
}

class Son extends Father{
	
	public function property(){
		echo 'Money: '.$this->money.'<br/>';
		echo 'Doller: '.$this->doller.'<br/>';
		//echo 'Bank Check: '.$this->bankCheck.'<br/>';
		$this->permission();
	}
	
	
		
}


$obj = new Son;

//echo $obj->money;
//echo $obj->doller;

$obj->property();



?>
