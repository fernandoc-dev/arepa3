<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notes extends CI_Controller {
	public $data;
	public function __construct()
    {
        parent::__construct();
		$this->load->model('technologies_model');
		$this->load->model('notes_model');
    }
	public function index()
	{
		$this->visits->count_visit("notes");
		$this->data['technologies']=$this->technologies_model->read_technologies();
		$this->load->view('public/sections/notes/technologies',$this->data);
	}
	public function technology($technology)
	{
		if(!$this->data['technology']=$this->technologies_model->read_technology_by_technology($technology)){
			$this->set_modal_message->set_the_flash_variables_for_modal('Sorry', 'We couldn\'t find the section you are looking for, but you can check the following sections where maybe you can satisfy your research','Ok');
			redirect(base_url('notes'));
		}else{
			$this->visits->count_visit("notes/$technology");
			$this->data['notes'] = $this->notes_model->read_notes_by_technology($technology);
			$this->load->view('public/sections/notes/notes',$this->data);
		}
	}
	public function note($technology,$url)
	{
		if(!$this->data['technology']=$this->technologies_model->read_technology_by_technology($technology)){
			$this->set_modal_message->set_the_flash_variables_for_modal('Sorry', 'We couldn\'t find the section you are looking for, but you can check the following sections where maybe you can satisfy your research','Ok');
			redirect(base_url('notes'));
		}
		if(!$this->data['current_note']=$this->notes_model->read_note_by_technology_and_url($technology,$url)){
			$this->set_modal_message->set_the_flash_variables_for_modal('Sorry', 'We couldn\'t find the section you are looking for, but you can check the following sections where maybe you can satisfy your research','Ok');
			redirect(base_url($technology));
		}
		$this->visits->count_visit("notes/$technology/$url");
		$this->data['notes'] = $this->notes_model->read_notes_by_technology($technology);
		$this->load->view('public/sections/notes/article',$this->data);
	}
}