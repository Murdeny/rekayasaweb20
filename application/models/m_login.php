<?php 

class m_login extends CI_Model{
	
	public function cek_akun($nik, $tgl_lahir, $jenjang, $status){
		$this->db->select('*');
		$this->db->from('tb_admin');
		$this->db->where('nik', $nik);
		$this->db->where('tgl_lahir', $tgl_lahir);
		$this->db->where('jenjang', $jenjang);
		$this->db->where('status', $status);
		if($query = $this->db->get()){
			return $query->row_array();
		}else{
			return false;
		}
	}
}

?>
