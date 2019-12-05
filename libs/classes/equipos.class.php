<?php 
    // Clase de usuario para BD

  class EquiposClass  {
      private $codequipo;
      private $nomequipo;
      private $estatusequipo;
      private $codTipo;
      

      public function getCodigo() {
        return $this->codequipo;
      }
      public function getNombre() {
        return $this->nomequipo;
      }
      public function getEstatus() {
        return $this->estatusequipo;
      }

      public function getCodTipo() {
        return $this->codTipo;
      }
      

      //SETTERS
      public function setCodigo($id) {
        $this->codequipo = $id;
      }
      public function setNombre($nombre) {
        $this->nomequipo = $nombre;
      }
      
      public function setEstatus($estatus) {
        $this->estatusequipo = $estatus;
      }
      public function setCodTipo($tipo) {
        $this->codTipo = $tipo;
      }
  }

?>