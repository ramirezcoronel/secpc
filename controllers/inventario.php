<?php  
class Inventario extends Controller {
	public function __construct(){
		parent::__construct();
	}

	public function render(){
	  $this->view->mensaje = 'Gestionar Inventario';
	  $this->view->render('inventario/index');
	}
		/***************************************************************************
							CRUD DE MODELOS

	***************************************************************************/

	function consultarModelos() {

		$modelos = $this->model->getModelos();
		$this->view->modelos = $modelos;
		$this->view->render('inventario/consultarModelo');
	}



	public function agregarModelo () {

		if(isset($_POST['agregar'])){

	      $idmodelo    = ($_POST['idmodelo'] !== "") ? $_POST['idmodelo'] : NULL;
	      $nommodelo = ($_POST['nommodelo'] !== "") ? $_POST['nommodelo'] : NULL;
	      $estatusmodelo = 1;
	      $idmarca = ($_POST['idmarca'] !== "") ? $_POST['idmarca'] : NULL;

	  
	      if ($this->model->insertModelo(['idmodelo'=>$idmodelo, 'nommodelo'=>$nommodelo, 'estatusmodelo'=>$estatusmodelo, 'idmarca'=>$idmarca])){
	        $this->view->mensaje = 'Modelo agregado exitosamente!.';
	      }else{
	        $this->view->mensaje = 'Ha ocurrido un error.';
	      }
	    }else{
	      $this->view->mensaje = 'Rellene los campos';
	    }

	    $marcas = $this->model->getMarca();
	    $this->view->marcas = $marcas;

		$this->view->render('inventario/agregarModelo');
	}
	function actualizarModelo ($param = null) {
		if(isset($_POST['actualizar'])){
	      $idmodelo    = ($_POST['idmodelo'] !== "") ? $_POST['idmodelo'] : NULL;
	      $nommodelo = ($_POST['nommodelo'] !== "") ? $_POST['nommodelo'] : NULL;
	      $estatusmodelo = 1;
	      $idmarca = ($_POST['idmarca'] !== "") ? $_POST['idmarca'] : NULL;


	      if ($this->model->updateModelo(['idmodelo'=>$idmodelo, 'nommodelo'=>$nommodelo, 'estatusmodelo'=>$estatusmodelo, 'idmarca'=>$idmarca])){

	      	$this->view->mensaje = 'Actualizado Exitosamente';

	      }else{
	        $this->view->mensaje = 'Ha ocurrido un error.';
	      }

	      $this->view->render('inventario/mensaje');

	    }else{
          
	      $modelo = $this->model->getModelos($param[0]);

	      $this->view->modelo = $modelo[0];

	      if ( sizeof($modelo) ) {
	      	$marcas = $this->model->getMarca();
	   		 $this->view->marcas = $marcas;
		      $this->view->mensaje = 'Rellene los campos';
			  $this->view->render('inventario/actualizarModelo');

			} else {
			  $this->view->mensaje = 'Ha ocurrido un error';
			  $this->view->render('inventario/mensaje');
			}

	    }

	}

	public function eliminarModelo ($param) {

		if ( $this->model->deleteModelo($param[0]) ) {
			$this->view->mensaje = 'Modelo Eliminada';
		} else {
			$this->view->mensaje = 'Ha ocurrido un Error';

		}

		$this->view->render('inventario/mensaje');
	}

	/***************************************************************************
							CRUD DE PARTES

	***************************************************************************/

	function consultarPartes() {

		$partes = $this->model->getPartes();
		$this->view->partes = $partes;
		$this->view->render('inventario/consultarPartes');
	}

	public function agregarPartes() {

		if(isset($_POST['agregar'])){
	      $idmodelo    = ($_POST['idmodelo'] !== "") ? $_POST['idmodelo'] : NULL;
	      $serializable = ($_POST['serializable'] !== "") ? $_POST['serializable'] : NULL;
	      $codpartes = ($_POST['codpartes'] !== "") ? $_POST['codpartes'] : NULL;
	      $stockmaximo = ($_POST['stockmaximo'] !== "") ? $_POST['stockmaximo'] : NULL;
	      $stockminimo = ($_POST['stockminimo'] !== "") ? $_POST['stockminimo'] : NULL;
	      $puntoreorden = ($_POST['puntoreorden'] !== "") ? $_POST['puntoreorden'] : NULL;
	      $estatus = 1;
	  
	      if ($this->model->insertPartes(['idmodelo'=>$idmodelo, 'serializable'=>$serializable, 'codpartes'=>$codpartes, 'stockmaximo'=>$stockmaximo, 'stockminimo'=>$stockminimo, 'puntoreorden'=>$puntoreorden, 'estatus'=>$estatus])){
	        $this->view->mensaje = 'Partes agregadas exitosamente!.';
	      }else{
	        $this->view->mensaje = 'Ha ocurrido un error.';
	      }
	    }else{
	      $this->view->mensaje = 'Rellene los campos';
	    }

	    $modelos = $this->model->getModelos();
	    $this->view->modelos = $modelos;

		$this->view->render('inventario/agregarPartes');
	}

    function actualizarParte ($param = null) {

		if(isset($_POST['actualizar'])){

	      $idmodelo    = ($_POST['idmodelo'] !== "") ? $_POST['idmodelo'] : NULL;
	      $serializable = ($_POST['serializable'] !== "") ? $_POST['serializable'] : NULL;
	      $codpartes = ($_POST['codpartes'] !== "") ? $_POST['codpartes'] : NULL;
	      $stockmaximo = ($_POST['stockmaximo'] !== "") ? $_POST['stockmaximo'] : NULL;
	      $stockminimo = ($_POST['stockminimo'] !== "") ? $_POST['stockminimo'] : NULL;
	      $puntoreorden = ($_POST['puntoreorden'] !== "") ? $_POST['puntoreorden'] : NULL;
	      $estatus = 1;

	      if ($this->model->updateParte(['idmodelo'=>$idmodelo, 'serializable'=>$serializable, 'codpartes'=>$codpartes, 'stockmaximo'=>$stockmaximo, 'stockminimo'=>$stockminimo, 'puntoreorden'=>$puntoreorden])){

	      	$this->view->mensaje = 'Actualizado Exitosamente';

	      }else{

	        $this->view->mensaje = 'Ha ocurrido un error.';

	      }

	      $this->view->render('inventario/mensaje');

	    }else{
          
	      $parte = $this->model->getPartes($param[0]);
	      $this->view->parte = $parte[0];

	       $modelos = $this->model->getModelos();
	       $this->view->modelos = $modelos;

	      if ( sizeof($parte) ) {
		      $this->view->mensaje = 'Rellene los campos';
			  $this->view->render('inventario/actualizarParte');

			} else {
			  $this->view->mensaje = 'Ha ocurrido un error';
			  $this->view->render('inventario/mensaje');
			}

	    }

	}


	public function eliminarPartes ($param) {

		if ( $this->model->deleteParte($param[0]) ) {
			$this->view->mensaje = 'Parte Eliminada';
		} else {
			$this->view->mensaje = 'Ha ocurrido un Error';
		}

		$this->view->render('inventario/mensaje');
	}

		/***************************************************************************
							CRUD DE Movimientos

	***************************************************************************/

	public function consultarMovimientos () {
		$movimientos = $this->model->getMovimientos();
		$this->view->movimientos = $movimientos;
		$this->view->render('inventario/consultarMovimientos');
	}
	public function agregar () {

		$this->view->visible = false;

		if(isset($_POST['agregar'])){
		  //inputs de modelo
	      $num    = ($_POST['num'] !== "") ? $_POST['num'] : NULL;
	      $tipo = ($_POST['tipo'] !== "") ? $_POST['tipo'] : NULL;
	      $hora = ($_POST['hora'] !== "") ? $_POST['hora'] : NULL;
	      $fecha = ($_POST['fecha'] !== "") ? $_POST['fecha'] : NULL;
	      $estatus = ($_POST['estatus'] !== "") ? $_POST['estatus'] : NULL;

	      

	      	  
	      if ($this->model->insertMovimiento(['num'=>$num, 'tipo'=>$tipo, 'hora'=>$hora, 'fecha'=>$fecha, 'estatus'=>$estatus])){
	        $this->view->mensaje = 'Movimiento Agregado exitosamente!.';

	        $movimiento = $this->model->getMovimiento(['num'=>$num ]);

	        $this->view->movimiento = $movimiento;
	        $this->view->visible = true;

	      }else{
	        $this->view->mensaje = 'Ha ocurrido un error.';
	      }
	    }else{
	      $this->view->mensaje = 'Rellene los campos';
	    }

	    if ( isset($_POST['agregarParte'])) {
	      	//codigo una vez ingresen una parte
		  $codparte    = ($_POST['codparte'] !== "") ? $_POST['codparte'] : NULL;
	      $num = ($_POST['num'] !== "") ? $_POST['num'] : NULL;
	      $cantidadparte = ($_POST['cantidadparte'] !== "") ? $_POST['cantidadparte'] : NULL;
	      $numserialfabricante = ($_POST['numserialfabricante'] !== "") ? $_POST['numserialfabricante'] : NULL;
	      $tipo = ($_POST['tipo'] !== "") ? $_POST['tipo'] : NULL;
	      $estatus = 1;

	  
	      if ($this->model->insertInventario(['codparte'=>$codparte, 'nummovimiento'=>$num, 'cantidadparte'=>$cantidadparte, 'estatus'=>$estatus, 'numserialfabricante'=>$numserialfabricante])){

	        if ( $this->model->updateParte(['codpartes'=>$codparte, 'cantidadparte'=>$cantidadparte], $tipo)) {
	        	$this->view->mensaje = 'Agregado exitosamente';

	        	$movimiento = $this->model->getMovimientos($num);

		        $this->view->movimiento = $movimiento[0];
		        $this->view->visible = true;
	        }


	      }else{
	        $this->view->mensaje = 'Ha ocurrido un error.';
	      }
	    }


	    $partes = $this->model->getPartes();
    	$this->view->partes = $partes;

		$this->view->render('inventario/agregar');
	}

	function ActualizarMovimiento ($param = null) {

		if(isset($_POST['actualizar'])){

	       $num    = ($_POST['num'] !== "") ? $_POST['num'] : NULL;
	      $tipo = ($_POST['tipo'] !== "") ? $_POST['tipo'] : NULL;
	      $hora = ($_POST['hora'] !== "") ? $_POST['hora'] : NULL;
	      $fecha = ($_POST['fecha'] !== "") ? $_POST['fecha'] : NULL;


	      if ($this->model->updateMovimiento(['num'=>$num, 'tipo'=>$tipo, 'hora'=>$hora, 'fecha'=>$fecha])){

	      	$this->view->mensaje = 'Actualizado Exitosamente';

	      }else{

	        $this->view->mensaje = 'Ha ocurrido un error.';

	      }

	      $this->view->render('inventario/mensaje');

	    }else{
         
	    	$movimiento = $this->model->getMovimientos($param[0]);
	        $this->view->movimiento = $movimiento[0];


	      if ( sizeof($movimiento) ) {
		      $this->view->mensaje = 'Rellene los campos';
			  $this->view->render('inventario/actualizarMovimiento');

			} else {
			  $this->view->mensaje = 'Ha ocurrido un error';
			  $this->view->render('inventario/mensaje');
			}

	    }

	}

	public function eliminarMovimiento ($param) {
		if ( $this->model->deleteMovimiento($param[0]) ) {
			$this->view->mensaje = 'Movimiento Eliminado';
		} else {
			$this->view->mensaje = 'Ha ocurrido un Error';

		}

		$this->view->render('inventario/mensaje');
	}

	public function agregarInventario () {

		if(isset($_POST['agregar'])){
	      $codparte    = ($_POST['codparte'] !== "") ? $_POST['codparte'] : NULL;
	      $nummovimiento = ($_POST['nummovimiento'] !== "") ? $_POST['nummovimiento'] : NULL;
	      $cantidadparte = ($_POST['cantidadparte'] !== "") ? $_POST['cantidadparte'] : NULL;
	      $numserialfabricante = ($_POST['numserialfabricante'] !== "") ? $_POST['numserialfabricante'] : NULL;
	      $estatus = ($_POST['estatus'] !== "") ? $_POST['estatus'] : NULL;

	      $movimiento = $this->model->getMovimientos(['num' => $nummovimiento]);
	      $tipo = $movimiento->getTipo();

	  
	      if ($this->model->insertInventario(['codparte'=>$codparte, 'nummovimiento'=>$nummovimiento, 'cantidadparte'=>$cantidadparte, 'estatus'=>$estatus, 'numserialfabricante'=>$numserialfabricante])){

	        if ( $this->model->updateParte(['codparte'=>$codparte, 'cantidadparte'=>$cantidadparte, 'tipo' => $tipo])) {
	        	$this->view->mensaje = 'Agregado exitosamente';
	        }


	      }else{
	        $this->view->mensaje = 'Ha ocurrido un error.';
	      }
	    }else{
	      $this->view->mensaje = 'Rellene los campos';
	    }

	    $partes = $this->model->getPartes();
    	$this->view->partes = $partes;


    	$movimientos = $this->model->getMovimientos();
    	$this->view->movimientos = $movimientos;


		$this->view->render('inventario/agregarinventario');
	}


    /***************************************************************************
							CRUD DE MARCA

	***************************************************************************/

	public function agregarMarca () {

		if(isset($_POST['agregar'])){
	      $nombre    = ($_POST['nombre'] !== "") ? $_POST['nombre'] : NULL;
	      $id = ($_POST['id'] !== "") ? $_POST['id'] : NULL;
	      $estatus = 1;
	  
	      if ($this->model->insertMarca(['nombre'=>$nombre, 'id'=>$id, 'estatus'=>$estatus])){

	      	$this->view->mensaje = 'Agregado Exitosamente';

	      }else{
	        $this->view->mensaje = 'Ha ocurrido un error.';
	      }
	    }else{
	      $this->view->mensaje = 'Rellene los campos';
	    }

		$this->view->render('inventario/agregarMarca');
	}

	function eliminarMarca ($param) {
		if ( $this->model->deleteMarca($param[0]) ) {
			$this->view->mensaje = 'Marca Eliminada';
		} else {
			$this->view->mensaje = 'Ha ocurrido un Error';

		}

		$this->view->render('inventario/mensaje');
	}

	function actualizarMarca ($param = null) {
		if(isset($_POST['actualizar'])){
	      $nombre    = ($_POST['nombre'] !== "") ? $_POST['nombre'] : NULL;
	      $id = ($_POST['id'] !== "") ? $_POST['id'] : NULL;
	      $estatus = 1;

	      if ($this->model->updateMarca(['nombre'=>$nombre, 'id'=>$id, 'estatus'=>$estatus])){

	      	$this->view->mensaje = 'Actualizado Exitosamente';


	      }else{
	        $this->view->mensaje = 'Ha ocurrido un error.';

	      }

	      $this->view->render('inventario/mensaje');

	    }else{
          
	      $marca = $this->model->getMarca($param[0]);
	      $this->view->marca = $marca[0];

	      if ( sizeof($marca) ) {
		      $this->view->mensaje = 'Rellene los campos';
			  $this->view->render('inventario/actualizarMarca');

			} else {
			  $this->view->mensaje = 'Ha ocurrido un error';
			  $this->view->render('inventario/mensaje');
			}

	    }

	}

	function consultarMarca() {


		$marcas = $this->model->getMarca();
		$this->view->marcas = $marcas;

		$this->view->render('inventario/consultarMarca');
	}

	


}
?>