<?php

include_once "simpleclass.php";

$obj = new simpleclass();
$obj->display();

$newobj = new newclass() {
		public function display()
	{
		echo "hello welcome";
	}

	};

$newobj->display();


	
?>