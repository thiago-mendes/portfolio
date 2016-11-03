<?php
class Model {
	protected $db;

	public function __construct() {
		$this->db = new PDO("mysql:host=127.0.0.1;dbname=portfolio", 'root', 'cr@ne');
	}

	public function insert($tabela, Array $dados) {
		$array = array(
			"nome" => "Crane job 01",
			"url"  => "link 00001",
		);

		foreach ($dados as $kinds => $values) {
			$campos[]  = $inds;
			$valores[] = $values;
		}

		$campos = implode(', ', $campos);
		//return $campos;
	}
	public function read() {

	}
	public function update() {

	}
	public function delete() {

	}
}
?>