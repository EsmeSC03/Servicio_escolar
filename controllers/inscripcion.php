<?php
    class Inscripcion extends Controller{
        function __construct(){
            parent::__construct();
        }

        function render(){
            $data = new InscripcionModel();
    $dataAlumnos = $data->get();
    $this->view->render('alumno/inscripcion');
    if ($dataAlumnos) {
         $this->view->render('alumno/inscripcion');//, [
        //     'data' => $dataAlumnos  Agrega los datos del modelo a la variable 'data'
        // ]);
    }
    }
}
?>