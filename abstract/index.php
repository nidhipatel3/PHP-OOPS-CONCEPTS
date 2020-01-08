<?php

include 'abstract/paymenttypes.php';
include 'classes/buyproduct.php';

$buyproduct = new buyproduct();
echo $buyproduct->getpayment();

?>