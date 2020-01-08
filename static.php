<?php 

class person
{
	private $name;
	private $age;

	public static $votingage = 18;

	public function __construct($name,$age)
	{
		$this->name = $name;
		$this->age = $age;	
	}

	public static function setvotingage($newage)
	{
		self::$votingage = $newage;
	}

	public function getvage()
	{
		return self::$votingage;
	}

}

echo person::$votingage;
//person::setvotingage(19);
//echo person::$votingage;
$person = new person("abc",21);
echo $person->getvage();
?>