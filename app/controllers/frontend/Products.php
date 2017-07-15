<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Products extends  CI_Controller{

    protected $data = array();
     
    function __construct()
    {
        parent::__construct();
    }
    
    function index(){
        $data['content']="frontend/products/shop-list-sidebar";
        $this->load->view('frontend/layout/layout', $data);
    }
 
    function detail($product){
        $data['info']=R::findOne( 'producto', " lower(REPLACE(productourl, ' ', '-')) = ? ", [ $product ] );
        $data['infoP']=R::findAll( 'producto', ' ORDER BY id DESC LIMIT 6 ' );
        $data['content']="frontend/products/products-details";
        $this->load->view('frontend/layout/layout', $data);
    }


}    