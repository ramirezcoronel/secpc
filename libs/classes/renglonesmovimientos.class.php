<?php 
    // Clase de EjemplaresParte para BD

  class RenglonesMovimientosClass  {
      private $cantidad;
      private $serial;
      private $estatus;
      private $codparte;
    
      //SETTERS

      public function setSerial($data) {
        $this->serial = $data;
      }

      public function setEstatus($data) {
        $this->estatus = $data;
      }
      public function setCodParte($data) {
        $this->codparte = $data;
      }

      public function setCantidad($data) {
        $this->cantidad = $data;
      }

      //GETTERS 

       public function getCodParte() {
        return $this->codparte;
      }

      public function getCantidad() {
        return $this->cantidad;
      }
      
      public function getSerial() {
        return $this->serial;
      }
  }

?>