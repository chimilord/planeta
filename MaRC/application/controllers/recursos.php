<?php

include(APPPATH . 'libraries/REST_Controller.php');

class Recursos extends REST_Controller {

    /**
     * Obtiene una lista de recursos según los parámetros que se especifiquen para realizar la
     * búsqueda.
     */
    function index_get() {
        $this->load->model('recurso_model');
        $this->load->database();
        $recursos = $this->recurso_model->get_all($this->get('sitio'));

        $this->response($recursos, 200);
    }

    /**
     * Muestra un único recurso según su id.
     */
    function show_get() {
        $data = new stdClass();
        $data->id = $this->get('id');

        $this->response($data, 200);
    }

    /**
     * Crea un recurso.
     */
    function index_post() {
        $data = array(
            'sitio' => $this->post('sitio'),
            'domId' => $this->post('domId'),
            'contenido' => $this->post('contenido')
        );
        
        $this->db->insert('recurso', $data); 
        $this->response($data, 200);
    }

    /**
     * Elimina el recurso con el id especificado.
     */
    function index_delete() {
        $data = new stdClass();
        $data->id = $this->delete('id');

        $this->response($data, 200);
    }

    /**
     * Actualiza el recurso con el id especificado.
     */
    function index_put() {
        $data = new stdClass();
        $data->id = $this->put('id');

        $this->response($data, 200);
    }

}

?>
