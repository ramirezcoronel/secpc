<?php  

class Ensamble extends Controller{
	public function __construct(){
		parent::__construct();
	}

	public function render(){
		$productos =  $this->model->getProductos();
		$this->view->productos = $productos;

		$this->view->render('ensamble/index');
	}

  public function load ($metodo, $param = null) {

    $ruta = 'source/ensamble/'.$metodo.'.php';

    require_once $ruta;
  }
		
}
?>
