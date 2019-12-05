<?php 
    // Clase de usuario para BD

  class ModelosClass  {
      private $idmodelo;
      private $nommodelo;
      private $estatusmodelo;
      private $idmarca;
      

      public function getId() {
        return $this->idmodelo;
      }
      public function getNombre() {
        return $this->nommodelo;
      }
      public function getEstatus() {
        return $this->estatusmodelo;
      }
      public function get() {
        return $this->idmarca;
      }
      

      //SETTERS
      public function setId($id) {
        $this->idmodelo = $id;
      }
      public function setNombre($nombre) {
        $this->nommodelo = $nombre;
      }
      
      public function setEstatus($estatus) {
        $this->estatusmodelo = $estatus;
      }

      public function setMarca($idmarca) {
        $this->idmarca = $idmarca; 
      }
  }

?>