<?php 

require "BaseController.php";
require MODEL_PATH . "User.php";

Class RegisterController extends BaseController {

	public function register()
	{
		$this->render('register');
	}

	public function post()
	{
		$user = new User();

		$user->setUser();

		header('Location: /login');
	}
}