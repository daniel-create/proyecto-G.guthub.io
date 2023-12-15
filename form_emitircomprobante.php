<?php
require_once("../inc/Formulario.php");

class form_emitircomprobante extends Formulario
{
    public function Mostrarform_emitircomprobantes($arrPriv, $usuario,$arrPro)
    {
        $this->HeadShow($arrPriv, $usuario);
        ?>
        <!--==========================
            Seccion EMITIR COMPROBANTE / BUSCAR PROFORMA
            ==========================-->
        <section id="call-to-action">
            <div class="text-center">
                <br><br><br><br><br><h3 class="cta-title">EMITIR COMPROBANTE - SERVICIO DE TRANSPORTE DE EQUIPOS DE SONIDO</h3><br>
                <form action = "../Controlador/C_emitircomprobante.php" method="post">
                    <center>
                        <table>
                            <tr>
                                <td><input type="number" placeholder="# DE PROFORMA" name="nupro" class="form-control" style="text-align:center"></td>
                                <td><input type="submit" value="BUSCAR" name="buscarProforma" class="btn btn-success"></td>
                            </tr>
                        </table>
                    </center>
                </form>
            </div>
            <br>
            <form action="../Controlador/C_emitircomprobante.php" method="post" >
            <center>
                <table class="table table-dark table-hover" style="text-align: center">
                    <tr>
                        <td></td>
                        <td>DNI CLIENTE</td>
                        <td>NOMBRE</td>
                        <td colspan="2">APELLIDOS</td>
                        <td>DESCRIPCION </td>
                        <td># CAMIO</td>
                        <td>MONTO</td>
                    </tr>
                    <tr>
                        <td><input type="hidden" value="<?php if(count($arrPro)!=0){ foreach ($arrPro as $item){ echo $item['IdProforma'];  } } ?>" name="idproforma"></td>
                        <td><input type="text" name="comdni" value="<?php if(is_array($arrPro)){if(count($arrPro)!=0){ foreach ($arrPro as $item){ echo $item['Dni'];  } }} ?>" class="form-control" placeholder="" style="text-align:center" readonly="readonly"/></td>
                        <td><input type="text" name="comnom" value="<?php if(is_array($arrPro)){if(count($arrPro)!=0){ foreach ($arrPro as $item){ echo $item['Nombre'];  } }} ?>" class="form-control" placeholder="" style="text-align:center" readonly="readonly"/></td>
                        <td><input type="text" name="comappat" value="<?php if(is_array($arrPro)){if(count($arrPro)!=0){ foreach ($arrPro as $item){ echo $item['Apepaterno'];  } }} ?>" class="form-control" placeholder="" style="text-align:center" readonly="readonly"/></td>
                        <td><input type="text" name="comapmat" value="<?php if(is_array($arrPro)){if(count($arrPro)!=0){ foreach ($arrPro as $item){ echo $item['Apematerno'];  } }} ?>" class="form-control" placeholder="" style="text-align:center" readonly="readonly"/></td>
                        <td><input type="text" name="comdes" value="Serv De Transporte"  class="form-control" placeholder="" style="text-align:center" readonly="readonly"/></td>
                        <td><input type="text" name="comcam" value="<?php if(is_array($arrPro)){if(count($arrPro)!=0){ foreach ($arrPro as $item){ echo $item['Ncamionetas'];  } }} ?>" class="form-control" placeholder="" style="text-align:center" readonly="readonly"/></td>
                        <td><input type="text" name="common" class="form-control" value="<?php if(is_array($arrPro)){if(count($arrPro)!=0){ foreach ($arrPro as $item){ echo $item['Costo'];  } }} ?>" placeholder="" style="text-align:center" readonly="readonly"/></td>
                    </tr>
                </table>
            </center>
            <br><br><br>
            <div class="text-center">
                <center>
                    <table>
                        <tr>
                            <td><input type="submit" name="boleta" class="btn btn-success" value="BOLETA"></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="submit" name="factura" class="btn btn-warning" value="FACTURA"></td>
                        </tr>
                        <tr>
                            <td></td>

                        </tr>
                    </table>
                </center>
            </div>
            </form>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="../Controlador/C_Principal.php" class="w3-left w3-btn" >❮ MENU PRINCIPAL</a>
        </section><!-- EMITIR COMPROBANTE / BUSCAR PROFORMA -->
        </body>

        <?php
    }
}

?>