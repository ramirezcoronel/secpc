<?php

  require 'libs/classes/productos.class.php';
  require 'libs/classes/equipos.class.php';
  require 'libs/classes/partes.class.php';
  require 'libs/classes/partesequipos.class.php';
  require 'libs/classes/ejemplaresparte.class.php';
  require 'libs/classes/renglonesmovimientos.class.php';

  //PRODUCTOS
  require 'source/productos/CRUD.php';
  require 'source/partesequipos/CRUD.php';
  require 'source/ejemplaresParte/CRUD.php';
  require 'source/renglonesmovimientos/CRUD.php';

  require 'source/partes/CRUD.php';
  //EQUIPOS
  require 'source/equipos/CRUD.php';


  class EnsambleModel extends Model {

    public $equipos;
    public $productos;
    public $partes;
    public $partesequipos;
    public $ejemplaresparte;
    public $renglonesmovimientos;

    function __construct() {
        parent::__construct();
        $this->equipos = new equiposCRUD();
        $this->partes = new partesCRUD();
        $this->ejemplaresparte = new ejemplaresParteCRUD();
        $this->productos = new productosCRUD();
        $this->partesequipos = new partesequiposCRUD();
        $this->renglonesmovimientos = new renglonesmovimientosCRUD();
    }


  }

?>