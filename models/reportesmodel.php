<?php
 
  require 'libs/classes/partes.class.php';
  require 'libs/classes/modelos.class.php';



class ReportesModel extends Model {

    function __construct() {
        parent::__construct();
    }

     function getModelos ($id = null) {
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
          $item->setNombre($row['nommodelo']);
          $item->setEstatus($row['estatusmodelo']);
          $item->setMarca($row['idmarca']);

          array_push($items, $item);
        }
        return $items;
      } catch (PDOException $e) {
        return [];
      }
    }

    }
    

?>