<?php
class Jobs_Model extends Model {
	public $model = "jobs";

	public function listarJobs() {
		$this->model->read('jobs');
	}
}
?>