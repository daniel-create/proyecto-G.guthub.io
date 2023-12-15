<?php
class cliente{
    var $db;
    public function insertarcliente($Dni,$Nombre,$Apepaterno,$Apematerno,$Telefono){
        $this->db = Conexion::conexio();
        $consulta = $this->db->prepare("INSERT INTO clientes VALUES(NULL ,?,?,?,?,?)");
        $consulta->execute(array($Dni,$Nombre,$Apepaterno,$Apematerno,$Telefono));
        $consulta->closeCursor();
        $this->db = null;
    }

    public function BuscarCliente($Dni)
    {
        $this->db = Conexion::conexio();
        $consulta = $this->db->prepare("SELECT Idcliente FROM clientes WHERE DNI=?");
        $consulta->execute(array($Dni));
        $arrDni = array();
        while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $arrDni[] = $fila;
        }
        $consulta->closeCursor();
        $this->db = null;
        return $arrDni;
    }

    public function BuscarDatosCliente($Dni)
    {
        $this->db = Conexion::conexio();
        $consulta = $this->db->prepare("SELECT DNI,Nombre,Apepaterno,Apematerno,Telefono FROM clientes WHERE DNI=?");
        $consulta->execute(array($Dni));
        $arrDni = array();
        while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $arrDni[] = $fila;
        }
        $consulta->closeCursor();
        $this->db = null;
        return $arrDni;
    }
}

?>