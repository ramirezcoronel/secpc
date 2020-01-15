<?php  
class Soporte extends Controller{
	public function __construct(){
		parent::__construct();
	}

	public function render(){
		  $this->view->render('soporte/index');
	}

	public function load ($metodo, $param = null) {
	    $ruta = 'source/soporte/'.$metodo.'.php';

	    require_once $ruta;
  }
}
?>