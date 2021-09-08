<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Restoran extends CI_Controller {

	function __construct(){
        parent::__construct();  
        $this->load->model('restoran_model'); 
        $config['upload_path'] = './assets/image/restoran/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
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
        $field_name = "image_restoran";
        $this->upload->do_upload($field_name);
        $temp = $this->upload->data('file_name'); 
        $this->upload->display_errors('<p>', '</p>');
        $data = array(
            'nama_restoran' => $this->input->post('nama_restoran'),
            'alamat_restoran' => $this->input->post('alamat_restoran'),
            'nomor_telepon_restoran' => $this->input->post('nomor_telepon_restoran'),
            'latitude' => $this->input->post('latitude'),
            'longitude' => $this->input->post('longitude'),
            'image_restoran' => "assets/image/restoran/".$temp,
            'id_admin' => $_SESSION['id_admin']
        );
        $this->restoran_model->Add($data);
        ?>
        <script>
         window.location.replace("<?php echo base_url()."main?laman=restoran"; ?>");
        </script>
    <?php
    }

	public function delete(){
        $id = $this->input->get('id');
        $this->restoran_model->Delete($id);
        ?>
        <script>
         window.location.replace("<?php echo base_url()."main?laman=restoran"; ?>");
        </script>
    <?php
    }

    public function edit(){
        $id = $this->input->post('id');
        $field_name = "image_restoran";
        $this->upload->do_upload($field_name);
        $temp = $this->upload->data('file_name');
        
        $data = array(
            'nama_restoran' => $this->input->post('nama_restoran'),
            'alamat_restoran' => $this->input->post('alamat_restoran'),
            'nomor_telepon_restoran' => $this->input->post('nomor_telepon_restoran'),
            'latitude' => $this->input->post('latitude'),
            'longitude' => $this->input->post('longitude'),
            'id_admin' => $_SESSION['id_admin']
        );
        if ($temp != null || $temp != "") {
			$data['image_restoran'] = "assets/image/restoran/".$temp;
		}
        $this->restoran_model->Edit($data,$id);
        ?>
        <script>
         window.location.replace("<?php echo base_url()."main?laman=restoran"; ?>");
        </script>
    <?php
    }
}
