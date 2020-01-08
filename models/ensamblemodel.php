<?php

  require 'libs/classes/productos.class.php';
  require 'libs/classes/equipos.class.php';

  //PRODUCTOS
  require 'source/productos/CRUD.php';

  //EQUIPOS
  require 'source/equipos/CRUD.php';


  class EnsambleModel extends Model {

    public $equipos;
    public $productos;

    function __construct() {
        parent::__construct();
        $this->equipos = new equiposCRUD();
        $this->productos = new productosCRUD();
    }


  }

?>