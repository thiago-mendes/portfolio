<?php
class Model {
	protected $db;
	public $_tabela;

	public function __construct() {
		$this->db = new PDO("mysql:host=127.0.0.1;dbname=new-portfolio", 'root', 'mendes15');
		// Conecta no banco de DADOS
	}

	//INICIO DO CRUD -> CREATE | READ | UPDATE | DELET

	public function insert(Array $dados) {
		$campos  = implode(", ", array_keys($campos));// Cria um array com os indices
		$valores = "'".implode("','", array_values($valores))."'";// Cria um arrey com os valores

		return $this->db->query("INSERT INTO `{$this->_tabela}` ({$campos}) VALUES ({$valores})");// Insere os dados no banco de dados
	}
	public function read($where = null) {
		$where = ($where != null?"WHERE {$where}":"");// Varifica se foi passado um where

		$q = $this->db->query("SELECT * FROM `{$this->_tabela}` {$where} ");//Busca os dados da tabela, faz o filtro caso tenha where

		$q->setFetchMode(PDO::FETCH_ASSOC);// Configuro o Fetch, influencia na exibição dos dados

		return $q->fetchAll();// retorna os valores
	}
	public function update(array $dados, $where) {
		foreach ($dados as $ind => $val) {
			$campos[] = "{$ind} = '{$val}'";//
		}

		$campos = implode(", ", $campos);
		return $this->db->query("UPDATE `{$this->_tabela}` SET {$campos} WHERE  {$where}");

	}
	public function delete($where) {
		return $this->db->query("DELETE FROM `{$this->_tabela}` WHERE {$where}");// Deleta tabela
	}
}
?>