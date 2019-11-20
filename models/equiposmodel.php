<?php

  require 'libs/classes/tipos.class.php';
  require 'libs/classes/equipos.class.php';
  require 'libs/classes/partes.class.php';

  class EquiposModel extends Model {

    function __construct() {
        parent::__construct();
    }


/****************************************************************
                
                            CRUD DE EQUIPOS

****************************************************************/
     
	function insert ($data) {
		
	      try{
	        $query = $this->db->connect()->prepare('INSERT INTO equipos (codtipoequipo, codequipo	, nomequipo, estatusequipo) VALUES(:codtipoequipo, :codequipo, :nomequipo,:estatusequipo)');

	        $query->execute(['codtipoequipo'=>$data['codtipoequipo'], 'codequipo'=>$data['codequipo'],  'nomequipo'=>$data['nomequipo'], 'estatusequipo'=>$data['estatusequipo']]);
	        
	        return true;
	      } catch(PDOException $e){

          echo $e->getMessage();
	        return false;
	      }


	    }

      function updateEquipo($data) {
        try{
          $query = $this->db->connect()->prepare('UPDATE equipos SET codtipoequipo = :codtipoequipo, nomequipo = :nomequipo WHERE codequipo = :codequipo');

          $query->execute(['codtipoequipo'=>$data['codtipoequipo'], 'codequipo'=>$data['codequipo'],  'nomequipo'=>$data['nomequipo']]);

          return true;
        } catch(PDOException $e){
          echo $e->getMessage();
          return false;
        }
      }
    
    function getEquipos ($id = null) {
      $items = [];
      try {
        if ( isset($id) ) {
          $query = $this->db->connect()->prepare('SELECT * FROM equipos WHERE codequipo = :id');
          $query->execute(['id'=>$id]);
        } else {
          $query = $this->db->connect()->query('SELECT * FROM equipos');
        }

        while($row = $query->fetch()){
          $item = new EquiposClass();
          
          $item->setCodigo($row['codequipo']);
          $item->setNombre($row['nomequipo']);
          $item->setEstatus($row['estatusequipo']);
          $item->setCodTipo($row['codtipoequipo']);

          array_push($items, $item);
        }
        return $items;
      } catch (PDOException $e) {
        echo $e->getMessage();
        return [];
      }
    }

    

    public function deleteEquipo ($codequipo) {
      try{
          $query = $this->db->connect()->prepare('DELETE FROM equipos WHERE codequipo = :codequipo');

          $query->execute(['codequipo'=>$codequipo]);
          
          return true;
        } catch(PDOException $e){
          echo $e->getMessage();
          return false;
        }
    }

    /****************************************************************
                
                            CRUD DE TIPOS

****************************************************************/
     
    function insertTipos ($data) {
      try{
        $query = $this->db->connect()->prepare('INSERT INTO tiposequipos (codtipoequipo, nomtipoequipo  , estatustipoequipo) VALUES(:codtipoequipo, :nomtipoequipo, :estatustipoequipo)');

        $query->execute(['codtipoequipo'=>$data['codtipoequipo'], 'nomtipoequipo'=>$data['nomtipoequipo'],  'estatustipoequipo'=>$data['estatustipoequipo']]);
        
        return true;
      } catch(PDOException $e){
        
        return false;
      }


    }
    function get ($id = null) {
      $items = [];
      try {
        if ( isset($id) ) {
          $query = $this->db->connect()->prepare('SELECT * FROM tiposequipos WHERE codtipoequipo = :id');
          $query->execute(['id'=>$id]);
        } else {
          $query = $this->db->connect()->query('SELECT * FROM tiposequipos');
        }

        while($row = $query->fetch()){
          $item = new TiposClass();
          
          $item->setCodigo($row['codtipoequipo']);
          $item->setNombre($row['nomtipoequipo']);
          $item->setEstatus($row['estatustipoequipo']);

          array_push($items, $item);
        }
        return $items;
      } catch (PDOException $e) {
        return [];
      }
    }

    function updateTipoEquipo ($data) {
      try{
          $query = $this->db->connect()->prepare('UPDATE tiposequipos SET nomtipoequipo = :nomtipoequipo WHERE codtipoequipo = :codtipoequipo');

          $query->execute(['codtipoequipo'=>$data['codtipoequipo'],  'nomequipo'=>$data['nomequipo']]);

          return true;
        } catch(PDOException $e){
          echo $e->getMessage();
          return false;
        }
    }

    //PARTES

    function insertPartesEquipo ($data) {
    
        try{
          $query = $this->db->connect()->prepare('INSERT INTO partesequipos (codequipo, codpartes, cantidadparteequipo, estatusparteequipo) VALUES(:codequipo, :codpartes, :cantidadparteequipo,:estatusparteequipo)');

          $query->execute(['codequipo'=>$data['codequipo'], 'codpartes'=>$data['codpartes'],  'cantidadparteequipo'=>$data['cantidadparteequipo'], 'estatusparteequipo'=>$data['estatusparteequipo']]);
          
          return true;
        } catch(PDOException $e){
          
          return false;
        }


      }

    function getPartes () {
      $items = [];
      try {
        $query = $this->db->connect()->query('SELECT * FROM partes');

        while($row = $query->fetch()){
          $item = new PartesClass();

          $item->setCod($row['codpartes']);
          $item->setSerializable($row['serializable']);
          $item->setStockAct($row['stockactual']);
          $item->setStockMax($row['stockmaximo']);
          $item->setStockMin($row['stockminimo']);
          $item->setPuntoRe($row['puntoreorden']);
          $item->setEstatus($row['estatus']);
          $item->setIdModelo($row['idmodelo']);

          array_push($items, $item);
        }
        return $items;
      } catch (PDOException $e) {
        return [];
      }
    }
  }

?>