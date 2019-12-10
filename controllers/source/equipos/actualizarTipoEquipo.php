<?php

	if(isset($_POST['actualizar'])){
        //Inputs
        $codtipoequipo    = ($_POST['codTipoEquipo'] !== "") ? $_POST['codTipoEquipo'] : NULL;
        $nomequipo = ($_POST['nomTipoEquipo'] !== "") ? $_POST['nomTipoEquipo'] : NULL;



        $data = array('codtipoequipo'=>$codtipoequipo, 'nomequipo'=>$nomequipo);

        if ($this->model->tiposequipos->update($data)){

          $this->view->mensaje = 'Actualizado Exitosamente';

        }else{
          $this->view->mensaje = 'Ha ocurrido un error.';
        }

        $this->view->render('equipos/mensaje');

      }else{
          
        $tipos = $this->model->tiposequipos->get($param[0]);
        

        if ( sizeof($tipos) ) {
        $this->view->tipo = $tipos[0];
        $this->view->mensaje = 'Rellene los campos';
        $this->view->render('equipos/actualizarTipoEquipo');

      } else {
        $this->view->mensaje = 'Ha ocurrido un error';
        $this->view->render('equipos/mensaje');
      }

      }


?>