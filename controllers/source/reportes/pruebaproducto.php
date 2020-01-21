<?php

	ob_start();

		require 'plantilla.php';
		$pdf = new PDF();
		$pdf->AddPage();
		$pdf->SetLeftMargin($pdf->GetPageWidth() / 2 - 55);
		$pdf->SetFont('Helvetica','B',15);//Tipo de letra, negrita, tamaño
		$pdf->Ln(10);//salto de linea

		$pruebaproducto = $this->model->pruebaproducto->get();



		//PRUEBAS DE PRODUCTOS
		$pdf->SetLeftMargin($pdf->GetPageWidth() / 2 - (191) / 2);
		$pdf->Ln(10);
		$pdf->Cell(191, 10,  'Prueba de productos',1, 0,'C', 0);
		$pdf->Ln(10);

		$pdf->SetFont('Arial','B',12);//Tipo de letra, negrita, tamaño

		$pdf->Cell(30, 10,  'Num prueba',1, 0,'C', 0);
		$pdf->Cell(40, 10, 'Resultado',1, 0,'C', 0);
		$pdf->Cell(20, 10, 'Hora',1, 0,'C', 0);
		$pdf->Cell(53, 10, 'Observacion',1, 0,'C', 0);
		$pdf->Cell(25, 10, 'Cod',1, 0,'C', 0);
		$pdf->Cell(23, 10, 'Fecha',1, 0,'C', 0);

		//$pdf->Cell(35, 10, 'cod',1, 0,'C', 0);


		$pdf->Ln(10);

		$pdf->SetFont('Arial','',12);//Tipo de letra, negrita, tamaño
		foreach ($pruebaproducto as $row) {

			$pdf->Cell(30,10, $row->getNum(), 1, 0,'C', 0);
			$pdf->Cell(40,10, $row->getResultado(), 1, 0,'C', 0);
			$pdf->Cell(20,10, $row->getHora(), 1, 0,'C', 0);
			$pdf->Cell(53,10, $row->getobservacion(), 1, 0,'C', 0);
			$pdf->Cell(25,10, $row->getcodproducto(), 1, 0,'C', 0);
			$pdf->Cell(23,10, $row->getFecha(), 1, 0,'C', 0); 

			//$pdf->Cell(35,10, $row->getCod(), 1, 0,'C', 0);
		    $pdf->Ln(10);//salto de linea

		}

		//$pdf->AddPage();
		$pdf->Output();
		ob_end_flush();
?>
