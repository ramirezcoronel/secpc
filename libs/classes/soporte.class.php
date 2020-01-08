<?php 

class SoporteTec extends Database{
    
    private $numSop;
    private $fallaReport;
	private $fecha;
	private $horaEn;
	private $horaSda;
	private $estatus;
	private $desActividad;



	public function getNumSop(){
       return $this->numSop;
	}

	public function getFallaReport(){
       return $this->fallareport;
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
	


    //ahora los setters
	public function setNumSop($numSop){
       $this->numSop = $numSop;
	}

	public function setFallaReport($fallareport){
       $this->fallareport = $fallaReport;
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

	public function setEstatus($etatus){
       $this->estatus = $estatus;
	}

	public function setDesActividad($desActividad){
		$this->desactividad = $desActividad;
	}
	
}

?>