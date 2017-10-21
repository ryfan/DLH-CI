<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jasa extends CI_Controller {

	public function index()
	{
		$this->load->view('jasa');
	}

  public function jasa_pembuatan_website()
	{
		$this->load->view('jasa_pembuatan_website');
	}

  public function jasa_instalasi_server_linux()
	{
		$this->load->view('jasa_instalasi_server_linux');
	}

}
