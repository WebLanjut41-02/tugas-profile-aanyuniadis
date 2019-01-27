<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_ta extends CI_Controller {
	public function __construct()
{
	parent::__construct();

	$this->load->helper('url');
}

	public function index()
	{
		$homee = $this->load->view('homee');
	}
	public function aboutt(){
		$this->load->view('aboutt');
	}
	public function komentar(){
		$komentar = $this->input->post('komentar');
		$data['input'] = $komentar;
		$this->load->view('komentar', $data);
	}
}

/* End of file a_ta.php */
/* Location: ./application/controllers/a_ta.php */