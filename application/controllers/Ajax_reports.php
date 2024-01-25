<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax_reports extends CI_Controller {

    public function obtener_info_perfil(){

        $this->load->database();

        $this->load->model('General_model');

        #RECIBIMOS VARIABLE POST
        $id_perfil = $this->input->post('id_perfil');

        #CREAMOS JOINS
        $joins = array(
            array(
                "table" => "cuentas",
                "condition" => "perfiles.cuenta = cuentas.id_cuenta",
                "type" => "JOIN"
            ),
            array(
                "table" => "sexos",
                "condition" => "perfiles.sexo = sexos.id_sexo",
                "type" => "JOIN"
            ),
            array(
                "table" => "direcciones",
                "condition" => "perfiles.direccion = direcciones.id_direccion",
                "type" => "JOIN"
            ),
            array(
                "table" => "tipos_perfil",
                "condition" => "perfiles.tipo_perfil = tipos_perfil.id_tipo",
                "type" => "JOIN"
            ),
            array(
                "table" => "estatus_perfil",
                "condition" => "perfiles.estatus = estatus_perfil.id_estatus",
                "type" => "JOIN"
            )
        );

        #OBTENEMOS INFORMACIÓN Y RETORNAMOS
        $info = $this->General_model->get_joins(
            'perfiles',
            $joins,
            array(
                'id_perfil',
                'cuentas.id_cuenta',
                'cuentas.usuario',
                'nombres',
                'apellidos',
                'sexos.id_sexo',
                'sexos.nombre as nombre_sexo',
                'correo',
                'telefono',
                'direcciones.id_direccion',
                'direcciones.codigo_postal',
                'direcciones.colonia',
                'direcciones.municipio',
                'direcciones.estado',
                'tipos_perfil.id_tipo',
                'tipos_perfil.nombre as nombre_tipo',
                'estatus_perfil.id_estatus',
                'estatus_perfil.nombre as nombre_estatus',
                'registro'
            ),
            array('id_perfil' => $id_perfil)
        );

        echo json_encode($info);

    }

    public function registrar_perfil(){

        try
        {
            $this->load->database();

            $this->load->model('General_model');

            $usuario = $this->input->post('usuario');
            $nombre = $this->input->post('nombre');
            $apellidos = $this->input->post('apellidos');
            $sexo = $this->input->post('sexo');
            $correo = $this->input->post('correo');
            $telefono = $this->input->post('telefono');
            $codigoPostal = $this->input->post('codigoPostal');
            $colonia = $this->input->post('colonia');
            $municipio = $this->input->post('municipio');
            $estado = $this->input->post('estado');
            $tipoPerfil = $this->input->post('tipoPerfil');

            #CREA PASS
            function generarPass() {
                $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $longitud = 8;
                $pass = '';
            
                for ($i = 0; $i < $longitud; $i++) {
                    $indexAleatorio = rand(0, strlen($caracteres) - 1);
                    $pass.= $caracteres[$indexAleatorio];
                }
            
                return $pass;
            }
            
            $pass = generarPass();
            
            #INSERTA CUENTA
            $cuenta = $this->General_model->insert(
                'cuentas', 
                array(
                    'usuario' => $usuario,
                    'pass' => $pass
                ) 
            );

            #INSERTA DIRECCIÓN
            $direccion = $this->General_model->insert(
                'direcciones', 
                array(
                    'codigo_postal' => $codigoPostal,
                    'colonia' => $colonia,
                    'municipio' => $municipio,
                    'estado' => $estado
                )
            );

            #ACTUALIZA PERFIL
            $this->General_model->insert(
                'perfiles', 
                array(
                    'cuenta' => $cuenta,
                    'nombres' => $nombre,
                    'apellidos' => $apellidos,
                    'sexo' => $sexo,
                    'correo' => $correo,
                    'telefono' => $telefono,
                    'direccion' => $direccion,
                    'tipo_perfil' => $tipoPerfil
                )
            );
            
            $respuesta = array('resultado' => true);
            echo json_encode($respuesta);

        } catch(Exception $ex){

            $respuesta = array('resultado' => false);
            echo json_encode($respuesta);

        }

    }

    public function actualizar_perfil(){

        try
        {
            $this->load->database();

            $this->load->model('General_model');

            $usuario = $this->input->post('usuario');
            $nombre = $this->input->post('nombre');
            $apellidos = $this->input->post('apellidos');
            $sexo = $this->input->post('sexo');
            $correo = $this->input->post('correo');
            $telefono = $this->input->post('telefono');
            $codigoPostal = $this->input->post('codigoPostal');
            $colonia = $this->input->post('colonia');
            $municipio = $this->input->post('municipio');
            $estado = $this->input->post('estado');
            $tipoPerfil = $this->input->post('tipoPerfil');
            $estatus = $this->input->post('estatus');
            $cuenta = $this->input->post('cuenta');
            $direccion = $this->input->post('direccion');
            $perfil = $this->input->post('perfil');

            #ACTUALIZA USUARIO
            $this->General_model->update(
                'cuentas', array('usuario' => $usuario), array('id_cuenta' => $cuenta) 
            );

            #ACTUALIZA DIRECCIÓN
            $this->General_model->update(
                'direcciones', 
                array(
                    'codigo_postal' => $codigoPostal,
                    'colonia' => $colonia,
                    'municipio' => $municipio,
                    'estado' => $estado
                ),
                array('id_direccion' => $direccion)
            );

            #ACTUALIZA PERFIL
            $this->General_model->update(
                'perfiles', 
                array(
                    'nombres' => $nombre,
                    'apellidos' => $apellidos,
                    'sexo' => $sexo,
                    'correo' => $correo,
                    'telefono' => $telefono,
                    'tipo_perfil' => $tipoPerfil,
                    'estatus' => $estatus
                ),
                array('id_perfil' => $perfil)
            );
            
            $respuesta = array('resultado' => true);
            echo json_encode($respuesta);

        } catch(Exception $ex){

            $respuesta = array('resultado' => false);
            echo json_encode($respuesta);

        }

    }

    public function eliminar_perfil(){

        try{

            $this->load->database();

            $this->load->model('General_model');

            $perfil = $this->input->post('perfil');

            #SOLO CAMBIA ESTADO
            $this->General_model->update(
                'perfiles', array('estatus' => 3), array('id_perfil' => $perfil) 
            );

            $respuesta = array('resultado' => true);
            echo json_encode($respuesta);

        } catch (Exception $ex){

            $respuesta = array('resultado' => false);
            echo json_encode($respuesta);
        }
    }

}
