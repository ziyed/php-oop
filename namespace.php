<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require './file1.php';
//require './file2.php';


use App\MyProduct;
//use App\Core as apc;

//App\show();
//apc\show();
//ap\show();

$obj = new MyProduct();

echo $obj->a;



