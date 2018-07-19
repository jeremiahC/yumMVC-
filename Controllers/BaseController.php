<?php

Class BaseController {
	public function render($view) {
		require VIEW_PATH . $view . '.php';
	}	
}