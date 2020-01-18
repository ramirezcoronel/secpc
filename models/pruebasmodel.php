<?php
  require 'libs/classes/pruebas.class.php';
  class pruebasModel extends Model {

    function __construct() {
        parent::__construct();
        
    }
      function insert ($data) {
      try{
        $query = $this->db->connect()->prepare('INSERT INTO pruebas (codPrueba, nomPrueba, desPrueba, durPrueba) VALUES(:codPrueba, :nomPrueba, :desPrueba, :durPrueba)');

        $query->execute(['codPrueba'=>$data['codPrueba'], 'nomPrueba'=>$data['nomPrueba'],  'desPrueba'=>$data['desPrueba'], 'durPrueba'=>$data['durPrueba']]);
        
        return true;
      } catch(PDOException $e){
      return false;
      }
    }

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

       public function delete ($id) {
      try{
          $query = $this->db->connect()->prepare('DELETE FROM pruebas WHERE codprueba = :codprueba');

          $query->execute(['codprueba'=>$id]);
          
          return true;
        } catch(PDOException $e){
          echo $e->getMessage();
          return false;
        }
    }

      function updateModelo ($data) {
      try{
          $query = $this->db->connect()->prepare('UPDATE pruebas SET nomPrueba = :nombre, desPrueba = :descripcion, durPrueba = :duracion WHERE codPrueba = :cod');

          $query->execute(['cod'=>$data['cod'], 'nombre'=>$data['nombre'],'descripcion'=>$data['descripcion'],'duracion'=>$data['duracion']]);

          return true;
        } catch(PDOException $e){
          echo $e->getMessage();
          return false;
        }
    }

    function insertPrueba ($data) {
      try{
        $query = $this->db->connect()->prepare('INSERT INTO pruebaProducto (
          numpruebaproducto,
          codPruebaProducto, 
          codProductoPrueba, 
          fechaPruebaProducto, 
          horaPruebaProducto, 
          resultPruebaProducto, 
          obserbPruebaProducto, 
          estatusPruebaProducto) 
          VALUES(
          :numpruebaproducto,
          :codPruebaProducto, 
          :codProductoPrueba, 
          :fechaPruebaProducto, 
          :horaPruebaProducto, 
          :resultPruebaProducto, 
          :obserbPruebaProducto, 
          :estatusPruebaProducto)');

        $query->execute(
          ['numpruebaproducto'=>$data['numpruebaproducto'],
          'codPruebaProducto'=>$data['codPruebaProducto'],
          'codProductoPrueba'=>$data['codProductoPrueba'], 
          'fechaPruebaProducto'=>$data['fechaPruebaProducto'], 
          'horaPruebaProducto'=>$data['horaPruebaProducto'], 
          'resultPruebaProducto'=>$data['resultPruebaProducto'],
          'obserbPruebaProducto'=>$data['obserbPruebaProducto'],
          'estatusPruebaProducto'=>$data['estatusPruebaProducto']]);
        
        return true;
      } catch(PDOException $e){
      return false;
      }
    }
    function validar($producto){
    try {
    $query = $this->db->connect()->prepare('SELECT * FROM productos WHERE codigo = :codigo');
    $query->execute(['codigo' => $producto]);

    return $query->rowCount();

    } catch(PDOException $e) {return false;}


    }



}
?>