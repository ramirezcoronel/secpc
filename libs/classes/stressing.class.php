<?php 

  class StressingClass  {
      private $codprueba;
      private $nomprueba;
      private $desprueba;
      private $durprueba;

      public function getCod() {
        return $this->codprueba;
      }
      public function getNombre() {
        return $this->nomprueba;
      }
      public function getDes() {
        return $this->desprueba;
      }

      public function getDuracin() {
        return $this->estatusprueba;
      }

      //SETTERS
      public function setCod($codprueba) {
        $this->codprueba = $codprueba;
      }
      public function setNombre($nomprueba) {
        $this->nomprueba = $nomprueba;
      }
      public function setDes($desprueba) {
        $this->desprueba = $desprueba;
      }

      public function setDuracin($estatusprueba) {
        $this->estatusprueba = $estatusprueba;
      }
 }
?>