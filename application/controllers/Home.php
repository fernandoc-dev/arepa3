<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $data = $this->input->post(NULL, TRUE);
            $message = "Name: " . $data['name'] . " / Email: " . $data['email'] . " / Message: " . $data['message'];
            $this->load->library('email');
            $this->email->from('fer@fernandoc.dev', 'Fernando');
            $this->email->to('fernandocarrillos86@gmail.com');
            $this->email->subject('Message from the web');
            $this->email->message($message);
            $this->email->send();

			$this->set_modal_message->set_the_flash_variables_for_modal('Thanks!', 'I will read the message and reply it as soon as possible');
			redirect(base_url());
		} elseif ($this->input->server('REQUEST_METHOD') === 'GET') {
			$this->load->view('public/sections/home/home');
		}
		
	}
}
