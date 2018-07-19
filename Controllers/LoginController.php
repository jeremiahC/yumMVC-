<?php 

require "BaseController.php";

Class LoginController extends BaseController {

	public function login()
	{
		
		$this->render('login');
	}

}