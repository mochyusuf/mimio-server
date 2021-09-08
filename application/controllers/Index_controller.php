<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
	
    class Index_controller extends CI_Controller {

		function __construct(){
            parent::__construct();     
            $this->load->model('admin_model');
            if (isset($_SESSION['status'])) {
                ?>
                <script>
				window.location.replace("<?php echo base_url()."main?laman=dashboard"; ?>");
				</script>
            <?php
            }
		}
		
		public function index()
		{
			$this->load->view('login.php');
		}

		public function Login(){
            $param_username = $this->input->post('username');
            $password = $this->input->post('password');
            $param_password = md5($password);

            $where = array(
                'username_admin' => $param_username,
                'password_admin' => $param_password
                );

            $cek = $this->admin_model->cek_login($where)->num_rows();
            if($cek > 0){
                $temp = array(
                    'username_admin' => $param_username
                );
                $id_user = $this->admin_model->GetID($temp);
                $data_session = array(
                    'id_admin' => $id_user[0]['id_admin'],
                    'status' => "login"
                    );
                $this->session->set_userdata($data_session);
     
                redirect(base_url("main?laman=dashboard"));
     
            }else{?>
                <script>
				alert("Username Atau Password salah !");
				 window.location.replace("<?php echo base_url(); ?>");
				</script>
            <?php 
			}
        }
	}
    /* End of file index_controller.php */
    