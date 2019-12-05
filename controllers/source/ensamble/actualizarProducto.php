<?php 

	if (isset($_POST['actualizar'])) {
  	  			$codigo = ($_POST['codigo'] !=="") ? $_POST['codigo'] : NULL;
  	  			$fecha = ($_POST['fecha'] !=="") ? $_POST['fecha'] : NULL;
  	  			$estatus = 1;
  	  			$codequipo = ($_POST['codequipo'] !=="") ? $_POST['codequipo'] : NULL;  	  		

  	  		if ($this->model->updateProducto(['codigo'=>$codigo, 'fecha'=>$fecha, 'estatus'=>$estatus, 'codequipo'=>$codequipo])) {
  	  			
  	  			$this->view->mensaje = 'Actualizacion de producto exitosa';

  	  			}else{

  	  				$this->view->mensaje = 'Ha ocurrido un error al actualizar el producto';

  				}
  	  				
  	  				$this->view->render('ensamble/mensaje');

  	  			}else{	

  	  				$equipo = $this->model->getEquipos($param[0]);
  	  				$this->view->equipo = $equipo[0];

  	  				if (sizeof($equipo)) {

  	  					$tipo = $this->model->getCodigoEquipos();
  	  					$this->view->tipo = $tipo;
  	  					$this->view->mensaje = 'Rellene lo campos';
  	  					$this->view->render('ensamble/actualizarProducto');

  	  				}else{

  	  					$this->view->mensaje = 'Ha ocurrido un error';
  	  					$this->view->render('ensamble/mensaje');
  	  				}
  	  		}

		/*} else if( isset($_POST['AgregarPieza']) ) {

		} else {
			$this->view->mensaje = 'Agregar Producto';
		}

		$productos = $this->model->getCodigoEquipos();
		$this->view->productos = $productos;

		*/
 ?>