<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('index_home');
	}

	public function web()
	{
		$this->load->view('webhosting');
	}

}
