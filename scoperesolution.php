<?php

//first class
class firstclass
{
	//property
	const EXAMPLE = "you can't change this";

	//method
	public static function test()
	{
		$testing = "this is a testing";
		return $testing;
		// echo self::EXAMPLE;
	}
}

//$a = firstclass::EXAMPLE;
$a = firstclass::test();
echo $a;

//second class
class secondclass extends firstclass
{
	//property
	public static $staticproperty = "this is a static property";	

	//method
	public static function anothertest()
	{
		echo parent::EXAMPLE;
		echo self::$staticproperty;
	}
}

$b = secondclass::anothertest();
echo $b;

?>