<?php
echo $_SERVER['REQUEST_URI'];
define('ROOT',dirname(dirname(__FILE__)));
define("DS",DIRECTORY_SEPARATOR);
define('VIEW_PATH',ROOT.DS.'views');
require_once ROOT.DS.'lib'.DS.'init.php';
session_start();
App::run($_SERVER['REQUEST_URI']);
?>
