<?php
	class controller extends System {
		protected function view ($nome){
			return require_once('app/views/' . $nome . '.php');
			exit();
		}
	}
 ?>