<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends CI_Controller {
	public function index()
	{
		$this->load->view('public/sections/courses/courses');
	}
	public function lesson()
	{
		$this->load->view('public/sections/courses/lesson');
	}
}
