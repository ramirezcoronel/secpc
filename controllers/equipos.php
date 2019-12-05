<?php  
class Equipos extends Controller{
	public function __construct(){
		parent::__construct();
	}

	public function render(){
	  $this->view->mensaje = 'Gestionar Equipos';
	  $this->view->render('equipos/index');
	}

/******************************************************************
      CRUD DE EQUIPOS

******************************************************************/

  function consultarEquipos() {

    $equipos = $this->model->getEquipos();
    $this->view->equipos = $equipos;
    $this->view->render('equipos/consultarEquipos');
  }


  public function agregar () {

    $this->view->visible = false;

    if(isset($_POST['agregar'])){
      //inputs de modelo

        $codtipoequipo = ($_POST['codtipoequipo'] !== "") ? $_POST['codtipoequipo'] : NULL;
        $codequipo = ($_POST['codequipo'] !== "") ? $_POST['codequipo'] : NULL;
        $nomequipo = ($_POST['nomequipo'] !== "") ? $_POST['nomequipo'] : NULL;
        $estatusequipo = 1;

        if ($this->model->insert(['codtipoequipo'=>$codtipoequipo, 'codequipo'=>$codequipo, 'nomequipo'=>$nomequipo, 'estatusequipo'=>$estatusequipo])){

          $this->view->mensaje = 'Equipo Agregado exitosamente!.';

          $equipos = $this->model->getEquipos($codequipo);
          $this->view->equipo = $equipos[0];

          
          $partes = $this->model->getPartes();
          $this->view->partes = $partes;
          
          $this->view->equipos = $equipos;
          $this->view->partes = $partes;
          $this->view->visible = true;

        }else{
          $this->view->mensaje = 'Ha ocurrido un error.';
        }
      }else{
        $this->view->mensaje = 'Rellene los campos';
      }

      if ( isset($_POST['agregarParte'])) {
          //codigo una vez ingresen una parte
        $codequipo    = ($_POST['codequipo'] !== "") ? $_POST['codequipo'] : NULL;
        $codpartes = ($_POST['codpartes'] !== "") ? $_POST['codpartes'] : NULL;
        $cantidadparteequipo = ($_POST['cantidadparteequipo'] !== "") ? $_POST['cantidadparteequipo'] : NULL;
        $estatusparteequipo = 1;

    
        if ($this->model->insertPartesEquipo(['codequipo'=>$codequipo, 'codpartes'=>$codpartes, 'cantidadparteequipo'=>$cantidadparteequipo, 'estatusparteequipo'=>$estatusparteequipo])){

          $this->view->mensaje = 'Partes agregadas a equipo exitosamente!.';

          $equipos = $this->model->getEquipos($codequipo);
          $this->view->equipo = $equipos[0];

          
          $partes = $this->model->getPartes();
          $this->view->partes = $partes;
          
          $this->view->equipos = $equipos;
          $this->view->partes = $partes;
          $this->view->visible = true;

        }else{
          $this->view->mensaje = 'Ha ocurrido un error.';
        }
      }


      $tipos = $this->model->get();
      $this->view->tipos = $tipos;

      $this->view->render('equipos/agregar');
  }

  public function eliminarEquipo ($param) {

    if ( $this->model->deleteEquipo($param[0]) ) {
      $this->view->mensaje = 'Equipo Eliminado';
    } else {
      $this->view->mensaje = 'Ha ocurrido un Error';

    }

    $this->view->render('equipos/mensaje');
  }

  function actualizarEquipo ($param = null) {
    if(isset($_POST['actualizar'])){
        //Inputs
        $codtipoequipo    = ($_POST['codtipoequipo'] !== "") ? $_POST['codtipoequipo'] : NULL;
        $codequipo = ($_POST['codequipo'] !== "") ? $_POST['codequipo'] : NULL;
        $nomequipo = ($_POST['nomequipo'] !== "") ? $_POST['nomequipo'] : NULL;

        $data = array('codtipoequipo'=>$codtipoequipo, 'codequipo'=>$codequipo, 'nomequipo'=>$nomequipo);

        if ($this->model->updateEquipo($data)){

          $this->view->mensaje = 'Actualizado Exitosamente';

        }else{
          $this->view->mensaje = 'Ha ocurrido un error.';
        }

        $this->view->render('equipos/mensaje');

      }else{
          
        $equipo = $this->model->getEquipos($param[0]);

        $this->view->equipo = $equipo[0];

        if ( sizeof($equipo) ) {
        $tipos = $this->model->get();
        $this->view->tipos = $tipos;
        $this->view->mensaje = 'Rellene los campos';
        $this->view->render('equipos/actualizarEquipo');

      } else {
        $this->view->mensaje = 'Ha ocurrido un error';
        $this->view->render('equipos/mensaje');
      }

      }

  }


  /******************************************************************
      CRUD DE TIPOS DE EQUIPOS

******************************************************************/

  public function consultarTipoEquipo () {
    $tipos = $this->model->get();
    $this->view->tipos = $tipos;
    $this->view->render('equipos/consultarTipo');
  }

	public function agregarTipoDeEquipo(){

	 if(isset($_POST['agregar'])){
      $codTipoEquipo    = ($_POST['codTipoEquipo'] !== "") ? $_POST['codTipoEquipo'] : NULL;
      $nomTipoEquipo = ($_POST['nomTipoEquipo'] !== "") ? $_POST['nomTipoEquipo'] : NULL;
      $estatusTipoEquipo = 1;
  
      if ($this->model->insertTipos(['codtipoequipo'=>$codTipoEquipo, 'nomtipoequipo'=>$nomTipoEquipo, 'estatustipoequipo'=>$estatusTipoEquipo])){

        $this->view->mensaje = 'Tipo de equipo agregado exitosamente!.';

      }else{

        $this->view->mensaje = 'Ha ocurrido un error.';

      }
    }else{

      	$this->view->mensaje = 'Rellene los campos';
    }
	  $this->view->render('equipos/agregartipodeequipo');
	}

  function actualizarTipoEquipo ($param = null) {
    if(isset($_POST['actualizar'])){
        //Inputs
        $codtipoequipo    = ($_POST['codtipoequipo'] !== "") ? $_POST['codtipoequipo'] : NULL;
        $nomequipo = ($_POST['nomequipo'] !== "") ? $_POST['nomequipo'] : NULL;

        $data = array('codtipoequipo'=>$codtipoequipo, 'nomequipo'=>$nomequipo);

        if ($this->model->updateTipoEquipo($data)){

          $this->view->mensaje = 'Actualizado Exitosamente';

        }else{
          $this->view->mensaje = 'Ha ocurrido un error.';
        }

        $this->view->render('equipos/mensaje');

      }else{
          
        $equipo = $this->model->get($param[0]);

        $this->view->equipo = $equipo[0];

        if ( sizeof($equipo) ) {
        $tipos = $this->model->get();
        $this->view->tipos = $tipos;
        $this->view->mensaje = 'Rellene los campos';
        $this->view->render('equipos/actualizarEquipo');

      } else {
        $this->view->mensaje = 'Ha ocurrido un error';
        $this->view->render('equipos/mensaje');
      }

      }

  }
}
?>