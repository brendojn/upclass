<?php
class homeController extends controller
{
	public function __construct(){
		$u = new Usuarios();
		$u->verificarLogin();
		
	}

	public function index()
	{
		$u = new Usuarios();
		$p = new Postagens();
		$a = new Amizades();
		$g = new Grupos();

		$dados['usuario_nome'] = $u->getNome($_SESSION['lgclass']);
		$dados['usuario_disciplina'] = $u->getDisciplina($_SESSION['lgclass']);
		$dados['usuario_instituicao'] = $u->getInstituicao($_SESSION['lgclass']);

		

		if(isset($_POST['post']) && !empty($_POST['post'])){
			$postmsg = addslashes($_POST['post']);
			$foto = array();
			$file = array();

			if (isset($_FILES['foto']) && !empty($_FILES['foto'])){
				$foto = $_FILES['foto'];
			}
			
			if (isset($_FILES['file']) && !empty($_FILES['file'])){
				$file = $_FILES['file'];
			}
		
			
			$p->addPostagens($postmsg, $foto, $file);
		}

		if(isset($_POST['grupo']) && !empty($_POST['grupo'])){

			$grupo = addslashes($_POST['grupo']);

			$id_grupo = $g->criar($grupo);
			header("Location: ".BASE."grupos/abrir/".$id_grupo);
		}


		$dados['sugestoes'] = $a->getSugestoes(3);
		$dados['requisicoes'] = $a->getRequisicoes();

		$dados['ultimosposts'] = $p->getUltimosPosts(3);
		$dados['acervo'] = $p->getAcervo();
		$dados['grupos'] = $g->getGrupos();

		$this->loadTemplate('home', $dados);
	}

	
}
?>