<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace App;

function show(){
    echo 'I am in App <br>';
}

class Product{    
    public $a = 10;    
}

class MyProduct{
    public $a = 1000;
}

abstract class Abst{    
    abstract public function show(); 
    
}
