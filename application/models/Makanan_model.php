<?php
	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class makanan_model extends CI_Model {
	
		public function Get(){
            $query = $this->db->query('SELECT * FROM makanan ORDER BY makanan.nama_makanan ASC');

            return $query->result_array();
        }

        public function GetID($data){
            $query =  $this->db->get_where('makanan',$data);
            return $query->result_array();
        }
    
        public function Add($data){
            $query=$this->db->insert('makanan',$data);
        }

        public function Delete($id){
            $this->db->where('id_makanan', $id);
            $this->db->delete('makanan');
        }

        public function Edit($data,$id){
            $this->db->where('id_makanan', $id);
            $this->db->update('makanan', $data);
        }
	
	}
	
	/* End of file pengendara_model.php */
	