
<?php

  class Controller {

    function __construct() {
      $this->view = new View();
    }

    function loadModel($model, $param = null) {
      $url = 'models/' . $model. 'model.php';

      if( file_exists($url) ) {
        require_once $url;
        $modelName = $model .'Model';
        $this->model = new $modelName();

      }
    }

    //Conigurar usuario y devolver datos a la vista;
    public function setUsuario ($username) {
      $query = $this->model->db->connect()->prepare('SELECT * FROM usuariossistema WHERE username = :username');
      $query->execute(['username' => $username]);

      foreach($query as $usuarioActual) {
        
        $this->nombreusuario = $usuarioActual['nombreusuario'];
        $this->apellidousuario = $usuarioActual['apellidousuario'];
        $this->username = $usuarioActual['username'];
        $this->cedulausuario = $usuarioActual['cedulausuario'];
        $this->estatususuario = $usuarioActual['estatususuario'];
        $this->rolusuario = $usuarioActual['rolusuario'];
      }
    }

  }

?>