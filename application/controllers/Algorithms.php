<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Algorithms extends CI_Controller {
	public $data;
	public function __construct()
    {
        parent::__construct();
		$this->load->model('algorithms_model');
    }
	public function index()
	{
		$this->data['algorithms']=$this->algorithms_model->read_algorithms();
		$this->load->view('public/sections/algorithms/algorithms',$this->data);
	}
	public function algorithm($url)
	{
		// The user visit the url: /algorithms/algorithm
		if($this->data['current_algorithm']=$this->algorithms_model->read_algorithm($url)){
			$this->data['algorithms']=$this->algorithms_model->read_algorithms_links();
			$this->load->view('public/sections/algorithms/algorithm',$this->data);
		}else{
			$this->set_modal_message->set_the_flash_variables_for_modal('Sorry', 'We couldn\'t find the algorithm you are looking for');
			redirect(base_url('algorithms'));
		}
		
	}
}
