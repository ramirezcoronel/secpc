<?php

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

?>