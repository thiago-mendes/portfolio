<?php
class controller extends System {
	protected function view($nome, $vars = null) {
		if (is_array($vars) && count($vars) > 0) {
			extract($vars, EXTR_PREFIX_ALL, 'd');
		}
		return require_once (VIEWS.$nome.'.php');
	}
}
?>