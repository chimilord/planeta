<?php

if (!defined('BASEPATH'))
   exit('No direct script access allowed');

class Recurso_model extends CI_Model {

    var $id = 0;
    var $uuid = '';
    var $contenido = '';

    public function __construct() {
        $this->load->database();
    }

    public function get_all() {
        $query = $this->db->get('recurso');
        return $query->result();
    }
    
}

?>
