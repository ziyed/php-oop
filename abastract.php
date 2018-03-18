<?php 


abstract class A{
    
    abstract public function sayHello($a);
    
    public function normalMethod(){
        echo 'This is normal';
    }
    
}

class B extends A{
    
    public function sayHello($a) {
        echo 'Child abastract body'.$a;
    }
    
}


$obj = new B();

$obj->sayHello(5);




?>

