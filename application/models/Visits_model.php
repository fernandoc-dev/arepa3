<?php
class Visits_model extends CI_Model {
    public function get_visits($url,$origin) {
        $this->db->where('url', $url);
        $this->db->where('origin', $origin);
        $query = $this->db->get('visits');
        return $query->row();
    }

    public function update_visits($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('visits', $data);
    }

    public function insert_visits($data) {
        $this->db->insert('visits', $data);
    }
}