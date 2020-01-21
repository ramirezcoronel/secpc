<?php

	ob_start();

	require 'plantilla.php';
		$pdf = new PDF();
		$pdf->AddPage();
		$pdf->SetLeftMargin($pdf->GetPageWidth() / 2 - 55);
		$pdf->SetFont('Helvetica','B',15);//Tipo de letra, negrita, tamaño
		$pdf->Ln(10);//salto de linea

		$movimientos = $this->model->movimientos->get();
	//MOVIMIENTOS
	$pdf->SetLeftMargin($pdf->GetPageWidth() / 2 - (121) / 2);
	$pdf->Ln(10);

	$pdf->SetFont('Helvetica','B',15);//Tipo de letra, negrita, tamaño
	$pdf->Cell(121, 10,  'MOVIMIENTOS',1, 0,'C', 0);
	$pdf->Ln(10);

	$pdf->SetFont('Arial','B',12);//Tipo de letra, negrita, tamaño
	$pdf->Cell(23, 10,  'Numero',1, 0,'C', 0);
	$pdf->Cell(14, 10, 'Tipo',1, 0,'C', 0);
	$pdf->Cell(30, 10, 'Fecha',1, 0,'C', 0);
	$pdf->Cell(26, 10, 'Hora',1, 0,'C', 0);
	$pdf->Cell(28, 10, 'Estatus',1, 0,'C', 0);
	$pdf->Ln(10);



	$pdf->SetFont('Arial','',12);//Tipo de letra, negrita, tamaño
	foreach ($movimientos as $row) {

		$pdf->Cell(23,10, $row->getNumero(), 1, 0,'C', 0);
		$pdf->Cell(14,10, $row->getTipo(), 1, 0,'C', 0);
		$pdf->Cell(30,10, $row->getFecha(), 1, 0,'C', 0);
		$pdf->Cell(26,10, $row->getHora(), 1, 0,'C', 0);
		$pdf->Cell(28,10, $row->getEstatus(), 1, 0,'C', 0);
	    $pdf->Ln(10);//salto de linea
	}



	//$pdf->AddPage();
	$pdf->Output();
	ob_end_flush();
?>
