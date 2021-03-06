<?php 

class SoporteClass extends Database{
    
    private $numSop;
    private $fallaReport;
	private $fecha;
	private $horaEn;
	private $horaSda;
	private $estatus;
	private $desActividad;
	private $numPrueba;



	public function getNumSop(){
       return $this->numSop;
	}

	public function getFallaReport(){
       return $this->fallaReport;
	}

	public function getFecha(){
       return $this->fecha;
	}

	public function getHoraEn(){
       return $this->horaEn;
	}

	public function getHoraSda(){
       return $this->horaSda;
	}

	public function getEstatus(){
       return $this->estatus;
	}

	public function getDesActividad(){
		return $this->desactividad;
	}
	public function getNumPrueba(){
		return $this->numPrueba;
	}
	


    //ahora los setters
	public function setNumSop($numSop){
       $this->numSop = $numSop;
	}

	public function setFallaReport($fallaReport){
       $this->fallaReport = $fallaReport;
	}

	public function setFecha($fecha){
       $this->fecha = $fecha;
	}

	public function setHoraEn($horaEn){
       $this->horaEn = $horaEn;
	}

	public function setHoraSda($horaSda){
       $this->horaSda = $horaSda;
	}

	public function setEstatus($estatus){
       $this->estatus = $estatus;
	}

	public function setDesActividad($desActividad){
		$this->desactividad = $desActividad;
	}

	public function setNumPrueba($numPrueba){
		$this->numPrueba = $numPrueba;
	}
	
}

?>