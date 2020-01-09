<?php 

    class ejemplaresParteCRUD extends Model {
      public $error;
        public function __construct() {
            parent::__construct();
        }
        function insert ($data) {
            try{
              $query = $this->db->connect()->prepare('INSERT INTO ejemplaresparte ( codigo,serialfabri, ubicacion,estatus,codparte,codproducto) VALUES(:codigo, :serialfabri, :ubicacion, :estatus, :codparte, :codproducto)');
    
              $query->execute(['codigo'=>$data['codigo'], 'serialfabri'=>$data['serialfabri'],'ubicacion'=>$data['ubicacion'],'estatus'=>$data['estatus'],'codparte'=>$data['codparte'],'codproducto'=>$data['codproducto']]);
              
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