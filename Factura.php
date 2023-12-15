<?php
class Factura
{
    var $db;
    public function emitirFactura($ruc,$Razonsocial,$direccion,$monto,$fecha,$idproforma){
        $this->db = Conexion::conexio();
        $consulta = $this->db->prepare("INSERT INTO facturas VALUES(NULL ,?,?,'Servicio de transporte',?,?,?,?)");
        $consulta->execute(array($ruc,$Razonsocial,$direccion,$fecha,$monto,$idproforma));
        $consulta->closeCursor();
        $this->db = null;
    }

    public function BuscarFactura()
    {
        $this->db = Conexion::conexio();
        $consulta = $this->db->prepare("SELECT f.IdFactura,f.Ruc,f.Razonsocial,f.Ffecha,f.Total,P.Costo FROM proformas P INNER JOIN facturas f ON P.IdProforma=f.IdProforma order by Idfactura desc limit 1");
        $consulta->execute(array());
        $arrFa = array();
        while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $arrFa[] = $fila;
        }
        $consulta->closeCursor();
        $this->db = null;
        return $arrFa;
    }
    public function BuscarUltimaFactura()
    {
        $this->db = Conexion::conexio();
        $consulta = $this->db->prepare("SELECT C.Nombre,C.Apepaterno,C.Apematerno,C.Dni,f.IdFactura,f.Ffecha,P.Ncamionetas,P.Costo,f.Ruc,f.Razonsocial FROM proformas P INNER JOIN clientes C ON P.IdCliente=C.IdCliente INNER JOIN facturas f ON P.IdProforma=f.IdProforma order by f.IdFactura desc limit 1");
        $consulta->execute(array());
        $arrFac = array();
        while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $arrFac[] = $fila;
        }
        $consulta->closeCursor();
        $this->db = null;
        return $arrFac;
    }
    public function ModificarFacturaEventos($idfactura)
    {
        $this->db = Conexion::conexio();
        $consulta = $this->db->prepare("SELECT proformas.IdProforma, facturas.Razonsocial,facturas.Ruc, proformas.Fecha_almacen,proformas.Hora_almacen,proformas.Direccion_almacen, proformas.Fecha_evento,proformas.Hora_evento,proformas.Direccion_evento, proformas.Estado,proformas.Costo FROM facturas,proformas,clientes WHERE facturas.IdProforma=proformas.IdProforma AND proformas.IdCliente=clientes.IdCliente AND facturas.IdFactura=? ");
        $consulta->execute(array($idfactura));
        $arrmodf = array();
        while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $arrmodf[] = $fila;
        }
        $consulta->closeCursor();
        $this->db = null;
        return $arrmodf;
    }
}