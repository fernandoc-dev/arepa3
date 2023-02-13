<?php
class Notes_model extends CI_Model{ 
    
    public function __construct($pepe=3) {
        parent::__construct();
    }
    public function create($note){
        $this->db->insert('notes', $note);
        return $this->db->affected_rows();
    }
    public function read_notes(){
        $this->db->select('notes.id,notes.title,notes.url,notes.created_at,notes.preview_image,notes.main_image,technologies.technology');
        $this->db->from('notes');
        $this->db->join('technologies', 'technologies.id = notes.technology_id');
        $query = $this->db->get();
        $notes = $query->result('notes_model');
        return $notes;
    }
    public function read_note_by_technology_and_url($technology,$url){
        $this->db->where('technologies.technology', $technology);
        $this->db->where('notes.url', $url);
        $this->db->select('notes.id,notes.title,notes.url,notes.content,notes.created_at,notes.preview_image,notes.main_image,technologies.technology');
        $this->db->from('notes');
        $this->db->join('technologies', 'technologies.id = notes.technology_id');
        $query = $this->db->get();
        $notes = $query->row(0,'notes_model');
        return $notes;
    }
    public function read_notes_links($technology_id){
        $this->db->select('id,title,url,preview_image,main_image,created_at');
        $query = $this->db->get('notes');
        $notes = $query->result('notes_model');
        return $notes;
    }
    public function read_notes_by_technology($technology){
        $this->db->where('technologies.technology', $technology);
        $this->db->select('technologies.technology,notes.title,notes.url,notes.introduction,notes.created_at,notes.preview_image');
        $this->db->from('notes');
        $this->db->join('technologies', 'technologies.id = notes.technology_id');
        $query = $this->db->get();
        $notes = $query->result('notes_model');
        return $notes;
    }
    public function read_note($url){
        $this->db->where('url', $url);
        $query = $this->db->get('notes');
        $note = $query->row(0,'notes_model');
        return $note;
    }
    public function read_note_by_id($id){
        $this->db->where('id', $id);
        $query = $this->db->get('notes');
        $note = $query->row(0,'notes_model');
        return $note;
    }
    public function update($note){
        $this->db->where('id', $note['id']);
        $this->db->update('notes', $note);
        return $this->db->affected_rows();
    }
    public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('notes');
        return $this->db->affected_rows();
    }
    
}