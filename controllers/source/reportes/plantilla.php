<?php

$libreria = 'fpdf/fpdf.php';

include ($libreria);

class PDF extends FPDF {

	function Header(){
		$this->SetFont('Helvetica','B',20);//Tipo de letra, negrita, tamaño
		$this->Cell(0,15,'INVENTARIO',0,0,'C');
		$this->Ln(10);

		

		
	}	
}
  
?>