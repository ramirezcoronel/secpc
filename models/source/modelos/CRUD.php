<?php 

    class modelosCRUD extends Model {

        public function __construct() {
            parent::__construct();
        }

        function insert ($data) {

            try{
              $query = $this->db->connect()->prepare('INSERT INTO modelos (idmodelo, nommodelo, estatusmodelo, idmarca) VALUES(:idmodelo, :nommodelo, :estatusmodelo, :idmarca)');
      
              $query->execute(['idmodelo'=>$data['idmodelo'], 'nommodelo'=>$data['nommodelo'],  'estatusmodelo'=>$data['estatusmodelo'], 'idmarca'=>$data['idmarca']]);
              
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
                $query = $this->db->connect()->prepare('SELECT * FROM modelos WHERE idmodelo = :id');
                $query->execute(['id'=>$id]);
              }else {
      
               $query = $this->db->connect()->query('SELECT * FROM modelos');
              }
      
              while($row = $query->fetch()){
                $item = new ModelosClass();
                
                $item->setId($row['idmodelo']);
                $item->setMarca($row['idmarca']);
                $item->setNombre($row['nommodelo']);
                $item->setEstatus($row['estatusmodelo']);
      
                array_push($items, $item);
              }
              return $items;
            } catch (PDOException $e) {
              return [];
            }
          }
      
          public function drop ($id) {
            try{
                $query = $this->db->connect()->prepare('DELETE FROM modelos WHERE idmodelo = :id');
      
                $query->execute(['id'=>$id]);
                
                return true;
              } catch(PDOException $e){
                echo $e->getMessage();
                return false;
              }
          }
      
          function update ($data) {
            try{
                $query = $this->db->connect()->prepare('UPDATE modelos SET nommodelo = :nommodelo, estatusmodelo = :estatusmodelo, idmarca = :idmarca WHERE idmodelo = :idmodelo');
      
                $query->execute(['idmodelo'=>$data['idmodelo'], 'nommodelo'=>$data['nommodelo'],'estatusmodelo'=>$data['estatusmodelo'],'idmarca'=>$data['idmarca']]);
      
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