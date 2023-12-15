<?php

class Formulario
{
    protected function HeadShow($arrPriv, $usuario)
    {
        if(isset($_SESSION['usuario'])==null)
        {
            header("Location: ../index.php");
        }
        ?>
        <!doctype html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Menu Principal - socialpro</title>
            <meta content="width=device-width, initial-scale=1.0" name="viewport">
            <meta content="" name="keywords">
            <meta content="" name="description">
            <link href="../img/favicon.png" rel="icon">
            <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">
            <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
            <link href="../lib/animate/animate.min.css" rel="stylesheet">
            <link href="../css/style.css" rel="stylesheet">
            <link href="../css/green/style.css" rel="stylesheet">

            <script>

                function imprSelec(nombre)
                {
                    var ficha = document.getElementById(nombre);
                    var ventimp = window.open(' ', 'popimpr');
                    ventimp.document.write( ficha.innerHTML );
                    ventimp.document.close();
                    ventimp.print( );
                    ventimp.close();
                }

            </script>

        </head>
    <body>
    <header id="header">
        <div class="container">
            <div id="logo" class="pull-left">
                <a><img src="../img/logo.png" alt="" title=""/></img></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li><font color="white">Usuario: <?php
                            echo $usuario;
                            ?></font></li>
                    <li>&nbsp;</li>
                    <?php foreach ($arrPriv as $item): ?>
                        <li class="menu-active"><a
                                href="<?php echo $item['Url']; ?>"><?php echo $item['Privilegio']; ?></a>
                        </li><?php endforeach ?>
                    <li class="menu-active"><form action="../Controlador/C_Principal.php" method="post"><input type="submit" class="btn btn-danger"  name="CerrarSesion" value="Cerrar Sesion"></form></li>
                </ul>
            </nav>
        </div>
    </header>
        <?php
    }
}