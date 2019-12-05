<?php

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

?>