<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_admin extends CI_Controller {

    //Class properties
    private $data;
	public function __construct()
    {
        parent::__construct();
		$this->load->model('blog_model');
        $this->load->library('form_validation');
    }
	public function index()
	{
        if(!isset($_SESSION['user'])){
			$_SESSION['next_page'] = 'admin/blog_admin';
			redirect(base_url('login'));
		}
        if ($this->input->server('REQUEST_METHOD') === 'GET') {
            $this->data['articles']=$this->blog_model->read_articles_links();
            $this->load->view('admin/sections/blog/index',$this->data);
        }
	}
	public function create()
    {  
		if(!isset($_SESSION['user'])){
			$_SESSION['next_page'] = 'admin/blog_admin';
			redirect(base_url('login'));
		}
        if ($this->input->server('REQUEST_METHOD') === 'GET') {

            $this->load->view('admin/sections/blog/create');

        } elseif ($this->input->server('REQUEST_METHOD') === 'POST') {
			$article = $this->input->post(array('title','url','introduction','content'), FALSE);
            $timestamp = new DateTime();

            // Validation form
            $this->form_validation->set_rules(
                'content',
                'content',
                'trim|required|max_length[16777215]',
                array(
                    'required'      => 'The %s is required.',
                    'max_length'     => 'The max lenght allowed for the %s is 16777215 characteres.'
                )
            );
            $this->form_validation->set_rules(
                'title',
                'title',
                'trim|required|max_length[255]|is_unique[blog.title]',
                array(
                    'required'      => 'The %s is required.',
                    'max_length'     => 'The max lenght allowed for the %s is 255 characteres.',
                    'is_unique'     => 'This title is already registered, try using other.'
                )
            );
            $this->form_validation->set_rules(
                'url',
                'url',
                'trim|required|max_length[255]|is_unique[blog.url]',
                array(
                    'required'      => 'The %s is required.',
                    'max_length'    => 'The max lenght allowed for the %s is 255 characteres.',
                    'is_unique'     => 'This url is already registered, try using other.'
                )
            );
            // Validation form

            if ($this->form_validation->run() == FALSE) {
                $this->set_modal_message->set_the_flash_variables_for_modal('Sorry!', validation_errors(),'Ok');
                $this->load->view('admin/sections/blog/create');
                unset($_SESSION['message']);
            }else{
            // Upload image
            $config['upload_path']          = './assets/arepa3/images/blog/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 2048;
            $config['max_width']            = 2000;
            $config['max_height']           = 1326;
            $config['file_name']            = substr($_FILES['main_image']['name'], 0, -4) . $timestamp->getTimestamp() . substr($_FILES['main_image']['name'], -4);
            $config['overwrite']            = TRUE;
            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('main_image')){
                $this->set_modal_message->set_the_flash_variables_for_modal('Sorry!', $this->upload->display_errors(),'Ok');
                $this->load->view('admin/sections/blog/create');
                unset($_SESSION['message']);
            }else{
                $article['main_image']='assets/arepa3/images/blog/' . $config['file_name'];
            }

            $config['max_width']            = 500;
            $config['max_height']           = 280;
            $config['file_name']            = substr($_FILES['preview_image']['name'], 0, -4) . $timestamp->getTimestamp() . substr($_FILES['preview_image']['name'], -4);
            $this->upload->initialize($config);
            if ( ! $this->upload->do_upload('preview_image')){
                $this->set_modal_message->set_the_flash_variables_for_modal('Sorry!', $this->upload->display_errors(),'Ok');
                $this->load->view('admin/sections/blog/create');
                unset($_SESSION['message']);
            }else{
                $article['preview_image']='assets/arepa3/images/blog/' . $config['file_name'];
            }
             // Upload image

			if(!$this->blog_model->create($article)){
                $this->set_modal_message->set_the_flash_variables_for_modal('Sorry!', 'It was a problem creating the post','Ok');
                redirect(base_url('admin/blog_admin'));
            }else{
                $this->set_modal_message->set_the_flash_variables_for_modal('Good news!', 'The post was successfully created','Ok');
                redirect(base_url('admin/blog_admin'));
            }
            }
        }
    }
    public function update($id = NULL)
    {
        if (!isset($_SESSION['user'])) {
            $_SESSION['next_page'] = 'admin/blog_admin';
            redirect(base_url('login'));
        }
        if ($this->input->server('REQUEST_METHOD') === 'GET') {
            if ($id == NULL) {
                redirect(base_url('admin/blog_admin'));
            }
            $this->data['article'] = $this->blog_model->read_article_by_id($id);
            $this->load->view('admin/sections/blog/update',$this->data);

        } elseif ($this->input->server('REQUEST_METHOD') === 'POST') {
            $article = $this->input->post(array('id','title','url','introduction','content'), FALSE);
            $original_article = $this->blog_model->read_article_by_id($article['id']);
            $timestamp = new DateTime();

            // Validation form
            $this->form_validation->set_rules(
                'content',
                'content',
                'trim|required|max_length[16777215]',
                array(
                    'required' => 'The %s is required.',
                    'max_length' => 'The max lenght allowed for the %s is 16777215 characteres.'
                )
            );
            if ($original_article->title != $article['title']) {
                $this->form_validation->set_rules(
                    'title',
                    'title',
                    'trim|required|max_length[255]|is_unique[blog.title]',
                    array(
                        'required' => 'The %s is required.',
                        'max_length' => 'The max lenght allowed for the %s is 255 characteres.',
                        'is_unique' => 'This title is already registered, try using other.'
                    )
                );
            }
            if ($original_article->url != $article['url']) {
                $this->form_validation->set_rules(
                    'url',
                    'url',
                    'trim|required|max_length[255]|is_unique[blog.url]',
                    array(
                        'required' => 'The %s is required.',
                        'max_length' => 'The max lenght allowed for the %s is 255 characteres.',
                        'is_unique' => 'This url is already registered, try using other.'
                    )
                );
            }
            // Validation form

            if ($this->form_validation->run() == FALSE) {
                $this->set_modal_message->set_the_flash_variables_for_modal('Sorry!', validation_errors(),'Ok');
                $this->load->view('admin/sections/blog/update');
                unset($_SESSION['message']);
            } else {
                // Upload image
                if($_FILES['main_image']){
                    $config['upload_path'] = './assets/arepa3/images/blog/';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size'] = 2048;
                    $config['max_width'] = 2000;
                    $config['max_height'] = 1326;
                    $config['file_name'] = substr($_FILES['main_image']['name'], 0, -4) . $timestamp->getTimestamp() . substr($_FILES['main_image']['name'], -4);
                    $config['overwrite'] = TRUE;
                    $this->load->library('upload', $config);
    
                    if (!$this->upload->do_upload('main_image')) {
                        $this->set_modal_message->set_the_flash_variables_for_modal('Sorry!', $this->upload->display_errors(),'Ok');
                        $this->load->view('admin/sections/blog/update');
                        unset($_SESSION['message']);
                    } else {
                        $article['main_image'] = 'assets/arepa3/images/blog/' . $config['file_name'];
                    }
                }
                if($_FILES['preview_image']){
                    $config['max_width'] = 500;
                    $config['max_height'] = 280;
                    $config['file_name'] = substr($_FILES['preview_image']['name'], 0, -4) . $timestamp->getTimestamp() . substr($_FILES['preview_image']['name'], -4);
                    $this->upload->initialize($config);
                    if (!$this->upload->do_upload('preview_image')) {
                        $this->set_modal_message->set_the_flash_variables_for_modal('Sorry!', $this->upload->display_errors(),'Ok');
                        $this->load->view('admin/sections/blog/update');
                        unset($_SESSION['message']);
                    } else {
                        $article['preview_image'] = 'assets/arepa3/images/blog/' . $config['file_name'];
                    }
                }
                // Upload image

                if (!$this->blog_model->update($article)) {
                    $this->set_modal_message->set_the_flash_variables_for_modal('Sorry!', 'It was a problem updating the post','Ok');
                    redirect(base_url('admin/blog_admin'));
                } else {
                    $this->set_modal_message->set_the_flash_variables_for_modal('Good news!', 'The post was successfully updated','Ok');
                    redirect(base_url('admin/blog_admin'));
                }
            }
        }
    }
    public function delete($id){
        if(!isset($_SESSION['user'])){
			$_SESSION['next_page'] = 'admin/blog_admin';
			redirect(base_url('login'));
		}
        if($this->blog_model->delete($id)){
            $this->set_modal_message->set_the_flash_variables_for_modal('Good news!', 'The item was deleted successfully','Ok');
        }else{
            $this->set_modal_message->set_the_flash_variables_for_modal('Sorry', 'The item could not be deleted','Ok');
        }
        redirect(base_url('admin/blog_admin'));
    }
    public function get_pictures()
    {
        if (empty($_FILES['file'])) {
            exit();
        }
        $errorImgFile = "./assets/arepa3/img/img_upload_error.png";
        $temp = explode(".", $_FILES["file"]["name"]);
        $newfilename = $temp[0] . round(microtime(true)) . '.' . end($temp);
        $destinationFilePath = './assets/arepa3/images/blog/' . $newfilename;
        if (!move_uploaded_file($_FILES['file']['tmp_name'], $destinationFilePath)) {
            echo $errorImgFile;
        } else {
            echo base_url('assets/arepa3/images/blog/') . $newfilename;
        }
    }
    public function test($id){
        $original_article = $this->blog_model->read_article_by_id($id);
        var_dump($original_article->title);
    }
}