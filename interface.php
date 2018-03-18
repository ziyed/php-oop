<?php



interface A{
    public function makeHello(); 
}

interface B extends A{
    public function sayHello();    
}

class C implements B{
    public function sayHello() {
        echo 'interface A implemented';
    }
    
    public function makeHello() {
        echo 'Make hello called';
    }       
}


$obj = new C();

$obj->sayHello();