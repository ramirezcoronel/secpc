<?php 

    class movimientosCRUD extends Model {

        public function __construct() {
            parent::__construct();
        }
      
      function insertInventario ($data) {
        try{
          $query = $this->db->connect()->prepare('INSERT INTO renglonesmovimientos (codparte,nummovimiento,cantidadparte ,numserialfabricante,estatus) VALUES(:codparte, :nummovimiento, :cantidadparte, :numserialfabricante, :estatus)');

          $query->execute(['codparte'=>$data['codparte'], 'nummovimiento'=>$data['nummovimiento'],'cantidadparte'=>$data['cantidadparte'],'numserialfabricante'=>$data['numserialfabricante'],'estatus'=>$data['estatus']]);
          return true;
        } catch(PDOException $e){
          $this->error = $e->getMessage();
          return false;
        }
      }      

      function insert ($data) {
        try{
          $query = $this->db->connect()->prepare('INSERT INTO movimientos (num,tipo,hora ,fecha,estatus) VALUES(:num, :tipo, :hora, :fecha, :estatus)');

          $query->execute(['num'=>$data['num'], 'tipo'=>$data['tipo'],'hora'=>$data['hora'],'fecha'=>$data['fecha'],'estatus'=>$data['estatus']]);
          
          return true;
        } catch(PDOException $e){
          echo $e->getMessage();
          return false;
        }
      }

      function get ($num = null) {
      $items = [];

      try {
       if ( isset($num) ) {

        $query = $this->db->connect()->prepare('SELECT * FROM movimientos WHERE num = :num');

        $query->execute(['num'=>$num['num']]);

        }else {
         $query = $this->db->connect()->query('SELECT * FROM movimientos');
        }


        while($row = $query->fetch()){
          $item = new MovimientosClass();
          
          $item->setNumero($row['num']);
          $item->setTipo($row['tipo']);
          $item->setFecha($row['fecha']);
          $item->setHora($row['hora']);
          $item->setEstatus($row['estatus']);

          array_push($items, $item);
        }
        return $items;
      } catch (PDOException $e) {
        return [];
      }
    }

     public function drop ($num) {
      try{
          $query = $this->db->connect()->prepare('DELETE FROM movimientos WHERE num = :num');

          $query->execute(['num'=>$num]);
          
          return true;
        } catch(PDOException $e){
          echo $e->getMessage();
          return false;
        }
    }


    function update ($data) {
      try{
          $query = $this->db->connect()->prepare('UPDATE movimientos SET tipo = :tipo,hora = :hora,fecha = :fecha WHERE num = :num');

          $query->execute(['num'=>$data['num'], 'tipo'=>$data['tipo'],'hora'=>$data['hora'],'fecha'=>$data['fecha']]);

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