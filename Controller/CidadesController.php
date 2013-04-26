<?php
App::uses('AppController', 'Controller');

class CidadesController extends AppController {

	public function index() {

		$cidades = $this->Cidade->PegaCidades();
		if( count($cidades) > 0 ){
			$this->set('cidades', $cidades);
		}
		else{
			$this->redirect('/');
		}
	}


	public function view($strCidade){
		$this->loadModel('Palestra');

		$palestras = $this->Palestra->setPalestraCidade($strCidade);

		if($palestras){
			$this->set('palestras', $palestras);
		}
		else{
			$this->redirect('/');
		}



	}
}

?>