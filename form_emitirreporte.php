<?php
require_once("../inc/Formulario.php");

class form_emitirreporte extends Formulario
{
    public function Mostrarform_emitirreporte($arrPriv, $usuario, $arrBol,$arrFac)
    {
        $this->HeadShow($arrPriv, $usuario);
        ?>
        <!--==========================
        Seccion EMITIR REPORTE DE VENTAS
        ============================-->
        <section id="call-to-action">
            <div class="container wow fadeIn">

                <div class=" text-center ">
                    <br><br><br><br>
                    <h3 class="cta-title">REPORTE DE VENTAS - SERVICIO DE ENVIO DE EQUIPOS DE SONIDO</h3>
                    <div style="color: #f7f7f7">POR FAVOR, COLOCA EL RANGO DE FECHAS</div><br>
                    <center>
                        <table>
                            <tr>
                                <td style="color: #f7f7f7">DESDE :</td>
                                <td>-</td>
                                <td style="color: #f7f7f7">HASTA :</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <form action = "../Controlador/C_emitirreporte.php" method="post" accept-charset="UTF-8" role="form">
                                    <td><input type="date" name="txtreportefecha1" class="form-control" style="text-align:center"></td>
                                    <td>- - -</td>
                                    <td><input type="date" name="txtreportefecha2" class="form-control" style="text-align:center"></td>
                                    <td><input type="submit" name="botonbuscarreporte" value="BUSCAR" class="btn btn-success"></td>
                                </form>
                            </tr>
                        </table>
                    </center>


                    <br><br>

                    <center>
                        <DIV ID="seleccion">
                        <?php $totalb=0 ; $totalf= 0;?>
                        <table id="date-es" border="1" cellpadding="0" cellspacing="0" class="tablesorter">
                            <thead>
                            <tr>
                                <th>Tipo</th>
                                <th>Numero</th>
                                <th>Monto total </th>
                                <th>Descripcion</th>
                                <th>Fecha</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <?php
                                if(is_array($arrBol)){
                                    if(count($arrBol)!=0){
                                        $totalb = 0;
                                        foreach ($arrBol as $item){
                                            $totalb = $totalb + $item['Monto'];
                                        ?>
                                        <td>BT</td>
                                        <td><?php echo $item['IdBoleta'];  ?></td>
                                        <td><?php echo $item['Monto'];  ?></td>
                                        <td><?php echo $item['Descripcion'];  ?></td>
                                        <td><?php echo $item['Fecha']; ?></td>
                            </tr>

                                <?php
                                        }
                                    }
                                }
                            ?>
                            <tr>
                                <?php
                                if(is_array($arrFac)){
                                    if(count($arrFac)!=0){
                                        $totalf = 0;
                                        foreach ($arrFac as $item){
                                            $totalf = $totalf + $item['Total'];
                                        ?>

                                        <td>FT</td>
                                        <td><?php echo $item['IdFactura'];  ?></td>
                                        <td><?php echo $item['Total'];  ?></td>
                                        <td><?php echo $item['Descripcion'];  ?></td>
                                        <td><?php echo $item['Ffecha']; ?></td>
                            </tr>
                            <?php
                                        }
                            
                                    }
                                }
                            ?>
                            <tr>
                                <td></td>
                                <td>TOTAL</td>
                                <td>S./<?php echo $totalb + $totalf ;?></td>
                                <td></td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                        </DIV> 
                        </center>
                        <br><br>
                        <a href="javascript:imprSelec('seleccion')" class="btn btn-dark">GENERAR REPORTE DE VENTAS</a>

                </div>
            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="../Controlador/C_Principal.php" class="" >❮ MENU PRINCIPAL</a>
        </section><!-- #call-to-action EMITIR REPORTE DE VENTAS-->


        <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="../js/sorter/jquery.tablesorter.js"></script>
        <script>
            $(document).ready(function() {
                $("#date-es").tablesorter({
                    sortColumn: 'nombre',			// número entero del índice o nombre de la columna en minúsculas
                    sortClassAsc: 'headerSortUp',		// clase css de la cabecera de la columna cuando aplicamos un orden ascendente
                    sortClassDesc: 'headerSortDown',	// clase css de la cabecera de la columna cuando aplicamos un orden descendente
                    headerClass: 'header',			// clase genérica de las cabeceras (th's)
                    dateFormat: 'dd/mm/yyyy' 		// se indica el formato de la fecha no ISO, por defecto us, nosotros indicamos el formato español
                });
            });
        </script>


        </body>
        <?php
    }
}

?>