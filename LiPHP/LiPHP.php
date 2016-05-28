<?php
$c = isset($_GET['c']) ? $_GET['c'] : 'Index';
$a = isset($_GET['a']) ? $_GET['a'] : 'index';

define('APP_PATH', ROOT_PATH . 'App/');
define('LI_PATH', ROOT_PATH . 'LiPHP/');
define('CORE_PATH', LI_PATH . 'Core/');

//加载核心类
require CORE_PATH . 'C.class.php';

//加载用户类
require APP_PATH . 'C/' . $c . '.class.php';

$controler_class = $c . 'C';
$Controler = new $controler_class();
$Controler->$a();
