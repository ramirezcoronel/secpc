<?php 
    // Clase de usuario para BD

  class UsuariosClass  {
      private $idusuario;
      private $cedulausuario;
      private $nombreusuario;
      private $apellidousuario;
      private $username;
      private $passusuario;
      private $estatususuario;
      private $rolusuario;
      

      public function getId() {
        return $this->idusuario;
      }
      public function getCedula() {
        return $this->cedulausuario;
      }
      public function getNombre() {
        return $this->nombreusuario;
      }
      public function getApellido() {
        return $this->apellidousuario;
      }
      public function getUsername() {
        return $this->username;
      }
      public function getPass() {
        return $this->passusuario;
      }
      public function getEstatus() {
        return $this->estatususuario;
      }
      public function getRol() {
        return $this->rolusuario;
      }

      //SETTERS
      public function setId($id) {
        $this->idusuario = $id;
      }
      public function setNombre($nombre) {
        $this->nombreusuario = $nombre;
      }
      public function setApellido($apellido) {
        $this->apellidousuario = $apellido;
      }
      public function setCedula($cedula) {
        $this->cedulausuario = $cedula;
      }
      public function setUsername($username) {
        $this->username = $username;
      }
      public function setPass($pass) {
        $this->passusuario = $pass;
      }
      public function setEstatus($estatus) {
        $this->estatususuario = $estatus;
      }
      public function setRol($rol) {
        $this->rolusuario = $rol;
      }
  }

?>