<?php
	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Api_konsumen extends CI_Controller {
		function __construct(){
			parent::__construct();  
			$this->load->model('konsumen_model'); 
			$this->load->model('pemesanan_model'); 
			$this->load->model('pengendara_model'); 
			$this->load->model('pemesanan_detail_model'); 
			$this->load->model('restoran_model'); 
			$this->load->model('makanan_model'); 
		}
		public function index()
		{
			
		}
		
		public function restoran(){
			$data['restoran'] = $this->restoran_model->Get();
			echo json_encode($data);
		}
		
		public function makanan(){
			$id_restoran = $this->input->post('id_restoran');
			$temp = array(
				'id_restoran' => $id_restoran
			);
			$data['makanan'] = $this->makanan_model->GetID($temp);
			echo json_encode($data);
		}
		
		public function cari_restoran(){
			$nama = $this->input->post('nama_restoran');
			$data['restoran'] = $this->restoran_model->GetNama($nama);
			echo json_encode($data);
		}
		
		public function cek_pemesanan(){
			$id = $this->input->post('id_konsumen');
			$temp = array(
				'id_konsumen' => $id,
				'status_pemesanan' => 'dipesan'
			);
			$data_temp = $this->pemesanan_model->GetID($temp);
			$data = $data_temp[0];
			echo json_encode($data);
		}

		public function pemesanan(){
			$data = array(
				'id_restoran' => $this->input->post('id_restoran'),
				'uuid' => $this->input->post('uuid'),
				'id_konsumen' => $this->input->post('id_konsumen'),
				'latitude' => $this->input->post('latitude'),
				'longitude' => $this->input->post('longitude'),
				'harga_makanan' => $this->input->post('harga_makanan'),
			);
			$this->pemesanan_model->Add($data);

			$data = array(
				'error' => false,
				'pesan' => 'Pemesanan Berhasil Silakan Tunggu'
			);
			echo json_encode($data);
		}
		
		public function get_id_pemesanan(){
			$temp = array(
				'uuid' => $this->input->post('uuid')
			);
			$id = $this->pemesanan_model->GetID($temp);

			$data = array(
				'error' => false,
				'pesan' => $id[0]['id_pemesanan']
			);
			echo json_encode($data);
		}

		public function pemesanan_detail(){
			$temp = array(
				'id_pemesanan' => $this->input->post('id_pemesanan'),
				'nama_makanan' => $this->input->post('nama_makanan'),
				'id_makanan' => $this->input->post('id_makanan'),
				'harga_makanan' => $this->input->post('harga_makanan'),
				'jumlah_makanan' => $this->input->post('jumlah_makanan'),
			);
			$this->pemesanan_detail_model->Add($temp);

			$data = array(
				'error' => false,
				'pesan' => 'Pemesanan Detail Berhasil Silakan Tunggu'
			);
			echo json_encode($data);
		}

		public function register(){
			$password = $this->input->post('password_konsumen');
			$param_password = md5($password);
			$data = array(
				'password_konsumen' => $param_password,
				'nama_konsumen' => $this->input->post('nama_konsumen'),
				'nomor_telepon_konsumen' => $this->input->post('nomor_telepon_konsumen'),
				'email_konsumen' => $this->input->post('email_konsumen'),
				'token_konsumen' => $this->input->post('token_konsumen'),
			);
			$this->konsumen_model->Add($data);

			$data = array(
				'error' => false,
				'pesan' => 'Berhasil Daftar Silakan Login'
			);
			echo json_encode($data);
		}
		
		public function get_pesanan_makanan(){
			$id = $this->input->post('id_pemesanan');				
			
				$temp_detail = array(
					'id_pemesanan' => $id,
				);
				
				$data['makanan'] = $this->pemesanan_detail_model->GetID($temp_detail);

			
			echo json_encode($data);
		}

		public function get_pemesanan(){
			$id = $this->input->post('id_pemesanan');
			$temp = array(
				'id_pemesanan' => $id
			);
			$temp_data = $this->pemesanan_model->GetID($temp);
			$data = $temp_data[0];
			echo json_encode($data);
		}
		
		public function get_pemesanan_konsumen(){
			$id = $this->input->post('id_konsumen');
			$temp = array(
				'id_konsumen' => $id
			);
			$temp_data = $this->pemesanan_model->GetIDKonsumen($id);
			
			$data = array();
			if(isset($temp_data[0])){
			    $data['kosong'] = 'dipesan';
			    $data['pemesanan'] = $temp_data[0];
			}else{
			    $data['kosong'] = true;
			}
			echo json_encode($data);
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

		public function login(){
			$param_email = $this->input->post('email_konsumen');
            $password = $this->input->post('password_konsumen');
            $param_password = md5($password);

            $where = array(
                'email_konsumen' => $param_email,
                'password_konsumen' => $param_password
                );
            $cek = $this->konsumen_model->cek_login($where)->num_rows();
            if($cek > 0){
                $data_edit = array(
    				'token_konsumen' => $this->input->post('token_konsumen'),
    			);
    			
    			echo $this->konsumen_model->Edit($data_edit,$param_email);
    			
				$id = array(
					'email_konsumen' => $param_email
				);
				$data_konsumen = $this->konsumen_model->GetID($id);
				$data = array(
					'error' => false,
					'konsumen' => array(
						'id_konsumen' => $data_konsumen[0]['id_konsumen'],
						'nama_konsumen' => $data_konsumen[0]['nama_konsumen'],
						'nomor_telepon_konsumen' => $data_konsumen[0]['nomor_telepon_konsumen'],
						'image_konsumen' => $data_konsumen[0]['image_konsumen'],
						'email_konsumen' => $data_konsumen[0]['email_konsumen'],
						'token_konsumen' => $data_konsumen[0]['token_konsumen'],
					)
				);
				echo json_encode($data);
     
            }else{
				$data = array(
					'error' => true,
					'pesan' => 'Username atau Password Salah'
				);
				echo json_encode($data);
			}
		}

		public function batalkan(){
			$id = $this->input->post('id_pemesanan');
			$keterangan = array(
                'user' => 'konsumen',
                'pesan' => $this->input->post('pesan')
            );
            $keterangan_json = json_encode($keterangan);
			$data = array(
				'status_pemesanan' => 'dibatalkan',
				'keterangan' => $keterangan_json
			);
			$this->pemesanan_model->Edit($data,$id);

			$message = "Pesanan Dibatalkan";
		
			$datamsg = array
			(
				'status'   => 'dibatalkan',
				'pesan'  => 'batal'
			);
			
			$temp = array(
				'id_pemesanan' => $id
			);
			
			$data_pemesanan = $this->pemesanan_model->GetID($temp);
			
			$hasil = array(
				'error' => false,
				'pesan' => 'Batal'
			);
			
			echo json_encode($hasil);
			
			$id_pengendara = $data_pemesanan[0]['id_pengendara'];
			
			if($id_pengendara != null){
			    $temp_pengendara = array(
				    'id_pengendara' => $data_pemesanan[0]['id_pengendara']
    			);
    				
    			$data_temp_pengendara = $this->pengendara_model->GetID($temp_pengendara);
    			
    			$data_pengendara = array(
                    'status_pengendara' => 'kosong'
                );
                $this->pengendara_model->Edit($data_pengendara,$data_temp_pengendara[0]["id_pengendara"]);
    
    			sendGCM($message,$data_temp_pengendara[0]['token_pengendara'],FIREBASE_API_KEY_RIDER,$datamsg);
			}
		}
	
	}
	
	/* End of file api.php */
	