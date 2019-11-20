<?php

$libreria = 'fpdf/fpdf.php';

include ($libreria);

class PDF extends FPDF {

	function Header(){
		$this->SetFont('Times','B',15);//Tipo de letra, negrita, tamaño
		$this->Cell(20);
		$this->Cell(50,10,'Reporte inventario',0,0,'C');
		$this->Ln(10);//salto de linea
		$this->Ln(20);//tamaño de la casilla,ancho del borde, texto,salto de linea, tipo negrita, alineacion

		$this->Cell(50, 10,  'idmodelo',1, 0,'c', 0);
		$this->Cell(50, 10, 'estatus',1, 0,'c', 0);
		$this->Cell(50, 10, 'Marca',1, 0,'c', 0);
	}	
}
  
?>