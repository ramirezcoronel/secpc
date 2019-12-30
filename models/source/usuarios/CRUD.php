<?php

  class usuariosCRUD extends Model{

    public $error;

    function __construct() {
      parent::__construct();
    }

    public  function insert ($data) {
      try{
        $query = $this->db->connect()->prepare('INSERT INTO usuariossistema (cedulaUsuario, nombreUsuario, apellidoUsuario, username, passUsuario, estatusUsuario, rolUsuario) VALUES(:cedulaUsuario, :nombreUsuario, :apellidoUsuario, :username, :passUsuario, :estatusUsuario, :rolUsuario)');

        $query->execute(['cedulaUsuario'=>$data['cedulaUsuario'], 'nombreUsuario'=>$data['nombreUsuario'],  'apellidoUsuario'=>$data['apellidoUsuario'], 'username'=>$data['username'], 'passUsuario'=>$data['passUsuario'], 'estatusUsuario'=>$data['estatusUsuario'], 'rolUsuario'=>$data['rolUsuario']]);

        return true;
      } catch(PDOException $e){
        $this->error = $e->getMessage();
        return false;
      }
    }

    function get ( $id = null) {
      $items = [];
      try {

        if ( isset($id) ) {

          $query = $this->db->connect()->prepare('SELECT * FROM usuariossistema WHERE idusuario = :id');

          $query->execute(['id'=>$id]);

        } else {

          $query = $this->db->connect()->query('SELECT * FROM usuariossistema');

        }

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

    public function getError () {
      return $this->error;
    }
  }

?>
