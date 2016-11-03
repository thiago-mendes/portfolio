<?php

class Job extends Controller {
	public function index() {

		$db = new Jobs_Model();

		echo $db->insert('jobs', array(
				"nome" => "Crane job 01",
				"url"  => "link 00001",
			));

		//$this->view('jobs/index');
	}

	public function crane() {
		$this->view('jobs/crane');
	}
}

?>