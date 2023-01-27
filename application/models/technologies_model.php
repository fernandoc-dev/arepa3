<?php
class Technologies_model extends CI_Model{ 
    
    public function __construct($pepe=3) {
        parent::__construct();
    }
    public function create($technology){
        $this->db->insert('technologies', $technology);
        return $this->db->affected_rows();
    }
    public function read_technologies(){
        $query = $this->db->get('technologies');
        $technologies = $query->result('technologies_model');
        return $technologies;
    }
    public function read_technologies_links(){
        $this->db->select('id,title,url,preview_image,main_image,created_at');
        $query = $this->db->get('technologies');
        $technologies = $query->result('technologies_model');
        return $technologies;
    }
    public function read_technology($url){
        $this->db->where('url', $url);
        $query = $this->db->get('technologies');
        $technology = $query->row(0,'technologies_model');
        return $technology;
    }
    public function read_technology_by_id($id){
        $this->db->where('id', $id);
        $query = $this->db->get('technologies');
        $technology = $query->row(0,'technologies_model');
        return $technology;
    }
    public function update($technology){
        $this->db->where('id', $technology['id']);
        $this->db->update('technologies', $technology);
        return $this->db->affected_rows();
    }
    public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('technologies');
        return $this->db->affected_rows();
    }
    
}