<?php

	ob_start();

		require 'plantilla.php';
		$pdf = new PDF();
		$pdf->AddPage();
		$pdf->SetLeftMargin($pdf->GetPageWidth() / 2 - 55);
		$pdf->SetFont('Helvetica','B',15);//Tipo de letra, negrita, tamaño
		$pdf->Ln(10);//salto de linea

		$modelos = $this->model->modelos->get();

		//MODELOS
		$pdf->Cell(110, 10,  'MODELOS',1, 0,'C', 0);
		$pdf->Ln(10);

		$pdf->SetFont('Arial','B',12);//Tipo de letra, negrita, tamaño

		$pdf->Cell(30, 10,  'Id',1, 0,'C', 0);
		$pdf->Cell(30, 10, 'Nombre',1, 0,'C', 0);
		$pdf->Cell(20, 10, 'Estatus',1, 0,'C', 0);
		$pdf->Cell(30, 10, 'Id marca',1, 0,'C', 0);

		$pdf->Ln(10);

		$pdf->SetFont('Arial','',12);//Tipo de letra, negrita, tamaño
		foreach ($modelos as $row) {

			$pdf->Cell(30,10, $row->getId(), 1, 0,'C', 0);
			$pdf->Cell(30,10, $row->getNombre(), 1, 0,'C', 0);
			$pdf->Cell(20,10, $row->getEstatus(), 1, 0,'C', 0);
			$pdf->Cell(30,10, $row->getMarca(), 1, 0,'C', 0);
		    $pdf->Ln(10);//salto de linea

		}

		//$pdf->AddPage();
		$pdf->Output();
		ob_end_flush();
?>
