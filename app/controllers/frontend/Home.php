<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Home extends  CI_Controller{

    protected $data = array();
     
    function __construct()
    {
        parent::__construct();
    }
    
    function index(){
        $data['info']=R::findAll( 'producto', ' ORDER BY id DESC LIMIT 9 ' );
        $data['blog']=R::findAll( 'tema', ' ORDER BY id DESC LIMIT 9 ' );
        $data['content']="frontend/home/home";
        $this->load->view('frontend/layout/layout', $data);
        
    }



}    