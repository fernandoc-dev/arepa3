<?php
class Notes_model extends CI_Model{ 
    
    public function __construct($pepe=3) {
        parent::__construct();
    }
    public function read_notes(){
        $query = $this->db->get('notes');
        $notes = $query->result('notes_model');
        return $notes;
    }
    public function read_note(){
        $this->db->where('title', 'the title');
        $query = $this->db->get('notes');
        $note = $query->row(0,'notes_model');
        return $note;
    }
    public function create($note){
        $this->db->insert('notes', $note);
        return $this->db->affected_rows();
    }
}