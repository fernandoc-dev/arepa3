<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test_layouts extends CI_Controller {
	public function index()
	{
		$this->load->model('notes_model');
		var_dump($this->notes_model->read_notes_by_technology('python'));
	}
}
