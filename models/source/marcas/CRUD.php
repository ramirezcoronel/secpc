<?php

  class marcasCRUD extends Model{

    function __construct() {
      parent::__construct();
    }
    
    function insert ($data) {
        try{
            $query = $this->db->connect()->prepare('INSERT INTO marca (id,nombre,estatus ) VALUES(:id, :nombre, :estatus)');
  
            $query->execute(['id'=>$data['id'], 'nombre'=>$data['nombre'],'estatus'=>$data['estatus']]);
            
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
            $query = $this->db->connect()->prepare('SELECT * FROM marca WHERE id = :id');
            $query->execute(['id'=>$id]);
          }else {
  
           $query = $this->db->connect()->query('SELECT * FROM marca');
          }
  
          while($row = $query->fetch()){
            $item = new MarcasClass();
            
            $item->setId($row['id']);
            $item->setNombre($row['nombre']);
            $item->setEstatus($row['estatus']);
  
            array_push($items, $item);
          }
          return $items;
        } catch (PDOException $e) {
          return [];
        }
      }
  
      function delete ($id) {
        try{
            $query = $this->db->connect()->prepare('DELETE FROM marca WHERE id = :id');
  
            $query->execute(['id'=>$id]);
            
            return true;
          } catch(PDOException $e){
            echo $e->getMessage();
            return false;
          }
      }
  
      function update ($data) {
        try{
            $query = $this->db->connect()->prepare('UPDATE marca SET nombre = :nombre, estatus = :estatus WHERE id = :id');
  
            $query->execute(['id'=>$data['id'], 'nombre'=>$data['nombre'],'estatus'=>$data['estatus']]);
            
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