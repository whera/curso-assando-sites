<?php
class Palestra extends AppModel{
	public $belongsTo = array('Palestrante');

	public function setPalestraCidade($strCidade){
		$params = array(
			'fields' => array('Palestra.titulo', 'Palestra.data', 'Palestrante.nome', 'Palestrante.site'),
			'conditions' => array( 'Palestra.ativo' => 'T', 'Palestra.cidade' => $strCidade)
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