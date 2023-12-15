<?php
require_once("../inc/Formulario.php");

class form_principal extends Formulario
{
    public function MostrarForm_principal($arrPriv, $arrAlias, $usuario)
    {
        $this->HeadShow($arrPriv, $usuario);
        ?>
        <!--==========================
        Seccion MENU PRINCIPAL
        ============================-->
        <section id="call-to-action">
            <div class=" text-center ">
                <br><br><br><br><br><br><br><br>
                <h3 class="cta-title">BIENVENIDO
                    <font style="text-transform: uppercase;">    <?php foreach ($arrAlias as $item) {
                            echo $item['Descripcion'];
                        } ?> </font>
                    AL MENU PRINCIPAL<br><br>
                    <font style="text-transform: uppercase;">
                        <?php foreach ($arrAlias as $itemo) {
                            echo $itemo['nombre_usuario']; ?>&nbsp<?php echo $itemo['apepat_usuario']; ?>&nbsp<?php echo $itemo['apemat_usuario']; ?>
                            <br><?php } ?>
                    </font>
                </h3>
            </div>
        </section><!-- MENU PRINCIPAL -->
        </body>
        </html>
        <?php
    }
}

?>