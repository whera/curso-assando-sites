<?php 
App::uses('AppModel', 'Model');

class Cidade extends AppModel {
	public $displayField = 'cidade';
	public $order        = array('cidade' => 'ASC');

	public function PegaCidades(){

		$params = array(
			'fields' => array('Cidade.cidade', 'Cidade.inicio', 'Cidade.fim', 'Cidade.slug'),
			'conditions' => array( 'Cidade.ativo' => 'T')
		);
		return $this->find('all', $params);


	}

}

?>