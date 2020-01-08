<?php

class newclass
{

public $data = "welcome";

public function __construct()
{
	echo "this is constructor" . "<br>";
}

public function setproperty()
{
	$this->data = $newdata;
}

public function getproperty()
{
	return $this->data;
}

public function __destruct()
{
	echo "<br> this is destructor";
}

}

$obj = new newclass;
unset($obj);
echo $obj->getproperty();

?>