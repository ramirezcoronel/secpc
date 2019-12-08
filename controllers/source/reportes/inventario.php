<?php 

	ob_start();
	
		require 'plantilla.php';
		$pdf = new PDF();
		$pdf->AddPage();
		$pdf->SetFont('Arial','B',16);
		$pdf->Ln(10);//salto de linea


		$modelos = $this->model->modelos->get();

		foreach ($modelos as $row) {

			$pdf->Cell(50,10, $row->getId(), 1, 0,'c', 0);
			$pdf->Cell(50,10, $row->getEstatus(), 1, 0,'c', 0);
			$pdf->Cell(50,10, $row->get(), 1, 0,'c', 0);
		    $pdf->Ln(10);//salto de linea
			
		}

	
		$pdf->Output();
		ob_end_flush(); 
		


?>