<?php
	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class konsumen_model extends CI_Model {
	
		public function Get(){
            $query = $this->db->query('SELECT * FROM konsumen ORDER BY konsumen.nama_konsumen ASC');

            return $query->result_array();
        }

        public function GetID($data){
            $query =  $this->db->get_where('konsumen',$data);
            return $query->result_array();
        }
    
        public function Add($data){
            $query=$this->db->insert('konsumen',$data);
        }

        public function Delete($id){
            $this->db->where('id_konsumen', $id);
            $this->db->delete('konsumen');
        }

        public function Edit($data,$id){
            $this->db->where('id_konsumen', $id);
            $this->db->update('konsumen', $data);
        }
	
		public function cek_login($where){
			return $this->db->get_where('konsumen',$where);
		}
	}
	
	/* End of file pengendara_model.php */
	