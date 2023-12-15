<?php
session_start();
require_once("../Modelo/Usuario.php");
$objusuario = new Usuario();
$arPriv = $objusuario->ExtraerPrivilegios($_SESSION['usuario']);
$arrayagen=null;
require_once ("../Modelo/Agenda.php");
$objagenda = new Agenda();
require_once ("../inc/alertas.php");
$objalerta=new alertas();
//$arrAlias = $objusuario->ValidarNombreDeUsuario($_SESSION['usuario']);

if (isset($_POST['botonbuscaragenda'])) {
    if (($_POST['txtagendafecha'])) {
        $arrayagen=$objagenda->BuscarDatosAgenda($_POST['txtagendafecha']);
        if (count($arrayagen)==0) {
            $objalerta->mensaje2("NO SE ENCONTRO EVENTOS");
        }
    } else {
        $objalerta->mensaje("DEBE LLENAR LA FECHA CORRECTAMENTE", "../Controlador/C_agenda.php");
    }
}
require_once("../Vista/form_agenda.php");
$objForm_agenda = new form_agenda();
$objForm_agenda->Mostrarform_agenda($arPriv, $_SESSION['usuario'],$arrayagen);
