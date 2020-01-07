<?php 

class person
{
	//properites
	public $name;
	public $age;
	public $address;

	//methods
	public function setname($name)
	{
		$this->name =$name;
	}
}

$obj1 = new person();
$obj1->setname("abc");
echo $obj1->name;

$obj2 = new person();
$obj2->setname("xyz");
echo $obj2->name;


?>