<?php
class Notes_model extends CI_Model{ 
    
    public function __construct($pepe=3) {
        parent::__construct();
    }
    public function read_articles(){
        $query = $this->db->get('notes');
        $articles = $query->result('notes_model');
        return $articles;
    }
    public function read_article(){
        $this->db->where('title', 'the title');
        $query = $this->db->get('notes');
        $article = $query->row(0,'notes_model');
        return $article;
    }
    public function create($article){
        $this->db->insert('notes', $article);
        return $this->db->affected_rows();
    }
}