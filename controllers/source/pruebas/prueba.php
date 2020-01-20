<?php 

  if(isset($_POST['agregar'])){
      $numprueba  = ($_POST['numero'] !== "") ? $_POST['numero'] : NULL;
      $codprueba    = ($_POST['codprueba'] !== "") ? $_POST['codprueba'] : NULL;
      $produto = ($_POST['produto'] !== "") ? $_POST['produto'] : NULL;
      $fecha = ($_POST['fecha'] !== "") ? $_POST['fecha'] : NULL;
      $hora  = ($_POST['hora'] !== "") ? $_POST['hora'] : NULL;
      $resultado = ($_POST['resultado'] !== "") ? $_POST['resultado'] : NULL;
      $observacion = (isset($_POST['observacion'])) ? $_POST['observacion'] : NULL;
      $estatusPruebaProducto = 1;

      if ($this->model->validar($produto)) {

         if ($this->model->insertPrueba([
          'numpruebaproducto'=>$numprueba,
          'codPruebaProducto'=>$codprueba, 
          'codProductoPrueba'=>$produto, 
          'fechaPruebaProducto'=>$fecha, 
          'horaPruebaProducto'=>$hora, 
          'resultPruebaProducto'=>$resultado, 
          'obserbPruebaProducto'=>$observacion, 
          'estatusPruebaProducto'=>$estatusPruebaProducto])){
          
          $this->view->mensaje = 'Prueba realizada exitosamente!.';
        }else{
          $this->view->mensaje = 'Ha ocurrido un error.';
        }
      }else{
        $this->view->mensaje = 'El codigo del produto no esta registrado en la base de dato.';
      }
  }else{
      $this->view->mensaje = 'Rellene los campos';
    }
    $pruebas = $this->model->get();
    $this->view->pruebas = $pruebas;
    $this->view->render('pruebas/prueba');    
 ?>