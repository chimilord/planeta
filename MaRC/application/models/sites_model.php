<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Sites_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_detail($site) {
        $query = $this->db->get_where('sitio', array('clave'=>$site));
        return $query->result();
    }

}
?>
