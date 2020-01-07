<?php

class person
{
	protected $fname = "deepika";
	private $lname = "kariya";
	private $age = "32";
}

class abc extends person
{
	public function display()
	{
		$a = $this->fname;
		return $a;
	}
	
}

$obj= new abc();

echo $obj->display();

?>