<?php  
class Equipos extends Controller{
	public function __construct(){
		parent::__construct();
	}

	public function render(){
	  $this->view->mensaje = 'Gestionar Equipos';
	  $this->view->render('equipos/index');
	}

  public function load ($metodo, $param = null) {

    $ruta = 'source/equipos/'.$metodo.'.php';

    require_once $ruta;
  }
}
?>