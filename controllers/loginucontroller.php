<?php

namespace controllers;

use models\AdminModel as AdminModel;

require_once ("../models/AdminModel.php");

class LoginController{
    public $rut;
    public $clave;


    public function __construct()
    {
        $this->nombre = $_POST['rut'];
        $this->clave = $_POST['clave'];
    }
    public function inicioSesion(){
        session_start();
        if($this->rut=="" || $this->clave==""){
            $_SESSION['error']="complete los campos";
            header("Location: ../indexu.php");
            return;
        }
        $modelo = new AdminModel();
        $array = $modelo->buscarUsuarioLogin($this->nombre, $this->clave);
        if(count($array) ==0){
            $_SESSION['error']="nombre o clave no se encuentran";
            header("Location: ../indexu.php");
            return;
        }
        $_SESSION['usuario'] = $array[0];
        header("Location: ../views/ingreso.php");
    }
}
$obj = new LoginController();
$obj->inicioSesion();