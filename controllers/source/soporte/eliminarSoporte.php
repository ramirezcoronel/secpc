<?php
	if ( $this->model->soporte->drop($param[0]) ) {
		$mensaje = 'Soporte Eliminado';
	} else {
		$mensaje = 'Ha ocurrido un Error';

	}

	echo $mensaje;
?>