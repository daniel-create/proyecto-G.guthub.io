<?php
session_start();
require_once("../inc/alertas.php");
$objalerta = new alertas();
$arraycli = null;
$arrPro=null;
require_once("../Modelo/cliente.php");
$objcliente = new cliente();
require_once("../Modelo/proforma.php");
$objproforma = new proforma();
require_once("../Modelo/Usuario.php");
$objusuario = new Usuario();
$arPriv = $objusuario->ExtraerPrivilegios($_SESSION['usuario']);
//$arrAlias = $objusuario->ValidarNombreDeUsuario($_SESSION['usuario']);


if (isset($_POST['generar_proforma'])) {
    if ($_POST['txtdiral'] != NULL && $_POST['txtde'] != NULL && $_POST['txtfa'] != NULL && $_POST['txtha'] != NULL && $_POST['txtfe'] != NULL && $_POST['txthe'] != NULL && $_POST['txtnumca'] != NULL && $_POST['txtes'] != NULL && $_POST['txtcosto'] != NULL && strlen($_POST['txtdnic']) == 8 && $_POST['txtnc'] != NULL && $_POST['txtap'] != NULL && $_POST['txtam'] != NULL && $_POST['txttc'] != NULL) {
        $arraycli = $objcliente->BuscarCliente($_POST['txtdnic']);
        if (count($arraycli) == null) {
            $objcliente->insertarcliente($_POST['txtdnic'], $_POST['txtnc'], $_POST['txtap'], $_POST['txtam'], $_POST['txttc']);
            

        }
        $objproforma->emitirproforma($_POST['txtdiral'], $_POST['txtde'], $_POST['txtfa'], $_POST['txtha'], $_POST['txtfe'], $_POST['txthe'], $_POST['txtnumca'], $_POST['txtes'], $_POST['txtcosto'], $_POST['txtdnic']);
        $arrPro=$objproforma->BuscarUltimaProforma();
        require_once("../inc/form_proforma.php");
        $objFormProforma = new form_proforma();
        $objFormProforma->MostrarFormProforma($arrPro);
        exit();
    } else {
        $objalerta->mensaje('DEBE LLENAR LOS DATOS CORRECTAMENTE', "../Controlador/C_emitirproforma.php");
    }
}

if (isset($_POST['buscarDatosCliente'])) {
    if (strlen($_POST['txtdnicliente']) == 8) {
        $arraycli = $objcliente->BuscarDatosCliente($_POST['txtdnicliente']);
        if (count($arraycli) == 0) {
            $objalerta->mensaje2("DNI no registrado");
        }
    } else {
        $objalerta->mensaje("DEBE LLENAR LOS DATOS CORRECTAMENTE", "../Controlador/C_emitirproforma.php");
    }
}


require_once("../Vista/form_emitirproforma.php");
$objForm_emitirproformar = new form_emitirproforma();
$objForm_emitirproformar->Mostrarform_emitirproforma($arPriv, $_SESSION['usuario'], $arraycli);


?>