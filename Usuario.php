<?php

class Usuario
{
    var $db;

    public function __construct()
    {
        require_once("Conexion.php");
    }

    public function ValidarUsuario($usuario, $password)
    {
        $this->db = Conexion::conexio();
        $consulta = $this->db->prepare("SELECT IdUsuario FROM usuarios WHERE Usuario=? AND Password=?");
        $consulta->execute(array($usuario, $password));
        $arrUsu = array();
        while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $arrUsu[] = $fila;
        }
        $consulta->closeCursor();
        $this->db = null;
        return $arrUsu;
    }

    public function ExtraerPrivilegios($usuario)
    {
        $this->db = Conexion::conexio();
        $consulta = $this->db->prepare("SELECT privilegios.Privilegio,privilegios.Url from usuarios,roles,detalleprivilegios,privilegios where usuarios.IdRol=roles.IdRol AND detalleprivilegios.IdUsuario=usuarios.Idusuario AND privilegios.IdPrivilegio=detalleprivilegios.IdPrivilegio AND usuarios.Usuario=? ");
        $consulta->execute(array($usuario));
        $arrUsu = array();
        while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $arrUsu[] = $fila;
        }
        $consulta->closeCursor();
        $this->db = null;
        return $arrUsu;
    }
    public function ExtraerDatosUsuario($usuario)
    {
        $this->db = Conexion::conexio();
        $consulta = $this->db->prepare("SELECT usuarios.nombre_usuario, usuarios.apepat_usuario, usuarios.apemat_usuario, roles.Descripcion FROM usuarios,roles WHERE usuarios.IdRol=roles.IdRol AND usuarios.Usuario=?");
        $consulta->execute(array($usuario));
        $arrUsu = array();
        while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $arrUsu[] = $fila;
        }
        $consulta->closeCursor();
        $this->db = null;
        return $arrUsu;
    }
}