
<?php

class PropertyTest{
    
    public function __set($name, $value)
    {
        echo "Setting '$name' to '$value'\n";
        //$this->data[$name] = $value;
    }

    public function __get($name)
    {
        echo "Getting '$name'\n";
        
    }

    /**  As of PHP 5.1.0  */
    public function __isset($name)
    {
        echo "Is '$name' set?\n";        
    }

    /**  As of PHP 5.1.0  */
    public function __unset($name)
    {
        echo "Unsetting '$name'\n";        
    }
	
	public function __call($name, $value){
		echo 'Called Function Name: '.$name;
		echo "<pre>";
		print_r($value);
		echo "</pre>";
	}
	
	public static function __callStatic($name, $value){
		echo 'Called Static Function Name: '.$name;
		echo "<pre>"; 
		print_r($value);
		echo "</pre>";
	}
    
}


$obj = new PropertyTest;

//$obj->a = 1;
//echo $obj->a 
$obj->myfunction(10, 'ziyed');

PropertyTest::myStaticFunction(10);

?>
