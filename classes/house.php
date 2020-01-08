<?php 

class house
{
	public $address;
	public $hnumber;

	public function __construct($address,$hnumber)
	{
		$this->address = $address;
		$this->hnumber = $hnumber;
	}

	public function getaddress()
	{
		$fulladdress = $this->address . " " . $this->hnumber;
		return $fulladdress;
	}
}

?>