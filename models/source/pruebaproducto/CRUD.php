<?php

  class pruebaproductoCRUD extends Model{

    function __construct() {
      parent::__construct();
    }
   


    public function getError () {
      return $this->error;
    }


    function get ($prueba = null) {
      $items = [];
      try {
         if (isset($prueba) ) {
          $query = $this->db->connect()->prepare('SELECT * FROM pruebaproducto WHERE codproductoprueba = :prueba');
          $query->execute(['prueba'=>$prueba]);
        } else {
          $query = $this->db->connect()->query('SELECT * FROM pruebaproducto');
        }

        while($row = $query->fetch()){
          $item = new pruebaProductoClass();
          
          $item->setnumpruebaproducto($row['numpruebaproducto']);
          $item->setResultado($row['resultpruebaproducto']);
          $item->setFecha($row['fechapruebaproducto']);

          array_push($items, $item);
        }
        return $items;
      } catch (PDOException $e) {
        return [];
      }
    }
  }

?>