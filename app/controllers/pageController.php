<?php

class Page extends Controller {
	public function index_action() {
		//echo "INDEX";
		$dados = $this->getParam();
		$email = new EmailHelper();

		//$email->enviaEmail();

		$this->view('pages/home', $dados);
	}

	public function remove($idJob) {
		echo $this->getParam('teste');
	}
}

?>