<?php

class alertas
{
    public function Generar($mensaje, $ruta, $ruta2, $valor, $valor2)
    {
        ?>
        <!doctype html>
        <html lang='es'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport'
                  content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
            <meta http-equiv='X-UA-Compatible' content='ie=edge'>
            <link href='../css/bootstrap.min.css' type='text/css' rel='stylesheet'>
            <title>Document</title>
        </head>
        <body>
        <button class='btn btn-primary' data-toggle='modal' data-target='#pk-modal' onclick='click' id='id01'
                style='display: none'>Abrir Modal
        </button>
        <div class="modal fade " id="pk-modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
             aria-labelledby="pk-modal" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <div class="modal-header">
                        <h2><?= $mensaje ?></h2>
                        <p></p>
                    </div>

                    <div class="modal-footer">
                        <form action="<?php echo $ruta; ?>" method="post">
                            <input class="btn btn-success" type='submit' value="<?php echo $valor; ?>">
                        </form>
                        <form action="<?php echo $ruta2; ?>" method="post">
                            <input class="btn btn-default" type='submit' value="<?php echo $valor2; ?> ">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src='../js/jquery-3.3.1.min.js'></script>
        <script src='../js/bootstrap.min.js'></script>
        </body>
        </html>

        <script type="text/javascript">
            function redireccionar() {

                document.getElementById('id01').style.display = 'active';
                $("#id01").trigger("click");
            }

            setTimeout("redireccionar()", 1); //tiempo expresado en milisegundos
        </script>
        <?php
    }

    public function mensaje($mensaje, $ruta)
    {
        ?>
        <!doctype html>
        <html lang='es'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport'
                  content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
            <meta http-equiv='X-UA-Compatible' content='ie=edge'>
            <link href='../css/bootstrap.min.css' type='text/css' rel='stylesheet'>
            <title>Document</title>
        </head>
        <body>
        <button class='btn btn-primary' data-toggle='modal' data-target='#pk-modal' onclick='click' id='id02'
                style='display: none'>Abrir Modal
        </button>
        <div class="modal fade " id="pk-modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
             aria-labelledby="pk-modal" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <div class="modal-header">
                        <h2><?php echo $mensaje; ?></h2>
                        <p></p>
                    </div>

                    <div class="modal-footer">
                        <a href="<?php echo $ruta; ?> "><input class="btn btn-success" type='submit'
                                                               value='Aceptar'></a>
                    </div>
                </div>
            </div>
        </div>
        <script src='../js/jquery-3.3.1.min.js'></script>
        <script src='../js/bootstrap.min.js'></script>
        </body>
        </html>
        <script type="text/javascript">
            function direccion() {

                document.getElementById('id02').style.display = 'active';
                $("#id02").trigger("click");
            }

            setTimeout("direccion()", 1); //tiempo expresado en milisegundos
        </script>
        <?php
    }

    public function mensaje2($mensaje)
    {
        ?>
        <!doctype html>
        <html lang='es'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport'
                  content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
            <meta http-equiv='X-UA-Compatible' content='ie=edge'>
            <link href='../css/bootstrap.min.css' type='text/css' rel='stylesheet'>
            <title>Document</title>
        </head>
        <body>
        <button class='btn btn-primary' data-toggle='modal' data-target='#pk-modal' onclick='click' id='id02'
                style='display: none'>Abrir Modal
        </button>
        <div class="modal fade " id="pk-modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
             aria-labelledby="pk-modal" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <div class="modal-header">
                        <h2><?php echo $mensaje; ?></h2>
                        <p></p>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-dismiss="modal">Aceptar</button>
                    </div>
                </div>
            </div>
        </div>
        <script src='../js/jquery-3.3.1.min.js'></script>
        <script src='../js/bootstrap.min.js'></script>
        </body>
        </html>
        <script type="text/javascript">
            function direccion() {

                document.getElementById('id02').style.display = 'active';
                $("#id02").trigger("click");
            }

            setTimeout("direccion()", 1); //tiempo expresado en milisegundos
        </script>
        <?php
    }

}

?>

