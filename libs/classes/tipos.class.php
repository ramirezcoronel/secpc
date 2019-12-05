<?php 
    // Clase de usuario para BD

  class TiposClass  {
      private $codtipoequipo;
      private $nomtipoequipo;
      private $estatustipoequipo;
      

      public function getCodigo() {
        return $this->codtipoequipo;
      }
      public function getNombre() {
        return $this->nomtipoequipo;
      }
      public function getEstatus() {
        return $this->estatustipoequipo;
      }
      

      //SETTERS
      public function setCodigo($id) {
        $this->codtipoequipo = $id;
      }
      public function setNombre($nombre) {
        $this->nomtipoequipo = $nombre;
      }
      
      public function setEstatus($estatus) {
        $this->estatustipoequipo = $estatus;
      }
  }

?>