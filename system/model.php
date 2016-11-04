<?php
class Model {
	protected $db;

	public function __construct() {
		$this->db = new PDO("mysql:host=127.0.0.1;dbname=new-portfolio", 'root', 'mendes15'); // Conecta no banco de DADOS
	}


	//INICIO DO CRUD -> CREATE | READ | UPDATE | DELET

	public function insert($tabela, Array $dados) { 
		foreach ($dados as $inds => $values) { // Percorre o array $dados separando os indices e valores
			$campos[]  = $inds;
			$valores[] = $values;
		}

		$campos  = implode(", ", $campos); // Cria um array com os indices
		$valores = "'".implode("','", $valores)."'"; // Cria um arrey com os valores

		return $this->db->query("INSERT INTO `{$tabela}` ({$campos}) VALUES ({$valores})"); // Insere os dados no banco de dados

	}
	public function read($tabela, $where = null) {
		$where = ($where != null?"WHERE {$where}":""); // Varifica se foi passado um where

		$q = $this->db->query("SELECT * FROM `{$tabela}` {$where} "); //Busca os dados da tabela, faz o filtro caso tenha where

		$q->setFetchMode(PDO::FETCH_ASSOC); // Configuro o Fetch, influencia na exibição dos dados

		return $q->fetchAll(); // retorna os valores
	}
	public function update($tabela, array $dados, $where) {
		foreach ($dados as $ind => $val) { 
			$campos[] = "{$ind} = '{$val}'"; // 
		}

		$campos = implode(", ", $campos);
		return $this->db->query("UPDATE `{$tabela}` SET {$campos} WHERE  {$where}");

	}
	public function delete($tabela, $where) {
		return $this->db->query("DELETE FROM `{$tabela}` WHERE {$where}"); // Deleta tabela
	}
}
?>