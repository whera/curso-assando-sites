<?php
class InscricoesController extends AppController {

	// Definimos qual Model usar
	public $uses = array('Inscricao');

	public function index(){

		$isPost = $this->request->is('post');

		// Se é um POST e recebemos dados do formulário
		if ($isPost && !empty($this->request->data)) {
			if ($this->Inscricao->save($this->request->data)) {
				$this->redirect('/inscreva-se/sucesso');
			}

		}

		$this->set('title_for_layout', "Inscreva-se!");

		$arr_estados = $this->Inscricao->estados();
		$this->set("estados", $arr_estados);
	}
}

?>