<?php
	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class peta_model extends CI_Model {
	
		public function Get(){
            $query = $this->db->query('SELECT * FROM peta');

            return $query->result_array();
        }

        public function GetID($data){
            $query =  $this->db->get_where('peta',$data);
            return $query->result_array();
        }
    
        public function Add($data){
            $query=$this->db->insert('peta',$data);
        }

        public function Delete($id){
            $this->db->where('id_peta', $id);
            $this->db->delete('peta');
        }

        public function Edit($data,$id){
            $this->db->where('id_peta', $id);
            $this->db->update('peta', $data);
        }
	
	}
	
	/* End of file pengendara_model.php */
	