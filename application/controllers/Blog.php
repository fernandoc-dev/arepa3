<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	public function index()
	{
		$this->load->view('public/sections/blog/blog');
	}
	public function article()
	{
		$this->load->view('public/sections/blog/article');
	}
}
