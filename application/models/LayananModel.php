<?php 

class LayananModel extends CI_Model {
    function get() {
        return $this->db->get('layanan')->result_array();
    }
}