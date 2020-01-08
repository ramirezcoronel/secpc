<?php
  require 'libs/classes/soporte.class.php';
  //CRUDS
  require 'source/soporte/CRUD.php';

  class soporteModel extends Model {

    public $soporte;

    function __construct() {
        parent::__construct();

        $this->soporte = new soporteCRUD();
    }
  }
?>