<?php 
/*Pengontrol adalah jantung dari aplikasi Anda, karena mereka menentukan bagaimana permintaan HTTP harus ditangani. */
 
class crud extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');

		if($this->session->userdata('login')==null){
			redirect('login');
		}
 
	}
 
	function index(){
		$data['user'] = $this->m_data->tampil_data()->result();
		$this->load->view('tampil',$data);
	}
 
	function tambah(){
		$this->load->view('v_input');
	}
 
	function tambah_aksi(){
		$th_ajaran = $this->input->post('th_ajaran');
		$nama = $this->input->post('nama');
		$nisn = $this->input->post('nisn');
		$asal = $this->input->post('asal');
		$nama_ortu = $this->input->post('nama_ortu');
		$no_ortu = $this->input->post('no_ortu');
		$alamat = $this->input->post('alamat');
		$keterangan = $this->input->post('keterangan');
		$tujuan = $this->input->post('tujuan');
		$alasan = $this->input->post('alasan');
 
		$data = array(
			'th_ajaran' => $th_ajaran,
			'nama' => $nama,
			'nisn' => $nisn,
			'asal' => $asal,
			'nama_ortu' => $nama_ortu,
			'no_ortu' => $no_ortu,
			'alamat' => $alamat,
			'keterangan' => $keterangan,
			'tujuan' => $tujuan,
			'alasan' => $alasan,
			);
		$this->m_data->input_data($data,'user');
		redirect('crud/index');
	}
 
	function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'user');
		redirect('crud/index');
	}
 
	function edit($id){
		$where = array('id' => $id);
		$data['user'] = $this->m_data->edit_data($where,'user')->result();
		$this->load->view('edit',$data);
	}

	function update(){
	$id = $this->input->post('id');
	$th_ajaran = $this->input->post('th_ajaran');
	$nama = $this->input->post('nama');
	$nisn = $this->input->post('nisn');
	$asal = $this->input->post('asal');
	$nama_ortu = $this->input->post('nama_ortu');
	$no_ortu = $this->input->post('no_ortu');
	$alamat = $this->input->post('alamat');
	$keterangan = $this->input->post('keterangan');
	$tujuan = $this->input->post('tujuan');
	$alasan = $this->input->post('alasan');
	
	$data = array(
		'th_ajaran' => $th_ajaran,
		'nama' => $nama,
		'nisn' => $nisn,
		'asal' => $asal,
		'nama_ortu' => $nama_ortu,
		'no_ortu' => $no_ortu,
		'alamat' => $alamat,
		'keterangan' => $keterangan,
		'tujuan' => $tujuan,
		'alasan' => $alasan,
	);
 
	$where = array(
		'id' => $id
	);
 
	$this->m_data->update_data($where,$data,'user');
	redirect('crud/index');
}
 
}