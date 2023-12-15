<?php
session_start();
require_once("../Vista/form_principal.php");
require_once("../Modelo/Usuario.php");
$objusuario = new Usuario();
$arPriv = $objusuario->ExtraerPrivilegios($_SESSION['usuario']);
$arrAlias = $objusuario->ExtraerDatosUsuario($_SESSION['usuario']);
$objform_principal = new form_principal();
$objform_principal->MostrarForm_principal($arPriv, $arrAlias, $_SESSION['usuario']);
if(isset($_POST['CerrarSesion']))
{
    unset($_SESSION['usuario']);
    header("Location:../index.php");
}