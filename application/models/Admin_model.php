<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class admin_model extends CI_Model {

    public function cek_login($where){
        return $this->db->get_where('admin',$where);
    }

    public function GetID($id){
        $query =  $this->db->get_where('admin',$id);
        return $query->result_array();
	}
	
	public function Edit($data,$id){
		$this->db->where('id_admin', $id);
		$this->db->update('admin', $data);
	}

}

/* End of file user.php */
