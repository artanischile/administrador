<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Controller
{

    protected $data = array();

    function __construct()
    {
        parent::__construct();

     /*if( !$this->session->userdata('userlogued') ){
             redirect(base_url('bo/login'),'refresh');
        }*/

        $this->load->model('Profile_Model', 'profile');
        $this->load->model('User_Model', 'user');
        $this->load->library('Paginacion','paginar');
        $this->data['uri'] = $this->uri->segment_array();
        add_js(array(
            
            BASE_JS_BO . 'usuarios.js',
            
        ));
    }

    function index()
    {
        redirect( base_url()."bo/user/showlist/");
    }

    function ShowList ($page=1){
        $RecordCount = count($this->user->GetAll());
        $this->paginacion->Rows = 2;
        $this->paginacion->TotalRecords = $RecordCount;
        $this->paginacion->Page = $page;
        $this->paginacion->SetData
            ($this->user->GetAll(array(
                'limit' => $this->paginacion->Rows,
                'start' => $offset
            )));
        $this->paginacion->Uri = BASE_URL . "bo/user/showlist";
        $this->data['lists']=$this->paginacion;
        $this->data['titulo_pagina'] = "Administracion Usuarios";
        $this->data['subtitulo_pagina'] = "agrega, modifica, elimina , activa o desactiva usuarios";
        $this->data['titulo'] = "Mantencion Usuarios";
        $this->data['content'] = 'backend/user/List';
        $this->load->view('backend/layout/layout', $this->data);

    }

    function Add()
    {
        $this->data['titulo_pagina'] = "Administracion Usuarios";
        $this->data['subtitulo_pagina'] = "permite agregar un nuevo usuario";
        $this->data['titulo'] = "Agregar Nuevo Usuario";
        $this->data['profiles'] = $this->profile->getActiveProfiles();
        $this->load->view('backend/user/Add', $this->data);
    }
    

    function Edit($uid = null)
    {
        $this->data['titulo_pagina'] = "Administracion Usuarios";
        $this->data['subtitulo_pagina'] = "permite editar un usuario existente";
        $this->data['titulo'] = "Editar  Usuario";
        $this->data['perfiles'] = $this->profile->getActiveProfiles();
        $this->data['usuario'] = $this->user->ById($uid);
        $this->data['content'] = 'backend/usuarios/edit';
        $this->load->view('backend/user/Edit', $this->data);
    }

    function Delete($uid)
    {
        
        $this->data['titulo_pagina'] = "Administracion Usuarios";
        $this->data['subtitulo_pagina'] = "permite eliminar un usuario existente";
        $this->data['titulo'] = "Eliminar  Usuario";
        $this->data['usuario'] = $this->user->GetById($id);
        $this->load->view('backend/user/Delete', $this->data);
        
    }


    function View($uid){
       $this->data['titulo_pagina'] = "Administracion Usuarios";
       $this->data['subtitulo_pagina'] = "permite ver información de un usuario";
       $this->data['titulo'] = "Ver información de usuario";
       $this->data['usuario'] = $this->user->ById($uid);
       $this->load->view('backend/user/View', $this->data);
    }


    public function Activate($uid)
    {  
        if ($this->user->Activate($uid)) {
            $data = array(
                "succes" => "OK",
                "msg" => "Operacion realizada con exito"
            );
            echo json_encode($data);
            exit();
        } else {
            $data = array(
                "succes" => "error",
                "msg" => "Operacion fallida"
            );
            echo json_encode($data);
            exit();
        }
    }




    function Save()
    {
        $this->form_validation->set_error_delimiters('', '');
        if ($this->input->post()) {
            $this->form_validation->set_rules('nombre', 'Nombre', 'required|xss_clean');
            if (!$this->input->post("id_usuario")){
                $this->form_validation->set_rules('email', 'Email ', 'required|xss_clean|valid_email|is_unique[user.user_email]');
                $this->form_validation->set_rules('usuario', 'Usuario', 'required|xss_clean|min_length[6]|is_unique[user.user_name]');
            }else{
                $this->form_validation->set_rules('email', 'Email ', 'required|xss_clean|valid_email');
                $this->form_validation->set_rules('usuario', 'Usuario', 'required|xss_clean|min_length[6]');
            }
            $this->form_validation->set_rules('password', 'Password ', 'required|xss_clean|min_length[6]');
            $this->form_validation->set_rules('perfil', 'Perfil ', 'required|xss_clean');
            $this->form_validation->set_rules('estado', 'Estado ', 'required|xss_clean');
            
            if ($this->form_validation->run() === FALSE) {
                $err_data = array(
                    "succes" => "error",
                    "nombre" => form_error('nombre'),
                    "email" => form_error('email'),
                    "usuario" => form_error('usuario'),
                    "password" => form_error('password'),
                    "perfil" => form_error('perfil'),
                    "estado" => form_error('estado')
                );
                echo json_encode($err_data);
                exit();
            } else {
                
                $this->data=array();
                $this->data['user_id']          = $this->input->post('id_usuario', true);
                $this->data['user_first_name']  = $this->input->post('nombre', true);
                $this->data['user_last_name']   = '';
                $this->data['user_name']        = $this->input->post('usuario', true);
                $this->data['user_password']    = $this->enc->encode($this->input->post('password', true));
                $this->data['user_email']       = $this->input->post('email', true);
                $this->data['user_profile_id']  = $this->input->post('perfil', true);
                $this->data['user_status']      = $this->input->post('estado', true);
                $this->data['user_created']     = date('Y-m-d H:i:s');
                if ($this->user->Save((object) $this->data)) {
                       $data = array(
                            "succes" => "OK",
                            "msg" => "Operacion realizada con exito"
                        );
                        echo json_encode($data);
                        exit();
                } else {
                       $data = array(
                            "succes" => "ERR",
                            "msg" => "Operacion fallida"
                        );
                }
                redirect(BASE_URL . 'bo/user/showlist');
            }
        } else {
            
            //redirect(BASE_URL . 'bo/usuarios/agergar');
        }
    }

}