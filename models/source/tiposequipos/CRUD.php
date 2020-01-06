<?php

  class tiposequiposCRUD extends Model{

    function __construct() {
      parent::__construct();
    }

    function insert ($data) {
      try{
        $query = $this->db->connect()->prepare('INSERT INTO tiposequipos (codtipoequipo, nomtipoequipo  , estatustipoequipo) VALUES(:codtipoequipo, :nomtipoequipo, :estatustipoequipo)');

        $query->execute(['codtipoequipo'=>$data['codtipoequipo'], 'nomtipoequipo'=>$data['nomtipoequipo'],  'estatustipoequipo'=>$data['estatustipoequipo']]);
        
        return true;
      } catch(PDOException $e){
        $this->error = $e->getMessage();
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

    function update ($data) {
      try{
          $query = $this->db->connect()->prepare('UPDATE tiposequipos SET nomtipoequipo = :nomtipoequipo WHERE codtipoequipo = :codtipoequipo');

          $query->execute(['codtipoequipo'=>$data['codtipoequipo'],  'nomtipoequipo'=>$data['nomequipo']]);

          return true;
        } catch(PDOException $e){
          echo $e->getMessage();
          return false;
        }
    }

     public function drop ($codtipoequipo) {
      try{
          $query = $this->db->connect()->prepare('DELETE FROM tiposequipos WHERE codtipoequipo = :codtipoequipo');

          $query->execute(['codtipoequipo'=>$codtipoequipo]);
          
          return true;
        } catch(PDOException $e){
          echo $e->getMessage();
          return false;
        }
    }
    public function getError () {
      return $this->error;
    }
  }
?>