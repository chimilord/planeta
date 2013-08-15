<?php

if (!defined('BASEPATH'))
   exit('No direct script access allowed');

class Recurso_model extends CI_Model {
    
    /**
     * El id del recurso en la base de datos.
     * @var type 
     */
    var $id = 0;
    
    /**
     * El uuid del recurso.
     * 
     * @var type 
     */
    var $uuid = '';
    
    /**
     * El contenido html del recurso.
     * 
     * @var type 
     */
    var $contenido = '';
    
    /**
     * El id del DOM en donde se muestra el contenido de este recurso.
     * 
     * @var type 
     */
    var $domId = '';
    
    /**
     * El sitio al que pertenece este recurso.
     * 
     * @var type 
     */
    var $sitio = '';

    public function __construct() {
        $this->load->database();
    }

    public function get_all($sitio) {
        $query = $this->db->get_where('recurso', array('sitio'=>$sitio));
        return $query->result();
    }
    
}

?>
