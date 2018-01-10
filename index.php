
<?php

class PropertyTest{
    
    private $data = array();

    
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
    
}


$obj = new PropertyTest;

$obj->a = 1;
echo $obj->a 


?>
