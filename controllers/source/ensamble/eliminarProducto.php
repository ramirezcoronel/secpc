<?php 

	if ($this->model->productos->drop($param[0])) {
        
          $this->view->mensaje = 'Producto eliminado';

        }else{

          $this->view->mensaje = 'Ha ocurrido un erro al eliminar el producto';

        }

          $this->view->render('ensamble/mensaje');

 ?>