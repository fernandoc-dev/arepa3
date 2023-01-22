<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Algorithms extends CI_Controller {
	public function index()
	{
		$this->load->view('public/sections/algorithms/algorithms');
	}
	public function algorithm()
	{
		$this->load->view('public/sections/algorithms/algorithm');
	}
}
