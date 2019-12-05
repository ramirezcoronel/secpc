<?php  
class Inventario extends Controller {
	public function __construct(){
		parent::__construct();
	}

	public function render(){
	  $this->view->mensaje = 'Gestionar Inventario';
	  $this->view->render('inventario/index');
	}


	public function load ($metodo, $param = null) {

		$ruta = 'inventario/'.$metodo.'.php';

		require_once $ruta;
	}
  }
?>