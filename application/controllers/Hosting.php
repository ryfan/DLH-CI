<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hosting extends CI_Controller {

	public function index()
	{
		$this->load->view('hosting');
	}

  public function web_hosting_litespeed_indonesia()
	{
		$this->load->view('litespeed_indonesia');
	}

	public function web_hosting_ssd_singapore()
	{
		$this->load->view('ssd_singapore');
	}

}
