<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Technologies_admin extends CI_Controller {

    //Class properties
    private $data;
	public function __construct()
    {
        parent::__construct();
		$this->load->model('technologies_model');
        $this->load->library('form_validation');
    }
	public function index()
	{
        if(!isset($_SESSION['user'])){
			$_SESSION['next_page'] = 'admin/technologies_admin';
			redirect(base_url('login'));
		}
        if ($this->input->server('REQUEST_METHOD') === 'GET') {
            $this->data['technologies']=$this->technologies_model->read_technologies();
            $this->load->view('admin/sections/technologies/index',$this->data);
        }
	}
	public function create()
    {  
		if(!isset($_SESSION['user'])){
			$_SESSION['next_page'] = 'admin/technologies_admin';
			redirect(base_url('login'));
		}
        if ($this->input->server('REQUEST_METHOD') === 'GET') {

            $this->load->view('admin/sections/technologies/create');

        } elseif ($this->input->server('REQUEST_METHOD') === 'POST') {
			$technology = $this->input->post(array('title','technology','description'), TRUE);
            $timestamp = new DateTime();

            // Validation form
            $this->form_validation->set_rules(
                'description',
                'description',
                'trim|required|max_length[255]',
                array(
                    'required'      => 'The %s is required.',
                    'max_length'     => 'The max lenght allowed for the %s is 255 characteres.'
                )
            );
            $this->form_validation->set_rules(
                'title',
                'title',
                'trim|required|max_length[255]|is_unique[technologies.title]',
                array(
                    'required'      => 'The %s is required.',
                    'max_length'     => 'The max lenght allowed for the %s is 255 characteres.',
                    'is_unique'     => 'This title is already registered, try using other.'
                )
            );
            $this->form_validation->set_rules(
                'technology',
                'technology',
                'trim|required|max_length[50]|is_unique[technologies.technology]',
                array(
                    'required'      => 'The %s is required.',
                    'max_length'    => 'The max lenght allowed for the %s is 255 characteres.',
                    'is_unique'     => 'This technology is already registered, try using other.'
                )
            );
            // Validation form

            if ($this->form_validation->run() == FALSE) {
                $this->set_modal_message->set_the_flash_variables_for_modal('Sorry!', validation_errors());
                $this->load->view('admin/sections/technologies/create');
                unset($_SESSION['message']);
            }else{
            // Upload image
            $config['upload_path']          = './assets/arepa3/images/technologies/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 2048;
            $config['max_width']            = 2000;
            $config['max_height']           = 1326;
            $config['file_name']            = substr($_FILES['image']['name'], 0, -4) . $timestamp->getTimestamp() . substr($_FILES['image']['name'], -4);
            $config['overwrite']            = TRUE;
            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('image')){
                $this->set_modal_message->set_the_flash_variables_for_modal('Sorry!', $this->upload->display_errors());
                $this->load->view('admin/sections/technologies/create');
                unset($_SESSION['message']);
            }else{
                $technology['image']='assets/arepa3/images/technologies/' . $config['file_name'];
            }
            // Upload image

			if(!$this->technologies_model->create($technology)){
                $this->set_modal_message->set_the_flash_variables_for_modal('Sorry!', 'It was a problem creating the post');
                redirect(base_url('admin/technologies_admin'));
            }else{
                $this->set_modal_message->set_the_flash_variables_for_modal('Good news!', 'The post was successfully created');
                redirect(base_url('admin/technologies_admin'));
            }
            }
        }
    }
    public function update($id = NULL)
    {
        if (!isset($_SESSION['user'])) {
            $_SESSION['next_page'] = 'admin/technologies_admin';
            redirect(base_url('login'));
        }
        if ($this->input->server('REQUEST_METHOD') === 'GET') {
            if ($id == NULL) {
                redirect(base_url('admin/technologies_admin'));
            }
            $this->data['technology'] = $this->technologies_model->read_technology_by_id($id);
            $this->load->view('admin/sections/technologies/update',$this->data);

        } elseif ($this->input->server('REQUEST_METHOD') === 'POST') {
            $technology = $this->input->post(array('id','title','technology','description'), TRUE);
            $original_technology = $this->technologies_model->read_technology_by_id($technology['id']);
            $timestamp = new DateTime();

            // Validation form
            $this->form_validation->set_rules(
                'description',
                'description',
                'trim|required|max_length[255]',
                array(
                    'required' => 'The %s is required.',
                    'max_length' => 'The max lenght allowed for the %s is 255 characteres.'
                )
            );
            if ($original_technology->title != $technology['title']) {
                $this->form_validation->set_rules(
                    'title',
                    'title',
                    'trim|required|max_length[255]|is_unique[technologies.title]',
                    array(
                        'required' => 'The %s is required.',
                        'max_length' => 'The max lenght allowed for the %s is 255 characteres.',
                        'is_unique' => 'This title is already registered, try using other.'
                    )
                );
            }
            if ($original_technology->technology != $technology['technology']) {
                $this->form_validation->set_rules(
                    'technology',
                    'technology',
                    'trim|required|max_length[50]|is_unique[technologies.technology]',
                    array(
                        'required' => 'The %s is required.',
                        'max_length' => 'The max lenght allowed for the %s is 50 characteres.',
                        'is_unique' => 'This technology is already registered, try using other.'
                    )
                );
            }
            // Validation form

            if ($this->form_validation->run() == FALSE) {
                $this->set_modal_message->set_the_flash_variables_for_modal('Sorry!', validation_errors());
                $this->load->view('admin/sections/technologies/update');
                unset($_SESSION['message']);
            } else {
                // Upload image
                if($_FILES['image']){
                    $config['upload_path'] = './assets/arepa3/images/technologies/';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size'] = 2048;
                    $config['max_width'] = 400;
                    $config['max_height'] = 300;
                    $config['file_name'] = substr($_FILES['image']['name'], 0, -4) . $timestamp->getTimestamp() . substr($_FILES['image']['name'], -4);
                    $config['overwrite'] = TRUE;
                    $this->load->library('upload', $config);
    
                    if (!$this->upload->do_upload('image')) {
                        $this->set_modal_message->set_the_flash_variables_for_modal('Sorry!', $this->upload->display_errors());
                        $this->load->view('admin/sections/technologies/update');
                        unset($_SESSION['message']);
                    } else {
                        $technology['image'] = 'assets/arepa3/images/technologies/' . $config['file_name'];
                    }
                }
                // Upload image

                if (!$this->technologies_model->update($technology)) {
                    $this->set_modal_message->set_the_flash_variables_for_modal('Sorry!', 'It was a problem updating the post');
                    redirect(base_url('admin/technologies_admin'));
                } else {
                    $this->set_modal_message->set_the_flash_variables_for_modal('Good news!', 'The post was successfully updated');
                    redirect(base_url('admin/technologies_admin'));
                }
            }
        }
    }
    public function delete($id){
        if(!isset($_SESSION['user'])){
			$_SESSION['next_page'] = 'admin/technologies_admin';
			redirect(base_url('login'));
		}
        if($this->technologies_model->delete($id)){
            $this->set_modal_message->set_the_flash_variables_for_modal('Good news!', 'The item was deleted successfully');
        }else{
            $this->set_modal_message->set_the_flash_variables_for_modal('Sorry', 'The item could not be deleted');
        }
        redirect(base_url('admin/technologies_admin'));
    }
    public function get_pictures()
    {
        if (empty($_FILES['file'])) {
            exit();
        }
        $errorImgFile = "./assets/arepa3/img/img_upload_error.png";
        $temp = explode(".", $_FILES["file"]["name"]);
        $newfilename = $temp[0] . round(microtime(true)) . '.' . end($temp);
        $destinationFilePath = './assets/arepa3/images/technologies/' . $newfilename;
        if (!move_uploaded_file($_FILES['file']['tmp_name'], $destinationFilePath)) {
            echo $errorImgFile;
        } else {
            echo base_url('assets/arepa3/images/technologies/') . $newfilename;
        }
    }
    public function test($id){
        $original_technology = $this->technologies_model->read_technology_by_id($id);
        var_dump($original_technology->title);
    }
}