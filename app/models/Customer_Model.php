<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_model extends CI_Model {
    
    var $table = 'customers';
    var $column_order = array(null, 'FirstName','LastName','phone','address','city','country'); //set column field database for datatable orderable
    var $column_search = array('FirstName','LastName','phone','address','city','country'); //set column field database for datatable searchable
    var $order = array('id' => 'asc'); // default order
    
    public function __construct()
    {
        parent::__construct();
        
    }
    
    private function _get_datatables_query($params=null)
    {
        
        $this->db->from($this->table);
        
        $i = 0;
        
        foreach ($this->column_search as $item) // loop column
        {
            if($params['search']['value']) // if datatable send POST for search
            {
                
                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $params['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $params['search']['value']);
                }
                
                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }
        
        if(isset($params['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$params['order']['0']['column']], $params['order']['0']['dir']);
        }
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
    
    function get_datatables($param=null)
    {
        $this->_get_datatables_query($param);
        if($param['length'] != -1)
            $this->db->limit($param['length'], $param['start']);
            $query = $this->db->get();
            return $query->result();
    }
    
    function count_filtered($param)
    {
        $this->_get_datatables_query($param);
        $query = $this->db->get();
        return $query->num_rows();
    }
    
    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
    
}