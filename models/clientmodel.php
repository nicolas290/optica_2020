<?php

namespace models;
require_once("Conexion.php");
class ClienteModel{

    public function Insertar($data){
        $stm = Conexion::conector()->prepare("INSERT INTO cliente VALUES(:A,:B,:C,:D,:E,:F)");
        $stm->bindParam(":A",$data['rut_client']);
        $stm->bindParam(":B",$data['nombre_client']);
        $stm->bindParam(":C",$data['direccion_client']);
        $stm->bindParam(":D",$data['telefono_client']);
        $stm->bindParam(":E",$data['fecha_emision']);
        $stm->bindParam(":F",$data['email_client']);
        return $stm->execute();
    }
}