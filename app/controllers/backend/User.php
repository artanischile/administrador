<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Controller
{

    protected $data = array();

    function __construct()
    {
        parent::__construct();

     if( !$this->session->userdata('userlogued') ){
             
             redirect(base_url('bo/login'),'refresh');
                                
        }

        $this->load->model('Perfil_Model', 'perfil');
        $this->load->model('User_Model', 'user');
        $this->data['uri'] = $this->uri->segment_array();
        add_js(array(
            
            BASE_JS_BO . 'usuarios.js',
            
        ));
    }

    function index()
    {
        $this->load->library('pagination');
        $config['base_url'] = BASE_BO . 'user/';
        $config['total_rows'] = $this->user->RecordCount();
        $config['per_page'] = 10; // N�mero de registros mostrados por p�ginas
        $config['num_links'] = 5;
        $config["uri_segment"] = 4; // el segmento de la paginaci�n
                                    // $config['use_page_numbers'] = TRUE;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $this->data["links"] = $this->pagination->create_links();
        $this->data['titulo_pagina'] = "Administracion Usuarios";
        $this->data['subtitulo_pagina'] = "agrega, modifica, elimina , activa o desactiva usuarios";
        $this->data['titulo'] = "Mantencion Usuarios";
        $this->data['listado'] = $this->user->GetAll($config['per_page'], $page);
        $this->data['content'] = 'backend/user/List';
        $this->load->view('backend/layout/layout', $this->data);
    }

    function Add()
    {
        $this->data['titulo_pagina'] = "Administracion Usuarios";
        $this->data['subtitulo_pagina'] = "permite agregar un nuevo usuario";
        $this->data['titulo'] = "Agregar Nuevo Usuario";
        $this->data['perfiles'] = $this->perfil->getPerfilesActivos();
      //  $this->data['content'] = 'backend/usuarios/agregar';
        $this->load->view('backend/user/Add', $this->data);
    }
    

    function Edit($id = null)
    {
        $this->data['titulo_pagina'] = "Administracion Usuarios";
        $this->data['subtitulo_pagina'] = "permite editar un usuario existente";
        $this->data['titulo'] = "Editar  Usuario";
        $this->data['perfiles'] = $this->perfil->getPerfilesActivos();
        $this->data['usuario'] = $this->user->GetById($id);
        $this->data['content'] = 'backend/usuarios/editar';
        $this->load->view('backend/user/Edit', $this->data);
    }

    function Delete($id)
    {
        
        $this->data['titulo_pagina'] = "Administracion Usuarios";
        $this->data['subtitulo_pagina'] = "permite eliminar un usuario existente";
        $this->data['titulo'] = "Eliminar  Usuario";
        $this->data['usuario'] = $this->user->GetById($id);
        $this->load->view('backend/user/Delete', $this->data);
        
    }

    function Save()
    {
        $this->form_validation->set_error_delimiters('', '');
        
        if ($this->input->post()) {
            $this->form_validation->set_rules('nombre', 'Nombre', 'required|xss_clean');
            if (!$this->input->post("id_usuario")){
                $this->form_validation->set_rules('email', 'Email ', 'required|xss_clean|valid_email|is_unique[usuarios.email]');
                $this->form_validation->set_rules('usuario', 'Usuario', 'required|xss_clean|min_length[6]|is_unique[usuarios.usuario]');
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
//                 $this->session->set_flashdata('errors', $err_data);
//                 $this->session->set_flashdata('formdata', $this->input->post());
//                 redirect(BASE_URL . 'bo/usuarios/Agregar');
            } else {
                // print_r($this->input->post());
                
                $this->data['id'] = $this->input->post('id_usuario', true);
                $this->data['nombre'] = $this->input->post('nombre', true);
                $this->data['usuario'] = $this->input->post('usuario', true);
                $this->data['password'] = $this->enc->encode($this->input->post('password', true));
                $this->data['email'] = $this->input->post('email', true);
                $this->data['perfil'] = $this->input->post('perfil', true);
                $this->data['estado'] = $this->input->post('estado', true);
                $this->data['fecha_creacion'] = date('Y-m-d H:i:s');
                
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
                
                redirect(BASE_URL . 'bo/user/');
            }
        } else {
            
            //redirect(BASE_URL . 'bo/usuarios/agergar');
        }
    }

   function View($id){
       
       $this->data['titulo_pagina'] = "Administracion Usuarios";
       $this->data['subtitulo_pagina'] = "permite editar un usuario existente";
       $this->data['titulo'] = "Editar  Usuario";
         $this->data['usuario'] = $this->user->Ver($id);
        $this->load->view('backend/user/View', $this->data);
       
       
   }

    public function Activate($id)
    {  
        
        
      
        if ($this->user->Activate($id)) {
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

    function Profile($id = null)
    {
        $this->data['titulo_pagina'] = "Administracion Usuarios";
        $this->data['subtitulo_pagina'] = "agrega, modifica, elimina , activa o desactiva usuarios";
        $this->data['titulo'] = "Listado de Usuarios";
        
        $this->data['content'] = 'backend/usuarios/perfil';
        $this->load->view('backend/layout/layout', $this->data);
    }
}