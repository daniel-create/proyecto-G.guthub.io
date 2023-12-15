<?php
session_start();
require_once("../Modelo/Usuario.php");
$objusuario = new Usuario();
$arPriv = $objusuario->ExtraerPrivilegios($_SESSION['usuario']);
require_once ("../inc/alertas.php");
$objmensaje=new alertas();
//$arrAlias = $objusuario->ValidarNombreDeUsuario($_SESSION['usuario']);
$arrBol = array();
$arrFac = array();

$arrayrep=null;
require_once ("../Modelo/Reporte.php");
$objreporte = new Reporte();
//$arrAlias = $objusuario->ValidarNombreDeUsuario($_SESSION['usuario']);

if(isset($_POST['botonbuscarreporte'])){

    if($_POST['txtreportefecha1']!=null && $_POST['txtreportefecha2']!=null){
        $arrBol=$objreporte->BuscarListarReporteBoleta($_POST['txtreportefecha1'],$_POST['txtreportefecha2']);
        $arrFac=$objreporte->BuscarListarReporteFactura($_POST['txtreportefecha1'],$_POST['txtreportefecha2']);
        if(count($arrBol)==0 && count($arrFac)==0)
        {
            $objmensaje->mensaje2("NO HAY EVENTOS REGISTRADOS EN ESE RANGO DE FECHAS");
        }
    }elseif($_POST['txtreportefecha1']==null || $_POST['txtreportefecha2']==null){
        $objmensaje->mensaje("DEBE INGRESAR LOS DATOS CORRECTAMENTE","../Controlador/C_emitirreporte.php");
    }
}


require_once("../Vista/form_emitirreporte.php");
$objForm_emitirreporte = new form_emitirreporte();
$objForm_emitirreporte->Mostrarform_emitirreporte($arPriv, $_SESSION['usuario'],$arrBol,$arrFac)


?>