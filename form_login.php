<?php

class form_login
{
    public function MostrarFormulario()
    {
        ?>
        <!doctype html>
        <html lang="es">
        <head>
            <meta charset="utf-8">
            <title>Servicio de alquiler de Equipos de Sonido</title>
            <meta content="width=device-width, initial-scale=1.0" name="viewport">
            <meta content="" name="keywords">
            <meta content="" name="description">
            <link href="../img/favicon.png" rel="icon">
            <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">
            <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
            <link href="../lib/animate/animate.min.css" rel="stylesheet">
            <link href="../css/style.css" rel="stylesheet">
        </head>
        <body>
        <header id="header">
            <div class="container">
                <div id="socialpro" class="pull-left">
                    <a href=""><img src="../img/logo.png" alt="" title=""/></img></a>
                </div> 
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li><a target="_blank" href="">RAPIDEZ, SEGURIDAD, Y CUIDADO PARA EL ENVIO DE TUS EQUIPOS </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <section id="hero">
            <div class="hero-container">
                <h1>Bienvenido a SocialPro</h1>
                <h2>SERVICIO DE ALQUILER DE EQUIPOS DE SONIDO PARA EVENTOS</h2><br>
                <h2>ESTAS EN EL CONTROL DE "SOCIAL PRO", PARA CONTINUAR POR FAVOR INICIA SESION</h2>
                <form action="../Controlador/C_login.php" method="post">
                    <div class="text-center"><input type="text" name="txtusu" class="form-control"
                                                    style="text-align:center" placeholder="USUARIO"/></div>
                    <br>
                    <div class="text-center">
                        <input type="password" name="txtcontra" class="form-control"
                               style="text-align:center" required placeholder="CONTRASEÑA"/>
                    </div>
                    <br><br>
                    <input type="submit" class="btn btn-outline-success" name="Logear" value="Iniciar Sesion">
                    <br><br>
                    <table>

                    </table>
                </form>
            </div>
        </section>
        </body>
        </html>
        <?php
    }
}

?>