<?php

	class Job extends Controller {
		public function index() {
			$this->view('jobs/index');
		}

		public function crane() {
			$this->view('jobs/crane');
		}
	}

?>