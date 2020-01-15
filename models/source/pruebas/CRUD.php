<?php

  class pruebasCRUD extends Model{

    function __construct() {
      parent::__construct();
    }

    /**********************************************************************
									GET
	**********************************************************************/
    function get ($prueba = null) {
      $items = [];
      try {
         if (isset($prueba) ) {
          $query = $this->db->connect()->prepare('SELECT * FROM pruebas WHERE codprueba = :prueba');
          $query->execute(['prueba'=>$prueba]);
        } else {
          $query = $this->db->connect()->query('SELECT * FROM pruebas');
        }

        while($row = $query->fetch()){
          $item = new StressingClass();
          
          $item->setCod($row['codprueba']);
          $item->setNombre($row['nomprueba']);
          $item->setDes($row['desprueba']);
          $item->setDuracin($row['durprueba']);

          array_push($items, $item);
        }
        return $items;
      } catch (PDOException $e) {
        return [];
      }
    }

  }
?>