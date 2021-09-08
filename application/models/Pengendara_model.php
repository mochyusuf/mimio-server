<?php
	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class pengendara_model extends CI_Model {
	
		public function Get(){
            $query = $this->db->query('SELECT * FROM pengendara ORDER BY pengendara.nama_pengendara ASC');

            return $query->result_array();
        }

        public function GetID($data){
            $query =  $this->db->get_where('pengendara',$data);
            return $query->result_array();
		}
		
        public function GetKosong(){
			$data = array(
				'status_pengendara' => 'kosong'
			);
            $query =  $this->db->get_where('pengendara',$data);
            return $query->result_array();
        }
    
        public function Add($data){
            $query=$this->db->insert('pengendara',$data);
        }

        public function Delete($id){
            $this->db->where('id_pengendara', $id);
            $this->db->delete('pengendara');
        }

        public function Edit($data,$id){
            $this->db->where('id_pengendara', $id);
            $this->db->update('pengendara', $data);
		}
		
		public function cek_login($where){
			return $this->db->get_where('pengendara',$where);
		}
	
	}
	
	/* End of file pengendara_model.php */
	