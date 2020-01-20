<?php

  class soporteCRUD extends Model{

    function __construct() {
      parent::__construct();
    }

    function insert ($data){
     	try{
     		$query = $this->db->connect()->prepare('INSERT INTO soporteproducto (num, fallareportada, fecha, horainicio,horafin, desactividad, estatus, numprueba) VALUES (:num,:fallareportada, :fecha, :horainicio, :horafin, :desactividad, :estatus, :numprueba)');

     		$query->execute(['num'=>$data['num'], 'fallareportada'=>$data['fallareportada'], 'fecha'=>$data['fecha'], 'horainicio'=>$data['horainicio'], 'horafin'=>$data['horafin'], 'desactividad'=>$data['desactividad'], 'estatus'=>$data['estatus'], 'numprueba'=>$data['numprueba']]);
     		return true;
     	}catch(PDOException $e){
            $this->error = $e->getMessage();
     		return false;
     	}
     }

     function get($id = null){
     	 $items = [];
        try {
          if ( isset($id) ) {
            $query = $this->db->connect()->prepare('SELECT * FROM soporteproducto WHERE num = :id');
            $query->execute(['id'=>$id]);
          }else {
  
           $query = $this->db->connect()->query('SELECT * FROM soporteproducto');
          }

     		while($row = $query->fetch()){
     			$item = new soporteClass();

     			$item->setNumSop($row['num']);
     			$item->setFallaReport($row['fallareportada']);
     			$item->setFecha($row['fecha']);
     			$item->setHoraEn($row['horainicio']);
     			$item->setHoraSda($row['horafin']);
     			$item->setEstatus($row['estatus']);
                $item->setDesActividad($row['desactividad']);
                $item->setNumPrueba($row['numprueba']);

     			array_push($items, $item);
     	   }
     		return $items;
     	}   catch (PDOException $e) {
     		return [];
     	}
     }

     public function update ($data) {
        try{
        $query = $this->db->connect()->prepare('UPDATE soporteproducto SET  fallareportada = :fallareportada, fecha = :fecha, horainicio = :horainicio,horafin = :horafin, desactividad = :desactividad WHERE num = :num');

        $query->execute(['num'=>$data['num'], 'fallareportada'=>$data['fallareportada'], 'fecha'=>$data['fecha'], 'horainicio'=>$data['horainicio'], 'horafin'=>$data['horafin'], 'desactividad'=>$data['desactividad']]);
        return true;
      }catch(PDOException $e){
            $this->error = $e->getMessage();
        return false;
      }
     }

      function gett(){
      $items = [];
       try{

        $query = $this->db->connect()->query('SELECT * FROM soportesproducto');

        while($row = $query->fetch()){
            $item = new soporteTec();

            $item->setNumSop($row['numSoporteProducto']);
            $item->setSerial($row['serialProducto']);
            $item->setEstatus($row['estatusSoporte']);

            array_push($items, $item);
        }
        return $items;
       }catch (PDOException $e){
        return [];
    }
 }



     function drop ($num){

     	try{

     	$query = $this->db->connect()->prepare('DELETE FROM soportesproducto WHERE numSoporteProducto = :numSoporteProdcuto');
     	$query->execute(['numSoporteProducto'=>$num]);

     	if($query->rowcount()){
     		return true;     	
     	} else{
     		return false;
     	}

      }  catch (PDOException $e) {
     	return false;
     }
     	
  }
   public function getError () {
      return $this->error;
    }
  }
?>