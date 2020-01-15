<?php
  require 'libs/classes/soporte.class.php';
  require 'libs/classes/pruebaproducto.class.php';
  //CRUDS
  require 'source/soporte/CRUD.php';
  require 'source/pruebaproducto/CRUD.php';

  //AGREGA ESTO
  require 'source/partes/CRUD.php';


  class soporteModel extends Model {

    public $soporte;
    public $pruebaproducto;
    public $partes;

    function __construct() {
        parent::__construct();

        $this->soporte = new soporteCRUD();
        $this->pruebaproducto = new pruebaproductoCRUD();
        $this->partes = new partesCRUD();
    }
  }
?>