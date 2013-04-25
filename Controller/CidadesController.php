<?php
App::uses('AppController', 'Controller');

class CidadesController extends AppController {

	public function index() {

		//print_r($this->Cidade->PegaCidades());

		$cidades = $this->Cidade->PegaCidades();
		if( count($cidades) > 0 ){
			$this->set('cidades', $cidades);
		}
		else{
			$this->redirect('/');
		}
	}


	public function view($strCidade){
	}
}

?>