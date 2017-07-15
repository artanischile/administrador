<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller
{

    protected $data = array();

    function __construct()
    {
        parent::__construct();
        
        
        $this->load->model('User_Model', 'user');
        $this->load->model('Login_Model', 'login');
        add_js(array(
            BASE_JS_BO . 'login.js'
        )
        );
    }

    public function index()
    {
        $this->data['titulo_pagina'] = "Inicio Sesion";
        $this->data['subtitulo_pagina'] = "ingrese usuario y contrase&ntildea para ingresar";
        $this->data['titulo'] = "Inicio de Sesion";
      
        $this->load->view('backend/login/login', $this->data);
    }

    public function login()
    {
        $this->login->setUser($this->input->post('user'));
        $this->login->setPassword($this->enc->encode($this->input->post('password')));
        if ($user = $this->login->login()) {
       
            $this->session->set_userdata(array(
                "id" => $user[0]['id'],
                "username" => $user[0]['usuario'],
                "useremail" => $user[0]['email'],
                "userprofile" => $user[0]['descripcion'],
                "user" => $user[0]['nombre'] ,
                "userlogued" => true
            ));
            setFlash('loguedIn', 'Bienvenido' .$user[0]['nombre']);
            redirect(BASE_BO . 'dashboard', "refresh");
        }else{
            echo "login error";
        }
    }


    function logOut(){

        $this->session->sess_destroy();
        $this->index();

    }



}