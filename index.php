<?php
session_start();
session_destroy();
header("Location: Controlador/C_login.php");
unset($_SESSION['usuario']);
?>