<?php
session_start();
require_once ("../inc/alertas.php");
$objalertas = new alertas();
require_once ("../Modelo/proforma.php");
$objproforma=new proforma();
require_once("../Modelo/Usuario.php");
$objusuario = new Usuario();
require_once ("../Modelo/Boleta.php");
$objBoleta=new Boleta();

$arrPro=null;
$arPriv = $objusuario->ExtraerPrivilegios($_SESSION['usuario']);
//$arrAlias = $objusuario->ValidarNombreDeUsuario($_SESSION['usuario']);
if(isset($_POST['buscarProforma']))
{
    if($_POST['nupro']!=NULL){
        $arrPro=$objproforma->BuscarProforma($_POST['nupro']);
        if($arrPro==NULL){
            $objalertas->mensaje("NUMERO INGRESADO NO EXISTE","../Controlador/C_emitircomprobante.php");
        }
    }
    else{
        $objalertas->mensaje("DEBE LLENAR DATOS CORRECTAMENTE","../Controlador/C_emitircomprobante.php");
    }
}
if(isset($_POST['boleta']))
{
    if($_POST['comdni']!=NULL){
    $objproforma->ActualizarProforma($_POST['idproforma']);
    date_default_timezone_set("America/Lima");
    $objBoleta->emitirBoleta($_POST['comdes'],$_POST['common'],date('Y-m-d'),$_POST['idproforma']);
    $arrBol=$objBoleta->BuscarBoleta();
    require_once ("../inc/form_boleta.php");
    $objFormBoleta=new form_boleta();
    $objFormBoleta->MostrarFormBoleta($arrBol);
    exit();}
    else{
        $objalertas->mensaje("DEBE LLENAR DATOS CORRECTAMENTE","../Controlador/C_emitircomprobante.php");
    }
}
if(isset($_POST['factura']))
{
    if($_POST['comdni']!=NULL){
        $_SESSION['idpro']=$_POST['idproforma'];
        header("Location: C_factura.php");
    }
    else{
        $objalertas->mensaje("DEBE LLENAR DATOS CORRECTAMENTE","../Controlador/C_emitircomprobante.php");
    }
}

require_once("../Vista/form_emitircomprobante.php");
$objForm_emitircomprobantes = new form_emitircomprobante();
$objForm_emitircomprobantes->Mostrarform_emitircomprobantes($arPriv, $_SESSION['usuario'],$arrPro);
?>