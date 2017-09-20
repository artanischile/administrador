<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends CI_Controller
{

    private $data = array();

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Customer_Model', 'customers');
        $this->load->helper('url');
        $this->data['uri'] = $this->uri->segment_array();
        $this->data['csrf'] = $csrf = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        );
        add_js(array(
            BASE_JS_BO.'customers.js')
        );
    }

    public function index()
    {
        $this->data['titulo_pagina'] = "Administracion Clientes";
        $this->data['subtitulo_pagina'] = "Administracion Clientes";
        $this->data['titulo'] = "Administracion Clientes";
        $this->data['content'] = 'backend/customers/listado';
        $this->load->view('backend/layout/layout', $this->data);    
    }

    public function lista()
    {
        
    }

    public function ajax_list()
    {
        $list = $this->customers->get_datatables($this->input->post());
        $data = array();
        $no = $this->input->post('start'); // $_POST['start'];
        foreach ($list as $customers) {
            $no ++;
            $row = array();
            $row[] = $no;
            $row[] = $customers->FirstName;
            $row[] = $customers->LastName;
            $row[] = $customers->phone;
            $row[] = $customers->address;
            $row[] = $customers->city;
            $row[] = $customers->country;   
            $row[] = '<a href="javascript:ShowViewFormUser('.$customers->id.')"	class="btn  btn-flat bg-navy" data-toggle="tooltip" title="Ver"><i class="ion ion-ios-eye"></i></a>
                      <a href="javascript:ShowViewFormUser('.$customers->id.')"	class="btn  btn-flat bg-navy" data-toggle="tooltip" title="Ver"><i class="ion ion-ios-eye"></i></a>  
                    ';
            
            $data[] = $row;
        }
        
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->customers->count_all(),
            "recordsFiltered" => $this->customers->count_filtered($this->input->post()),
            "data" => $data
        );
        // output to json format
        echo json_encode($output);
    }
}