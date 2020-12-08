<?php
class m_dosen extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	function tampil_dosen() {
	return $this->db->get('tb_dosen');
	}
}
?>