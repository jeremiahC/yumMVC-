<?php 

Class Model {

	private $conn;

	public function __construct()
	{
		$config = require ROOT . "database.php";

		$this->conn = mysqli_connect($config['serverName'], 
					   			$config['username'],
					   			$config['password'],
					   			$config['database']);
		if (!$this->conn) {
			die('Connection Failed' . mysqli_connect_error());
		}
	}

	public function query($sql)
	{
		if (mysqli_query($this->conn, $sql)) {
			return true;
		}

		return "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}