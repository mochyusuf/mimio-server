<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
        parent::__construct();  
        $this->load->model('admin_model'); 
        $config['upload_path'] = './assets/image/admin/';
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
	
	public function logout(){
	    $this->session->sess_destroy();
            ?>
            <script>
             window.location.replace("<?php echo base_url(); ?>");
            </script>
        <?php
	}
	
	public function edit(){
        $id_admin = $this->input->post('id_admin');
        $field_name = "image_admin";
        $this->upload->do_upload($field_name);
		$temp = $this->upload->data('file_name');
		
		$data = array(
			'username_admin' => $this->input->post('username_admin'),
			'nama_admin' => $this->input->post('nama_admin'),
			'tempat_lahir_admin' => $this->input->post('tempat_lahir_admin'),
			'tanggal_lahir_admin' => $this->input->post('tanggal_lahir_admin'),
			'nomor_ktp_admin' => $this->input->post('nomor_ktp_admin'),
			'email_admin' => $this->input->post('email_admin'),
			'nomor_telepon_admin' => $this->input->post('nomor_telepon_admin')
		);

        if ($temp != null || $temp != "") {
            $data['image_admin'] = "assets/image/admin/".$temp;
		}
		if ($this->input->post('password_admin')) {
			$password = $this->input->post('password_admin');
			$param_password = md5($password);
			$data['password_admin'] = $param_password;
		}
        $this->admin_model->Edit($data,$id_admin);
        ?>
        <script>
         window.location.replace("<?php echo base_url()."main?laman=admin"; ?>");
        </script>
    <?php
    }
}

/* End of file admin.php */
