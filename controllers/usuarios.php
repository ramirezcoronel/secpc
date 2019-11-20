
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

  function registrarUsuario () {
    
    if(isset($_POST['agregar'])){
      $nombre    = ($_POST['nombre'] !== "") ? $_POST['nombre'] : NULL;
      $apellido = ($_POST['apellido'] !== "") ? $_POST['apellido'] : NULL;
      $username = ($_POST['username'] !== "") ? $_POST['username'] : NULL;
      $rol        = ($_POST['rol'] !== "") ? $_POST['rol'] : NULL;
      $cedula     = ($_POST['cedula'] !== "") ? $_POST['cedula'] : NULL;
      $pass     = ($_POST['pass'] !== "") ? $_POST['pass'] : NULL;
      $estatus     = ($_POST['estatus'] !== "") ? $_POST['estatus'] : NULL;
  
      if ($this->model->insert(['nombreUsuario'=>$nombre, 'apellidoUsuario'=>$apellido, 'passUsuario'=>$pass, 'rolUsuario'=>$rol, 'cedulaUsuario'=>$cedula, 'estatusUsuario'=>$estatus, 'username'=>$username])){
        $this->view->mensaje = 'Usuario agregado exitosamente!.';
      }else{
        $this->view->mensaje = 'Ha ocurrido un error.';
      }
    }else{
      $this->view->mensaje = 'Rellene los campos';
    }

    $this->view->render('usuarios/agregar');
  }

  function eliminarUsuarios() {

    $this->view->mensaje = 'Eliminar Usuario';

    if ( isset($_POST['eliminar']) ) {
      $idDeUsuario = ($_POST['idDeUsuario'] !== "" && $_POST['idDeUsuario'] !== "1") ? $_POST['idDeUsuario'] : NULL;
      if ( $this->model->drop( $idDeUsuario ) ) {
        $this->view->mensaje = 'Usuario eliminado exitosamente';
      } else {
        $this->view->mensaje = 'No se han encontrado usuarios con ese ID';
      }

    }

    $usuarios = $this->model->get();
    $this->view->usuarios = $usuarios;
    
    $this->view->render('usuarios/eliminar');
  }

  public function modificarUsuario () {
    if(isset($_POST['modificarUsuario'])) {

      $nombre    = ($_POST['nombre'] !== "") ? $_POST['nombre'] : NULL;
      $apellido = ($_POST['apellido'] !== "") ? $_POST['apellido'] : NULL;
      $username = ($_POST['username'] !== "") ? $_POST['username'] : NULL;
      $rol        = ($_POST['rol'] !== "") ? $_POST['rol'] : NULL;
      $cedula     = ($_POST['cedula'] !== "") ? $_POST['cedula'] : NULL;
      $pass     = ($_POST['pass'] !== "") ? $_POST['pass'] : NULL;
      $estatus     = ($_POST['estatus'] !== "") ? $_POST['estatus'] : NULL;

      if ($this->model->update(['nombreUsuario'=>$nombre, 'apellidoUsuario'=>$apellido, 'passUsuario'=>$pass, 'rolUsuario'=>$rol, 'estatusUsuario'=>$estatus, 'username'=>$username, 'cedulaUsuario'=>$cedula])){
        $this->view->mensaje = 'Usuario Modificado exitosamente!.';

      }else{
        $this->view->mensaje = 'Ha ocurrido un error.';
      }
      $this->view->render('usuarios/modificar.mensaje');

    } else if ( isset($_POST['modificar']) ) {

      $cedula     = ($_POST['cedula'] !== "") ? $_POST['cedula'] : NULL;

      $usuarios = $this->model->search($cedula);


      if (isset($usuarios)){

        $this->view->usuarios = $usuarios;

        $this->view->render('usuarios/modificar'); 
     } else {
      $this->view->mensaje = 'Usuario No ENcontrado';
      $this->view->render('usuarios/modificar.mensaje');
     }

      
    } else {
      $this->view->mensaje = 'Ingrese Cedula de Usuario A Modificar';
      $this->view->render('usuarios/modificar.consulta');
    }
  }

}

?>