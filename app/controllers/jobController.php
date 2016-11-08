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

	public function remove() {
		$jobs = new Jobs_Model();
		$idDelete = $this->getParam('id');

		echo $idDelete;

		$jobs->removeJob($idDelete);
	}
}

?>