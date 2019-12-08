<?php 
    // Clase de usuario para BD

  class MovimientosClass  {
      private $num;
      private $tipo;
      private $fecha;
      private $hora;
      private $estatus;
      

      public function getNumero() {
        return $this->num;
      }
       public function getTipo() {
        return $this->tipo;
      }

      public function getFecha() {
        return $this->fecha;
      }
       public function getHora() {
        return $this->hora;
      }
      public function getEstatus() {
        return $this->estatus;
      }

      

      //SETTERS
      public function setNumero($num) {
        $this->num = $num;
      }
      public function setTipo($tipo) {
        $this->tipo = $tipo;
      }

      public function setFecha($fecha) {
         $this->fecha = $fecha;
      }
       public function setHora($hora) {
         $this->hora = $hora;
      }
      public function setEstatus($estatus) {
        $this->estatus = $estatus;
     }
  }

?>