<?php
class Boleta{
    var $db;
    public function emitirBoleta($descripcion,$monto,$fecha,$idproforma){
        $this->db = Conexion::conexio();
        $consulta = $this->db->prepare("INSERT INTO  boletas VALUES(NULL ,?,?,?,?)");
        $consulta->execute(array($descripcion,$monto,$fecha,$idproforma));
        $consulta->closeCursor();
        $this->db = null;
    }
    public function BuscarBoleta()
    {
        $this->db = Conexion::conexio();
        $consulta = $this->db->prepare("SELECT C.Nombre,C.Apepaterno,C.Apematerno,C.DNI,B.IdBoleta,B.Fecha,P.Ncamionetas,P.Costo FROM proformas P INNER JOIN clientes C ON P.Idcliente=C.Idcliente INNER JOIN boletas B ON P.IdProforma=B.IdProforma order by IdBoleta desc limit 1");
        $consulta->execute(array());
        $arrBol = array();
        while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $arrBol[] = $fila;
        }
        $consulta->closeCursor();
        $this->db = null;
        return $arrBol;
    }
    public function ModificarBoletaEventos($idboleta)
    {
        $this->db = Conexion::conexio();
        $consulta = $this->db->prepare("SELECT proformas.IdProforma, clientes.Nombre,clientes.Apepaterno,clientes.Apematerno,clientes.DNI,proformas.Fecha_almacen,proformas.Hora_almacen,proformas.Direccion_almacen, proformas.Fecha_evento,proformas.Hora_evento,proformas.Direccion_evento, proformas.Estado, proformas.Costo FROM boletas, proformas,clientes WHERE boletas.IdProforma=proformas.IdProforma AND clientes.Idcliente=proformas.Idcliente AND IdBoleta=? ");
        $consulta->execute(array($idboleta));
        $arrmodb = array();
        while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $arrmodb[] = $fila;
        }
        $consulta->closeCursor();
        $this->db = null;
        return $arrmodb;
    }
}