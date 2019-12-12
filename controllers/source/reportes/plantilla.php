<?php

$libreria = 'fpdf/fpdf.php';

include ($libreria);

class PDF extends FPDF {

	function Header(){
		$this->SetLeftMargin($this->GetPageWidth() / 2 - (100) / 2); //centrar
		$this->SetFont('Helvetica','B',20);//Tipo de letra, negrita, tamaño
		$this->Cell(100,15,'INVENTARIO',0,0,'C');
		$this->Ln(10);




	}
}

?>
