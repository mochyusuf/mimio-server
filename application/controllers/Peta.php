<?php
	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Peta extends CI_Controller {

		function __construct(){
			parent::__construct();  
			$this->load->model('peta_model'); 
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
			$data = array(
				'latitude' => $this->input->post('latitude'),
				'longitude' => $this->input->post('longitude')
			);
			$this->peta_model->Add($data);
			?>
			<script>
			 window.location.replace("<?php echo base_url()."main?laman=peta"; ?>");
			</script>
		<?php
		}

		public function delete(){
        
			$id = $this->input->get('id');
			$this->peta_model->Delete($id);
			?>
			<script>
			 window.location.replace("<?php echo base_url()."main?laman=peta"; ?>");
			</script>
		<?php
		}

		public function edit(){
			$id = $this->input->post('id');
			$data = array(
				'latitude' => $this->input->post('latitude'),
				'longitude' => $this->input->post('longitude')
			);
			$this->peta_model->Edit($data,$id);
			?>
			<script>
			 window.location.replace("<?php echo base_url()."main?laman=peta"; ?>");
			</script>
		<?php
		}
	}
	
	/* End of file peta.php */
	