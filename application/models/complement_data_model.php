<?php
class Complement_data_model extends CI_Model{ 
    
    public function __construct($pepe=3) {
        parent::__construct();
    }
    public $data;
    public function read_menu_items(){
        $query = $this->db->get('menu_admin');
        $this->data = $query->result_array();
        return $this->data;
    }
    public function read_sections_admin(){
        $this->db->where('section','blog_admin');
        $query = $this->db->get('sections_admin');
        $this->data = $query->row_array();
        return $this->data;
    }
    public function read_company_data(){
        $query = $this->db->get('company_data');
        $this->data = $query->row_array();
        return $this->data;
    }
}