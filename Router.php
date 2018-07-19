<?php

Class Router {
	private $url;

	public function __construct()
	{
		$this->url = $_GET['uri'];
	}

	public function add($uri, $callback, $action)
	{
		if ($uri === '/' . $this->url) {
			require CONTROLLER_PATH . $callback . '.php';

			$controller = new $callback;
			$controller->$action();
		}
	}
}