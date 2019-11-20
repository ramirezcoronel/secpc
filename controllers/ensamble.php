<?php  

class Ensamble extends Controller{
	public function __construct(){
		parent::__construct();
	}

	public function render(){
		$productos =  $this->model->getProductos();
		$this->view->productos = $productos;

		$this->view->render('ensamble/index');
	}

  function consultarEquipos(){

      $equipos = $this->model->getEquipos();
      $this->view->equipos = $equipos;
      $this->view->render('ensamble/consultarEquipo');
  }

	public function agregarProducto () {

		$this->view->visible = false;

		if ( isset($_POST['agregar']) ) {

		    $codigo    = ($_POST['codigo']    !== "") ? $_POST['codigo']    : NULL;
	      $fecha     = ($_POST['fecha']     !== "") ? $_POST['fecha']     : NULL;
	      $codequipo = ($_POST['codequipo'] !== "") ? $_POST['codequipo'] : NULL;
	      $estatus   = 1;

 			if ($this->model->insertProducto(['codigo'=>$codigo, 'fecha'=>$fecha, 'codequipo'=>$codequipo, 'estatus'=>$estatus])) {
 				
 					$this->view->mensaje = 'Producto agregado exitosamente';
 			}else{
              
 					$this->view->mensaje = 'Ha ocurrido un error al registrar un nuevo producto';
			  }
 			}else{

 					$this->view->mensaje = 'Rellene los campos del nuevo producto';

 			}

 			$equipos = $this->model->getEquipos();
 			$this->view->equipos = $equipos;
 			$this->view->render('ensamble/agregarProducto');
	     }
		
       
  	  function actualizarProducto($param = null){

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

		

	*/}//fin de la funcion 

      public function eliminarProducto($param){
          if ($this->model->deleteProducto($param[0])) {
          
            $this->view->mensaje = 'Producto eliminado';

          }else{

            $this->view->mensaje = 'Ha ocurrido un erro al eliminar el producto';

          }

            $this->view->render('ensamble/mensaje');

      }//fin de la funcion delete


    }// fin de la clase
?>
