<?php

class person
{
	public $name;
	public $age;

	// public function __construct($name,$age)
	// {
	// 	$this->name = $name;
	// 	$this->age = $age;
	// }

	// public function getperson()
	// {
	// 	$persondetail = $this->name . " is " . $this->age . " years old ";
	// 	return $persondetail;
	// }

	public function setname(string $newname)
	{
		$this->name = $newname;
	}

	public function getname()
	{
		return $this->name;
	}
}

?>