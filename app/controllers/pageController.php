<?php

class Page extends Controller {
	public function index_action() {
		//echo "INDEX";
		$dados['nome']  = $this->getParam('nome');
		$dados['idade'] = $this->getParam('idade');

		$this->view('pages/Home', $dados);
	}
}

?>