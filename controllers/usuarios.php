<?php 

class Usuarios extends Controller{

  function __construct () {
    parent::__construct();
  }

  function render () {
    $this->view->mensaje = 'Esta pagina controla los usuarios';
    
    $usuarios = $this->model->get();
    $this->view->usuarios = $usuarios;
    
    $this->view->render('usuarios/index');
  }

  public function load ($metodo, $param = null) {

    $ruta = 'source/usuarios/'.$metodo.'.php';

    require_once $ruta;
  }

}

?>