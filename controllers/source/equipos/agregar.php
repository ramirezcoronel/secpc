<?php

	$this->view->visible = false;

    if(isset($_POST['agregar'])){
      //inputs de modelo

        $codtipoequipo = ($_POST['codtipoequipo'] !== "") ? $_POST['codtipoequipo'] : NULL;
        $codequipo = ($_POST['codequipo'] !== "") ? $_POST['codequipo'] : NULL;
        $nomequipo = ($_POST['nomequipo'] !== "") ? $_POST['nomequipo'] : NULL;
        $estatusequipo = 1;

        if ($this->model->equipos->insert(['codtipoequipo'=>$codtipoequipo, 'codequipo'=>$codequipo, 'nomequipo'=>$nomequipo, 'estatusequipo'=>$estatusequipo])){

          $this->view->mensaje = 'Equipo Agregado exitosamente!.';

          $equipos = $this->model->equipos->get($codequipo);
          $this->view->equipo = $equipos[0];

          
          $partes = $this->model->partes->get();
          $this->view->partes = $partes;
          
          $this->view->equipos = $equipos;
          $this->view->partes = $partes;
          $this->view->visible = true;

        }else{
          $this->view->mensaje = 'Ha ocurrido un error.';
          $this->view->error = $this->model->equipos->getError();
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

    
        if ($this->model->partesequipos->insert(['codequipo'=>$codequipo, 'codpartes'=>$codpartes, 'cantidadparteequipo'=>$cantidadparteequipo, 'estatusparteequipo'=>$estatusparteequipo])){

          $this->view->mensaje = 'Partes agregadas a equipo exitosamente!.';

          $equipos = $this->model->equipos->get($codequipo);
          $this->view->equipo = $equipos[0];

          
          $partes = $this->model->partes->get();
          $this->view->partes = $partes;
          
          $this->view->equipos = $equipos;
          $this->view->partes = $partes;
          $this->view->visible = true;

        }else{
          $this->view->mensaje = 'Ha ocurrido un error.';
          $this->view->error = $this->model->partesequipos->getError();
        }
      }


      $tipos = $this->model->tiposequipos->get();
      $this->view->tipos = $tipos;

      $this->view->render('equipos/agregar');

?>