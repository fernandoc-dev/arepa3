<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Not_found_404 extends CI_Controller {
	public $data;
	public function __construct()
    {
        parent::__construct();
    }
	public function section($section=NULL)
	{
		switch ($section) {
			case NULL:
				$this->set_modal_message->set_the_flash_variables_for_modal('Sorry!', 'The section you are looking for does not exist');
				redirect(base_url(''));
				break;
			// Add sections to redirect
			case 'blog':
				$this->set_modal_message->set_the_flash_variables_for_modal('Sorry!', 'The article you are looking for does not exist');
				redirect(base_url('blog'));
				break;
			default:
				redirect(base_url(''));
				break;
		}
	}
}
