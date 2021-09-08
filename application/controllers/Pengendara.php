<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pengendara extends CI_Controller {

	function __construct(){
        parent::__construct();  
        $this->load->model('pengendara_model'); 
        $config['upload_path'] = './assets/image/pengendara/';
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
        $field_name = "image_pengendara";
        $this->upload->do_upload($field_name);
        $temp = $this->upload->data('file_name'); 
        $this->upload->display_errors('<p>', '</p>');
		$password = $this->input->post('password_pengendara');
		$param_password = md5($password);
        $data = array(
            'id_nomor_pengendara' => $this->input->post('id_nomor_pengendara'),
            'password_pengendara' => $param_password,
            'nama_pengendara' => $this->input->post('nama_pengendara'),
            'alamat_pengendara' => $this->input->post('alamat_pengendara'),
            'nomor_telepon_pengendara' => $this->input->post('nomor_telepon_pengendara'),
            'image_pengendara' => "assets/image/pengendara/".$temp,
            'id_admin' => $_SESSION['id_admin']
        );
        $this->pengendara_model->Add($data);
        ?>
        <script>
         window.location.replace("<?php echo base_url()."main?laman=pengendara"; ?>");
        </script>
    <?php
    }

	public function delete(){
        
        $id = $this->input->get('id');
        $this->pengendara_model->Delete($id);
        ?>
        <script>
         window.location.replace("<?php echo base_url()."main?laman=pengendara"; ?>");
        </script>
    <?php
    }

    public function edit(){
        $id = $this->input->post('id');
        $field_name = "image_pengendara";
        $this->upload->do_upload($field_name);
		$temp = $this->upload->data('file_name');

        $data = array(
            'nama_pengendara' => $this->input->post('nama_pengendara'),
            'alamat_pengendara' => $this->input->post('alamat_pengendara'),
            'nomor_telepon_pengendara' => $this->input->post('nomor_telepon_pengendara'),
            'id_admin' => $_SESSION['id_admin']
        );
        if ($temp != null || $temp != "") {
			$data['image_pengendara'] = "assets/image/pengendara/".$temp;
		}
		if ($this->input->post('password_pengendara')) {
			$password = $this->input->post('password_pengendara');
			$param_password = md5($password);
			$data['password_pengendara'] = $param_password;
		}
        $this->pengendara_model->Edit($data,$id);
        ?>
        <script>
         window.location.replace("<?php echo base_url()."main?laman=pengendara"; ?>");
        </script>
    <?php
	}
	
	public function validate_id(){
		$data = array(
			'valid' => false,
			'message' => 'ID Number Sudah Digunakan'
		);
		
		if($this->input->post('id_nomor_pengendara')) {

			$where = array(
                'id_nomor_pengendara' => $this->input->post('id_nomor_pengendara')
                );

			$cek = $this->pengendara_model->cek_login($where)->num_rows();
			
			if($cek > 0) {
				$response = array('valid' => false, 'message' => 'ID Number Sudah Digunakan');
			} else {
			  // User name is available
				$response = array('valid' => true);
			}
          }
          else{
            $response = array('valid' => false, 'message' => 'This is a required field');
          }
		  echo json_encode($response);
	}
	
	public function validate_username(){
		$data = array(
			'valid' => false,
			'message' => 'Username Sudah Digunakan'
		);
		
		if($this->input->post('username_pengendara')) {

			$where = array(
                'username_pengendara' => $this->input->post('username_pengendara')
                );

			$cek = $this->pengendara_model->cek_login($where)->num_rows();
			
			if($cek > 0) {
				$response = array('valid' => false, 'message' => 'Username Sudah Digunakan');
			} else {
			  // User name is available
				$response = array('valid' => true);
			}
          }
          else{
            $response = array('valid' => false, 'message' => 'This is a required field');
          }
		  echo json_encode($response);
	}
}
