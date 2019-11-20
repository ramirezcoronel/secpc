<?php

  require 'libs/classes/productos.class.php';
  require 'libs/classes/equipos.class.php';


  class EnsambleModel extends Model {

    function __construct() {
        parent::__construct();
    }


    /************************************************************************************
						CRUD PRODUCTOS

    ************************************************************************************/

    function insertProducto($data){

      try {
        
        $query = $this->db->connect()->prepare('INSERT INTO productos (codigo, fecha, estatus, codequipo)VALUES (:codigo, :fecha, :estatus, :codequipo)');

        $query->execute(['codigo'=>$data['codigo'], 'fecha'=>$data['fecha'], 'estatus' =>$data['estatus'], 'codequipo'=>$data['codequipo']]);

        return true;

      } catch (PDOException $e) {
        
        return false;
      }

    }
   
  function updateProducto($data){

    try{
      $query = $this->db->connect()->prepare('UPDATE productos SET  fecha = :fecha, estatus = :estatus, codequipo = :codequipo WHERE codigo = :codigo');

        $query->execute(['codigo'=>$data['codigo'], 'fecha'=>$data['fecha'], 'estatus'=>$data['estatus'], 'codequipo'=>$data['codequipo']]);

          return true;

    }catch(PDOException $e){
       echo $e->getMessage();

      return false;
      }
     }//fin de la funcion

  public function deleteProducto($codigo = null){
        try {
          
          $query = $this->db->connect()->prepare('DELETE FROM productos WHERE codigo = :codigo');
          $query->execute(['codigo'=>$codigo]);

          return true;

        } catch (PDOException $e) {

          echo $e->getMessage();          
          return false;
        }
      }//fin de la funcion delete

  function getEquipos ($id = null){
      $items = [];
      try {
        if ( isset($id) ) {
          $query = $this->db->connect()->prepare('SELECT * FROM equipos WHERE codequipo = :id');
          $query->execute(['id'=>$id]);
        }else {

         $query = $this->db->connect()->query('SELECT * FROM equipos');
        }

        while($row = $query->fetch()){
          $item = new EquiposClass();
          
          $item->setCodigo($row['codequipo']);
          $item->setNombre($row['nomequipo']);
          $item->setEstatus($row['estatusequipo']);

          array_push($items, $item);
        }
        return $items;
      } catch (PDOException $e) {
        return [];
      }
    }


    function getProductos ($id = null) {
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

    public function getCodigoEquipos ($id = null) {
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



  }

?>