<?php

  require 'libs/classes/modelos.class.php';
  require 'libs/classes/partes.class.php';
  require 'libs/classes/movimientos.class.php';
  require 'libs/classes/marcas.class.php';

  //CRUDS

  require 'source/modelo/CRUD.php';


  class InventarioModel extends Model {

    public $modelos;

    function __construct() {
        parent::__construct();

        $this->modelos = new modelosCRUD();

    }

    

    /***************************************************************************
              CRUD DE PARTES

  ***************************************************************************/

    function insertPartes ($data) {
        try{
          $query = $this->db->connect()->prepare('INSERT INTO partes ( idmodelo,serializable, codpartes,stockmaximo,stockminimo,puntoreorden,estatus, stockactual ) VALUES(:idmodelo, :serializable, :codpartes, :stockmaximo, :stockminimo, :puntoreorden, :estatus, :stockactual)');

          $query->execute(['idmodelo'=>$data['idmodelo'], 'serializable'=>$data['serializable'],'codpartes'=>$data['codpartes'],'stockmaximo'=>$data['stockmaximo'],'stockminimo'=>$data['stockminimo'],'puntoreorden'=>$data['puntoreorden'],'estatus'=>$data['estatus'], 'stockactual'=>0 ]);
          
          return true;
        } catch(PDOException $e){
          return false;
        }
      }

      function deleteParte ($id) {
        try{
          $query = $this->db->connect()->prepare('DELETE FROM Partes WHERE codpartes = :id');

          $query->execute(['id'=>$id]);
          
          return true;
        } catch(PDOException $e){
          echo $e->getMessage();
          return false;
        }
      }

      function updateParte ($data, $tipo = null) {
        try{

          switch ($tipo) {
            case "1":
               $query = $this->db->connect()->prepare('UPDATE partes SET stockactual = stockactual + :cantidadparte WHERE codpartes = :codpartes');
               $query->execute(['codpartes'=>$data['codpartes'], 'cantidadparte'=>$data['cantidadparte']]);
              break;

            case "2":
               $query = $this->db->connect()->prepare('UPDATE partes SET stockactual = stockactual - :cantidadparte WHERE codpartes = :codpartes');
               $query->execute(['codpartes'=>$data['codpartes'], 'cantidadparte'=>$data['cantidadparte']]); 
              break;
            
            default:
            $query = $this->db->connect()->prepare('UPDATE partes SET idmodelo = :idmodelo, serializable = :serializable, stockmaximo = :stockmaximo, stockminimo = :stockminimo, puntoreorden = :puntoreorden WHERE codpartes = :codpartes');

            $query->execute(['idmodelo'=>$data['idmodelo'], 'serializable'=>$data['serializable'],'codpartes'=>$data['codpartes'],'stockmaximo'=>$data['stockmaximo'],'stockminimo'=>$data['stockminimo'],'puntoreorden'=>$data['puntoreorden']]);
              
              break;
          }

          return true;
        } catch(PDOException $e){
          echo $e->getMessage();
          return false;
        }
      }

    function getPartes ($id = null) {
      $items = [];
      try {
        if ( isset($id) ) {
          $query = $this->db->connect()->prepare('SELECT * FROM partes WHERE codpartes = :id');
          $query->execute(['id'=>$id]);
        } else {
          $query = $this->db->connect()->query('SELECT * FROM partes');
        }

        while($row = $query->fetch()){

          $item = new PartesClass();

          $item->setCod($row['codpartes']);
          $item->setSerializable($row['serializable']);
          $item->setStockAct($row['stockactual']);
          $item->setStockMax($row['stockmaximo']);
          $item->setStockMin($row['stockminimo']);
          $item->setPuntoRe($row['puntoreorden']);
          $item->setEstatus($row['estatus']);
          $item->setIdModelo($row['idmodelo']);


          array_push($items, $item);
        }
        return $items;
      } catch (PDOException $e) {
        return [];
      }
    }

    /***************************************************************************
              CRUD DE Movimientos

  ***************************************************************************/

      function insertInventario ($data) {
        try{
          $query = $this->db->connect()->prepare('INSERT INTO renglonesmovimientos (codparte,nummovimiento,cantidadparte ,numserialfabricante,estatus) VALUES(:codparte, :nummovimiento, :cantidadparte, :numserialfabricante, :estatus)');

          $query->execute(['codparte'=>$data['codparte'], 'nummovimiento'=>$data['nummovimiento'],'cantidadparte'=>$data['cantidadparte'],'numserialfabricante'=>$data['numserialfabricante'],'estatus'=>$data['estatus']]);
          return true;
        } catch(PDOException $e){
          echo $e->getMessage();
          return false;
        }
      }

      

      function insertMovimiento ($data) {
        try{
          $query = $this->db->connect()->prepare('INSERT INTO movimientos (num,tipo,hora ,fecha,estatus) VALUES(:num, :tipo, :hora, :fecha, :estatus)');

          $query->execute(['num'=>$data['num'], 'tipo'=>$data['tipo'],'hora'=>$data['hora'],'fecha'=>$data['fecha'],'estatus'=>$data['estatus']]);
          
          return true;
        } catch(PDOException $e){
          echo $e->getMessage();
          return false;
        }
      }

      function getMovimientos ($num = null) {
      $items = [];

      try {
       if ( isset($num) ) {

          $query = $this->db->connect()->prepare('SELECT * FROM movimientos WHERE num = :num');

        $query->execute(['num'=>$num]);

        }else {
         $query = $this->db->connect()->query('SELECT * FROM movimientos');
        }

        while($row = $query->fetch()){
          $item = new MovimientosClass();
          
          $item->setNumero($row['num']);
          $item->setTipo($row['tipo']);
          $item->setFecha($row['fecha']);
          $item->setHora($row['hora']);

          array_push($items, $item);
        }
        return $items;
      } catch (PDOException $e) {
    
        return [];
      }
    }

    function getMovimiento ($data) {
      $items = [];
      try {
        
        $query = $this->db->connect()->prepare('SELECT * FROM movimientos WHERE num = :num');

        $query->execute(['num'=>$data['num']]);


        while($row = $query->fetch()){
          $item = new movimientosClass();
          
          $item->setNumero($row['num']);
          $item->setTipo($row['tipo']);
          $item->setFecha($row['fecha']);
          $item->setHora($row['hora']);
        }
        return $item;
      } catch (PDOException $e) {

        return [];
      }
    }

     public function deleteMovimiento ($num) {
      try{
          $query = $this->db->connect()->prepare('DELETE FROM movimientos WHERE num = :num');

          $query->execute(['num'=>$num]);
          
          return true;
        } catch(PDOException $e){
          echo $e->getMessage();
          return false;
        }
    }


    function updateMovimiento ($data) {
      try{
          $query = $this->db->connect()->prepare('UPDATE movimientos SET tipo = :tipo,hora = :hora,fecha = :fecha WHERE num = :num');

          $query->execute(['num'=>$data['num'], 'tipo'=>$data['tipo'],'hora'=>$data['hora'],'fecha'=>$data['fecha']]);

          return true;
        } catch(PDOException $e){
          echo $e->getMessage();
          return false;
        }
    }

   /***************************************************************************
              CRUD DE MODELOS

  ***************************************************************************/

    function insertModelo ($data) {

      try{
        $query = $this->db->connect()->prepare('INSERT INTO modelos (idmodelo, nommodelo, estatusmodelo, idmarca) VALUES(:idmodelo, :nommodelo, :estatusmodelo, :idmarca)');

        $query->execute(['idmodelo'=>$data['idmodelo'], 'nommodelo'=>$data['nommodelo'],  'estatusmodelo'=>$data['estatusmodelo'], 'idmarca'=>$data['idmarca']]);
        
        return true;
      } catch(PDOException $e){
        echo $e->getMessage();
        return false;
      }
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

          array_push($items, $item);
        }
        return $items;
      } catch (PDOException $e) {
        return [];
      }
    }

    public function deleteModelo ($id) {
      try{
          $query = $this->db->connect()->prepare('DELETE FROM modelos WHERE idmodelo = :id');

          $query->execute(['id'=>$id]);
          
          return true;
        } catch(PDOException $e){
          echo $e->getMessage();
          return false;
        }
    }

    function updateModelo ($data) {
      try{
          $query = $this->db->connect()->prepare('UPDATE modelos SET nommodelo = :nommodelo, estatusmodelo = :estatusmodelo, idmarca = :idmarca WHERE idmodelo = :idmodelo');

          $query->execute(['idmodelo'=>$data['idmodelo'], 'nommodelo'=>$data['nommodelo'],'estatusmodelo'=>$data['estatusmodelo'],'idmarca'=>$data['idmarca']]);

          return true;
        } catch(PDOException $e){
          echo $e->getMessage();
          return false;
        }
    }

    


    

    

    /***************************************************************************
              CRUD DE MARCAS

  ***************************************************************************/

    function insertMarca ($data) {
      try{
          $query = $this->db->connect()->prepare('INSERT INTO marca (id,nombre,estatus ) VALUES(:id, :nombre, :estatus)');

          $query->execute(['id'=>$data['id'], 'nombre'=>$data['nombre'],'estatus'=>$data['estatus']]);
          
          return true;
        } catch(PDOException $e){
          echo $e->getMessage();
          return false;
        }
    }

    function getMarca ($id = null) {
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

    function deleteMarca ($id) {
      try{
          $query = $this->db->connect()->prepare('DELETE FROM marca WHERE id = :id');

          $query->execute(['id'=>$id]);
          
          return true;
        } catch(PDOException $e){
          echo $e->getMessage();
          return false;
        }
    }

    function updateMarca ($data) {
      try{
          $query = $this->db->connect()->prepare('UPDATE marca SET nombre = :nombre, estatus = :estatus WHERE id = :id');

          $query->execute(['id'=>$data['id'], 'nombre'=>$data['nombre'],'estatus'=>$data['estatus']]);
          
          return true;
        } catch(PDOException $e){
          echo $e->getMessage();
          return false;
        }
    }

  }

?>