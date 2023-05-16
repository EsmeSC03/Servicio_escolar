<?php

require_once './models/perfilmodel.php';

// Si se requieren mas datos, los agrego

    class Perfil extends Controller{
        function __construct(){
            parent::__construct();
        }

        function render(){
            $data = new PerfilModel();
            $dataAlumnos = $data->get('2');
            $select = $dataAlumnos->getnombre_estudiante();

            $data->getnombre_estudiante();
            $this->view->render('alumno/perfil', [
                'variable' => $select
            ]);
        }
    }
?>