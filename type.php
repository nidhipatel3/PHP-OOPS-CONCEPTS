<?php

declare(strict_types = 1);
include 'includes/autoload.php';


$person1 = new person();

try
{
	$person1->setname("nitya");
	echo $person1->getname();
}catch(TypeError $e)
{
	echo "error!" . $e->getMessage();
}

?>