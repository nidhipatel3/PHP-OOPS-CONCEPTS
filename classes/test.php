<?php

class test extends db
{
	public function getusers()
	{
		$sql = "SELECT * FROM user";
		$stmt = $this->connect()->query($sql);
		while ($row = $stmt->fetch()) {
			echo $row['username'] . '<br>';
		}
	}

	public function getusersstmt()
	{
		$sql = "SELECT * FROM user WHERE username = ? AND password = ?";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$username,$password]);
		$names=$stmt->fetchAll();

		foreach ($names as $name)
		{
			echo $row['username'] . '<br>';
		}
		
	}
}

$testobj = new test();
$testobj->getusersstmt("abc","abc123");
?>