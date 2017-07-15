<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Upload extends  CI_Controller{
    
        function __construct(){
            parent::__construct();
        }
       
       
        function Index(){
            
            echo "ASa";
        }
       
        function do_upload(){
           print_r($_POST);
 
        
            $config['upload_path']          = './assets/frontend/img/slider/';
            $config['allowed_types']        = 'gif|jpg|png';
            //$config['max_size']     = '1000';
            //$config['max_width'] = '1600';
            //$config['max_height'] = '750';
            $config['remove_spaces'] = TRUE;
            $this->load->library('upload', $config);
           
             if ($this->upload->do_upload('archivo')){
                $output = array('uploaded' => 'OK','filename'=>$this->upload->data('file_name'));
             }else{
                $output = array('uploaded' =>  $this->upload->display_errors() );
             }
                echo json_encode($output); 
               
            
        }
    
        
    
}