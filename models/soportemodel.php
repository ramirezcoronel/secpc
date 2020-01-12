<?php
  require 'libs/classes/soporte.class.php';
  //CRUDS
  require 'source/soporte/CRUD.php';

  //AGREGA ESTO
  require 'source/partes/CRUD.php';


  class soporteModel extends Model {

    public $soporte;
    //ESTO TAMBIEN:
    public $partes;

    function __construct() {
        parent::__construct();

        $this->soporte = new soporteCRUD();

        //Y ESTO
        $this->partes = new partesCRUD();
    }
  }
?>