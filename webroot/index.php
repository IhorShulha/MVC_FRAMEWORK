<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));
define('VIEWS_PATH', ROOT.DS.'views');

require_once(ROOT.DS.'lib'.DS.'init.php');

//$uri = $_SERVER['REQUEST_URI'];
//print_r($uri);

//Session::setFlashMessage('Test');

App::run($_SERVER['REQUEST_URI']);


