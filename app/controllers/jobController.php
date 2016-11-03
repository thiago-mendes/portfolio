<?php

class Job extends Controller {
	public function index() {

		$db = new Jobs_Model();

		print_r($db->read('jobs', 'id=1'));

		/*$db->insert('jobs', array(
		"nome" => "Crane job 01",
		"url"  => "link 00001",
		));*/

		//$this->view('jobs/index');
	}

	public function crane() {
		$this->view('jobs/crane');
	}
}

?>