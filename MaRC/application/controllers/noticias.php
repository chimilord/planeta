<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Noticias extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('noticias_model');
        $this->load->database();
    }

    public function index() {
        $this->_render_page('noticias/index');
    }

    public function banners() {
        $data['banners'] = $this->noticias_model->get_noticia();
        $this->_render_page('noticias/banners', $data);
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