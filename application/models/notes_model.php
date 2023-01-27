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
        $query = $this->db->get('notes');
        $notes = $query->result('notes_model');
        return $notes;
    }
    public function read_notes_links(){
        $this->db->select('id,title,url,preview_image,main_image,created_at');
        $query = $this->db->get('notes');
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