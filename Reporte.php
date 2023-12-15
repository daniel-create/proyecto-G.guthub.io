<?php
class Reporte
{
    var $db;

    public function BuscarListarReporteBoleta($Fecha1,$Fecha2)
    {
        $this->db = Conexion::conexio();
        $consulta = $this->db->prepare("SELECT * FROM boletas where Fecha BETWEEN ? and ?");
        $consulta->execute(array($Fecha1,$Fecha2));
        $arrblr = array();
        while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $arrblr[] = $fila;
        }
        $consulta->closeCursor();
        $this->db = null;
        return $arrblr;
    }
    public function BuscarListarReporteFactura($Fecha1,$Fecha2)
    {
        $this->db = Conexion::conexio();
        $consulta = $this->db->prepare("SELECT * from facturas where Ffecha BETWEEN ? and ?");
        $consulta->execute(array($Fecha1,$Fecha2));
        $arrblr = array();
        while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $arrblr[] = $fila;
        }
        $consulta->closeCursor();
        $this->db = null;
        return $arrblr;
    }
}