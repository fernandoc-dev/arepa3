<?php
class Algorithms_model extends CI_Model{ 
    
    public function __construct($pepe=3) {
        parent::__construct();
    }
    public function read_articles(){
        $query = $this->db->get('algorithms');
        $articles = $query->result('algorithms_model');
        return $articles;
    }
    public function read_article(){
        $this->db->where('title', 'the title');
        $query = $this->db->get('algorithms');
        $article = $query->row(0,'algorithms_model');
        return $article;
    }
    public function create($article){
        $this->db->insert('algorithms', $article);
        return $this->db->affected_rows();
    }
}