<?php

$_GET['key'] = (isset($_GET['key'])?$_GET['key']:'index/index');

$key        = $_GET['key'];
$separator  = explode('/', $key);
$controller = $separator[0];
$action     = ($separator[1] == null?'index':$separator[1]);

function __autoload($file) {
	require_once ('app/models/'.$file.'.php');
}

require_once ('system/controller.php');
require_once ('system/model.php');

require_once ('app/controllers/'.$controller.'Controller.php');

$app = new $controller();
$app->$action();