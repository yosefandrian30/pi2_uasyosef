<?php

class KeahlianModel extends CI_Model
{
    public function get_all_data_keahlian()
    {
        $query = "SELECT * FROM keahlian";
        return $this->db->query($query)->result_array();
    }

    public function list_get_keahlian($where = null)
    {
        if ($where) {
            $this->db->where($where);
        }
        $q = $this->db->get('keahlian');
        return $result = $q->num_rows() > 0 ? $q->result_array() : array();
    }
}
