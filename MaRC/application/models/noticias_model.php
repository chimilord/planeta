<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Noticias_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_noticia() {
        $query = $this->db->get('recurso');
        return $query->result();
    }

}
?>
