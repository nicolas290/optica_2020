<?php

namespace models;

class conexion
{
    public $user = "root";
    public $clave = "";
    public $url = "mysql:host;dbname=optica_2020";

    public static function conector()
    {
        try {
            return new \PDO(conexion::$url,conexion::$user,conexion::$clave);
        } catch (\PDOException $e) {
            return null;
        }
    }
}
