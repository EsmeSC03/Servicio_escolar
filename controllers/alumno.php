<?php

class Alumno extends Controller{
        function __construct(){
            parent::__construct();
        }

        function render(){
            // $data = new AlumnoModel();
            // $dataAlumnos = $data->get('2');
            // $select = $dataAlumnos->getnombre_estudiante();

            // $data->getnombre_estudiante();
             $this->view->render('alumno/index');//; [
            //     'variable' => $select
            // ]);
            
        }
    }
?>