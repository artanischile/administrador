<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');

class Product extends CI_Controller{

    function __construct(){ 
        parent::__construct();
        $this->data['uri'] = $this->uri->segment_array();
        add_js(array(
            BASE_JS_BO . 'productos.js',
            'https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js',
            BASE_THEME.'plugins/select2/select2.full.min.js',
        ));
        
        add_css(array(
            BASE_THEME.'plugins/select2/select2.min.css',
        ));
        
        
        
    }
    
    function Index(){
        $this->load->library('pagination');
        $config['base_url'] = BASE_BO . 'productos/listado/';
        $config['total_rows'] = 0 ;// $this->usuarios->RecordCount();
        $config['per_page'] = 10; // N�mero de registros mostrados por p�ginas
        $config['num_links'] = 5;
        $config["uri_segment"] = 4; // el segmento de la paginaci�n
        // $config['use_page_numbers'] = TRUE;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $this->data["links"] = $this->pagination->create_links();
        $this->data['titulo_pagina'] = "Administracion de productos";
        $this->data['subtitulo_pagina'] = "agrega, modifica, elimina , productos";
        $this->data['titulo'] = "Listado de productos";
        
       // $this->data['listado'] = $this->usuarios->GetAll($config['per_page'], $page);
        
        $this->data['content'] = 'backend/productos/listado';
        $this->load->view('backend/layout/layout', $this->data);
    }
    
    function Add(){
        $data['a']="";
        $this->load->view('backend/productos/agregar', $this->data);
        
    }
    function Edit(){}
    function Delete(){}
    function Save(){}
    function Activate(){}
    
}
