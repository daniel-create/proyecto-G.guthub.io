<?php
class form_factura_compartida{
    public function MostrarForm_factura($arrFac)
    {
        ?>
        <!DOCTYPE html>
        <html lang="en"><head>
            <meta http-equiv="content-type" content="text/html; charset=UTF-8">
            <meta charset="utf-8">
            <title>FACTURA</title>
            <link rel="stylesheet" href="../inc/style.css" media="all">
        </head>
        <body>
        <header class="clearfix">
            <div id="logo">
                <img src="../img/martinez.png">
            </div>
            <div id="company">
                <h2 class="name">SOCIALPRO / RUC: 10401173604</h2>
                <div>Av.7 de Junio, Pachacamac</div>
                <div><a href="mailto:company@example.com">social@gmail.com</a></div>
            </div>

        </header>
        <main>
            <div id="details" class="clearfix">
                <div id="client">
                    <div class="to">Razon Social</div>
                    <h2 class="name"><?php if(count($arrFac)!=0){ foreach ($arrFac as $item){ echo $item['Razonsocial'];}} ?></h2>
                    <div class="address">RUC</div>
                    <div class="email"><?php if(count($arrFac)!=0){ foreach ($arrFac as $item){ echo $item['Ruc'];}} ?></div>
                </div>
                <div id="invoice">
                    <h1>- FACTURA -</h1>
                    <div class="date">FT - <?php if(count($arrFac)!=0){ foreach ($arrFac as $item){ echo $item['IdFactura'];}} ?></div>
                    <div class="date">Fecha de emision: <?php if(count($arrFac)!=0){ foreach ($arrFac as $item){ echo $item['Ffecha'];}} ?></div>
                </div>
            </div>
            <table cellspacing="0" cellpadding="0" border="0">
                <thead>
                <tr>
                    <th class="no">N°</th>
                    <th class="desc">DESCRIPCION</th>
                    <th class="unit">PRECIO UNITARIO</th>
                    <th class="qty">CANTIDAD</th>
                    <th class="total">SUB TOTAL</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="no">01</td>
                    <td class="desc"><h3>Servicio de Transporte</h3>Equipos de Sonido Line Array</td>
                    <td class="unit">S./328.00</td>
                    <td class="qty"><?php if(is_array($arrFac)){if(count($arrFac)!=0){ foreach ($arrFac as $item){ echo $item['Ncamionetas'];}}} ?></td>
                    <td class="total"> S./<?php echo $item['Ncamionetas']*328?>.00</td>
                </tr>
                <tr>
                    <td class="no"></td>
                    <td class="desc"></td>
                    <td class="unit"></td>
                    <td class="qty">IGV(18%): S./<?php echo $item['Ncamionetas']*72?>.00 </td>
                    <td class="total"> TOTAL: S./<?php echo $item['Ncamionetas']*400?>.00</td>
                </tr>
                </tbody>
            </table>
            <div id="thanks">Gracias!</div>
            <div id="notices">
                <div>NOTA:</div>
                <div class="notice">CONTRATO ADJUNTO INDICANDO CLAUSULAS A CUMPLIRSE. SERVICIO PAGADO AL 100%</div>
            </div><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="../Controlador/C_Principal.php" class="w3-left w3-btn" >❮ MENU PRINCIPAL</a>

            <footer>
                ABEL MARTINEZ ANTON - TRANSPORTES MARTINEZ - SERVICIO DE TRANSPORTE DE EQUIPOS DE SONIDO
            </footer>
        </main>
        </body>
        </html>
<?php
    }
}
?>