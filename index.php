<?php

define('CONTROLLERS', 'app/controllers/');
define('VIEWS', 'app/views/');
define('MODELS', 'app/models/');
define('HELPERS', 'app/helpers/');

require ('system/system.php');
require ('system/controller.php');
require ('system/model.php');

function __autoload($file) {
	if (file_exists(MODELS.$file.'.php')) {
		require (MODELS.$file.'.php');
	} else if (file_exists(HELPERS.$file.'.php')) {
		require (HELPERS.$file.'.php');
	} else {
		die("OPS!!! Model ou Helper não existe!");
	}
}

$start = new System;
$start->run();