<?php

Class Conexion
{

    public static function conexio()
    {
        try {
            $conecta = new PDO("mysql:host=localhost;dbname=socialPro", "root", "");
            $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conecta->exec("SET CHARACTER set utf8");

        } catch (Exception $e) {
            echo $e->getMessage();
            die($e->getLine());
        }
        return $conecta;
    }
}

?>