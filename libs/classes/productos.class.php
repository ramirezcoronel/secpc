<?php 
    // Clase de usuario para BD

  class ProductosClass  {
      private $codigo;
      private $fecha;
      private $codigoEquipo;
      private $estatus;
      

      public function getCodigo() {
        return $this->codigo;
      }
      public function getFecha() {
        return $this->fecha;
      }
      public function getCodigoEquipo() {
        return $this->codigoEquipo;
      }

      public function getEstatus() {
        return $this->estatus;
      }
      

      //SETTERS
      public function setCodigo($id) {
        $this->codigo = $id;
      }
      public function setFecha($nombre) {
        $this->fecha = $nombre;
      }
      
      public function setCodigoEquipo($data) {
        $this->codigoEquipo = $data;
      }

      public function setEstatus ($data) {
        $this->estatus = $data;
      } 
  }

?>