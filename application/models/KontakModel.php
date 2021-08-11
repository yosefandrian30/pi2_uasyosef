<?php

class KontakModel extends CI_Model
{
    public function get_all_data_kontak()
    {
        $query = "SELECT * FROM kontak";
        return $this->db->query($query)->result_array();
    }

    public function list_get_kontak($where = null)
    {
        if ($where) {
            $this->db->where($where);
        }
        $q = $this->db->get('kontak');
        return $result = $q->num_rows() > 0 ? $q->result_array() : array();
    }
}
