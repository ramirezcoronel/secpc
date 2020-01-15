<?php  
class Soporte extends Controller{
	public function __construct(){
		parent::__construct();
	}

	public function render(){
		$soportes = $this->model->soporte->get();
		$this->view->soportes = $soportes;

		  $this->view->render('soporte/index');
	}

	public function load ($metodo, $param = null) {
	    $ruta = 'source/soporte/'.$metodo.'.php';

	    require_once $ruta;
  }
}
?>