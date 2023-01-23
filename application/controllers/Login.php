<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$data = $this->input->post(NULL, TRUE);
			if ($data['username']=='user' & $data['password']=='password-user') {
				$_SESSION['user'] = True;
				redirect(base_url("admin/blog"));
			}
		}
		$this->load->view('public/sections/login/login');
	}
}
