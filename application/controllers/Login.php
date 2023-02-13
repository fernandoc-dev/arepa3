<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$this->visits->count_visit("login_post");
			$data = $this->input->post(NULL, TRUE);
			if ($data['username']=='user' & $data['password']=='password-user') {
				$_SESSION['user'] = True;
				if(isset($_SESSION['next_page'])){
					redirect(base_url($_SESSION['next_page']));
				}else{
					redirect(base_url("admin/blog_admin"));
				}
			}else{
				$this->set_modal_message->set_the_flash_variables_for_modal('Sorry', 'Wrong user or password','Ok');
				redirect(base_url("login"));
			}
		}
		if ($this->input->server('REQUEST_METHOD') === 'GET') {
			$this->visits->count_visit("login_get");
			$this->load->view('public/sections/login/login');
		}
	}
	public function out()
	{
		$this->visits->count_visit("logout");
		session_destroy();
		redirect(base_url());
	}
}