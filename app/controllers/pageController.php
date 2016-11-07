<?php

class Page extends Controller {
	public function index_action() {
		$dados = $this->getParam();

		$this->view('pages/Home', $dados);
	}

	public function teste() {
		echo " 0000000 1";
		die;

		//$this->view('pages/Home', $dados);
	}
}

?>