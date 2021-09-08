<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct(){
		parent::__construct();     
		$this->load->model('admin_model');
		$this->load->model('pengendara_model');
		$this->load->model('kendaraan_model');
		$this->load->model('restoran_model');
		$this->load->model('makanan_model');
		$this->load->model('konsumen_model');
		$this->load->model('peta_model');
		$this->load->model('pemesanan_model');
		$this->load->model('pemesanan_detail_model');
        if (!isset($_SESSION['status'])) {
            ?>
            <script>
             window.location.replace("<?php echo base_url(); ?>");
            </script>
        <?php
        }  
	}

    public function index()
    {
		$temp = array(
			'id_admin' => $this->session->userdata('id_admin')
		);
		$data['admin'] = $this->admin_model->GetID($temp);

        $this->load->view('template/header.php',$data);
        switch ($this->input->get('laman')) {
			case 'dashboard':
                $this->load->view('laman/dashboard.php',$data);
				break;
			
			case 'admin':
                $this->load->view('laman/admin.php',$data);
				break;
				
			case 'pengendara':
				$data['pengendara'] = $this->pengendara_model->Get();
				$this->load->view('laman/pengendara.php',$data);
				break;

			case 'pengendara|tambah':
				$this->load->view('pengendara/tambah.php',$data);
				break;

			case 'pengendara|edit':
				if ($this->input->get('id') || ($this->input->get('id') == 0)) {
					$id = $this->input->get('id');
					$temp = array(
						'id_pengendara' => $id
					);
					$data['pengendara_edit'] = $this->pengendara_model->GetID($temp);
					$this->load->view('pengendara/edit.php',$data);
				}else {
					$this->load->view('errors/error_unknow.php',$data);
				}
				break;
			
			case 'kendaraan':
				if ($this->input->get('id') || ($this->input->get('id') == 0)) {
					$id = $this->input->get('id');
					$temp = array(
						'id_pengendara' => $id
					);
					$data['id'] = $id;
					$data['kendaraan'] = $this->kendaraan_model->GetID($temp);
					$data['pengendara_edit'] = $this->pengendara_model->GetID($temp);

					$this->load->view('laman/kendaraan.php',$data);
				}else {
					$this->load->view('errors/error_unknow.php',$data);
				}
				break;

			case 'kendaraan|tambah':
				if ($this->input->get('id') || ($this->input->get('id') == 0)) {
					$id = $this->input->get('id');
					$data['id'] = $id;
					$this->load->view('kendaraan/tambah.php',$data);
				}else {
					$this->load->view('errors/error_unknow.php',$data);
				}
				break;

			case 'kendaraan|edit':
				if ($this->input->get('id') || ($this->input->get('id') == 0)) {
					$id = $this->input->get('id');
					$temp = array(
						'id_kendaraan' => $id
					);
					$data['kendaraan_edit'] = $this->kendaraan_model->GetID($temp);
					$this->load->view('kendaraan/edit.php',$data);
				}else {
					$this->load->view('errors/error_unknow.php',$data);
				}
				break;

			case 'restoran':
				$data['restoran'] = $this->restoran_model->Get($temp);
				$this->load->view('laman/restoran.php',$data);
				break;

			case 'restoran|tambah':
				$this->load->view('restoran/tambah.php',$data);
				break;

			case 'restoran|edit':
				if ($this->input->get('id') || ($this->input->get('id') == 0)) {
					$id = $this->input->get('id');
					$temp = array(
						'id_restoran' => $id
					);
					$data['restoran_edit'] = $this->restoran_model->GetID($temp);
					$this->load->view('restoran/edit.php',$data);
				}else {
					$this->load->view('errors/error_unknow.php',$data);
				}
				break;

			case 'makanan':
				if ($this->input->get('id') || ($this->input->get('id') == 0)) {
					$id = $this->input->get('id');
					$temp = array(
						'id_restoran' => $id
					);
					$data['id'] = $id;
					$data['makanan'] = $this->makanan_model->GetID($temp);
					$data['restoran_edit'] = $this->restoran_model->GetID($temp);
					$this->load->view('laman/makanan.php',$data);
				}else {
					$this->load->view('errors/error_unknow.php',$data);
				}
				break;

			case 'makanan|tambah':
				if ($this->input->get('id') || ($this->input->get('id') == 0)) {
					$id = $this->input->get('id');
					$data['id'] = $id;
					$this->load->view('makanan/tambah.php',$data);
				}else {
					$this->load->view('errors/error_unknow.php',$data);
				}
				break;

			case 'makanan|edit':
				if ($this->input->get('id') || ($this->input->get('id') == 0)) {
					$id = $this->input->get('id');
					$temp = array(
						'id_makanan' => $id
					);
					$data['makanan'] = $this->makanan_model->GetID($temp);
					$this->load->view('makanan/edit.php',$data);
				}else {
					$this->load->view('errors/error_unknow.php',$data);
				}
				break;

			case 'konsumen':
				$data['konsumen'] = $this->konsumen_model->Get();
				$this->load->view('laman/konsumen.php',$data);
				break;

			case 'konsumen|tambah':
				$this->load->view('konsumen/tambah.php',$data);
				break;

			case 'konsumen|edit':
				if ($this->input->get('id') || ($this->input->get('id') == 0)) {
					$id = $this->input->get('id');
					$temp = array(
						'id_konsumen' => $id
					);
					$data['konsumen_edit'] = $this->konsumen_model->GetID($temp);
					$this->load->view('konsumen/edit.php',$data);
				}else {
					$this->load->view('errors/error_unknow.php',$data);
				}
				break;


			case 'peta':
				$data['peta'] = $this->peta_model->Get();
				$this->load->view('laman/peta.php',$data);
				break;
			
			case 'peta|tambah':
				$this->load->view('peta/tambah.php',$data);
				break;

			case 'peta|edit':
				if ($this->input->get('id') || ($this->input->get('id') == 0)) {
					$id = $this->input->get('id');
					$temp = array(
						'id_peta' => $id
					);
					$data['peta_edit'] = $this->peta_model->GetID($temp);
					$this->load->view('peta/edit.php',$data);
				}else {
					$this->load->view('errors/error_unknow.php',$data);
				}
				break;

			case 'pemesanan':
				$data['pemesanan'] = $this->pemesanan_model->GetJoin();
				$this->load->view('laman/pemesanan.php',$data);
				break;

			case 'pemesanan|pilih':
				if ($this->input->get('id') || ($this->input->get('id') == 0)) {
					$id = $this->input->get('id');
					$data['id'] = $id;
					$data['pengendara'] = $this->pengendara_model->GetKosong();
					$this->load->view('pemesanan/pilih.php',$data);
				}else {
					$this->load->view('errors/error_unknow.php',$data);
				}
				break;

			case 'pemesanan|pengendara':
				if ($this->input->get('id') || ($this->input->get('id') == 0)) {
					$id = $this->input->get('id');
					$data['id'] = $id;
					$temp = array(
						'id_pengendara' => $id
					);
					$data['pengendara'] = $this->pengendara_model->GetID($temp);
					$this->load->view('pemesanan/pengendara.php',$data);
				}else {
					$this->load->view('errors/error_unknow.php',$data);
				}
				break;

			case 'batalkan|pesanan':
				if ($this->input->get('id') || ($this->input->get('id') == 0)) {
					$id = $this->input->get('id');
					$data['id'] = $id;
					$this->load->view('batalkan/pesanan.php',$data);
				}else {
					$this->load->view('errors/error_unknow.php',$data);
				}
				break;

			case 'pemesanan|detail':
				if ($this->input->get('id') || ($this->input->get('id') == 0)) {
					$id = $this->input->get('id');
					$data['id'] = $id;
					$temp = array(
						'id_pemesanan' => $id
					);
					$pemesanan = $this->pemesanan_model->GetID($temp);
					$temp_konsumen = array(
						'id_konsumen' => $pemesanan[0]['id_konsumen']
					);
					$data['konsumen'] = $this->konsumen_model->GetID($temp_konsumen);
					$temp_restoran = array(
						'id_restoran' => $pemesanan[0]['id_restoran']
					);
					$data['restoran'] = $this->restoran_model->GetID($temp_restoran);
					
					$temp_makanan = array(
						'id_pemesanan' => $pemesanan[0]['id_pemesanan']
					);
					$makanan = $this->pemesanan_detail_model->GetID($temp_makanan);
					
					$i = 0;
					$total_harga = 0;
					foreach ($makanan as $row) {
						$temp_makanan_pesan = array(
							'id_makanan' => $row['id_makanan']
						);
						$data['makanan'][$i] = $this->makanan_model->GetID($temp_makanan_pesan);
						$total_harga += $data['makanan'][$i][0]['harga_makanan'];
						
						$i++;
					}
					$data['total_harga'] = $total_harga;
					$this->load->view('pemesanan/detail.php',$data);
				}else {
					$this->load->view('errors/error_unknow.php',$data);
				}
				break;
            
            default:
                $this->load->view('errors/error_404.php',$data);
                break;
        }
        $this->load->view('template/footer.php');

	}

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }

}

/* End of file admin.php */
