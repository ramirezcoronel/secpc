<?php

  require 'libs/classes/usuarios.class.php';

  class RestaurarModel extends Model {

    function __construct() {
        parent::__construct();
    }

    function usuarioExiste ($nombre, $cedula) {
 
      try {
        $query = $this->db->connect()->prepare('SELECT * FROM usuariossistema WHERE username = :nombre AND cedulausuario = :cedula');

         $query->execute(['nombre' => $nombre, 'cedula' => $cedula]);

         if ( $query->rowCount() ) {
          return true;

         } else {
          return false;
         }

      } catch (PDOException $e) {
        return false;
      }
    }
    function cambiar($password){
       try {
        $query = $this->db->connect()->prepare(' UPDATE usuariossistema SET passusuario = :password WHERE username = :nombre');
        
        $query->execute(['password' => $password, 'nombre' => $_SESSION['restaurarUsuario']]);

        return true;
      } catch (PDOException $e) {
        echo "Error en: ".$e;
        return false;
      }

    }
}

?>