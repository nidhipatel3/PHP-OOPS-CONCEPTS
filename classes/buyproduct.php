<?php

class buyproduct extends visa
{
	public function getpayment()
	{
		return $this->visapayment();
	}
}

?>