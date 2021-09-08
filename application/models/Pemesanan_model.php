<?php
	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Pemesanan_model extends CI_Model {
	
		public function Get(){
            $query = $this->db->query('SELECT * FROM pemesanan');

            return $query->result_array();
		}
		
		public function GetJoin(){
			$this->db->select('*');
			$this->db->from('pemesanan');
			$this->db->join('restoran', 'restoran.id_restoran = pemesanan.id_restoran');
			$this->db->join('konsumen', 'konsumen.id_konsumen = pemesanan.id_konsumen');
			$this->db->order_by("status_pemesanan", "ASC");
			$query = $this->db->get();
            return $query->result_array();
		}

        public function GetID($data){
            $query =  $this->db->get_where('pemesanan',$data);
            return $query->result_array();
        }
        
        public function GetStatus($data){
            $query = $this->db->query("SELECT Count(pemesanan.id_pemesanan) AS jumlah FROM pemesanan WHERE pemesanan.status_pemesanan = 'dipesan'");

            return $query->result_array();
        }
		
		public function GetIDLimit($data){
            $sql = "SELECT * FROM pemesanan WHERE id_pengendara =? AND (status_pemesanan = 'dipesan' OR status_pemesanan = 'diantar') LIMIT 1";
            $query = $this->db->query($sql, array($data));
            return $query->result_array();
        }
		
		public function Cek_Pesanan($data){
             $sql = "SELECT * FROM pemesanan WHERE id_pengendara =? AND (status_pemesanan = 'dipesan' OR status_pemesanan = 'diantar') ";
            $query = $this->db->query($sql, array($data));
            return $query->result_array();
		}
    
        public function Add($data){
            $query=$this->db->insert('pemesanan',$data);
        }

        public function Edit($data,$id){
            $this->db->where('id_pemesanan', $id);
            $this->db->update('pemesanan', $data);
		}
	
	}
	
	/* End of file pengendara_model.php */
	