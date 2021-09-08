<?php
	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class pemesanan_detail_model extends CI_Model {
	
		public function Get(){
            $query = $this->db->query('SELECT * FROM pemesanan_detail');

            return $query->result_array();
		}

        public function GetID($data){
            $query =  $this->db->get_where('pemesanan_detail',$data);
            return $query->result_array();
        }
    
        public function Add($data){
            $query=$this->db->insert('pemesanan_detail',$data);
        }

        public function Edit($data,$id){
            $this->db->where('id_pemesanan', $id);
            $this->db->where('id_pemesanan', $id);
            $this->db->update('pemesanan_detail', $data);
        }
	
	}
	
	/* End of file pengendara_model.php */
	