<?php 
    // Clase de usuario para BD

  class MarcasClass  {
      private $id;
      private $nombre;
      private $estatus;
      

      public function getId() {
        return $this->id;
      }
      public function getNombre() {
        return $this->nombre;
      }
      public function getEstatus() {
        return $this->estatus;
      }
      

      //SETTERS
      public function setId($id) {
        $this->id = $id;
      }
      public function setNombre($nombre) {
        $this->nombre = $nombre;
      }
      
      public function setEstatus($estatus) {
        $this->estatus = $estatus;
      }
  }

?>