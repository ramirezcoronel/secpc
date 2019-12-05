<?php

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

?>