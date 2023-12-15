<?php
class Agenda
{
    var $db;

    public function BuscarDatosAgenda($Fecha_almacen)
    {
        $this->db = Conexion::conexio();
        $consulta = $this->db->prepare(" SELECT * FROM proformas WHERE Estado='Activo' AND Fecha_almacen=? ");
        $consulta->execute(array($Fecha_almacen));
        $arrDag = array();
        while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $arrDag[] = $fila;
        }
        $consulta->closeCursor();
        $this->db = null;
        return $arrDag;
    }
}