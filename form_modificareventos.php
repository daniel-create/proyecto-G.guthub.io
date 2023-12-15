<?php
require_once("../inc/Formulario.php");

class form_modificareventos extends Formulario
{
    public function Mostrarform_modificareventos($arrPriv, $usuario, $arrmodb, $arrmodf)
    {
        $this->HeadShow($arrPriv, $usuario);
        ?>
        <!--==========================
        Seccion MODIFICAR AGENDA
        ============================-->
        <section id="call-to-action">
            <div class=" text-center ">
                <br><br><br><br>
                <div style="color: #f7f7f7">ANTES DE MODIFICAR LA AGENDA, REVISA LA COBERTURA Y DISPONIBILIDAD</div><br>
                <center>
                    <table>
                        <tr>
                            <td> <a target="_blank" href="../Controlador/C_agenda.php" class="btn btn-info"><span class="glyphicon glyphicon-calendar"></span> AGENDA </a> </td>
                            <td>- - -</td>
                            <td>- - -</td>
                            <td> <a target="_blank" href="http://ws.mapcity-peru.com/widget/nyg/?key=z5p3qp0y0uacvtr3jn4sy6x50klnhnqz" class="btn btn-warning"><span class="glyphicon glyphicon-calendar"></span> GEOFINDER </a> </td>
                        </tr>
                    </table>
                </center>
                <br>
                <center>
                    <table>
                        <tr>
                            <form action = "../Controlador/C_modificareventos.php" method="post" accept-charset="UTF-8" role="form">
                                <td><input type="number" name="mboleta" placeholder="# DE BOLETA" class="form-control" style="text-align:center"></td>
                                <td><input type="submit" name="botonmbuscarboleta" value="BUSCAR" class="btn btn-success"></td>
                            </form>
                        </tr>
                    </table>
                    <div style="color: #f7f7f7">CLIENTE: <?php if(is_array($arrmodb)){if(count($arrmodb)!=0){ foreach ($arrmodb as $item){ echo $item['Nombre'];}}} ?> <?php if(is_array($arrmodb)){if(count($arrmodb)!=0){ foreach ($arrmodb as $item){ echo $item['Apepaterno'];}}} ?> <?php if(is_array($arrmodb)){if(count($arrmodb)!=0){ foreach ($arrmodb as $item){ echo $item['Apematerno'];}}} ?>  DNI: <?php if(is_array($arrmodb)){if(count($arrmodb)!=0){ foreach ($arrmodb as $item){ echo $item['DNI'];}}} ?></div>
                    <table class="table table-dark table-hover" style="text-align: center">
                        <tr>
                            <td></td>
                            <td>F ALMACEN </td>
                            <td>H ALMACEN</td>
                            <td>DIR ALMACEN</td>
                            <td>F EVENTO</td>
                            <td>H EVENTO</td>
                            <td>DIR EVENTO</td>
                            <td>ESTADO</td>
                            <td>MONTO</td>
                        </tr>
                        <tr>
                            <form action="../Controlador/C_modificareventos.php" method="post">
                            <td><input type="hidden" name="IdProforma" value="<?php if(is_array($arrmodb)){if(count($arrmodb)!=0){ foreach ($arrmodb as $item){ echo $item['IdProforma'];}}} ?>"></td>
                            <td><input type="text" name="Bfea" value="<?php if(is_array($arrmodb)){if(count($arrmodb)!=0){ foreach ($arrmodb as $item){ echo $item['Fecha_almacen'];}}} ?>" class="form-control" placeholder="" style="text-align:center" /></td>
                            <td><input type="text" name="Bhoa" value="<?php if(is_array($arrmodb)){if(count($arrmodb)!=0){ foreach ($arrmodb as $item){ echo $item['Hora_almacen'];}}} ?>" class="form-control" placeholder="" style="text-align:center" /></td>
                            <td><input type="text" name="Bdira" value="<?php if(is_array($arrmodb)){if(count($arrmodb)!=0){ foreach ($arrmodb as $item){ echo $item['Direccion_almacen'];}}} ?>" class="form-control" placeholder="" style="text-align:center" /></td>
                            <td><input type="text" name="Bfee" value="<?php if(is_array($arrmodb)){if(count($arrmodb)!=0){ foreach ($arrmodb as $item){ echo $item['Fecha_evento'];}}} ?>" class="form-control" placeholder="" style="text-align:center" /></td>
                            <td><input type="text" name="Bhoe" value="<?php if(is_array($arrmodb)){if(count($arrmodb)!=0){ foreach ($arrmodb as $item){ echo $item['Hora_evento'];}}} ?>" class="form-control" placeholder="" style="text-align:center" /></td>
                            <td><input type="text" name="Bdire" value="<?php if(is_array($arrmodb)){if(count($arrmodb)!=0){ foreach ($arrmodb as $item){ echo $item['Direccion_evento'];}}} ?>" class="form-control" placeholder="" style="text-align:center" /></td>
                            <td><input type="text" name="Best" value="<?php if(is_array($arrmodb)){if(count($arrmodb)!=0){ foreach ($arrmodb as $item){ echo $item['Estado'];}}} ?>" class="form-control" placeholder="" style="text-align:center" /></td>
                            <td><input type="text" name="Bmo" value="<?php if(is_array($arrmodb)){if(count($arrmodb)!=0){ foreach ($arrmodb as $item){ echo $item['Costo'];}}} ?>" class="form-control" placeholder="" style="text-align:center" readonly="readonly"/></td>
                            <td><input type="submit" name="guardarboleta" value="GUARDAR" class="btn btn-danger"></td>
                            </form>
                        </tr>
                    </table>
                </center>

                <br>
                <center>
                    <table>
                        <tr>
                            <form action = "" method="post" accept-charset="UTF-8" role="form">
                                <td><input type="number" name="mfactura" placeholder="# DE FACTURA" class="form-control" style="text-align:center"></td>
                                <td><input type="submit" name="botonbuscarfactura" value="BUSCAR" class="btn btn-success"></td>
                            </form>
                        </tr>
                    </table>
                    <div style="color: #f7f7f7">RAZON SOCIAL: <?php if(is_array($arrmodf)){if(count($arrmodf)!=0){ foreach ($arrmodf as $item){ echo $item['Razonsocial'];}}} ?> RUC: <?php if(is_array($arrmodf)){if(count($arrmodf)!=0){ foreach ($arrmodf as $item){ echo $item['Ruc'];}}} ?></div>
                    <table class="table table-dark table-hover" style="text-align: center">
                        <tr>
                            <td></td>
                            <td>F ALMACEN </td>
                            <td>H ALMACEN</td>
                            <td>DIR ALMACEN</td>
                            <td>F EVENTO</td>
                            <td>H EVENTO</td>
                            <td>DIR EVENTO</td>
                            <td>ESTADO</td>
                            <td>MONTO</td>
                        </tr>
                        <tr>
                            <form action="../Controlador/C_modificareventos.php" method="post">
                            <td><input type="hidden" name="IdProforma" value="<?php if(is_array($arrmodb)){if(count($arrmodf)!=0){ foreach ($arrmodf as $item){ echo $item['IdProforma'];}}} ?>"></td>
                            <td><input type="text" name="Ffea" value="<?php if(is_array($arrmodf)){if(count($arrmodf)!=0){ foreach ($arrmodf as $item){ echo $item['Fecha_almacen'];}}} ?>" class="form-control" placeholder="" style="text-align:center" /></td>
                            <td><input type="text" name="Fhoa" value="<?php if(is_array($arrmodf)){if(count($arrmodf)!=0){ foreach ($arrmodf as $item){ echo $item['Hora_almacen'];}}} ?>" class="form-control" placeholder="" style="text-align:center" /></td>
                            <td><input type="text" name="Fdira" value="<?php if(is_array($arrmodf)){if(count($arrmodf)!=0){ foreach ($arrmodf as $item){ echo $item['Direccion_almacen'];}}} ?>" class="form-control" placeholder="" style="text-align:center" /></td>
                            <td><input type="text" name="Ffee" value="<?php if(is_array($arrmodf)){if(count($arrmodf)!=0){ foreach ($arrmodf as $item){ echo $item['Fecha_evento'];}}} ?>" class="form-control" placeholder="" style="text-align:center" /></td>
                            <td><input type="text" name="Fhoe" value="<?php if(is_array($arrmodf)){if(count($arrmodf)!=0){ foreach ($arrmodf as $item){ echo $item['Hora_evento'];}}} ?>" class="form-control" placeholder="" style="text-align:center" /></td>
                            <td><input type="text" name="Fdire" value="<?php if(is_array($arrmodf)){if(count($arrmodf)!=0){ foreach ($arrmodf as $item){ echo $item['Direccion_evento'];}}} ?>" class="form-control" placeholder="" style="text-align:center" /></td>
                            <td><input type="text" name="Fest" value="<?php if(is_array($arrmodf)){if(count($arrmodf)!=0){ foreach ($arrmodf as $item){ echo $item['Estado'];}}} ?>" class="form-control" placeholder="" style="text-align:center" /></td>
                            <td><input type="text" name="Fmo" value="<?php if(is_array($arrmodf)){if(count($arrmodf)!=0){ foreach ($arrmodf as $item){ echo $item['Costo'];}}} ?>" class="form-control" placeholder="" style="text-align:center" readonly="readonly"/></td>
                            <td><input type="submit" name="guardarfactura" value="GUARDAR" class="btn btn-danger"></td>
                            </form>
                        </tr>
                    </table>
                </center>
            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="" class=\"w3-left w3-btn\" >❮ MENU PRINCIPAL</a>
        </section><!-- MODIFICAR AGENDA -->
        </body>

        <?php
    }
}

?>