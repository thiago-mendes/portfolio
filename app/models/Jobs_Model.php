<?php
class Jobs_Model extends Model {
	public $_tabela = "jobs";

	public function listarJobs($qtd = null, $offset = null) {
		return $this->read(null, $qtd, $offset, 'id ASC');
	}
}
?>