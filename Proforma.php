<?php
class proforma{
    var $db;
    public function emitirproforma($Direccion_almacen,$Direccion_evento,$Fecha_almacen,$Hora_almacen,$Fecha_evento,$Hora_evento,$Ncamionetas,$Estado,$Costo,$Dni){
        $this->db = Conexion::conexio();
        $consulta = $this->db->prepare("INSERT INTO proformas VALUES(NULL ,?,?,?,?,?,?,?,?,?,(SELECT IdCliente FROM clientes WHERE DNI=?),1)");
        $consulta->execute(array($Direccion_almacen,$Direccion_evento,$Fecha_almacen,$Hora_almacen,$Fecha_evento,$Hora_evento,$Ncamionetas,$Estado,$Costo,$Dni));
        $consulta->closeCursor();
        $this->db = null;
    }
    public function BuscarProforma($idproforma)
    {
        $this->db = Conexion::conexio();
        $consulta = $this->db->prepare("SELECT Dni,IdProforma,Nombre,Apepaterno,Apematerno,Ncamionetas,Costo FROM proformas INNER JOIN clientes ON proformas.Idcliente=clientes.Idcliente WHERE IdProforma=? ");
        $consulta->execute(array($idproforma));
        $arrPro = array();
        while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $arrPro[] = $fila;
        }
        $consulta->closeCursor();
        $this->db = null;
        return $arrPro;
    }
    public function ActualizarProforma($IdProforma)
    {
        $this->db = Conexion::conexio();
        $consulta = $this->db->prepare("UPDATE Proformas SET Estado=? WHERE IdProforma=?");
        $consulta->execute(array('Activo',$IdProforma));
        $consulta->closeCursor();
        $this->db = null;
    }
    public function BuscarUltimaProforma()
    {
        $this->db = Conexion::conexio();
        $consulta = $this->db->prepare("SELECT clientes.Dni,clientes.Nombre,clientes.Apepaterno,clientes.Apematerno,IdProforma,Ncamionetas,Costo FROM PROFORMAS INNER JOIN CLIENTES ON proformas.Idcliente=clientes.Idcliente order by IdProforma desc limit 1 ");
        $consulta->execute(array());
        $arrPro = array();
        while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $arrPro[] = $fila;
        }
        $consulta->closeCursor();
        $this->db = null;
        return $arrPro;
    }
    public function ActualizarEstadoProforma($fecha_almacen,$hora_almacen,$direccion_almacen,$fecha_evento,$hora_evento,$direccion_evento,$estado,$costo,$idproforma)
    {
        $this->db = Conexion::conexio();
        $consulta = $this->db->prepare("UPDATE proformas SET Fecha_almacen=? ,Hora_almacen=?, Direccion_almacen=?,Fecha_evento=?,Hora_evento=?,Direccion_evento=?,Estado=?,Costo=? WHERE IdProforma=?");
        $consulta->execute(array($fecha_almacen,$hora_almacen,$direccion_almacen,$fecha_evento,$hora_evento,$direccion_evento,$estado,$costo,$idproforma));
        $consulta->closeCursor();
        $this->db = null;
    }

}
?>