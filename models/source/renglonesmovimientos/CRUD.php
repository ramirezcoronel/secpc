<?php 

  class renglonesmovimientosCRUD extends Model {

    public function __construct() {
        parent::__construct();
    }

    function insert ($data) {
        try{
          $query = $this->db->connect()->prepare('INSERT INTO renglonesmovimientos (codparte,nummovimiento,cantidadparte ,numserialfabricante,estatus) VALUES(:codparte, :nummovimiento, :cantidadparte, :numserialfabricante, :estatus)');

          $query->execute(['codparte'=>$data['codparte'], 'nummovimiento'=>$data['nummovimiento'],'cantidadparte'=>$data['cantidadparte'],'numserialfabricante'=>$data['numserialfabricante'],'estatus'=>$data['estatus']]);
          return true;
        } catch(PDOException $e){
          $this->error = $e->getMessage();
          return false;
        }
      }

      function get ($serial = null) {
      $items = [];

      try {
       if ( isset($serial) ) {

        $query = $this->db->connect()->prepare('SELECT * FROM renglonesmovimientos WHERE numserialfabricante = :serialfabri');

        $query->execute(['serialfabri'=>$serial]);

        }else {
         $query = $this->db->connect()->query('SELECT * FROM renglonesmovimientos');
        }


        while($row = $query->fetch()){
          $item = new RenglonesMovimientosClass();
          
          $item->setSerial($row['numserialfabricante']);
          $item->setCantidad($row['cantidadparte']);
          $item->setCodParte($row['codparte']);
          $item->setEstatus($row['estatus']);

          array_push($items, $item);
        }
        return $items;
      } catch (PDOException $e) {
        return [];
      }
    }

    public function updateEstatus ($data) {
      try{
          $query = $this->db->connect()->prepare('UPDATE renglonesmovimientos SET estatus = :estatus WHERE numserialfabricante = :numserialfabricante');

          $query->execute(['numserialfabricante'=>$data['numserialfabricante'],'estatus'=>$data['estatus']]);
          return true;
        } catch(PDOException $e){
          $this->error = $e->getMessage();
          return false;
        }
    }
      public function getError () {
        return $this->error;
      }
    }

?>