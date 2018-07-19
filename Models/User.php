<?php 

require "Model.php";

Class User extends Model {

	public function setUser()
	{
		$sql = "INSERT INTO users (username, email, password) 
				VALUES ('jeremiahC', 'jeremiah@gmail.com', 'wakokibaw123')";

		$this->query($sql);
	}
}