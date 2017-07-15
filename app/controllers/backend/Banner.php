<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Banner extends  CI_Controller{

    protected $data = array();
     
    function __construct()
    {

        parent::__construct();

        if( !$this->session->userdata('userlogued') ){
             redirect(base_url('bo/login'),'refresh');
        }
        
		
        $this->load->model('Perfil_Model','perfil');
        $this->load->model('banners_Model','banners');
        
        $this->data['uri']=$this->uri->segment_array();
        
        add_css(array(
        
            //BASE_THEME.'plugins/kartik/css/fileinput.css',
            //BASE_THEME.'plugins/kartik/themes/explorer/theme.css',
            
            BASE_THEME.'plugins/datepicker/datepicker3.css',
        )); 
        
        
        add_js(array(
            BASE_JS_BO.'banners.js',
           // BASE_THEME.'plugins/kartik/js/locales/es.js',
           // BASE_THEME.'plugins/kartik/js/fileinput.js',
           // BASE_THEME.'plugins/kartik/themes/explorer/theme.js',
            BASE_THEME.'plugins/datepicker/bootstrap-datepicker.js',
            BASE_THEME . 'plugins/bootstrap-filestyle-1.2.1/src/bootstrap-filestyle.min.js',
             BASE_JS_BO.'ajaxfileupload.js',
            
        ));
         
    }


    function index(){
        $this->load->library('pagination');
        $config['base_url'] = BASE_BO . 'banners/listado/';
        $config['total_rows'] = 0 ;// $this->usuarios->RecordCount();
        $config['per_page'] = 10; // N�mero de registros mostrados por p�ginas
        $config['num_links'] = 5;
        $config["uri_segment"] = 4; // el segmento de la paginaci�n
        // $config['use_page_numbers'] = TRUE;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $this->data["links"] = $this->pagination->create_links();
        $this->data['titulo_pagina'] = "Administracion de Banners";
        $this->data['subtitulo_pagina'] = "agrega, modifica, elimina , banners";
        $this->data['titulo'] = "Listado de Banners";
        
        // $this->data['listado'] = $this->usuarios->GetAll($config['per_page'], $page);
        
        $this->data['content'] = 'backend/banner/List';
        $this->load->view('backend/layout/layout', $this->data);
        
    }
    
    function Add(){
        $this->data['bCategorias']=$this->banners->getAllCategories();
        $this->data['content'] = '';
        $this->load->view('backend/banner/Add', $this->data);
    }
    
    function Edit(){}
    function Delete(){}
    function Activate(){}
    function View(){}
    
    
    function Save(){
        
        
     
        
        
        
    }
    
    
    
    public function upload()
     {
        echo "czxcz";
        
        $config['upload_path']          = './assets/frontend/img/slider/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']     = '1000';
        $config['max_width'] = '1600';
        $config['max_height'] = '750';
        $config['remove_spaces'] = TRUE;
        $this->load->library('upload', $config);
       
        /*if ($this->upload->do_upload('kartik-input-701')){
             $output = array('uploaded' => 'OK','filename'=>$this->upload->data('file_name'));
        }else{
            $output = array('uploaded' =>  $this->upload->display_errors() );
        }
        echo json_encode($output); */
    }

    
}    