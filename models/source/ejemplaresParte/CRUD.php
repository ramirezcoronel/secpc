<?php 
// SELECT codparte, COUNT(*) FROM ejemplaresparte GROUP BY codparte;
    class ejemplaresParteCRUD extends Model {
      public $error;
        public function __construct() {
            parent::__construct();
        }
        public function insert ($data) {
            try{
              if (isset($data['serialfabri'])){
                $query = $this->db->connect()->prepare('INSERT INTO ejemplaresparte ( codigo,serialfabri, ubicacion,estatus,codparte,codproducto) VALUES(:codigo, :serialfabri, :ubicacion, :estatus, :codparte, :codproducto)');
      
                $query->execute(['codigo'=>$data['codigo'], 'serialfabri'=>$data['serialfabri'],'ubicacion'=>$data['ubicacion'],'estatus'=>$data['estatus'],'codparte'=>$data['codparte'],'codproducto'=>$data['codproducto']]);

              } else{
                $query = $this->db->connect()->prepare('INSERT INTO ejemplaresparte ( codigo, ubicacion,estatus,codparte,codproducto) VALUES(:codigo, :ubicacion, :estatus, :codparte, :codproducto)');
      
                $query->execute(['codigo'=>$data['codigo'],'ubicacion'=>$data['ubicacion'],'estatus'=>$data['estatus'],'codparte'=>$data['codparte'],'codproducto'=>$data['codproducto']]);
              }
              
              return true;
            } catch(PDOException $e){
              $this->error = $e->getMessage();
              return false;
            }
          }

      public function get ($id = null) {
          $items = [];
          try {
            if ( isset($id) ) {
              $query = $this->db->connect()->prepare('SELECT codparte, COUNT(*) FROM ejemplaresparte WHERE codproducto = :id GROUP BY codparte;' );
              $query->execute(['id'=>$id]);
            } else {
              $query = $this->db->connect()->query('SELECT * FROM partes');
            }
    
            while($row = $query->fetch()){
    
              $item = new ejemplaresParteClass();
            
              $item->setCodParte($row['codparte']);
              $item->setCantidad($row['count']);

              array_push($items, $item);
            }
            return $items;
          } catch (PDOException $e) {
            return [];
          }
        }

    public function getEjemplares ($producto) {
      $items = [];
      try {
       
        $query = $this->db->connect()->prepare('SELECT codparte, serialfabri, Count(*) FROM ejemplaresparte WHERE codproducto = :codproducto GROUP BY codparte, serialfabri' );
              $query->execute(['codproducto'=>$producto]);

        while($row = $query->fetch()){

          $item = new ejemplaresParteClass();
        
          $item->setCodParte($row['codparte']);
          $item->setSerial($row['serialfabri']);
          $item->setCantidad($row['count']);

          array_push($items, $item);
        }
        return $items;
      } catch (PDOException $e) {
        return [];
      }
    }
    
      public function getError () {
        return $this->error;
      }
    }

?>