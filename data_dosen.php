<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_dosen extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_dosen');
	}

	public function index()
	{
		$data['tb_dosen'] = $this->m_dosen->tampil_dosen()->result();
		$this->load->view('v_dosen', $data);
	}
}
?>