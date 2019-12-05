<?php

  class usuariosCRUD extends Model{

    function __construct() {
      parent::__construct();
    }

    public  function insert ($data) {
      try{
        $query = $this->db->connect()->prepare('INSERT INTO usuariossistema (cedulaUsuario, nombreUsuario, apellidoUsuario, username, passUsuario, estatusUsuario, rolUsuario) VALUES(:cedulaUsuario, :nombreUsuario, :apellidoUsuario, :username, :passUsuario, :estatusUsuario, :rolUsuario)');
  
        $query->execute(['cedulaUsuario'=>$data['cedulaUsuario'], 'nombreUsuario'=>$data['nombreUsuario'],  'apellidoUsuario'=>$data['apellidoUsuario'], 'username'=>$data['username'], 'passUsuario'=>$data['passUsuario'], 'estatusUsuario'=>$data['estatusUsuario'], 'rolUsuario'=>$data['rolUsuario']]);
        
        return true;
      } catch(PDOException $e){
        
        return false;
      }
    }
      
    function get () {
      $items = [];
      try {
        $query = $this->db->connect()->query('SELECT * FROM usuariossistema');
  
        while($row = $query->fetch()){
          $item = new UsuariosClass();
          
          $item->setId($row['idusuario']);
          $item->setCedula($row['cedulausuario']);
          $item->setNombre($row['nombreusuario']);
          $item->setApellido($row['apellidousuario']);
          $item->setUsername($row['username']);
          $item->setPass($row['passusuario']);
          $item->setEstatus($row['estatususuario']);
          $item->setRol($row['rolusuario']);
  
          array_push($items, $item);
        }
        return $items;
      } catch (PDOException $e) {
        return [];
      }
    }
  
    function search($data) {
    
      try {
        $query = $this->db->connect()->prepare('SELECT * FROM usuariossistema WHERE cedulausuario = :cedulausuario');
        $query->execute(['cedulausuario'=>$data]);
  
        while($row = $query->fetch()){
          $item = new UsuariosClass();
          
  
          $item->setId($row['idusuario']);
          $item->setCedula($row['cedulausuario']);
          $item->setNombre($row['nombreusuario']);
          $item->setApellido($row['apellidousuario']);
          $item->setUsername($row['username']);
          $item->setPass($row['passusuario']);
          $item->setEstatus($row['estatususuario']);
          $item->setRol($row['rolusuario']);
  
        }
        return (isset($item)) ? $item : NULL;
      } catch (PDOException $e) {
        return NULL;
        echo 'mal';
      }
    }
  
    function drop ($id) {
  
      try {
  
        $query = $this->db->connect()->prepare('DELETE FROM usuariossistema WHERE idusuario = :id');
        $query->execute(['id'=>$id]);
  
        if ( $query->rowCount() ) {
          return true;
        } else {
          return false;
        }
  
      } catch ( PDOException $e ) {
        return false;
      }
  
    }
  
    function update ($data) {
      try {
        $query = $this->db->connect()->prepare('UPDATE usuariossistema SET  nombreUsuario = :nombreUsuario, apellidoUsuario = :apellidoUsuario, username = :username, passUsuario = :passUsuario, estatusUsuario = :estatusUsuario, rolUsuario = :rolUsuario WHERE cedulaUsuario = :cedulaUsuario');
        $query->execute(['cedulaUsuario'=>$data['cedulaUsuario'], 'nombreUsuario'=>$data['nombreUsuario'],  'apellidoUsuario'=>$data['apellidoUsuario'], 'username'=>$data['username'], 'passUsuario'=>$data['passUsuario'], 'estatusUsuario'=>$data['estatusUsuario'], 'rolUsuario'=>$data['rolUsuario']]);
  
        if ( $query->rowCount() ) {
          return true;
        } else {
          return false;
        }
  
      } catch (PDOException $e) {
        return false;
      }
  
  
    }
  }

?>