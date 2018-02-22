
<?php

class Father{    
    public static $money = 100;
	protected static $doller = 50;
	Private $bankCheck = 85478;
	
	public static function permission(){
		echo 'Father Permission Granted: '.$this->bankCheck.'<br/>';
	}
}
class Son extends Father{
	
	public function property(){
		$this->permission();
	}
		
}

echo Father::permission();

?>
