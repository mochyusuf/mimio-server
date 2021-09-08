<?php
	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class kendaraan_model extends CI_Model {
	
		public function Get(){
            $query = $this->db->query('SELECT * FROM kendaraan ORDER BY kendaraan.id_kendaraan ASC');

            return $query->result_array();
        }

        public function GetID($data){
            $query =  $this->db->get_where('kendaraan',$data);
            return $query->result_array();
        }
    
        public function Add($data){
            $query=$this->db->insert('kendaraan',$data);
        }

        public function Delete($id){
            $this->db->where('id_kendaraan', $id);
            $this->db->delete('kendaraan');
        }

        public function Edit($data,$id){
            $this->db->where('id_kendaraan', $id);
            $this->db->update('kendaraan', $data);
        }
	
	}
	
	/* End of file pengendara_model.php */
	