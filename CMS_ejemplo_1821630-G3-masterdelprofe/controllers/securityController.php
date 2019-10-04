<?php

class securityController extends Security {

    public function login(){
        $user = parent::validateLogin($_POST['email']);

        if(!is_object($user)) die('Ingreso incorrecto.');

       if(is_object($user)){

           switch ($user->rol_id) {
               case 1: 
               echo "Bienvenido admi ";
               header ("location:?Controller=user&method=index");
               break;
               default:
               echo "Bienvenido usuario";
               header ("Location:?Controller=publicacion&method=index");
           }

       }
    }

    public function logout(){
        unset($_SESSION['user']);
        session_destroy();
        header('location:?controller=index');
    }

}