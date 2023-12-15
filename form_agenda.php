<?php
require_once("../inc/Formulario.php");

class form_agenda extends Formulario
{
    public function Mostrarform_agenda($arrPriv, $usuario, $arrDag)
    {
        $this->HeadShow($arrPriv, $usuario);
        ?>
        <!--==========================
        Seccion AGENDA
        ============================-->
        <section id="call-to-action">
            <div class="container wow fadeIn">

                <div class=" text-center ">
                    <br><br><br><br>
                    <h3 class="cta-title">AGENDA - SERVICIO DE ENVIO DE EQUIPOS DE SONIDO</h3>
                    <div style="color: #f7f7f7">INGRESA LA FECHA A CONSULTAR DISPONIBLIDAD</div><br>
                    <center>
                        <table>
                            <tr>
                                <form action="../Controlador/C_agenda.php" method="post" accept-charset="UTF-8" role="form">
                                    <td><input type="date" name="txtagendafecha" class="form-control" style="text-align:center"></td>
                                    <td><input type="submit" name="botonbuscaragenda" class="btn btn-success">&nbsp;&nbsp;<i class="fa fa-search">&nbsp;&nbsp;</i></td>
                                </form>
                            </tr>
                        </table>
                    </center>

                    <br><br>

                    <center>
                        <table id="date-es" border="1" cellpadding="0" cellspacing="0" class="tablesorter">
                            <thead>
                                <tr>
                                    <th>Estado</th>
                                    <th>Camionetas</th>
                                    <th>Dir Almacen</th>
                                    <th>Dir Evento</th>
                                    <th>Fecha Almacen</th>
                                    <th>Hora Almacen</th>
                                    <th>Fecha Evento</th>
                                    <th>Hora Evento</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                            if (is_array($arrDag)) {
                                                if (count($arrDag) != 0) {
                                                    foreach ($arrDag as $item) {
                                                        ?>

                                                <td><?php echo $item['Estado']; ?></td>
                                                <td><?php echo $item['Ncamionetas']; ?></td>
                                                <td><?php echo $item['Direccion_almacen']; ?></td>
                                                <td><?php echo $item['Direccion_evento']; ?></td>
                                                <td><?php echo $item['Fecha_almacen']; ?></td>
                                                <td><?php echo $item['Hora_almacen']; ?></td>
                                                <td><?php echo $item['Fecha_evento']; ?></td>
                                                <td><?php echo $item['Hora_evento']; ?></td>
                                </tr>

                    <?php
                                    }
                                }
                            }
                            ?>


                            </tbody>
                        </table>
                    </center>

                </div>
            </div>
            <BR><BR>
            <CENTER><input name="button" type="button" class="btn btn-danger" onclick="window.close();" value="VOLVER" /></CENTER>
            <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="../Controlador/C_Principal.php" class="w3-left w3-btn\">❮ MENU PRINCIPAL</a>



        </section><!-- #call-to-action AGENDA-->

        <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="../js/sorter/jquery.tablesorter.js"></script>
        <script> 
            $(document).ready(function() {
                $("#date-es").tablesorter({
                    sortColumn: 'nombre', // número entero del índice o nombre de la columna en minúsculas
                    sortClassAsc: 'headerSortUp', // clase css de la cabecera de la columna cuando aplicamos un orden ascendente
                    sortClassDesc: 'headerSortDown', // clase css de la cabecera de la columna cuando aplicamos un orden descendente
                    headerClass: 'header', // clase genérica de las cabeceras (th's)
                    dateFormat: 'yyyy/mm/dd' // se indica el formato de la fecha no ISO, por defecto us, nosotros indicamos el formato español
                })
            })
        </script>


        </body>

<?php
    }
}

?>