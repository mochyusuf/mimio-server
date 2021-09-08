<?php
	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Konsumen extends CI_Controller {
	
		function __construct(){
			parent::__construct();  
			$config['upload_path'] = './assets/image/konsumen/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size']     = '1024';
    
            $this->load->library('upload', $config);
    
            $this->upload->initialize($config);
			$this->load->model('konsumen_model'); 
			if (!isset($_SESSION['status'])) {
				?>
				<script>
				 window.location.replace("<?php echo base_url(); ?>");
				</script>
			<?php
			}  
		}

		public function add(){
			$password = $this->input->post('password_konsumen');
			$field_name = "image_konsumen";
            $this->upload->do_upload($field_name);
            $temp = $this->upload->data('file_name'); 
            $this->upload->display_errors('<p>', '</p>');
			$param_password = md5($password);
			$data = array(
				'nama_konsumen' => $this->input->post('nama_konsumen'),
				'nomor_telepon_konsumen' => $this->input->post('nomor_telepon_konsumen'),
				'image_konsumen' => "assets/image/konsumen/".$temp,
				'password_konsumen' => $param_password,
				'nomor_telepon_konsumen' => $this->input->post('nomor_telepon_konsumen'),
				'email_konsumen' => $this->input->post('email_konsumen')
			);
			$this->konsumen_model->Add($data);
			?>
			<script>
			 window.location.replace("<?php echo base_url()."main?laman=konsumen"; ?>");
			</script>
		<?php
		}
	
		public function delete(){
			
			$id = $this->input->get('id');
			$this->konsumen_model->Delete($id);
			?>
			<script>
			 window.location.replace("<?php echo base_url()."main?laman=konsumen"; ?>");
			</script>
		<?php
		}
	
		public function edit(){
			$id = $this->input->post('id');
            $field_name = "image_konsumen";
            $this->upload->do_upload($field_name);
    		$temp = $this->upload->data('file_name');
			$data = array(
				'nama_konsumen' => $this->input->post('nama_konsumen'),
				'nomor_telepon_konsumen' => $this->input->post('nomor_telepon_konsumen'),
				'email_konsumen' => $this->input->post('email_konsumen')
			);
			if ($temp != null || $temp != "") {
    			$data['image_konsumen'] = "assets/image/konsumen/".$temp;
    		}
			if ($this->input->post('password_konsumen')) {
				$password = $this->input->post('password_konsumen');
				$param_password = md5($password);
				$data['password_konsumen'] = $param_password;
			}
			// print($id);
			$this->konsumen_model->Edit($data,$id);
			?>
			<script>
			 window.location.replace("<?php echo base_url()."main?laman=konsumen"; ?>");
			</script>
		<?php
		}
	
	}
	
	/* End of file konsumen.php */
	