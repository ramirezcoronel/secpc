<?php  
class Pruebas extends Controller{
	public function __construct(){
		parent::__construct();
	}

	public function render(){
	  $this->view->mensaje = 'Prueba';

    $stressing = $this->model->get();
    $this->view->stressing = $stressing;
    
	  $this->view->render('pruebas/index');
  
	}

  public function load ($metodo, $param = null) {

    $ruta = 'source/pruebas/'.$metodo.'.php';

    require_once $ruta;
  }
  
}
?>