<?php  
class Stressing extends Controller{
	public function __construct(){
		parent::__construct();
	}

	public function render(){
	  $this->view->mensaje = 'Prueba';

    $stressing = $this->model->get();
    $this->view->stressing = $stressing;
    
	  $this->view->render('stressing/index');
  
	}
  function gestion(){
    $this->view->mensaje = 'Gestionar';
    $stressing = $this->model->get();
    $this->view->stressing = $stressing;
    
    $this->view->render('stressing/gestion');

  }
	  function agregarPrueba () {
    if(isset($_POST['agregar'])){
      $cod    = ($_POST['cod'] !== "") ? $_POST['cod'] : NULL;
      $nombre = ($_POST['nombre'] !== "") ? $_POST['nombre'] : NULL;
      $descripcion = ($_POST['descripcion'] !== "") ? $_POST['descripcion'] : NULL;
      $duracion     = ($_POST['duracion'] !== "") ? $_POST['duracion'] : NULL;
  
      if ($this->model->insert(['codPrueba'=>$cod, 'nomPrueba'=>$nombre, 'desPrueba'=>$descripcion, 'durPrueba'=>$duracion])){
      	
        $this->view->mensaje = 'Prueba agregada exitosamente!.';
      }else{
        $this->view->mensaje = 'Ha ocurrido un error.';
      }
    }else{
      $this->view->mensaje = 'Rellene los campos';
    }

    $this->view->render('stressing/agregar');
  }

  function prueba() {
    if(isset($_POST['agregar'])){
      $codprueba    = ($_POST['codprueba'] !== "") ? $_POST['codprueba'] : NULL;
      $produto = ($_POST['produto'] !== "") ? $_POST['produto'] : NULL;
      $fecha = ($_POST['fecha'] !== "") ? $_POST['fecha'] : NULL;
      $hora     = ($_POST['hora'] !== "") ? $_POST['hora'] : NULL;
      $resultado     = ($_POST['resultado'] !== "") ? $_POST['resultado'] : NULL;
      $observacion     = ($_POST['observacion'] !== "") ? $_POST['observacion'] : NULL;

      if ($this->model->insertPrueba(['codPruebaProducto'=>$codprueba, 'codProductoPrueba'=>$produto, 'fechaPruebaProducto'=>$fecha, 'horaPruebaProducto'=>$hora, 'resultPruebaProducto'=>$resultado, 'obserbPruebaProducto'=>$observacion])){
        
        $this->view->mensaje = 'Prueba realizada exitosamente!.';
      }else{
        $this->view->mensaje = 'Ha ocurrido un error.';
      }
    }else{
      $this->view->mensaje = 'Rellene los campos';
    }
    $pruebas = $this->model->get();
    $this->view->pruebas = $pruebas;
    $this->view->render('stressing/prueba');
  }




  function actualizarPrueba($param = null){

    if(isset($_POST['modificar'])){

        $cod    = ($_POST['cod'] !== "") ? $_POST['cod'] : NULL;
        $nombre = ($_POST['nombre'] !== "") ? $_POST['nombre'] : NULL;
        $descripcion = ($_POST['descripcion'] !== "") ? $_POST['descripcion'] : NULL;
        $duracion = ($_POST['duracion'] !== "") ? $_POST['duracion'] : NULL;

        if ($this->model->updateModelo(['cod'=>$cod, 'nombre'=>$nombre, 'descripcion'=>$descripcion, 'duracion'=>$duracion])){

          $this->view->mensaje = 'Actualizado Exitosamente';

        }else{
          $this->view->mensaje = 'Ha ocurrido un error.';
        }

        $this->view->render('stressing/mensaje');
    } else {
      $prueba = $this->model->get($param[0]);

        $this->view->prueba = $prueba[0];

        if ( sizeof($prueba) ) {

          $this->view->mensaje = 'Modificar la prueba: '. $param[0];
        $this->view->render('stressing/modificar');

      } else {
        $this->view->mensaje = 'Ha ocurrido un error';
        $this->view->render('stressing/mensaje');
      }
    }


  }
  function eliminarPrueba($param = null){

    if( $this->model->delete($param[0]) ) {
      $this->view->mensaje = 'Prueba eliminada con exito';
    } else {

      $this->view->mensaje = 'Ha ocurrido un error';

    }

   $this->view->render('stressing/mensaje');

  }
}
?>