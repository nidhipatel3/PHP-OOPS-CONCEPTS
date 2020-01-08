<?php

interface paymentinterface
{
	public function paynow();
}

interface logininterface
{
	public function loginfirst();
}

class paypal implements paymentinterface,logininterface
{
	public function loginfirst(){

	}
	public function paynow(){

	}
	public function paymentprocess(){
	$this->loginfirst();
	$this->paynow();
	}
}

class visa implements paymentinterface
{
	public function paynow(){

	}
	public function paymentprocess(){
	$this->paynow();
	}
}

class cash implements paymentinterface
{
	public function paynow(){

	}
	public function paymentprocess(){
	$this->paynow();
	}
}

class buyproduct
{
	public function pay(paymentinterface $paymenttype){

		$paymenttype->paymentprocess();
		//$paymenttype->paynow();
	}
	public function onlinepay(logininterface $paymenttype){

		$paymenttype->paymentprocess();
		//$paymenttype->paynow();
	}
}

$paymenttype = new cash();
$buyproduct = new buyproduct();
$buyproduct->pay($producttype);

?>