<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {

	public function index()
	{
    $this->load->helper('url');
		redirect('https://dreamlinehost.com/client/news/metode-pembayaran');
	}

}
