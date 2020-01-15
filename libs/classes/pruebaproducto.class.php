<?php 
  class pruebaProductoClass  {
      private $numpruebaproducto;
      private $resultado;
      private $fecha;
    
      //GETTERS
      public function setnumpruebaproducto($id) {
        $this->numpruebaproducto = $id;
      }

      public function setResultado($id) {
        $this->resultado = $id;
      }

      public function setFecha($id) {
        $this->fecha = $id;
      }

      //GETTERS

      public function getNum() {
        return $this->numpruebaproducto;
      }

      public function getResultado() {
        return $this->resultado;
      }

      public function getFecha() {
        return $this->fecha;
      }
         
  }

?>