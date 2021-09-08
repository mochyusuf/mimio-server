<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Makanan extends CI_Controller {

	function __construct(){
        parent::__construct();  
        $this->load->model('makanan_model'); 
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
        $data = array(
            'nama_makanan' => $this->input->post('nama_makanan'),
            'harga_makanan' => $this->input->post('harga_makanan'),
            'id_restoran' => $id
        );
        $this->makanan_model->Add($data);
        ?>
        <script>
         window.location.replace("<?php echo base_url()."main?laman=makanan&id=".$id; ?>");
        </script>
    <?php
    }

	public function delete(){
        $id_hapus = $this->input->get('id_hapus');
        $id_data = $this->input->get('id_data');
        $this->makanan_model->Delete($id_hapus);
        //echo $id_data;
        ?>
        <script>
         window.location.replace("<?php echo base_url()."main?laman=makanan&id=".$id_data; ?>");
        </script>
    <?php
    }

    public function edit(){
        $id = $this->input->post('id');
        $id_back = $this->input->post('id_restoran');
        
        $data = array(
            'nama_makanan' => $this->input->post('nama_makanan'),
            'harga_makanan' => $this->input->post('harga_makanan'),
        );
        $this->makanan_model->Edit($data,$id);
        ?>
        <script>
         window.location.replace("<?php echo base_url()."main?laman=makanan&id=".$id_back; ?>");
        </script>
    <?php
    }
}
