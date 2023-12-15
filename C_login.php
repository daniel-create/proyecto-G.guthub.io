<?php
require_once("../Modelo/Usuario.php");
$objUsuario = new Usuario();
require_once("../inc/alertas.php");
$objmensaje = new alertas();
if (isset($_POST['Logear'])) {
    $usuario = $_POST['txtusu'];
    $pass = $_POST['txtcontra'];
    if (strlen($usuario) >= 4 && strlen($usuario) <= 10 && strlen($pass) >= 4 && strlen($pass) <= 10) {
        $arrUsu = $objUsuario->ValidarUsuario($usuario, $pass);
        if (count($arrUsu) != 0) {
            session_start();
            $_SESSION['usuario'] = $usuario;
            header("Location: C_Principal.php");
        } elseif (count($arrUsu) == 0) {
            $objmensaje->mensaje("Debe ingresar informacion correctamente", "C_login.php");
        }

    } elseif (strlen($usuario) < 4 || strlen($usuario) > 10 || strlen($pass) < 4 || strlen($pass) > 10) {
        $objmensaje->mensaje("Debe ingresar informacion correctamente", "C_login.php");
    }
}

require_once("../Vista/form_login.php");
$objForm_login = new form_login();
$objForm_login->MostrarFormulario();

?>