<?php

  class LoginModel extends Model {

    function __construct() {
        parent::__construct();
    }

    function usuarioExiste ( $username, $passUsuario ) {

      try {
        $query = $this->db->connect()->prepare('SELECT * FROM usuariossistema WHERE username = :username AND passUsuario = :passUsuario');
        $query->execute(['username' => $username, 'passUsuario' => $passUsuario]);

        return $query->rowCount();
      } catch(PDOException $e) {
        return false;
      }

    }
  }

?>