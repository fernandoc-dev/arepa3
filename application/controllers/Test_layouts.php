<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test_layouts extends CI_Controller {
	public function index()
	{
		$this->load->view('canvas-templates/demo-resume');
	}
}
