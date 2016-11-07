<?php

define('CONTROLLERS', 'app/controllers/');
define('VIEWS', 'app/views/');
define('MODELS', 'app/models/');
define('HELPERS', 'app/helpers/');

require_once ('system/system.php');
require_once ('system/controller.php');
require_once ('system/model.php');

function __autoload($file) {
	if (file_exists(MODELS.$file.'.php')) {
		require_once (MODELS.$file.'.php');
	} else if (file_exists(HELPERS.$file.'.php')) {
		require_once (HELPERS.$file.'.php');
	} else {
		die("OPS!!! Model ou Helper não existe!");
	}
}

$start = new System;
$start->run();