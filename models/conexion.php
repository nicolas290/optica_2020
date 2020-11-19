<?php

namespace models;

class conexion
{
    public $user = "uedpqt3ae1kedki6";
    public $pass = "epQEzqjm53AHnjWjrMoG";
    public $url = "mysql:host=bxswfgybkmpdrrqblj9y-mysql.services.clever-cloud.com;dbname=bxswfgybkmpdrrqblj9y";

    public static function conector()
    {
        try {
            return new \PDO(conexion::$url,conexion::$user,conexion::$pass);
        } catch (\PDOException $e) {
            return null;
        }
    }
}
