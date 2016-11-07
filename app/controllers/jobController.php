<?php
class Job extends Controller {
	private $jobs;

	public function __construct() {
		$this->jobs = NEW Jobs_Model();
	}

	public function index_action() {
		$listaJobs          = $this->jobs->listarJobs();
		$dados['listaJobs'] = $listaJobs;
		$this->view('jobs/Index', $dados);
	}

	public function listarjobs() {
		echo "LISTAR JOBS";
	}

	public function teste() {
		echo "teste 0506";
	}
}

?>