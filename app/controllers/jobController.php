<?php
class Job extends Controller {
	private $jobs;

	public function __construct() {
		$this->jobs = NEW Jobs_Model();
	}

	public function index_action() {
		$listaJobs = $this->jobs->listarJobs();
		$dados     = array(
			"listaJobs" => $listaJobs,
		);

		$this->view('jobs/Index', $dados);
	}

	public function remove() {
		var_dump($this->getParam('id'));
	}
}

?>