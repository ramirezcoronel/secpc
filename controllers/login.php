<?php
class Login extends Controller {


    public function __construct() {
        parent::__construct();

        if ( isset( $_POST['usuario'] ) && $_POST['usuario'] !== ""){

          $usuario = ($_POST['usuario'] !== "") ? $_POST['usuario'] : NULL;
          $contrasena = ($_POST['contrasena'] !== "") ? $_POST['contrasena'] : NULL;

          $this->loadModel('login');

          var_dump($this);

          if($this->verificacion( $usuario, $contrasena )) {
            header('location:'. constant('URL'));
            echo constant('URL');
          }
        } 
        
    }

    public function render () {
        $this->view->render('login/index');
    }

    //Chequear si existe el usuario;
    public function verificacion( $username, $passUsuario ) {
      
      if ( $this->model->usuarioExiste($username, $passUsuario) ) {
        echo 'correcto';
        $this->setUsuarioActual( $_POST['usuario'] );
        return true;
      } else {
         $this->view->mensaje = 'Datos incorrectos.';
        return false; 
      }
    }

    //asignar valores a la variable de sesion;
    public function setUsuarioActual($usuario) {
        $_SESSION['usuario'] = $usuario;

      }
}

?>