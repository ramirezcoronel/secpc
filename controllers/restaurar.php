<?php
class restaurar extends Controller {


    public function __construct() {
        parent::__construct();
          
       if ( isset( $_POST['ingresar'] ) ){

          $nombre = ($_POST['usuario'] !== "") ? $_POST['usuario'] : NULL;
          $cedula = ($_POST['cedula'] !== "") ? $_POST['cedula'] : NULL;

          $this->loadModel('restaurar');

          if($this->verificacion( $nombre, $cedula )) {
            session_start();
            $_SESSION['restaurarUsuario'] = $nombre;
            header('location:'. constant('URL').'restaurar/recuperar');
          }
        }

    } 

    public function load ($metodo, $param = null) {

    $ruta = 'source/restaurar/'.$metodo.'.php';

    require_once $ruta;
  }


    public function recuperar () {

      $this->view->render('restaurar/restaurar');
    }

    public function render () {
        $this->view->render('restaurar/index');
    }

    //Chequear si existe el usuario;
    public function verificacion( $nombre, $cedula ) {

      if ( $this->model->usuarioExiste($nombre, $cedula) ) {
 
        return true;
      } else {
        return false; 
      }
    }

    public function actualizar() {
       if(isset($_POST['btn'])){
      $password1    = ($_POST['password1'] !== "") ? $_POST['password1'] : NULL ;
      if($this->model->cambiar($password1)){

        session_unset();
        session_destroy();

        $this->view->mensaje = 'Cambio de contraseña efectuado con exito.';
        $this->view->render('login/index');

      }
      else{
        $this->view->mensaje = 'No se pudo realizar el cambio de contraseña.';
        $this->view->render('login/index');
      }


      }
    }
  }

?>