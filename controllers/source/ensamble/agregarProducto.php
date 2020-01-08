<?php 

	$this->view->visible = false;

		if ( isset($_POST['agregar']) ) {

		    $codigo    = ($_POST['codigo']    !== "") ? $_POST['codigo']    : NULL;
	      $fecha     = ($_POST['fecha']     !== "") ? $_POST['fecha']     : NULL;
	      $codequipo = ($_POST['codequipo'] !== "") ? $_POST['codequipo'] : NULL;
	      $estatus   = 1;

 			if ($this->model->productos->insert(['codigo'=>$codigo, 'fecha'=>$fecha, 'codequipo'=>$codequipo, 'estatus'=>$estatus])) {
 				
 					$this->view->mensaje = 'Producto agregado exitosamente';

 					//tomar el producto

 					$producto = $this->model->productos->get($codigo);
 					$this->view->producto = $producto[0];



 					$this->view->visible = true;

 					 $partes = $this->model->partes->get();
    				$this->view->partes = $partes;

 					$partesequipos = $this->model->partesequipos->get($codequipo);
    				$this->view->partesequipos = $partesequipos;

 			}else{
              
 					$this->view->mensaje = 'Ha ocurrido un error al registrar un nuevo producto';
 					$this->view->error = $this->model->productos->getError();
			  }
 			}else{

 					$this->view->mensaje = 'Rellene los campos del nuevo producto';

 			}

 			$equipos = $this->model->equipos->get();
 			$this->view->equipos = $equipos;
 			$this->view->render('ensamble/agregarProducto');

 ?>