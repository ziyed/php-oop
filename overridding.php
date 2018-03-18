
<?php

class Father{
    
    public function money(){
        echo "Saved Money on Bank";
    }    
}
class Son extends Father{
	
	public function money(){
		echo "Expense Money From Bank, No saving! :)";
	}
	
}
$obj = new Son;

$obj->money();

?>
