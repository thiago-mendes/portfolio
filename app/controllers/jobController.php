<?php
class Job extends Controller {

	public function index_action() {
		$jobs = new Jobs_Model();

		$listaJobs = $jobs->listarJobs();
		$dados     = array(
			"listaJobs" => $listaJobs,
		);

		$this->view('jobs/index', $dados);
	}

	public function adicionar() {
		$jobs = new Jobs_Model();

		$novoJob = $this->getParam();
		$jobs->adicionarJob($novoJob);
		print_r($novoJob);

	}

	public function remove() {
		$jobs     = new Jobs_Model();
		$idDelete = $this->getParam('id');
		$jobs->removeJob($idDelete);
	}
}

?>