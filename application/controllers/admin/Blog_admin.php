<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_admin extends CI_Controller {

    //Class properties
    private $data;
	public function __construct()
    {
        parent::__construct();
		$this->load->model('blog_model');
		$this->load->model('complement_data_model');
		$this->load->library('form_validation');
    }
	public function index()
	{
		$this->load->view('public/sections/blog/blog');
	}
	public function create()
    {
       
		if(!isset($_SESSION['user'])){
			$_SESSION['next_page'] = 'admin/blog/create';
			redirect(base_url('login'));
		}
        if ($this->input->server('REQUEST_METHOD') === 'GET') {

            $this->load->view('admin/sections/blog/create');

        } elseif ($this->input->server('REQUEST_METHOD') === 'POST') {
			$article = $this->input->post(array('title','introduction','content','url'), TRUE);
            $timestamp = new DateTime();

            // Upload image
            $config['upload_path']          = './assets/arepa3/images/blog/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 2048;
            $config['max_width']            = 2048;
            $config['max_height']           = 2048;
            $config['overwrite']            = TRUE;
            $config['file_name']            = substr($_FILES['image']['name'], 0, -4) . $timestamp->getTimestamp() . substr($_FILES['image']['name'], -4);
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')){
                $this->set_modal_message->set_the_flash_variables_for_modal('Sorry!', $this->upload->display_errors());
                redirect(base_url('admin/blog_admin/create'));
            }
             // Upload image
             
            $article['image']='assets/arepa3/images/blog/' . $config['file_name'];

			if(!$this->blog_model->create($article)){
                $this->set_modal_message->set_the_flash_variables_for_modal('Sorry!', 'It was a problem creating the post');
            }else{
                $this->set_modal_message->set_the_flash_variables_for_modal('Good news!', 'The post was successfully created');
            }
            redirect(base_url('admin/blog_admin/create'));
        }
    }
}