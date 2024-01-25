<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index() {
        $this->load->database();
        $this->load->view('view_html_header');
        $data['opciones_tipos'] = $this->General_model->get('tipos_perfil');
        $data['opciones_sexos'] = $this->General_model->get('sexos');
        $this->load->helper('helper_type');
        $this->load->helper('helper_sex');
        $this->load->view('reports/modal_insert',$data);
        $this->load->view('view_html_main');
        $this->load->view('view_html_footer');
    }

}
