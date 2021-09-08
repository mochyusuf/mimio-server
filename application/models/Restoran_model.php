<?php
	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class restoran_model extends CI_Model {
	
		public function Get(){
            $query = $this->db->query('SELECT * FROM restoran ORDER BY restoran.nama_restoran ASC');

            return $query->result_array();
        }
		
		public function GetNama($nama){
            $this->db->like('nama_restoran',$nama);
			$query = $this->db->get('restoran');
            return $query->result_array();
        }

        public function GetID($data){
            $query =  $this->db->get_where('restoran',$data);
            return $query->result_array();
        }
    
        public function Add($data){
            $query=$this->db->insert('restoran',$data);
        }

        public function Delete($id){
            $this->db->where('id_restoran', $id);
            $this->db->delete('restoran');
        }

        public function Edit($data,$id){
            $this->db->where('id_restoran', $id);
            $this->db->update('restoran', $data);
        }
	
	}
	
	/* End of file pengendara_model.php */
	