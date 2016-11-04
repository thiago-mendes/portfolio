<?php

class Job extends Controller {
	private $model;

	public function __construct() {
		$this->model = new Jobs_Model();
	}

	public function index() {
		$this->view('jobs/index');
	}

	public function listarJobs() {
		print_r($this->model->read('jobs'));
	}

	public function adicionarJob($dados) {
		$this->model->insert('jobs', array(
				"nome" => "Crane job 01",
				"url"  => "link 00001",
			));
	}

	public function deletarJob() {
		$url = explode("/", $_GET[key]);
		$id  = $url[2];

		print_r($this->model->delete('jobs', 'id='.$id));
	}

	/*
public function atualizarJob($dados) {
$url = explode("/", $_GET[key]);
$id  = $url[2];

$this->model->update('jobs', array(
"nome" => "NOVO NOME mais e mais",
"url"  => "www.teste.com",
), 'id=1');
} */
}

?>