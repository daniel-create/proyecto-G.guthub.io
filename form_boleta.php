<?php
class form_boleta{
    public function MostrarFormBoleta($arrBol)
    {
        ?>
        <!DOCTYPE html>
        <html lang="en"><head>
            <meta http-equiv="content-type" content="text/html; charset=UTF-8">
            <meta charset="utf-8">
            <title>BOLETA DE VENTA</title>
            <link rel="stylesheet" href="../inc/style.css" media="all">
        </head>
        <body>
        <header class="clearfix">
            <div id="logo">
                <img src="../img/martinez.png">
            </div>
            <div id="company">
                <h2 class="name">SOCIALPRO</h2>
                <div>Av.7 de Junio, Pachacamac</div>
                <div><a href="mailto:company@example.com">socialpro@gmail.com</a></div>
            </div>

        </header>
        <main>
            <div id="details" class="clearfix">
                <div id="client">
                    <div class="to">Datos del Cliente</div>
                    <h2 class="name"><?php if(is_array($arrBol)){if(count($arrBol)!=0){ foreach ($arrBol as $item){ echo $item['Nombre'];}}} ?> <?php if(is_array($arrBol)){if(count($arrBol)!=0){ foreach ($arrBol as $item){ echo $item['Apepaterno'];}}} ?> <?php if(is_array($arrBol)){if(count($arrBol)!=0){ foreach ($arrBol as $item){ echo $item['Apematerno'];}}} ?></h2>
                    <div class="address">DNI</div>
                    <div class="email"><?php if(is_array($arrBol)){if(count($arrBol)!=0){ foreach ($arrBol as $item){ echo $item['DNI'];}}} ?></div>
                </div>
                <div id="invoice">
                    <h1>- BOLETA -</h1>
                    <div class="date">BT - <?php if(is_array($arrBol)){if(count($arrBol)!=0){ foreach ($arrBol as $item){ echo $item['IdBoleta'];}}} ?></div>
                    <div class="date">Fecha de emision: <?php if(is_array($arrBol)){if(count($arrBol)!=0){ foreach ($arrBol as $item){ echo $item['Fecha'];}}} ?></div>
                </div>
            </div>
            <table cellspacing="0" cellpadding="0" border="0">
                <thead>
                <tr>
                    <th class="no">N°</th>
                    <th class="desc">DESCRIPCION</th>
                    <th class="unit">PRECIO UNITARIO</th>
                    <th class="qty">CANTIDAD</th>
                    <th class="total">TOTAL</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="no">01</td>
                    <td class="desc"><h3>Servicio de alquiler</h3>Equipos de Sonido </td>
                    <td class="unit">S./400.00</td>
                    <td class="qty"><?php if(is_array($arrBol)){if(count($arrBol)!=0){ foreach ($arrBol as $item){ echo $item['Ncamionetas'];}}} ?></td>
                    <td class="total"><?php if(is_array($arrBol)){if(count($arrBol)!=0){ foreach ($arrBol as $item){ echo $item['Costo'];}}} ?></td>
                </tr>
                <tr>
                    <td class="no"></td>
                    <td class="desc"></td>
                    <td class="unit"></td>
                    <td class="qty"></td>
                    <td class="total"><?php if(is_array($arrBol)){if(count($arrBol)!=0){ foreach ($arrBol as $item){ echo $item['Costo'];}}} ?></td>
                </tr>
                </tbody>
            </table>
            <div id="thanks">Gracias!</div>
            <div id="notices">
                <div>NOTA:</div>
                <div class="notice">CONTRATO ADJUNTO INDICANDO CLAUSULAS A CUMPLIRSE. SERVICIO PAGADO AL 100%</div>
            </div>
            

            <footer>
                SOCIALPRO  - SERVICIO DE ALQUILER DE EQUIPOS DE SONIDO
            </footer>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="../Controlador/C_Principal.php" class="w3-left w3-btn" >❮ MENU PRINCIPAL</a>
        </main>
        </body>
        </html>
<?php
    }
}
?>