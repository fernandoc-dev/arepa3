<?php
class Blog_model extends CI_Model{ 
    
    public function __construct($pepe=3) {
        parent::__construct();
    }
    public function create($article){
        $this->db->insert('blog', $article);
        return $this->db->affected_rows();
    }
    public function read_articles(){
        $query = $this->db->get('blog');
        $articles = $query->result('blog_model');
        return $articles;
    }
    public function read_articles_links(){
        $this->db->select('id,title,url,preview_image,main_image,created_at');
        $query = $this->db->get('blog');
        $articles = $query->result('blog_model');
        return $articles;
    }
    public function read_article($url){
        $this->db->where('url', $url);
        $query = $this->db->get('blog');
        $article = $query->row(0,'blog_model');
        return $article;
    }
    public function read_article_by_id($id){
        $this->db->where('id', $id);
        $query = $this->db->get('blog');
        $article = $query->row(0,'blog_model');
        return $article;
    }
    public function update($article){
        $this->db->where('id', $article['id']);
        $this->db->update('blog', $article);
        return $this->db->affected_rows();
    }
    public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('blog');
        return $this->db->affected_rows();
    }
    
}