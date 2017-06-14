<?php

class gruposController extends controller
{
	public function __construct(){
		$u = new Usuarios();
		$u->verificarLogin();	
	}
	public function abrir($id_grupo){
		$u = new Usuarios();
		$g = new Grupos();
		$p = new Postagens();

		$dados['usuario_nome'] = $u->getNome($_SESSION['lgclass']);
		$dados['usuario_disciplina'] = $u->getDisciplina($_SESSION['lgclass']);
		$dados['usuario_instituicao'] = $u->getInstituicao($_SESSION['lgclass']);

		$dados['acervo'] = $p->getAcervo();


		$this->loadView('grupos', $dados);


	}

}