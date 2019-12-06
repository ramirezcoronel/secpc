<?php

  require 'libs/classes/tipos.class.php';
  require 'libs/classes/equipos.class.php';
  require 'libs/classes/partes.class.php';

  //CRUDS 

  //EQUIPO

  require 'source/equipos/CRUD.php';

  //TIPOS DE EQUIPO

  require 'source/tiposequipos/CRUD.php';

  //PARTES

  require 'source/partes/CRUD.php';

  //PARTES EQUIPOS

  require 'source/partesequipos/CRUD.php';

  class EquiposModel extends Model {

    public $equipos;
    public $partes;
    public $tiposequipos;
    public $partesequipos;

    function __construct() {
        parent::__construct();

        $this->equipos = new equiposCRUD();
        $this->partes = new partesCRUD();
        $this->partesequipos = new partesequiposCRUD();
        $this->tiposequipos = new tiposequiposCRUD();
    }

  }

?>