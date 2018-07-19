<?php 

$router = new Router();

$router->add('/login', 'LoginController', 'login');
$router->add('/register', 'RegisterController', 'register');
$router->add('/post', 'RegisterController', 'post');