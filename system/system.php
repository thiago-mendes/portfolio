<?php
class System {
	private $_url;
	private $_explode;

	public $_controller;
	public $_action;
	public $_params;

	public function __construct() {
		$this->setUrl();
		$this->setExplode();
		$this->setController();
		$this->setAction();
		$this->setParams();
	}

	private function setUrl() {
		$_GET['url'] = (isset($_GET['url'])?$_GET['url']:'page/index_action');
		$this->_url  = $_GET['url'];
	}

	private function setExplode() {
		$this->_explode = explode('/', $this->_url);
	}

	private function setController() {
		$this->_controller = $this->_explode[0];
	}

	private function setAction() {
		$ac            = (!isset($this->_explode[1]) || $this->_explode[1] == NULL || $this->_explode[1] == 'index_action'?'index_action':$this->_explode[1]);
		$this->_action = $ac;
	}

	private function setParams() {
		unset($this->_explode[0]);
		unset($this->_explode[1]);

		if (end($this->_explode) == null) {
			array_pop($this->_explode);
		}

		$i = 0;
		if (!empty($this->_explode)) {
			foreach ($this->_explode as $val) {
				if ($i%2 == 0) {// %= indice de 2
					$ind[] = $val;
				} else {
					$value[] = $val;
				}
				$i++;
			}
		} else {
			$ind   = array();
			$value = array();
		}

		if (count($ind) == count($value) && !empty($ind) && !empty($value)) {
			$this->_params = array_combine($ind, $value);
		} else {
			$this->_params = array();
		}
	}

	public function getParam($name = null) {
		if ($name != null) {
			return $this->_params[$name];
		} else {
			return $this->_params;
		}

		return $this->_params[$name];
	}

	public function run() {
		$controller_path = CONTROLLERS.$this->_controller.'Controller.php';
		if (!file_exists($controller_path)) {
			die('Houve um erro. O Controller '.$controller_path.' nao existe.');
		}

		require_once ($controller_path);
		$app = new $this->_controller();

		if (!method_exists($app, $this->_action)) {
			die('Houve um erro. A Action'.$this->$_action.' não existe.');
		}

		$action = $this->_action;
		$app->$action();
	}
}
?>