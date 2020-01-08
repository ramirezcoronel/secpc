<?php

  class productosCRUD extends Model{

    function __construct() {
      parent::__construct();
    }
    function insert($data){

      try {
        
        $query = $this->db->connect()->prepare('INSERT INTO productos (codigo, fecha, estatus, codequipo)VALUES (:codigo, :fecha, :estatus, :codequipo)');

        $query->execute(['codigo'=>$data['codigo'], 'fecha'=>$data['fecha'], 'estatus' =>$data['estatus'], 'codequipo'=>$data['codequipo']]);

        return true;

      } catch (PDOException $e) {
        $this->error = $e->getMessage();
        return false;
      }

    }
   
  function update($data){

    try{
      $query = $this->db->connect()->prepare('UPDATE productos SET  fecha = :fecha, estatus = :estatus, codequipo = :codequipo WHERE codigo = :codigo');

        $query->execute(['codigo'=>$data['codigo'], 'fecha'=>$data['fecha'], 'estatus'=>$data['estatus'], 'codequipo'=>$data['codequipo']]);

          return true;

    }catch(PDOException $e){
       echo $e->getMessage();

      return false;
      }
     }//fin de la funcion

     public function drop($codigo = null){
        try {
          
          $query = $this->db->connect()->prepare('DELETE FROM productos WHERE codigo = :codigo');
          $query->execute(['codigo'=>$codigo]);

          return true;

        } catch (PDOException $e) {

          echo $e->getMessage();          
          return false;
        }
      }//fin de la funcion delete

      function get ($id = null) {
      $items = [];
      try {
        if ( isset($id) ) {
          $query = $this->db->connect()->prepare('SELECT * FROM productos WHERE codigo = :id');
          $query->execute(['id'=>$id]);
        } else {
          $query = $this->db->connect()->query('SELECT * FROM productos');
        }

        while($row = $query->fetch()){
         $item = new ProductosClass();
          
          $item->setCodigo($row['codigo']);
          $item->setFecha($row['fecha']);
          $item->setCodigoEquipo($row['codequipo']);
          $item->setEstatus($row['estatus']);

          array_push($items, $item);
        }
        return $items;
      } catch (PDOException $e) {
        echo $e->getMessage();
        return [];
      }
    }
    public function getError () {
      return $this->error;
    }
  }

?>