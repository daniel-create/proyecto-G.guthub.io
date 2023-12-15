<?php
require_once("../inc/Formulario.php");

class form_factura extends Formulario
{
    public function Mostrarform_factura($arrPriv,$usuario,$monto)
    {
        $this->HeadShow($arrPriv,$usuario);
        ?>

        <!--==========================
            Seccion FORMULARIO FACTURA
        ============================-->
        <section id="call-to-action">
            <div class=" text-center ">
                <br><br><br><br><br><br><br><br>
                <h3 class="cta-title">GENERAR FACTURA</h3>
                <font style="color: white">PORFAVOR INGRESE LOS DATOS SOLICITADOS</font>
                <div class="container wow fadeInUp">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 col-md-8">
                            <div class="form">
                                <form action="../Controlador/C_factura.php" method="post" role="form" class="contactForm">
                                    <div class="form-group">
                                        <input type="text" name="txtruc" class="form-control" style="text-align:center" placeholder="Numero de RUC" data-rule="minlen:4" data-msg="No Valido" />
                                        <div class="validation"></div>
                                        <input type="text" name="txtrs" class="form-control" style="text-align:center" placeholder="Razon Social" data-rule="minlen:4" data-msg="No Valido" />
                                        <div class="validation"></div>
                                        <input type="text" name="txtde" class="form-control" style="text-align:center" placeholder="Direccion De La Empresa" data-rule="minlen:4" data-msg="No Valido" />
                                        <div class="validation"></div>
                                        <input type="text" name="txtcosto" class="form-control" style="text-align:center" placeholder="Monto/Costo" data-rule="minlen:4" data-msg="No Valido" value="<?php echo $monto ?>"/>
                                        <div class="validation"></div>
                                    </div>
                                    <div class="text-center"><input type="submit" name="botonfactura" value="GENERAR FACTURA" class="btn btn-success"></div>
                                </form>
                                <br><br>
                                <br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="../Controlador/C_emitircomprobante.php" class="w3-left w3-btn" >❮ ATRAS</a>
        </section><!-- FORMULARIO FACTURA -->


        <?php
    }
}

?>