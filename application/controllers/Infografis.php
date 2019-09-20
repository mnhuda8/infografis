<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Infografis extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$data['content'] = 'beranda';
		$data['scriptExtra'] = $this->load->view('front/javascript/js_beranda', '', TRUE);
		$this->load->view('front/_content', $data);
	}
}
