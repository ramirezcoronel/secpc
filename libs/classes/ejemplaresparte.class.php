<?php 
    // Clase de EjemplaresParte para BD

  class ejemplaresParteClass  {
      private $codigo;
      private $serialFabri;
      private $ubicacion;
      private $estatus;
      private $codparte;
      private $codproducto;
      private $cantidad;
    
      //SETTERS
      public function setCodigo($id) {
        $this->codigo = $id;
      }
      public function setSerial($data) {
        $this->serialFabri = $data;
      }
      
      public function setUbicacion($data) {
        $this->ubicacion = $data;
      }

      public function setEstatus($data) {
        $this->estatus = $data;
      }
      public function setCodParte($data) {
        $this->codparte = $data;
      }

      public function setCodProducto($data) {
        $this->codproducto = $data;
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
     
  }

?>