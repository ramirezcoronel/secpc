<?php
  require 'libs/classes/modelos.class.php';
  require 'libs/classes/partes.class.php';
  require 'libs/classes/movimientos.class.php';
  require 'libs/classes/marcas.class.php';
  require 'libs/classes/pruebaproducto.class.php';
  require 'libs/classes/soporte.class.php';
  //CRUDS
  require 'source/modelos/CRUD.php';
  require 'source/marcas/CRUD.php';
  require 'source/partes/CRUD.php';
  require 'source/movimientos/CRUD.php';
  require 'source/pruebaproducto/CRUD.php';
  require 'source/soporte/CRUD.php';

  class ReportesModel extends Model {

    public $modelos;
    public $marcas;
    public $partes;
    public $movimientos;
    public $pruebaproducto;
    public $soporte;



    function __construct() {
        parent::__construct();

        $this->modelos = new modelosCRUD();
        $this->marcas = new marcasCRUD();
        $this->partes = new partesCRUD();
        $this->movimientos = new movimientosCRUD();
        $this->pruebaproducto = new pruebaproductoCRUD();
        $this->soporte = new soporteCRUD();
    }
  }
?>