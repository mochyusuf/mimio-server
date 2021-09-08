<?php
	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Api_pengendara extends CI_Controller {
	
		function __construct(){
			parent::__construct();  
			$this->load->model('pengendara_model'); 
			$this->load->model('pemesanan_model'); 
			$this->load->model('pemesanan_detail_model'); 
			$this->load->model('restoran_model'); 
			$this->load->model('transaksi_model'); 
			$this->load->model('konsumen_model'); 
			$this->load->model('peta_model'); 
			$this->load->model('admin_model'); 
		}

		public function index()
		{
			
		}

		public function login(){
			$param_id_nomor = $this->input->post('id_nomor');
            $password = $this->input->post('password');
            $token = $this->input->post('token');
            $param_password = md5($password);

            $where = array(
                'id_nomor_pengendara' => $param_id_nomor,
                'password_pengendara' => $param_password
                );

            $cek = $this->pengendara_model->cek_login($where)->num_rows();
            if($cek > 0){
				$id = array(
					'id_nomor_pengendara' => $param_id_nomor
				);
				$data_pengendara = $this->pengendara_model->GetID($id);
				$id_cari = $data_pengendara[0]['id_pengendara'];
				$temp = array(
					'token_pengendara' => $token
				);
				$this->pengendara_model->Edit($temp,$id_cari);
				$this->pengendara_model->GetID($id);
				$data = array(
					'error' => false,
					'pengendara' => array(
						'id_pengendara' => $data_pengendara[0]['id_pengendara'],
						'nama_pengendara' => $data_pengendara[0]['nama_pengendara'],
						'alamat_pengendara' => $data_pengendara[0]['alamat_pengendara'],
						'nomor_telepon_pengendara' => $data_pengendara[0]['nomor_telepon_pengendara'],
						'image_pengendara' => $data_pengendara[0]['image_pengendara'],
						'id_nomor_pengendara' => $param_id_nomor,
						'token_pengendara' => $data_pengendara[0]['token_pengendara'],
					)
				);
				echo json_encode($data);
     
            }else{
				$data = array(
					'error' => true,
					'pesan' => 'ID Nomor atau Password Salah'
				);
				echo json_encode($data);
			}
		}

		public function get_peta(){
			$data = $this->peta_model->Get();
			for ($i=0; $i < Count($data); $i++) { 
				$temp = $data[$i]['node_terhubung'];
				$json = json_decode($temp);
				$data[$i]['node_terhubung'] = $json;
			}
			echo json_encode($data);
		}
		
		public function tolak_pesanan(){
			$id = $this->input->post('id_pemesanan');
			$data = array(
				'status_pemesanan' => 'diantar',
			);
			$this->pemesanan_model->Edit($data,$id);

			$data = array(
				'error' => false,
				'pesan' => 'Pemesanan Diantar'
			);
			echo json_encode($data);
		}
		
		public function terima_pesanan(){
			$id = $this->input->post('id_pemesanan');
			$data = array(
				'status_pemesanan' => 'diantar',
			);
			$this->pemesanan_model->Edit($data,$id);

			$data = array(
				'error' => false,
				'pesan' => 'Pemesanan Diantar'
			);
			echo json_encode($data);
		}
		
		public function get_pesanan(){
			$id = $this->input->post('id_pengendara');				
			
			$temp_check = array(
				'id_pengendara' => $id,
			);
			
			$cek = Count($this->pemesanan_model->Cek_Pesanan($id));
			$data = array();
			if($cek != 0){
				$temp = array(
					'id_pengendara' => $id
				);
				$temp_data = $this->pemesanan_model->GetIDLimit($id);
				$data = $temp_data[0];
				
				$temp_detail = array(
					'id_pemesanan' => $data['id_pemesanan']
				);
				
				$data['makanan'] = $this->pemesanan_detail_model->GetID($temp_detail);
				$data['pesanan'] = true;
			}else{
				$data['pesanan'] = false;
			}
			
			echo json_encode($data);
		}
		
		public function get_konsumen(){
			$id = $this->input->post('id_konsumen');				
			
			$temp_check = array(
				'id_konsumen' => $id
			);
			
			$temp = $this->konsumen_model->GetID($temp_check);
			$data = $temp[0];
			
			echo json_encode($data);
		}
		
		public function get_admin(){
			$temp_check = array(
				'id_admin' => 1
			);
			
			$temp = $this->admin_model->GetID($temp_check);
			$data = $temp[0];
			
			echo json_encode($data);
		}

		public function dibeli(){
			$id = $this->input->post('id_pemesanan');
			$data = array(
				'status_pemesanan' => 'diantar',
			);
			$this->pemesanan_model->Edit($data,$id);

			$data = array(
				'error' => false,
				'pesan' => 'Pemesanan Diantar'
			);
			
			$message = "Pesanan Diantar";
			
			$temp = array(
				'id_pemesanan' => $id
			);
			
			$data_temp_konsumen = $this->pemesanan_model->GetID($temp);
        
			$id_konsumen = $data_temp_konsumen[0]['id_konsumen'];
			
			$temp_konsumen = array(
				'id_konsumen' => $id_konsumen
			);
			
			$data_konsumen = $this->konsumen_model->GetID($temp_konsumen);
			
			$datamsg = array
			(
				'status'   => 'diantar',
				'pesan'  => $this->input->post('pesan')
			);
			
			echo json_encode($data);
			
			sendGCM($message,$data_konsumen[0]['token_konsumen'],FIREBASE_API_KEY_USER,$datamsg);
		}
		
		public function dibayar(){
			$id = $this->input->post('id_pemesanan');
			$id_pengendara = $this->input->post('id_pengendara');
			$data = array(
				'status_pemesanan' => 'dibayar'
			);
			$this->pemesanan_model->Edit($data,$id);
			
			$data_transaksi = array(
				'data_transaksi' => $this->input->post('data_transaksi'),
				'data_konsumen' => $this->input->post('data_konsumen'),
				'data_pengendara' => $this->input->post('data_pengendara'),
				'data_restoran' => $this->input->post('data_restoran'),
				'data_makanan' => $this->input->post('data_makanan'),
				'total_harga' => $this->input->post('total_harga'),
				'total_dibayar' => $this->input->post('total_dibayar'),
			);
			
			$this->transaksi_model->Add($data_transaksi);

			$data = array(
				'error' => false,
				'pesan' => 'Pemesanan Dibayar'
			);
			
			$data_pengendara = array(
				'status_pengendara' => 'kosong'
			);
			$this->pengendara_model->Edit($data_pengendara,$id_pengendara);
			
			$temp = array(
				'id_pemesanan' => $id
			);
			
			$data_temp_konsumen = $this->pemesanan_model->GetID($temp);
        
			$id_konsumen = $data_temp_konsumen[0]['id_konsumen'];
			
			$temp_konsumen = array(
				'id_konsumen' => $id_konsumen
			);
			
			$data_konsumen = $this->konsumen_model->GetID($temp_konsumen);
			
			$message = "Pesanan Dibayar";
			
			$datamsg = array
			(
				'status'   => 'dibayar',
				'pesan'  => 'pembayaran'
			);
			
			echo json_encode($data);
			
			sendGCM($message,$data_konsumen[0]['token_konsumen'],FIREBASE_API_KEY_USER,$datamsg);
		}
		
		public function get_restoran(){
			$id = $this->input->post('id_restoran');
			$temp = array(
				'id_restoran' => $id
			);
			$temp_data = $this->restoran_model->GetID($temp);
			$data = $temp_data[0];
			
			echo json_encode($data);
		}
		
		public function pembayaran(){
			$id = $this->input->post('id_pemesanan');
			$data = array(
				'status_pemesanan' => 'dibayar',
			);
			$this->pemesanan_model->Edit($data,$id);

			$data_transaksi = array(
				'id_pemesanan' => $id,
				'data_transaksi' => $this->input->post('data_transaksi'),
				'data_konsumen' => $this->input->post('data_konsumen'),
				'data_pengendara' => $this->input->post('data_pengendara'),
				'data_restoran' => $this->input->post('data_restoran'),
				'data_makanan' => $this->input->post('data_makanan'),
				'total_harga' => $this->input->post('total_harga'),
				'total_dibayar' => $this->input->post('total_dibayar'),
			);
			$this->transaksi_model->Add($data_transaksi);
			
			$data_pesan = array(
				'error' => false,
				'pesan' => 'Pesanan Dibayar'
			);

			echo json_encode($data_pesan);
		}
	
	}
	
	/* End of file api_pengendara.php */
	