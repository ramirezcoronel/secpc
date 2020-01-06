<?php

  class equiposCRUD extends Model{

    function __construct() {
      parent::__construct();
    }

    /**********************************************************************
									GET
	**********************************************************************/
    function get ($id = null) {
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
        $this->error = $e->getMessage();
        return [];
      }
    }


    /**********************************************************************
                  GET  CODIGO
  **********************************************************************/

    public function getCodigo ($id = null) {
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
        $this->error = $e->getMessage();
        return [];
      }
    }

    /**********************************************************************
									INSERT
	**********************************************************************/
    function insert ($data) {
	
      try{
        $query = $this->db->connect()->prepare('INSERT INTO equipos (codtipoequipo, codequipo	, nomequipo, estatusequipo) VALUES(:codtipoequipo, :codequipo, :nomequipo,:estatusequipo)');

        $query->execute(['codtipoequipo'=>$data['codtipoequipo'], 'codequipo'=>$data['codequipo'],  'nomequipo'=>$data['nomequipo'], 'estatusequipo'=>$data['estatusequipo']]);
        
        return true;
      } catch(PDOException $e){

      $this->error = $e->getMessage();
        return false;
      }


    }			

	/**********************************************************************
									UPDATE
	**********************************************************************/
	function update($data) {
		try{
			$query = $this->db->connect()->prepare('UPDATE equipos SET codtipoequipo = :codtipoequipo, nomequipo = :nomequipo WHERE codequipo = :codequipo');

			$query->execute(['codtipoequipo'=>$data['codtipoequipo'], 'codequipo'=>$data['codequipo'],  'nomequipo'=>$data['nomequipo']]);

			return true;
		} catch(PDOException $e){
			$this->error = $e->getMessage();
			return false;
		}
	}
    
    
    /**********************************************************************
									DELETE
	**********************************************************************/
    public function delete ($codequipo) {
      try{
          $query = $this->db->connect()->prepare('DELETE FROM equipos WHERE codequipo = :codequipo');

          $query->execute(['codequipo'=>$codequipo]);
          
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