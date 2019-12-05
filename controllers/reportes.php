<?php  

  class Reportes extends Controller{
  	public function __construct(){
		parent::__construct();
		$this->view->modelos=[];
		$this->view->partes=[];
	}

	public function render(){
	  $this->view->mensaje = 'Gestionar Partes de reportes';
	  $this->view->render('reportes/index');
	}

	public function output () {
		ob_start();
		require 'plantilla.php';
		$pdf = new PDF();
		$pdf->AddPage();
		$pdf->SetFont('Arial','B',16);
		$pdf->Ln(10);//salto de linea

		$datos = $this->model->getModelos();

		foreach ($datos as $row) {

			$pdf->Cell(50,10, $row->getId(), 1, 0,'c', 0);
			$pdf->Cell(50,10, $row->getEstatus(), 1, 0,'c', 0);
			$pdf->Cell(50,10, $row->get(), 1, 0,'c', 0);
		    $pdf->Ln(10);//salto de linea
			
		}

	
		$pdf->Output();
		ob_end_flush(); 
		
	}



}
?>