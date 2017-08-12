
<?php
if (! defined ( 'BASEPATH' ))   exit ( 'No direct script access allowed' );
class Profile_Model extends CI_Model {
    public   $table = 'profile';
    function __construct() {
        parent::__construct ();
    }

     public function GetAll($params = array()){
            $this->db
            ->select('profile.*')
            ->from('profile')
            ->order_by('profile.profile_id','desc');
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            $query = $this->db->get();
            return ($query->num_rows() > 0)? $query->result():FALSE;
    }



    function getActiveProfiles(){
        $this->db
             ->select ( '*' )
             ->from ( 'profile' )
             ->where('profile_status',1)
             ->order_by ( "profile_id", "desc" );
        $query = $this->db->get ();
        return $query->result ();
    }


    function ById($id) {
      

    }


    function GuardarPerfil($data) {
        if (is_array ( $data )) {
            $this->db->trans_start ();
            $this->db->insert ( $this->table, $data );
            $insert_id = $this->db->insert_id ();
            $this->db->trans_complete ();
            return true;
        } else {
            return false;
        }
    }
    function ActualizarPerfil($data = null) {
        if (is_array ( $data )) {
            $this->db->where ( 'id_perfil', $data ['id_perfil'] );
            $this->db->update ( $this->table, $data );
            return true;
        } else {
            return false;
        }
    }
}
