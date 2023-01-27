<?php
class Algorithms_model extends CI_Model{ 
    
    public function __construct($pepe=3) {
        parent::__construct();
    }
    public function create($algorithm){
        $this->db->insert('algorithms', $algorithm);
        return $this->db->affected_rows();
    }
    public function read_algorithms(){
        $query = $this->db->get('algorithms');
        $algorithms = $query->result('algorithms_model');
        return $algorithms;
    }
    public function read_algorithms_links(){
        $this->db->select('id,title,url,preview_image,main_image,created_at');
        $query = $this->db->get('algorithms');
        $algorithms = $query->result('algorithms_model');
        return $algorithms;
    }
    public function read_algorithm($url){
        $this->db->where('url', $url);
        $query = $this->db->get('algorithms');
        $algorithm = $query->row(0,'algorithms_model');
        return $algorithm;
    }
    public function read_algorithm_by_id($id){
        $this->db->where('id', $id);
        $query = $this->db->get('algorithms');
        $algorithm = $query->row(0,'algorithms_model');
        return $algorithm;
    }
    public function update($algorithm){
        $this->db->where('id', $algorithm['id']);
        $this->db->update('algorithms', $algorithm);
        return $this->db->affected_rows();
    }
    public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('algorithms');
        return $this->db->affected_rows();
    }
    
}