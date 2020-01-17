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
			} else if( isset($_POST['agregarParte']) ){
				$codigo      = ($_POST['num']    !== "") ? $_POST['num']    : NULL;
				$codigoEjemplar = ($_POST['codigoEjemplar']    !== "") ? $_POST['codigoEjemplar']    : NULL;
				$codparte    = ($_POST['codparte']    !== "") ? $_POST['codparte']    : NULL;
				$ubicacion   = 'E';
				$estatus     = '2';
				$serial      = ($_POST['numserialfabricante'] !== "") ? $_POST['numserialfabricante'] : NULL;
				$cantidad    = ($_POST['cantidadparte'] !== "") ? $_POST['cantidadparte'] : NULL;
				$codequipo = ($_POST['tipo'] !== "") ? $_POST['tipo'] : NULL;

				if (!isset($serial)) {
					for ($i=0; $i < $cantidad; $i++) { 
						$data = array('codigo'=>$i.'-'.$codigoEjemplar,'ubicacion'=>$ubicacion,
									'estatus'=>$estatus,'codparte'=>$codparte,'codproducto'=>$codigo);

						if ($this->model->ejemplaresparte->insert($data)){
							$this->view->mensaje = 'Agregados Exitosamente';
						} else{
							$this->view->mensaje = 'Ha habido un problema';
						}
					}

					$updateData = array('codpartes'=>$codparte, 'cantidadparte'=>$cantidad);

					if ( $this->model->partes->update($updateData, "2")) {
			        	$this->view->mensaje = 'Agregados Exitosamente';
			        }

				} else {
					$data = array('codigo'=>$codigoEjemplar,
					'serialfabri'=>$serial,
					 'ubicacion'=>$ubicacion,
					 'estatus'=>$estatus,
					 'codparte'=>$codparte,
					 'codproducto'=>$codigo);

					if($this->model->renglonesmovimientos->get($serial)){
						if ($this->model->ejemplaresparte->insert($data)){
							$updateData = array('codpartes'=>$codparte, 'cantidadparte'=>$cantidad);

							if ( $this->model->partes->update($updateData, "2")) {
				        		$this->view->mensaje = 'Agregados Exitosamente';
				        	}

						} else{
							$this->view->error = 'Ha ocurrido un error al insertar parte.';
						}
					} else {
						$this->view->error = 'Serial no ha sido registrado en el sistema.';
					}
				}

				$producto = $this->model->productos->get($codigo);
 					$this->view->producto = $producto[0];

 					$this->view->visible = true;

 					 $partes = $this->model->partes->get();
    				$this->view->partes = $partes;

 					$partesequipos = $this->model->partesequipos->get($codequipo);
    				$this->view->partesequipos = $partesequipos;

    				$partesensambladas = $this->model->ejemplaresparte->get($codigo);
    				$this->view->partesensambladas = $partesensambladas;
			}
			 else{

 					$this->view->mensaje = 'Rellene los campos del nuevo producto';

 			}
 			$equipos = $this->model->equipos->get();
 			$this->view->equipos = $equipos;
 			$this->view->render('ensamble/agregarProducto');

 ?>