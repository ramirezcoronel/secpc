<?php
  require 'libs/classes/soporte.class.php';
  require 'libs/classes/pruebas.class.php';
  //CRUDS
  require 'source/soporte/CRUD.php';
  require 'source/pruebas/CRUD.php';

  //AGREGA ESTO
  require 'source/partes/CRUD.php';


  class soporteModel extends Model {

    public $soporte;
    public $pruebas;
    public $partes;

    function __construct() {
        parent::__construct();

        $this->soporte = new soporteCRUD();
        $this->pruebas = new pruebasCRUD();
        $this->partes = new partesCRUD();
    }
  }
?>