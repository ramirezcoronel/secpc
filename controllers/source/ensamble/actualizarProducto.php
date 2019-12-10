<?php 

	if (isset($_POST['actualizar'])) {
  	  			$codigo = ($_POST['codigo'] !=="") ? $_POST['codigo'] : NULL;
  	  			$fecha = ($_POST['fecha'] !=="") ? $_POST['fecha'] : NULL;
  	  			$estatus = 1;
  	  			$codequipo = ($_POST['codequipo'] !=="") ? $_POST['codequipo'] : NULL;  	  		

  	  		if ($this->model->productos->update(['codigo'=>$codigo, 'fecha'=>$fecha, 'estatus'=>$estatus, 'codequipo'=>$codequipo])) {
  	  			
  	  			$this->view->mensaje = 'Actualizacion de producto exitosa';

  	  			}else{

  	  				$this->view->mensaje = 'Ha ocurrido un error al actualizar el producto';

  				}
  	  				
  	  				$this->view->render('ensamble/mensaje');

  	  			}else{	

  	  				$equipo = $this->model->productos->get($param[0]);

              $this->view->equipo = $equipo[0];

  	  				if (sizeof($equipo)) {
  	  					$this->view->mensaje = 'Rellene lo campos';
  	  					$this->view->render('ensamble/actualizarProducto');

  	  				}else{

  	  					$this->view->mensaje = 'Ha ocurrido un error';
  	  					$this->view->render('ensamble/mensaje');
  	  				}
  	  		}
 ?>