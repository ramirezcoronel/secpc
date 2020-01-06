<?php

$libreria = 'fpdf/fpdf.php';

include ($libreria);

class PDF extends FPDF {

	function Header(){
		$this->setY(0);
		$this->setX(0);
		$this->SetFont('Helvetica','B',20);//Tipo de letra, negrita, tamaño
		$this->setFillColor(60,60,60);
		$this->SetTextColor(255,255,255);
		$this->Cell($this->GetPageWidth(),15,'INVENTARIO',0,0,'C', TRUE);
		$this->Ln(10);
	}
}

?>
