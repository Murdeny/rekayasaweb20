<?php 

class Login extends CI_Controller{
	public function __construct(){
		parent ::__construct();
		$this->load->model('m_login');
	}

	function index(){
		$this->load->view('v_login');
	}

	public function aksi(){
		$this->form_validation->set_rules('nik', 'nik', 'required',array('required' => 'NIK tidak boleh kosong.'));
		$this->form_validation->set_rules('tgl_lahir', 'tgl_lahir', 'required',array('required' => 'Tanggal Lahir tidak boleh kosong.'));
		$this->form_validation->set_rules('jenjang', 'jenjang', 'required',array('required' => 'Jenjang tidak boleh kosong.'));
		$this->form_validation->set_rules('status', 'status', 'required',array('required' => 'Status Siswa tidak boleh kosong.'));
		

		$nik = $this->input->post('nik');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$jenjang = $this->input->post('jenjang');
		$status = $this->input->post('status');

		$data_login = $this->m_login->cek_akun($nik, $tgl_lahir, $jenjang, $status);

		if($this->form_validation->run() != false){

			if($data_login){
				$this->session->set_userdata('id', $data_login['id']);
				$this->session->set_userdata('nama', $data_login['nama']);
				$this->session->set_userdata('login', true);
				redirect('crud');
			}else{
				$this->session->set_flashdata('pesan_flash', 'Akun tidak di temukan');
				$this->load->view('v_login');
			}
		}else{
			$this->load->view('v_login');
		}
	}


	public function logout(){
		$this->session->sess_destroy();
        redirect('login');
	}
}

?>
