<?php
App::uses('AppController', 'Controller');

class PalestrantesController extends AppController {

	public $helpers = array('Whera');

	public function index(){

		$palestrantes = $this->Palestrante->ListaPalestrantes();

		if($palestrantes){
			$this->set('palestrantes', $palestrantes);
		}
		else{
			$this->redirect('/');
		}

	}

	public function view($palestrante){
		$palestrante = $this->Palestrante->PegaPalestrante($palestrante);

		if($palestrantes){
			$this->set('palestrantes', $palestrantes);
		}
		else{
			$this->redirect('/');
		}
	}
}
?>