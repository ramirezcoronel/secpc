<?php

  require 'libs/classes/usuarios.class.php';

  class RecuperarModel extends Model {

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
        $query = $this->db->connect()->prepare(' UPDATE usuariosusuario SET contrasenausuario = :password WHERE nombreusuario = nombre;');
        
        $query->execute(['contrasena' => $password, 'nombre' => $_SESSION['restaurarUsuario']]);

        echo "bien";
      } catch (PDOException $e) {
        var_dump($password);
        echo "mal:".$e;
        return false;
      }

    }
}

?>