<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function index()
	{
		$this->load->view('common/header.php');
		$this->load->view('index.php');
		$this->load->view('common/footer.php');
	}

	public function photo_gallery()
	{
		$this->load->view('common/header.php');
		$this->load->view('photo_gallery.php');
		$this->load->view('common/footer.php');
	}


}
