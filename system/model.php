<?php
class Model {
	protected $db;

	public function __construct() {
		$this->db = new PDO("mysql:host=127.0.0.1;dbname=portfolio", 'root', 'cr@ne');
	}

	public function insert($tabela, Array $dados) {
		foreach ($dados as $inds => $values) {
			$campos[]  = $inds;
			$valores[] = $values;
		}

		$campos  = implode(", ", $campos);
		$valores = "'".implode("','", $valores)."'";

		return $this->db->query("INSERT INTO `{$tabela}` ({$campos}) VALUES ({$valores})");

	}
	public function read($tabela, $where = null) {
		$where = ($where != null?"WHERE {$where}":"");

		$q = $this->db->query("SELECT * FROM `{$tabela}` {$where} ");

		$q->setFetchMode(PDO::FETCH_ASSOC);

		return $q->fetchAll();
	}
	public function update() {

	}
	public function delete() {

	}
}
?>