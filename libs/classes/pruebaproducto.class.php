<?php 
  class pruebaProductoClass  {
      private $numpruebaproducto;
      private $resultpruebaproducto;
      private $fechapruebaproducto;
      private $horaPruebaProducto;
      private $obserbPruebaProducto;
      private $codProductoPrueba;
    
      //GETTERS
      public function setnumpruebaproducto($id) {
        $this->numpruebaproducto = $id;
      }

      public function setcodproducto($id) {
        $this->codProductoPrueba = $id;
      }

      public function setFecha($id) {
        $this->fechapruebaproducto = $id;
      }

      public function setHora($id) {
        $this->horaPruebaProducto = $id;
      }

      public function setResultado($id) {
        $this->resultpruebaproducto = $id;
      }

      public function setobservacion($id) {
        $this->obserbPruebaProducto = $id;
      }


      //GETTERS

      public function getNum() {
        return $this->numpruebaproducto;
      }

      public function getcodproducto() {
        return $this->codProductoPrueba;
      }

      public function getFecha() {
        return $this->fechapruebaproducto;
      }

      public function getHora() {
        return $this->horaPruebaProducto;
      }

      public function getResultado() {
        return $this->resultpruebaproducto;
      }

      public function getObservacion() {
        return $this->obserbPruebaProducto;
      }
      
         
  }

?>