<?php
session_start();
require_once("../Modelo/Usuario.php");
$objusuario = new Usuario();
$arPriv = $objusuario->ExtraerPrivilegios($_SESSION['usuario']);
require_once ("../Modelo/Factura.php");
$objFactura=new Factura();
require_once ("../Modelo/proforma.php");
$objproforma = new proforma();
require_once ("../inc/alertas.php");
$objmensaje=new alertas();
//$arrAlias = $objusuario->ValidarNombreDeUsuario($_SESSION['usuario']);
$arrpro=$objproforma->BuscarProforma($_SESSION['idpro']);
$monto=0;
foreach ($arrpro as $item){
    $monto=$item['Costo'];
}
if(isset($_POST['botonfactura']))
{
    if($_POST['txtruc']!=null && $_POST['txtrs']!=null && $_POST['txtde']!=null) {
        $objproforma->ActualizarProforma($_SESSION['idpro']);
        date_default_timezone_set("America/Lima");
        $objFactura->emitirFactura($_POST['txtruc'], $_POST['txtrs'], $_POST['txtde'], $monto, date('Y-m-d'), $_SESSION['idpro']);
        $arrFac = $objFactura->BuscarUltimaFactura();
        require_once("../inc/form_factura_compartida.php");
        $objFormFactura = new form_factura_compartida();
        $objFormFactura->MostrarForm_factura($arrFac);
        unset($_SESSION['idpro']);
        exit();
    }
    else{
        $objmensaje->mensaje2("DEBE LLENAR DATOS CORRECTAMENTE");
    }

}

require_once("../Vista/form_factura.php");
$objForm_factura = new form_factura();
$objForm_factura->Mostrarform_factura($arPriv, $_SESSION['usuario'],$monto);
?>