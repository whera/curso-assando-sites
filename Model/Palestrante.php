<?php
App::uses('AppModel', 'Model');

class Palestrante extends AppModel{

	public $order = array('nome' => 'ASC');

	public function ListaPalestrantes(){
		$params = array(
			'fields' => array('Palestrante.nome', 'Palestrante.descricao', 'Palestrante.site')
		);
		$sql = $this->find('all', $params);

		if(count($sql) > 0){
			return $sql;
		}
		else{
			return false;
		}
	}
}
?>