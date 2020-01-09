<?php 
    // Clase de EjemplaresParte para BD

  class ejemplaresParteClass  {
      private $codigo;
      private $serialFabri;
      private $ubicacion;
      private $estatus;
      private $codparte;
      private $codproducto;
    
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
     
  }

?>