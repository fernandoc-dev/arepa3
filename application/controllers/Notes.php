<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notes extends CI_Controller {
	public $data;
	public function __construct()
    {
        parent::__construct();
		$this->load->model('notes_model');
    }
	public function index()
	{
		$this->data['notes']=$this->notes_model->read_notes();
		$this->load->view('public/sections/notes/notes',$this->data);
	}
	public function note($url)
	{
		if($this->data['current_note']=$this->notes_model->read_note($url)){
			$this->data['notes']=$this->notes_model->read_notes_links();
			$this->load->view('public/sections/notes/note',$this->data);
		}else{
			$this->set_modal_message->set_the_flash_variables_for_modal('Sorry', 'We couldn\'t find the note you are looking for');
			redirect(base_url('notes'));
		}
		
	}
}
