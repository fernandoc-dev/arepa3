<?php
class Blog_model extends CI_Model{ 
    
    public function __construct($pepe=3) {
        parent::__construct();
    }
    public function read_articles(){
        $query = $this->db->get('blog');
        $articles = $query->result('blog_model');
        return $articles;
    }
    public function read_article(){
        $this->db->where('title', 'the title');
        $query = $this->db->get('blog');
        $article = $query->row(0,'blog_model');
        return $article;
    }
    public function create($article){
        $this->db->insert('blog', $article);
        return $this->db->affected_rows();
    }
}