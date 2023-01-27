<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Algorithms_admin  extends CI_Controller {

    //Class properties
    private $data;
	public function __construct()
    {
        parent::__construct();
		$this->load->model('algorithms_model');
        $this->load->library('form_validation');
    }
	public function index()
	{
        if(!isset($_SESSION['user'])){
			$_SESSION['next_page'] = 'admin/algorithms_admin';
			redirect(base_url('login'));
		}
        if ($this->input->server('REQUEST_METHOD') === 'GET') {
            $this->data['algorithms']=$this->algorithms_model->read_algorithms_links();
            $this->load->view('admin/sections/algorithms/index',$this->data);
        }
	}
	public function create()
    {  
		if(!isset($_SESSION['user'])){
			$_SESSION['next_page'] = 'admin/algorithms_admin';
			redirect(base_url('login'));
		}
        if ($this->input->server('REQUEST_METHOD') === 'GET') {

            $this->load->view('admin/sections/algorithms/create');

        } elseif ($this->input->server('REQUEST_METHOD') === 'POST') {
			$algorithm = $this->input->post(array('title','url','introduction','content'), TRUE);
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
                'trim|required|max_length[255]|is_unique[algorithms.title]',
                array(
                    'required'      => 'The %s is required.',
                    'max_length'     => 'The max lenght allowed for the %s is 255 characteres.',
                    'is_unique'     => 'This title is already registered, try using other.'
                )
            );
            $this->form_validation->set_rules(
                'url',
                'url',
                'trim|required|max_length[255]|is_unique[algorithms.url]',
                array(
                    'required'      => 'The %s is required.',
                    'max_length'    => 'The max lenght allowed for the %s is 255 characteres.',
                    'is_unique'     => 'This url is already registered, try using other.'
                )
            );
            // Validation form

            if ($this->form_validation->run() == FALSE) {
                $this->set_modal_message->set_the_flash_variables_for_modal('Sorry!', validation_errors());
                $this->load->view('admin/sections/algorithms/create');
                unset($_SESSION['message']);
            }else{
            // Upload image
            $config['upload_path']          = './assets/arepa3/images/algorithms/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 2048;
            $config['max_width']            = 2000;
            $config['max_height']           = 1326;
            $config['file_name']            = substr($_FILES['main_image']['name'], 0, -4) . $timestamp->getTimestamp() . substr($_FILES['main_image']['name'], -4);
            $config['overwrite']            = TRUE;
            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('main_image')){
                $this->set_modal_message->set_the_flash_variables_for_modal('Sorry!', $this->upload->display_errors());
                $this->load->view('admin/sections/algorithms/create');
                unset($_SESSION['message']);
            }else{
                $algorithm['main_image']='assets/arepa3/images/algorithms/' . $config['file_name'];
            }

            $config['max_width']            = 500;
            $config['max_height']           = 280;
            $config['file_name']            = substr($_FILES['preview_image']['name'], 0, -4) . $timestamp->getTimestamp() . substr($_FILES['preview_image']['name'], -4);
            $this->upload->initialize($config);
            if ( ! $this->upload->do_upload('preview_image')){
                $this->set_modal_message->set_the_flash_variables_for_modal('Sorry!', $this->upload->display_errors());
                $this->load->view('admin/sections/algorithms/create');
                unset($_SESSION['message']);
            }else{
                $algorithm['preview_image']='assets/arepa3/images/algorithms/' . $config['file_name'];
            }
             // Upload image

			if(!$this->algorithms_model->create($algorithm)){
                $this->set_modal_message->set_the_flash_variables_for_modal('Sorry!', 'It was a problem creating the post');
                redirect(base_url('admin/algorithms_admin'));
            }else{
                $this->set_modal_message->set_the_flash_variables_for_modal('Good news!', 'The post was successfully created');
                redirect(base_url('admin/algorithms_admin'));
            }
            }
        }
    }
    public function update($id = NULL)
    {
        if (!isset($_SESSION['user'])) {
            $_SESSION['next_page'] = 'admin/algorithms_admin';
            redirect(base_url('login'));
        }
        if ($this->input->server('REQUEST_METHOD') === 'GET') {
            if ($id == NULL) {
                redirect(base_url('admin/algorithms_admin'));
            }
            $this->data['algorithm'] = $this->algorithms_model->read_algorithm_by_id($id);
            $this->load->view('admin/sections/algorithms/update',$this->data);

        } elseif ($this->input->server('REQUEST_METHOD') === 'POST') {
            $algorithm = $this->input->post(array('id','title','url','introduction','content'), TRUE);
            $original_algorithm = $this->algorithms_model->read_algorithm_by_id($algorithm['id']);
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
            if ($original_algorithm->title != $algorithm['title']) {
                $this->form_validation->set_rules(
                    'title',
                    'title',
                    'trim|required|max_length[255]|is_unique[algorithms.title]',
                    array(
                        'required' => 'The %s is required.',
                        'max_length' => 'The max lenght allowed for the %s is 255 characteres.',
                        'is_unique' => 'This title is already registered, try using other.'
                    )
                );
            }
            if ($original_algorithm->url != $algorithm['url']) {
                $this->form_validation->set_rules(
                    'url',
                    'url',
                    'trim|required|max_length[255]|is_unique[algorithms.url]',
                    array(
                        'required' => 'The %s is required.',
                        'max_length' => 'The max lenght allowed for the %s is 255 characteres.',
                        'is_unique' => 'This url is already registered, try using other.'
                    )
                );
            }
            // Validation form

            if ($this->form_validation->run() == FALSE) {
                $this->set_modal_message->set_the_flash_variables_for_modal('Sorry!', validation_errors());
                $this->load->view('admin/sections/algorithms/update');
                unset($_SESSION['message']);
            } else {
                // Upload image
                if($_FILES['main_image']){
                    $config['upload_path'] = './assets/arepa3/images/algorithms/';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size'] = 2048;
                    $config['max_width'] = 2000;
                    $config['max_height'] = 1326;
                    $config['file_name'] = substr($_FILES['main_image']['name'], 0, -4) . $timestamp->getTimestamp() . substr($_FILES['main_image']['name'], -4);
                    $config['overwrite'] = TRUE;
                    $this->load->library('upload', $config);
    
                    if (!$this->upload->do_upload('main_image')) {
                        $this->set_modal_message->set_the_flash_variables_for_modal('Sorry!', $this->upload->display_errors());
                        $this->load->view('admin/sections/algorithms/update');
                        unset($_SESSION['message']);
                    } else {
                        $algorithm['main_image'] = 'assets/arepa3/images/algorithms/' . $config['file_name'];
                    }
                }
                if($_FILES['preview_image']){
                    $config['max_width'] = 500;
                    $config['max_height'] = 280;
                    $config['file_name'] = substr($_FILES['preview_image']['name'], 0, -4) . $timestamp->getTimestamp() . substr($_FILES['preview_image']['name'], -4);
                    $this->upload->initialize($config);
                    if (!$this->upload->do_upload('preview_image')) {
                        $this->set_modal_message->set_the_flash_variables_for_modal('Sorry!', $this->upload->display_errors());
                        $this->load->view('admin/sections/algorithms/update');
                        unset($_SESSION['message']);
                    } else {
                        $algorithm['preview_image'] = 'assets/arepa3/images/algorithms/' . $config['file_name'];
                    }
                }
                // Upload image

                if (!$this->algorithms_model->update($algorithm)) {
                    $this->set_modal_message->set_the_flash_variables_for_modal('Sorry!', 'It was a problem updating the post');
                    redirect(base_url('admin/algorithms_admin'));
                } else {
                    $this->set_modal_message->set_the_flash_variables_for_modal('Good news!', 'The post was successfully updated');
                    redirect(base_url('admin/algorithms_admin'));
                }
            }
        }
    }
    public function delete($id){
        if(!isset($_SESSION['user'])){
			$_SESSION['next_page'] = 'admin/algorithms_admin';
			redirect(base_url('login'));
		}
        if($this->algorithms_model->delete($id)){
            $this->set_modal_message->set_the_flash_variables_for_modal('Good news!', 'The item was deleted successfully');
        }else{
            $this->set_modal_message->set_the_flash_variables_for_modal('Sorry', 'The item could not be deleted');
        }
        redirect(base_url('admin/algorithms_admin'));
    }
    public function get_pictures()
    {
        if (empty($_FILES['file'])) {
            exit();
        }
        $errorImgFile = "./assets/arepa3/img/img_upload_error.png";
        $temp = explode(".", $_FILES["file"]["name"]);
        $newfilename = $temp[0] . round(microtime(true)) . '.' . end($temp);
        $destinationFilePath = './assets/arepa3/images/algorithms/' . $newfilename;
        if (!move_uploaded_file($_FILES['file']['tmp_name'], $destinationFilePath)) {
            echo $errorImgFile;
        } else {
            echo base_url('assets/arepa3/images/algorithms/') . $newfilename;
        }
    }
    public function test($id){
        $original_algorithm = $this->algorithms_model->read_algorithm_by_id($id);
        var_dump($original_algorithm->title);
    }
}