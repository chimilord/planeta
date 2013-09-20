<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sitios extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('recurso_model');
        $this->load->helper('uuid_helper');
        $this->load->database();
    }

    public function index() {
        $this->_render_page('auth/index');
    }

    public function create() {

        $this->data['title'] = "Create Recurso";

        //validate form input
        $this->form_validation->set_rules('sitio', 'Sitio', 'required|xss_clean');
        $this->form_validation->set_rules('contenido', 'Contenido', 'required|xss_clean');
        $this->form_validation->set_rules('domId', 'Id', 'required|xss_clean');

        if ($this->form_validation->run() == true) {
            $sitio = $this->input->post('sitio');
            $contenido = $this->input->post('contenido');
            $domId = $this->input->post('domId');
        }
        if ($this->form_validation->run() == true) {
            $data = array(
                "uuid" => gen_uuid(),
                "sitio" => $sitio,
                "contenido" => $contenido,
                "domId" => $domId
            );
            $this->recurso_model->create($data);
            $this->session->set_flashdata('message', $this->ion_auth->messages());
            redirect("sitios/create", 'refresh');
        } else {
            $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

            $this->data['sitio'] = array(
                'name' => 'sitio',
                'id' => 'sitio',
                'type' => 'text',
                'value' => $this->form_validation->set_value('sitio'),
            );
            $this->data['contenido'] = array(
                'name' => 'contenido',
                'id' => 'contenido',
                'type' => 'textarea',
                'value' => $this->form_validation->set_value('contenido'),
            );
            $this->data['domId'] = array(
                'name' => 'domId',
                'id' => 'domId',
                'type' => 'text',
                'value' => $this->form_validation->set_value('domId'),
            );

            $this->_render_page('recursos/create', $this->data);
        }
    }

    public function _render_page($view, $data = null, $render = false) {

        $this->viewdata = (empty($data)) ? $this->data : $data;

        $data['title'] = 'MaRC v-Z(ero)';
        $this->load->view('elements/header', $data);
        $view_html = $this->load->view($view, $this->viewdata, $render);
        $this->load->view('elements/footer', $data);

        if (!$render)
            return $view_html;
    }

}

?>