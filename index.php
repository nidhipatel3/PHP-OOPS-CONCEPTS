<?php

//include_once "classes/house.php";
//include_once "classes/person.php";


include_once "includes/autoload.php";

$p= new person("nitya",20);
echo $p->getperson();

echo "<br>";

$h= new house("adajan",1);
echo $h->getaddress();

?>