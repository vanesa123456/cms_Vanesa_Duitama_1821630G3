<?php

class publicacionController extends publicacion{
    //Mostrar toda la informacion
    public function index(){                
        require_once 'views/layouts/header.php';
        require_once 'views/public/index.php';
        require_once 'views/layouts/footer.php';
    }

    // Mostar la vista del formulario
    public function create(){
        require_once 'views/layouts/header.php';
        require_once 'views/public/create.php';
        require_once 'views/layouts/footer.php';
    }

    //'Validaciones e interaccion model
    public function store(){

        $nomimg=$_FILES['link']['name'];
        $num=date("GHs");
        $nombreimg=$num.$nomimg;
        $archivo=$_FILES['link']['tmp_name'];
        $ruta="assets";
       
        $ruta=$ruta."/".$nombreimg;
       
       
        move_uploaded_file($archivo,$ruta);    

        $_POST['rutas'] =$ruta;

        echo parent::register($_POST) ? header('location: ?controller=publicacion') : 'Error en el registro';
    }

    //consultar y luego mostrar la informacion en el formulario
    public function edit(){
        $public = parent::find($_GET['title']);
        require_once 'views/layouts/header.php';
        require_once 'views/public/edit.php';
        require_once 'views/layouts/footer.php';
    }

    //Validaciones e interaccion model
    public function update(){
        var_dump(parent::update_register($_POST));
    }


    //
    public function delete(){
        var_dump(parent::delete_register($_GET));

    }

}