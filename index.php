<?php 
	
	$_GET['key'] = (isset($_GET['key']) ? $_GET['key'] . '/' : 'index/index');
	$key = $_GET['key'];
	$separator = explode('/', $key);

	$controller = $separator[0];
	$action = ($separator[1] == null ? 'index' : $separator[1]);


	//echo '<br>' . $controller . ' ' . $action;

	require_once('system/controller.php');
	require_once('system/config.php');
	require_once('app/controllers/' . $controller . 'Controller.php');

	$app = new $controller();
	$app->$action();