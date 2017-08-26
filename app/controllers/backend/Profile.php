<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Profile extends  CI_Controller{

    protected $data = array();
     
    function __construct()
    {
        parent::__construct();
        $this->load->model('Profile_Model','profile');
        $this->load->library('Paginacion','paginar');
        $this->data['uri'] = $this->uri->segment_array();
        add_js(array(
            BASE_JS_BO.'profile.js'
        ));
    }


    function Index(){
        redirect( base_url()."bo/profile/showlist/");
    }

    function ShowList($page=1){
        $RecordCount = count($this->profile->GetAll());
        $this->paginacion->Rows = 2;
        $offset = isset($page) ? ($page-1) * $this->paginacion->Rows : 0;
        $this->paginacion->TotalRecords = $RecordCount;
        $this->paginacion->Page = $page;
        $this->paginacion->SetData($this->profile->GetAll(array(
            'limit' => $this->paginacion->Rows,
            'start' => $offset
        )));
        $this->paginacion->Uri = BASE_URL . "bo/profile/showlist";
        $this->data['lists']=$this->paginacion;
        $this->data['titulo_pagina'] = "Administracion Perfiles";
        $this->data['subtitulo_pagina'] = "agrega, modifica, elimina , activa o desactiva Perfiles";
        $this->data['titulo'] = "Mantencion Perfiles";
        $this->data['content'] = 'backend/profile/List';
        $this->load->view('backend/layout/layout', $this->data);
    }

    function Add(){
        $this->data['titulo_pagina'] = "Administracion de Perfiles";
        $this->data['subtitulo_pagina'] = "permite agregar un nuevo perfil";
        $this->data['titulo'] = "Agregar Nuevo Perfil";
        $this->load->view('backend/profile/Add', $this->data);
    }
    function Edit(){}
    function Delete(){}

    function Save(){
         $this->form_validation->set_error_delimiters('', '');
         if ($this->input->post()) {
            if($this->input->is_ajax_request()){
                $this->form_validation->set_rules('profile_name', 'Descripcion', 'required|xss_clean');
                $this->form_validation->set_rules('profile_name', 'Descripcion', 'required|xss_clean');
                    print_r($this->input->post());
            }
         }

    }


    
}    