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

     function get(){
     	$items = [];
     	try{
     		$query = $this->db->connect()->query('SELECT * FROM soportesproducto', 'SELECT * FROM pruebasproducto');
            

     		while($row = $query->fetch()){
     			$item = new soporteTec();

     			$item->setNumSop($row['numSoporteProducto']);
     			$item->setResultado($row['resultPruebaProducto']);
     			$item->setDetalles($row['detallefalla']);
     			$item->setFecha($row['fechaIngreso']);
     			$item->setHoraEn($row['horaEnSoporte']);
     			$item->setHoraSda($row['horaSdaSoporte']);

     			array_push($items, $item);
     	   }
     		return $items;
     	}   catch (PDOException $e) {
     		return [];
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