<?php 

class AntrianModel extends CI_Model {
    function get() {
        return $this->db->get('antrian')->result_array();
    }

    function save($data) {
        $this->db->insert('antri',$data);
    }
}