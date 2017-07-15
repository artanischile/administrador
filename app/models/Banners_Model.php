<?php
if (! defined('BASEPATH'))     exit('No direct script access allowed');

class Banners_Model extends CI_Model {
    
    protected $tableName='banners';
    protected $Pk ='id';
    
    function __construct(){
        parent::__construct();
    }
    
    
    public  function GetAll(){
        $sqlQuery="SELECT
                        	           banners.id,
                        	           categorias_banner.descripcion categoria,
                        	           banners.id_categoria,
                        	           banners.descripcion,
                        	           banners.imagen,
                        	           banners.texto_1,
                        	           banners.texto_2,
                        	           banners.url,
                        	           banners.target,
                        	           banners.fecha_inicio,
                        	           banners.fecha_termino,
                                       banners.posicion,
                                       banners.estado,
                                    	banners.creado_en,
                                    	banners.creado_por
                                    FROM
                                    banners
                                    INNER JOIN categorias_banner ON banners.id_categoria = categorias_banner.id";
        $result= R::getAll($sqlQuery);
        return R::convertToBeans('banners', $result); 
    }
    
    public function getById(){
    }
    
    public function Save($banner){
        
    }
    
    public function RecorCount(){
        
    }
    
    
    public function getAllCategories(){
        
        return  R::findAll( 'categorias_banner' );
    }
    
    
}