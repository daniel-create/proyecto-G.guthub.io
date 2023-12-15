<?php
require_once("../inc/Formulario.php");

class form_emitirproforma extends Formulario
{
    public function Mostrarform_emitirproforma($arrPriv, $usuario, $arraycli)
    {
        $this->HeadShow($arrPriv, $usuario);
        ?>
        <!--==========================
        Seccion EQUIPOS A ENVIAR / EMITIR PROFORMA
        ============================-->
        <section id="call-to-action">
            <div class="container wow fadeIn">

                <div class=" text-center ">
                    <br><br><br><br>
                    <h3 class="cta-title">FORMULARIO PROFORMA - SERVICIO DE ENVIO DE EQUIPOS DE SONIDO</h3>
                    <div style="color: #f7f7f7">Empecemos, Revisa la Agenda y no olvides de llenar todos los espacios en blanco</div><br>
                    <center>
                        <table>
                            <tr>
                                <td> <a target="_blank" href="../Controlador/C_agenda.php" class="btn btn-info"><span class="glyphicon glyphicon-calendar"></span> AGENDA </a> </td>
                                <td>- - -</td>
                                <form action = "../Controlador/C_emitirproforma.php" method="post" accept-charset="UTF-8" role="form">
                                    <td><input type="number" placeholder="DNI del Cliente" name="txtdnicliente" class="form-control" style="text-align:center"></td>
                                    <td><input type="submit" name="buscarDatosCliente" value="BUSCAR" class="btn btn-success"></td>
                                    <td>- - -</td>
                                    <td> <a target="_blank" href="http://ws.mapcity-peru.com/widget/nyg/?key=z5p3qp0y0uacvtr3jn4sy6x50klnhnqz" class="btn btn-warning"><span class="glyphicon glyphicon-calendar"></span> GEOFINDER </a> </td>
                                </form>
                            </tr>
                        </table>
                    </center>
                    <form action = "../Controlador/C_emitirproforma.php" method="post">
                        <center>
                            <table>
                                <tr>
                                    <td><input type="text" style="background-color:transparent; border: none; color: #4D4D4D" value="id"/></td>
                                    <td>-</td>
                                    <td></td>
                                    <td>-</td>
                                    <td></td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td colspan="2"><div class="text-center"><font color="white">Direccion de Almacen</font> <input type="text" name="txtdiral" class="form-control" style="text-align:center" placeholder="Avenida, numero y distrito"/></div></td>
                                    <td><div class="text-center"><font color="white">DNI del Cliente</font> <input type="text" name="txtdnic" class="form-control" style="text-align:center" value="<?php if (is_array($arraycli)) {if(count($arraycli)!=0){ foreach ($arraycli as $item){ echo $item['DNI'];  } }} ?>" /></div></td>
                                    <td><div class="text-center"><font color="white">Telefono/Celular</font><input type="text" name="txttc" class="form-control" style="text-align:center" value="<?php if (is_array($arraycli)) { if(count($arraycli)!=0){ foreach ($arraycli as $item){ echo $item['Telefono'];  } }} ?>" /></div></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><div class="text-center"><font color="white">Direccion de Evento</font> <input type="text" name="txtde" class="form-control" style="text-align:center" placeholder="Avenida, numero y distrito"/></div></td>
                                    <td><div class="text-center"><font color="white">Nombre del Cliente</font> <input type="text" name="txtnc" class="form-control" style="text-align:center" value="<?php if (is_array($arraycli)) {if(count($arraycli)!=0){ foreach ($arraycli as $item){ echo $item['Nombre'];  } } }?>" /></div></td>
                                    <td><div class="text-center"><font color="white">Estado</font> <input type="text" name="txtes" value="Posible" class="form-control" style="text-align:center" readonly="readonly"/></div></td>
                                </tr>
                                <tr>
                                    <td><div class="text-center"><font color="white">Fecha de Recojo de Almacen</font> <input type="date" name="txtfa" class="form-control" style="text-align:center"/></div></td>
                                    <td><div class="text-center"><font color="white">Hora de Recojo de Almacen</font> <input type="time" size="10" name="txtha" class="form-control" style="text-align:center"/></div></td>
                                    <td><div class="text-center"><font color="white">Apellido Paterno</font> <input type="text" name="txtap" class="form-control" style="text-align:center" value="<?php if (is_array($arraycli)) {if(count($arraycli)!=0){ foreach ($arraycli as $item){ echo $item['Apepaterno'];  } }} ?>" ></div></td>
                                    <td><div class="text-center"><font color="white">Numero de Camionetas</font><select class="form-control" name="txtnumca">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select></div>                                         </td>
                                </tr>
                                <tr>
                                    <td><div class="text-center"><font color="white">Fecha de Recojo de Evento</font> <input type="date" name="txtfe" class="form-control" style="text-align:center"/></div></td>
                                    <td><div class="text-center"><font color="white">Hora de Recojo de Evento</font> <input type="time" size="10" name="txthe" class="form-control" style="text-align:center"/></div></td>
                                    <td><div class="text-center"><font color="white">Apellido Materno</font><input type="text" name="txtam" class="form-control" style="text-align:center" value="<?php if (is_array($arraycli)) {if(count($arraycli)!=0){ foreach ($arraycli as $item){ echo $item['Apematerno'];  } }} ?>" ></div></td>
                                    <td><div class="text-center"><font color="white">Costo</font><select class="form-control" name="txtcosto">
                                                <option value="400">400</option>
                                                <option value="800">800</option>
                                                <option value="1200">1200</option>
                                                <option value="1600">1600</option>
                                            </select></div>                                </td>
                                </tr>
                            </table>
                        </center>
                        <br><br>
                        <input type="submit" value="GENERAR PROFORMA" name="generar_proforma" class="btn btn-dark">
                    </form>
                </div>
            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="../Controlador/C_Principal.php" class="w3-left w3-btn" >❮ MENU PRINCIPAL</a>
        </section><!-- #call-to-action FORMULARIO PROFORMA-->

        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/jquery-3.3.1.min.js"></script>

        </body>

        <?php
    }
}

?>