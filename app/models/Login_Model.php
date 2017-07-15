<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

/**
 * @author ARTANIS
 *
 */
class Login_Model extends CI_Model{
    private $user;
    private $password;
    function __construct() {
        parent::__construct ();
    }
    public function setUser($user)
    {
        $this->user = $user;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
  
    public function login(){
      $userData =  R::findOne('usuarios', "usuario = ? and password = ? ",array($this->user,$this->password));
      if (count($userData)>0){
             return $this->UserInfo($userData->id);
       }
    }


    private function UserInfo($idUsuario){
         $result= R::getAll("SELECT
                                usuarios.id,
                                usuarios.nombre,
                                usuarios.usuario,
                                usuarios.email,
                                perfil.descripcion,
                                usuarios.estado
                             FROM    usuarios 
                             LEFT JOIN perfil on usuarios.perfil=perfil.id 
                             WHERE usuarios.id={$idUsuario} " );
        return $result; 
    }
   
}