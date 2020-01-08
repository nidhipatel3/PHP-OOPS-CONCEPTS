<?php

class person
{
	private $name;
	private $email;
	private $age;

	public function __construct($name,$email,$age)
	{
		$this->name = $name;
		$this->email = $email;
		$this->age = $age;
	}

	public function setname($name)
	{
		$this->name =$name;
	}

	public function getname()
	{
		return $this->name;
	}

	public function __destruct()
	{

	}
}


$obj = new person("abc","abc@gmail.com",32);
// echo $obj->name;
// echo $obj->email;

// $obj->setname("xyz");
// echo $obj->name;
echo $obj->getname();


?>