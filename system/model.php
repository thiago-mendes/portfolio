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
	public function update($tabela, array $dados, $where) {
		foreach ($dados as $ind => $val) {
			$campos[] = "{$ind} = '{$val}'";
		}

		$campos = implode(", ", $campos);
		return $this->db->query("UPDATE `{$tabela}` SET {$campos} WHERE  {$where}");

	}
	public function delete($tabela, $where) {
		return $this->db->query("DELETE FROM `{$tabela}` WHERE {$where}");
	}
}
?>