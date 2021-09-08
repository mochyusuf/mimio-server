<?php
	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class transaksi_model extends CI_Model {
	
		public function Get(){
            $query = $this->db->query('SELECT * FROM transaksi');

            return $query->result_array();
		}

        public function GetID($data){
            $query =  $this->db->get_where('transaksi',$data);
            return $query->result_array();
        }
    
        public function Add($data){
            $query=$this->db->insert('transaksi',$data);
        }
	
	}
	
	/* End of file pengendara_model.php */
	