
<?php

class Father{    
    public static $money = 100;
    protected static $doller = 50;
    private static $bankCheck = 85478;
	
    public function permission(){
        echo 'Father Permission Granted: '. self::$bankCheck.'<br/>';
    }
}
class Son extends Father{
    
    public function permission() {
        echo 'inside child permission';
    }

    public function property(){        
        parent::permission();
    }
		
}

Father::permission();
//$obj = new Father();

//$obj->permission();

///echo Father::$money;


?>
