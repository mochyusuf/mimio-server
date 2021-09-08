<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Controller {

	function __construct(){
        parent::__construct();  
        $this->load->model('pemesanan_model'); 
        $this->load->model('pengendara_model'); 
        $this->load->model('konsumen_model'); 
    }

    public function index()
    {
        
	}

    public function pilih_pengendara(){
		$id_pengendara = $this->input->post('id_pengendara');
        $id = $this->input->post('id');
		$temp = array(
			'id_pengendara' => $id_pengendara
		);
		//print_r($id);
		$this->pemesanan_model->Edit($temp,$id);
		$data_temp = $this->pengendara_model->GetID($temp);
		$message = "Anda Mendapatkan Pesanan";
		//echo FIREBASE_API_KEY_RIDER;
		
		$datamsg = array
		(
			'status'   => 'dipesan',
			'pesan'  => 'pesanan'
		);
		
		//echo $data_temp[0]['token_pengendara'];
		
		sendGCM($message,$data_temp[0]['token_pengendara'],FIREBASE_API_KEY_RIDER,$datamsg);
		
		$data_pengendara = array(
			'status_pengendara' => 'penuh'
		);
		$this->pengendara_model->Edit($data_pengendara,$id_pengendara);
		
        ?>
        <script>
         window.location.replace("<?php echo base_url()."main?laman=pemesanan"; ?>");
        </script>
    <?php
	}
	
	public function get_jumlah_pesanan(){
	    $temp = array(
	        'status_pemesanan' => 'dipesan'
	    );
	    
	    $data = $this->pemesanan_model->GetStatus($temp);
	    
	    echo $data[0]['jumlah'];
	}
	
	
	public function batalkan(){
        $id = $this->input->post('id');
        $keterangan = array(
            'user' => 'admin',
            'pesan' => $this->input->post('pesan')
        );
        
        $keterangan_json = json_encode($keterangan);
        $data = array(
			'status_pemesanan' => 'dibatalkan',
			'keterangan' => $keterangan_json
        );
		$this->pemesanan_model->Edit($data,$id);
		
		$temp = array(
			'id_pemesanan' => $id
		);
        
        $data_pemesanan = $this->pemesanan_model->GetID($temp);
        
        $id_pengendara = $data_pemesanan[0]['id_pengendara'];
		
		$message = "Pesanan Dibatalkan";
		
		$datamsg = array
		(
			'status'   => 'dibatalkan',
			'pesan'  => $this->input->post('pesan')
		);
        
        if($id_pengendara != null)
        {
			$temp_pengendara = array(
				'id_pengendara' => $id_pengendara
			);
			
			$data_temp_pengendara = $this->pengendara_model->GetID($temp_pengendara);
			sendGCM($message,$data_temp_pengendara[0]['token_pengendara'],FIREBASE_API_KEY_RIDER,$datamsg);
		
            $data_pengendara = array(
                'status_pengendara' => 'kosong'
            );
            $this->pengendara_model->Edit($data_pengendara,$id_pengendara);
        }
		$temp_konsumen = array(
			'id_konsumen' => $data_pemesanan[0]['id_konsumen']
		);
			
		$data_temp_konsumen = $this->konsumen_model->GetID($temp_konsumen);
		//echo $data_temp_konsumen[0]['token_konsumen'];
		sendGCM($message,$data_temp_konsumen[0]['token_konsumen'],FIREBASE_API_KEY_USER,$datamsg);
        ?>
        <script>
         window.location.replace("<?php echo base_url()."main?laman=pemesanan"; ?>");
        </script>
    <?php
    }
}
