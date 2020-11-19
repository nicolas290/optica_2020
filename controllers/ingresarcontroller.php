<?php

namespace controllers;

use models\ClienteModel;

require_once("clientemodel");

class ingresarcontroller
{
    public $rut_client;
    public $nombre_client;
    public $direccion_client;
    public $telefono_client;
    public $fecha_client;
    public $email_client;

    public function __construct()
    {
        $this->rut_client = $_POST['rut_client'];
        $this->nombre_client = $_POST['nombre_client'];
        $this->direccion_client = $_POST['direccion_client'];
        $this->telefono_client = $_POST['telefono_client'];
        $this->fecha_client = $_POST['fecha_client'];
        $this->email_client = $_POST['email_client'];
    }

    public function guardarcliente()
    {
        session_start();
        if ($this->rut_cliente == "" || $this->nombre_cliente == "" || $this->direccion_cliente == "" || $this->telefono_cliente == "" || $this->fecha_creacion == "" || $this->email_cliente == "") {
            $_SESSION['error'] = "debe rellenar los campos";
            header("Location:../views/crearcliente.php");
            return;
        }
        $model = new ClienteModel();
        $data = ["rut_cliente" => $this->rut_cliente, "nombre_cliente" => $this->nombre_cliente, "direccion_cliente" => $this->direccion_cliente, "telefono_cliente" => $this->telefono_cliente, "fecha_creacion" => $this->fecha_creacion, "email_cliente" => $this->email_cliente];
        $count =  $model->Insertar($data);
        if ($count == 1) {
            $_SESSION['respuesta'] = "cliente ingresado satisfactoraimente";
        } else {
            $_SESSION['error'] = "hubo un error en la base de datos";

        }
        header("Location:../views/crearcliente.php");
    }
}
$obj=new ingresarcontroller();
$obj->guardarcliente();