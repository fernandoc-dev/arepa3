<?php
class Set_modal_message extends CI_Model{
    public function __construct() {
        parent::__construct();
    }
    public function set_the_flash_variables_for_modal($title, $message, $btn1 = NULL, $btn2 = NULL, $link = NULL, $linkm = NULL){
        /*
        * What does it do?
        *
        * It sets the flashdata variables to build the modal message
        * The modal message can contain:
        * title, message, btn1, btn2, link, linkm (link message)
        *
        * How to use it?
        *
        * $this->load->helper('set_modal_message');
        * $this->set_modal_message->set_the_flash_variables_for_modal($title, $message, $btn1, $btn2, $link, $linkm);
        *
        * What does it return?
        *
        * It does not return any value
        *
        */

        $this->session->set_flashdata('title', $title);
        $this->session->set_flashdata('message', $message);
        if ($btn1 != NULL) {
            $this->session->set_flashdata('btn1', $btn1);
        }
        if ($btn2 != NULL) {
            $this->session->set_flashdata('btn2', $btn2);
        }
        if ($link != NULL) {
            $this->session->set_flashdata('link', $link);
        }
        if ($linkm != NULL) {
            $this->session->set_flashdata('linkm', $linkm);
        }
    }
}
