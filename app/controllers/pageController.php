<?php

class Page extends Controller {
	public function index_action() {
		//echo "INDEX";
		echo $this->getParam('nome');

	}

	public function teste() {
		echo "TESTE";
	}
}

?>