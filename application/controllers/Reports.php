<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller {

    public function index() {

        $this->load->database();
        $this->load->view('view_html_header');
        $this->load->helper('helper_estatus');
        $this->load->helper('helper_type');
        $this->load->helper('helper_sex');

        $data['opciones_estatus'] = $this->General_model->get('estatus_perfil');
        $data['opciones_tipos'] = $this->General_model->get('tipos_perfil');
        $data['opciones_sexos'] = $this->General_model->get('sexos');

        $this->load->view('reports/modal_update', $data);
        $this->load->view('reports/modal_details');
        $this->load->view('reports/modal_delete');
        $this->load->model('General_model');
        $this->load->helper('helper_db');

        #CREAMOS JOINS NECESARIOS
        $joins = array(
            array(
                'table' => 'estatus_perfil', 
                'condition' => 'perfiles.estatus = estatus_perfil.id_estatus',
                'type' => 'JOIN'
            )
        );

        #OBTENEMOS LA CONSULTA
        $data['perfiles'] = $this->General_model->get_joins(
            'perfiles',
            $joins,
            array(
                'id_perfil',
                'nombres',
                'apellidos',
                'correo',
                'estatus_perfil.nombre as nombre_estatus'
            ),
            array('estatus' => 1),
            array('estatus' => 2)
        );
       
        $this->load->view('reports/main_table', $data);
        $this->load->view('view_html_footer');
    }

}
