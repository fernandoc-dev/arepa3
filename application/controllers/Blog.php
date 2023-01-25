<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	public $data;
	public function __construct()
    {
        parent::__construct();
		$this->load->model('blog_model');
    }
	public function index()
	{
		$this->data['articles']=$this->blog_model->read_articles();
		$this->load->view('public/sections/blog/blog',$this->data);
	}
	public function article($url)
	{
		// The user visit the url: /blog/article
		if($this->data['current_article']=$this->blog_model->read_article($url)){
			$this->data['articles']=$this->blog_model->read_articles_links();
			$this->load->view('public/sections/blog/article',$this->data);
		}else{
			$this->set_modal_message->set_the_flash_variables_for_modal('Sorry', 'We couldn\'t find the article you are looking for');
			redirect(base_url('blog'));
		}
		
	}
}
