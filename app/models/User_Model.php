<?php
if (! defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 *
 * @author ARTANIS
 *        
 */
class User_Model extends CI_Model{
    protected $tableName='user';

    function __construct(){
       parent::__construct();
    }   
    
   public function GetAll($params = array()){
            $this->db
            ->select('user.*,profile.*')
            ->from('user')
            ->join('profile', 'user.user_profile_id = profile.profile_id')
            ->order_by('user.user_id','desc');
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            $query = $this->db->get();
            return ($query->num_rows() > 0)? $query->result():FALSE;
    }

    function ById($id){
            $this->db
            ->select('user.*,profile.*')
            ->from('user')
            ->join('profile', 'user.user_profile_id = profile.profile_id')
            ->where('user.user_id',$id);
            $query = $this->db->get();
            return ($query->num_rows() > 0)? $query->row():FALSE;
    }
        
    public function Save($data='') {
        if ($data->user_id > 0) {
            $status=$this->UpdateRecord($data);
        } else {
            $status=$this->AddRecord($data);
        }
        return $status;
    }
    private function AddRecord($info=array()){
        $this->db->trans_start();
        $this->db->insert($this->tableName, $info);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE)
        {
            return FALSE;
        }else{
            return TRUE;
        }

    }

    private function UpdateRecord($info=array()){
        $this->db->trans_start();
        $this->db->where('user_id', $info->user_id);
        $this->db->update($this->tableName, $info);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE)
        {
            return FALSE;
        }else{
            return TRUE;
        }
    }
    
    function Activate($uid=NULL){
       $row=$this->ById($uid);
       if ($row->user_status==1) {
          $user_status=0;
       }else{
           $user_status=1; 
       }
       $this->db->trans_start();
       $this->db->set('user_status', $user_status, FALSE);
       $this->db->where('user_id',  $uid);
       $this->db->update($this->tableName);
       $this->db->trans_complete();
       if ($this->db->trans_status() === FALSE)
       {
            return FALSE;
       }else{
            return TRUE;
       }
    }
    
    
    
}