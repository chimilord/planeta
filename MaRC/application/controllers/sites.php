<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sites extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('sites_model');
        $this->load->database();
    }

    public function index() {
        $this->_render_page('auth/index');
    }

    public function details($site) {
        $data['details'] = $this->sites_model->get_detail($site);
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