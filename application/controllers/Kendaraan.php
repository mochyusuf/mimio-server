<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kendaraan extends CI_Controller {

	function __construct(){
        parent::__construct();  
        $this->load->model('kendaraan_model'); 
        $config['upload_path'] = './assets/image/kendaraan/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']     = '1024';

        $this->load->library('upload', $config);

        $this->upload->initialize($config);
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
        
	}

	public function add(){
        $id = $this->input->post('id');
        $field_name = "image_kendaraan";
        $this->upload->do_upload($field_name);
        $temp = $this->upload->data('file_name'); 
        $this->upload->display_errors('<p>', '</p>');
        $data = array(
            'nomor_kendaraan' => $this->input->post('nomor_kendaraan'),
            'merk_kendaraan' => $this->input->post('merk_kendaraan'),
            'jenis_kendaraan' => $this->input->post('jenis_kendaraan'),
            'tahun_kendaraan' => $this->input->post('tahun_kendaraan'),
            'id_pengendara' => $id,
            'image_kendaraan' => "assets/image/kendaraan/".$temp,
        );
        $this->kendaraan_model->Add($data);
        ?>
        <script>
         window.location.replace("<?php echo base_url()."main?laman=kendaraan&id=".$id; ?>");
        </script>
    <?php
    }

	public function delete(){
        
        $id = $this->input->get('id_hapus');
        $id_data = $this->input->get('id_data');
        $this->kendaraan_model->Delete($id);
        ?>
        <script>
         window.location.replace("<?php echo base_url()."main?laman=kendaraan&id=".$id_data; ?>");
        </script>
    <?php
    }

    public function edit(){
        $id = $this->input->post('id');
        $id_back = $this->input->post('id_pengendara');
        $field_name = "image_kendaraan";
        $this->upload->do_upload($field_name);
        $temp = $this->upload->data('file_name');
        
        $data = array(
            'nomor_kendaraan' => $this->input->post('nomor_kendaraan'),
            'merk_kendaraan' => $this->input->post('merk_kendaraan'),
            'jenis_kendaraan' => $this->input->post('jenis_kendaraan'),
            'tahun_kendaraan' => $this->input->post('tahun_kendaraan'),
        );
        if ($temp != null || $temp != "") {
			$data['image_kendaraan'] = "assets/image/kendaraan/".$temp;
		}
        $this->kendaraan_model->Edit($data,$id);
        ?>
        <script>
         window.location.replace("<?php echo base_url()."main?laman=kendaraan&id=".$id_back; ?>");
        </script>
    <?php
    }
}
