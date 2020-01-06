<?php

  class partesequiposCRUD extends Model{

    function __construct() {
      parent::__construct();
    }

    function insert ($data) {
    
        try{
          $query = $this->db->connect()->prepare('INSERT INTO partesequipos (codequipo, codpartes, cantidadparteequipo, estatusparteequipo) VALUES(:codequipo, :codpartes, :cantidadparteequipo,:estatusparteequipo)');

          $query->execute(['codequipo'=>$data['codequipo'], 'codpartes'=>$data['codpartes'],  'cantidadparteequipo'=>$data['cantidadparteequipo'], 'estatusparteequipo'=>$data['estatusparteequipo']]);
          
          return true;
        } catch(PDOException $e){
          $this->error = $e->getMessage();
          return false;
        }


      }

    public function getError () {
      return $this->error;
    }
  }
?>