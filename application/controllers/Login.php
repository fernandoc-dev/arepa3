<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{

		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$data = $this->input->post(NULL, TRUE);
			if ($data['username']=='user' & $data['password']=='password-user') {
				$_SESSION['user'] = True;
				if(isset($_SESSION['next_page'])){
					redirect(base_url($_SESSION['next_page']));
				}else{
					redirect(base_url("admin/blog_admin"));
				}
			}
		}
		if ($this->input->server('REQUEST_METHOD') === 'GET') {
			$this->load->view('public/sections/login/login');
		}
	}
	public function out(){
		session_destroy();
		redirect(base_url());
	}
}
