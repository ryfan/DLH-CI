<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Domain extends CI_Controller {

	public function index()
	{
		$this->load->view('domain');
	}

  public function domain_indonesia()
	{
		$this->load->view('domain_indonesia');
	}

  public function domain_internasional()
	{
		$this->load->view('domain_internasional');
	}

}
