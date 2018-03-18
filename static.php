
<?php

class Father{    
    public static $money = 100;
    protected static $doller = 50;
    private static $bankCheck = 85478;
	
    public static function permission(){
        echo 'Father Permission Granted: '. self::$bankCheck.'<br/>';
    }
}
class Son extends Father{
    
    public static function permission() {
        echo 'inside child permission';
    }

    public function property(){        
        parent::permission();
    }
		
}

//Father::permission();
$obj = new Son();

$obj->permission();

///echo Father::$money;


?>
