<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller {

    public function index() {

        $this->load->database();
        $this->load->view('view_html_header');
        $this->load->model('General_model');
        $this->load->helper('helper_db');

        $data['perfiles'] = $this->General_model->get('perfiles');

        $this->load->view('reports/main_table', $data);
        $this->load->view('view_html_footer');
    }

}
