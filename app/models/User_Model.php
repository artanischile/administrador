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

       // echo $this->db->last_query();

        return ($query->num_rows() > 0)? $query->result():FALSE;
        
    }


   
    
    public function View($id){

            $result= R::getAll( "SELECT
                                user.user_id,
                                user.user_first_name,
                                user.user_last_name,
                                user.user_name,
                                user.user_email,
                                user.usetableNamer_pass,
                                user.user_profile_id,
                                profile.profile_name,
                                user.user_created,
                                user.user_updated,
                                user.user_status,
                                profile.profile_status
                            FROM
                                user 
                            INNER JOIN profile ON user.user_profile_id = profile.profile_id  
                            WHERE  usuarios.user_id={$id}
                            ORDER BY user_id 
                            " );
        
            return   $result;
        
    
    }
    
    
    public function GetById($id = null) {
        return  R::findOne($this->tableName, 'id = ? ', array($id));
    }
     
    public function GetAllBy($field =null,$value=null) {
        return  R::find($this->tableName, "{$field}= ? ", array($value));
    }
    
    public function GetBy($field =null,$value=null) {
        return   R::findOne($this->tableName, "{$field} = ? ", array($value));
    }
    
    public  function  RecordCount(){
        return R::count( $this->tableName );
    }
        
    public function Save($data='') {
          print_r($data);
          die;

        if ($data->user_id > 0) {
            $status=$this->UpdateRecord($data);
       } else {
            $status=$this->AddRecord($data);
        }
    }


    private function AddRecord($info=array()){
        $this->db->trans_start();
        $this->db->insert($this->tableName, $info);
        $this->db->trans_complete();
    }

    private function UpdateRecord($info=array()){
        $this->db->trans_start();
        $this->db->update($this->tableName, $info);
        $this->db->trans_complete();

    }

    
    function Activate($id=NULL){
       $usuario=R::load($this->tableName, $id);
       if ($usuario->estado==1) {
           $usuario->estado=0;
       }else{
           $usuario->estado=1; 
       }
       return R::store($usuario);
    }
    
    
    public function Delete($id=null){
        $delete = R::load($this->tableName, $id);
        return R::trash($delete);
    }
    

    
    
}