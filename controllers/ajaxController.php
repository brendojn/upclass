<?php
class ajaxController extends controller
{
	public function __construct(){
		$u = new Usuarios();
		$u->verificarLogin();
		
	}

	public function add_friend(){
		if(isset($_POST['id']) && !empty($_POST['id'])){
			$id = addslashes($_POST['id']);

			$a = new Amizades();
			$a->addAmigo($_SESSION['lgclass'], $id);
		}
	}
	public function aceitar_friend(){
		if(isset($_POST['id']) && !empty($_POST['id'])){
			$id = addslashes($_POST['id']);

			$a = new Amizades();
			$a->aceitarAmigo($_SESSION['lgclass'], $id);
		}
	}

	public function comentar(){
		 if(isset($_POST['id']) && !empty($_POST['id'])) {
            $id = addslashes($_POST['id']);
            $id_usuario = $_SESSION['lgclass'];
            $txt = addslashes($_POST['txt']);
            $p = new Postagens();

            if(!empty($txt)) {
                $p->addComentario($id, $id_usuario, $txt);
            }
        }
    }

}
?>