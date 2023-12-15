<?php
session_start();
require_once("../Modelo/Usuario.php");
$objusuario = new Usuario();
require_once ("../inc/alertas.php");
$objmensaje=new alertas();
require_once ("../Modelo/Conexion.php");
$arPriv = $objusuario->ExtraerPrivilegios($_SESSION['usuario']);
//$arrAlias = $objusuario->ValidarNombreDeUsuario($_SESSION['usuario']);
$arraymbe= array();
$arraytura= array();
require_once ("../Modelo/Boleta.php");
$objBoleta = new Boleta();
//$arrAlias = $objusuario->ValidarNombreDeUsuario($_SESSION['usuario']);
if(isset($_POST['botonmbuscarboleta'])){
    if($_POST['mboleta']!=null){
        $arraymbe=$objBoleta->ModificarBoletaEventos($_POST['mboleta']);
        if(count($arraymbe)==0)
        {
            $objmensaje->mensaje2("NO SE ENCONTRO COMPROBANTE");
        }
    }else{
        $objmensaje->mensaje("DEBE INGRESAR NUMERO CORRECTAMENTE","../Controlador/C_modificareventos.php");
    }
}
$arraytura=null;
require_once ("../Modelo/Factura.php");
$objFactura = new Factura();
//$arrAlias = $objusuario->ValidarNombreDeUsuario($_SESSION['usuario']);
if(isset($_POST['botonbuscarfactura'])){
    if($_POST['mfactura']!=null){
        $arraytura=$objFactura->ModificarFacturaEventos($_POST['mfactura']);
        if(count($arraytura)==0)
        {
            $objmensaje->mensaje2("NO SE ENCONTRO COMPROBANTE");
        }
    }else{
        $objmensaje->mensaje("DEBE INGRESAR NUMERO CORRECTAMENTE","../Controlador/C_modificareventos.php");
    }
}
if(isset($_POST['guardarboleta']))
{
    require_once ("../Modelo/proforma.php");
    $objproforma=new proforma();
    $objproforma->ActualizarEstadoProforma($_POST['Bfea'],$_POST['Bhoa'],$_POST['Bdira'],$_POST['Bfee'],$_POST['Bhoe'],$_POST['Bdire'],$_POST['Best'],$_POST['Bmo'],$_POST['IdProforma']);
    $objmensaje->mensaje2("Evento modificado correctamente");
}
if(isset($_POST['guardarfactura']))
{
    require_once ("../Modelo/proforma.php");
    $objproforma=new proforma();
    $objproforma->ActualizarEstadoProforma($_POST['Ffea'],$_POST['Fhoa'],$_POST['Fdira'],$_POST['Ffee'],$_POST['Fhoe'],$_POST['Fdire'],$_POST['Fest'],$_POST['Fmo'],$_POST['IdProforma']);
    $objmensaje->mensaje2("Evento modificado correctamente");
}


require_once("../Vista/form_modificareventos.php");
$objForm_modificareventos = new form_modificareventos();
$objForm_modificareventos->Mostrarform_modificareventos($arPriv, $_SESSION['usuario'],$arraymbe,$arraytura);
?>