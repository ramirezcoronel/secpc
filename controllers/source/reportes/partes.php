<?php

	ob_start();

	require 'plantilla.php';
		$pdf = new PDF();
		$pdf->AddPage();
		$pdf->SetLeftMargin($pdf->GetPageWidth() / 2 - 55);
		$pdf->SetFont('Helvetica','B',15);//Tipo de letra, negrita, tamaño
		$pdf->Ln(10);//salto de linea

		$partes = $this->model->partes->get();


	//PARTES

		$pdf->SetLeftMargin($pdf->GetPageWidth() / 2 - (191) / 2);
		$pdf->Ln(10);
		$pdf->SetFont('Helvetica','B',15);//Tipo de letra, negrita, tamaño
		$pdf->Cell(191, 10,'PARTES',1, 0,'C', 0);
		$pdf->Ln(10);

		$pdf->SetFont('Arial','B',12);//Tipo de letra, negrita, tamaño
		$pdf->Cell(23, 10,  'Codigo',1, 0,'C', 0);
		$pdf->Cell(14, 10, 'Serial',1, 0,'C', 0);
		$pdf->Cell(16, 10, 'Estatus',1, 0,'C', 0);
		$pdf->Cell(26, 10, 'StockActual',1, 0,'C', 0);
		$pdf->Cell(28, 10, 'StockMaximo',1, 0,'C', 0);
		$pdf->Cell(28, 10, 'StockMinimo',1, 0,'C', 0);
		$pdf->Cell(31, 10, 'PuntoReorden',1, 0,'C', 0);
		$pdf->Cell(25, 10, 'IdModelo',1, 0,'C', 0);

		$pdf->Ln(10);

		$pdf->SetFont('Arial','',12);//Tipo de letra, negrita, tamaño
		foreach ($partes as $row) {

			$pdf->Cell(23,10, $row->getCodigo(), 1, 0,'C', 0);
			$pdf->Cell(14,10, $row->getSerializable(), 1, 0,'C', 0);
			$pdf->Cell(16,10, $row->getEstatus(), 1, 0,'C', 0);
			$pdf->Cell(26,10, $row->getStockActual(), 1, 0,'C', 0);
			$pdf->Cell(28,10, $row->getStockMaximo(), 1, 0,'C', 0);
			$pdf->Cell(28,10, $row->getStockMinimo(), 1, 0,'C', 0);
			$pdf->Cell(31,10, $row->getPuntoReorden(), 1, 0,'C', 0);
			$pdf->Cell(25,10, $row->getIdModelo(), 1, 0,'C', 0);
		    $pdf->Ln(10);//salto de linea

		}
		$pdf->SetLeftMargin(0);
		$pdf->AddPage();



		//$pdf->AddPage();
		$pdf->Output();
		ob_end_flush();
?>
