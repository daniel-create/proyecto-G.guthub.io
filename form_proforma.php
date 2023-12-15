<?php

class form_proforma
{

    public function MostrarFormProforma($arrPro)
    {

        ?>

        <html
                xmlns:o="urn:schemas-microsoft-com:office:office"
                xmlns="http://www.w3.org/TR/REC-html40">

        <head>
            <meta http-equiv=Content-Type content="text/html; charset=windows-1252">
            <meta name=ProgId content=Word.Document>
            <meta name=Generator content="Microsoft Word 15">
            <meta name=Originator content="Microsoft Word 15">
            <link rel=File-List href="MARTINEZ_archivos/filelist.xml">
            <link rel=themeData href="MARTINEZ_archivos/themedata.thmx">
            <link rel=colorSchemeMapping href="MARTINEZ_archivos/colorschememapping.xml">
            <style>
                <!--
                /* Font Definitions */
                @font-face {
                    font-family: "Cambria Math";
                    panose-1: 2 4 5 3 5 4 6 3 2 4;
                    mso-font-charset: 0;
                    mso-generic-font-family: roman;
                    mso-font-pitch: variable;
                    mso-font-signature: -536870145 1107305727 0 0 415 0;
                }

                @font-face {
                    font-family: Calibri;
                    panose-1: 2 15 5 2 2 2 4 3 2 4;
                    mso-font-charset: 0;
                    mso-generic-font-family: swiss;
                    mso-font-pitch: variable;
                    mso-font-signature: -520092929 1073786111 9 0 415 0;
                }

                @font-face {
                    font-family: "Berlin Sans FB Demi";
                    panose-1: 2 14 8 2 2 5 2 2 3 6;
                    mso-font-charset: 0;
                    mso-generic-font-family: swiss;
                    mso-font-pitch: variable;
                    mso-font-signature: 3 0 0 0 1 0;
                }

                /* Style Definitions */
                p.MsoNormal, li.MsoNormal, div.MsoNormal {
                    mso-style-unhide: no;
                    mso-style-qformat: yes;
                    mso-style-parent: "";
                    margin-top: 0cm;
                    margin-right: 0cm;
                    margin-bottom: 8.0pt;
                    margin-left: 0cm;
                    line-height: 107%;
                    mso-pagination: widow-orphan;
                    font-size: 11.0pt;
                    font-family: "Calibri", "sans-serif";
                    mso-ascii-font-family: Calibri;
                    mso-ascii-theme-font: minor-latin;
                    mso-fareast-font-family: Calibri;
                    mso-fareast-theme-font: minor-latin;
                    mso-hansi-font-family: Calibri;
                    mso-hansi-theme-font: minor-latin;
                    mso-bidi-font-family: "Times New Roman";
                    mso-bidi-theme-font: minor-bidi;
                    mso-fareast-language: EN-US;
                }

                span.st {
                    mso-style-name: st;
                    mso-style-unhide: no;
                }

                span.SpellE {
                    mso-style-name: "";
                    mso-spl-e: yes;
                }

                .MsoChpDefault {
                    mso-style-type: export-only;
                    mso-default-props: yes;
                    font-family: "Calibri", "sans-serif";
                    mso-ascii-font-family: Calibri;
                    mso-ascii-theme-font: minor-latin;
                    mso-fareast-font-family: Calibri;
                    mso-fareast-theme-font: minor-latin;
                    mso-hansi-font-family: Calibri;
                    mso-hansi-theme-font: minor-latin;
                    mso-bidi-font-family: "Times New Roman";
                    mso-bidi-theme-font: minor-bidi;
                    mso-fareast-language: EN-US;
                }

                .MsoPapDefault {
                    mso-style-type: export-only;
                    margin-bottom: 8.0pt;
                    line-height: 107%;
                }

                @page WordSection1 {
                    size: 612.0pt 792.0pt;
                    margin: 70.85pt 3.0cm 70.85pt 3.0cm;
                    mso-header-margin: 35.4pt;
                    mso-footer-margin: 35.4pt;
                    mso-paper-source: 0;
                }

                div.WordSection1 {
                    page: WordSection1;
                }

                -->
            </style>
        </head>

        <body lang=ES-PE style='tab-interval:35.4pt'>

        <div class=WordSection1>

            <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
    text-align:center;line-height:normal'><span style='font-size:18.0pt;mso-bidi-font-size:
    11.0pt;font-family:"Berlin Sans FB Demi","sans-serif"'><img src="img/logo.png" alt="" title=""/></img>
                    <o:p></o:p></span></p>

            <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
    text-align:center;line-height:normal'>Empresa servicio de alquiler de Equipos de Sonido</p>

            <p class=MsoNormal align=center style='text-align:center'><span class=st>RUC N° 10401173604</span></p>

            <p class=MsoNormal align=center style='text-align:center'><b style='mso-bidi-font-weight:
    normal'>PROFORMA N° <?php if(count($arrPro)!=0){ foreach ($arrPro as $item){ echo $item['IdProforma'];  } } ?>
                    <o:p></o:p>
                </b></p>

            <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
    text-align:center'>Señor(a): <?php if(count($arrPro)!=0){ foreach ($arrPro as $item){ echo $item['Nombre'];  } } ?> <?php if(count($arrPro)!=0){ foreach ($arrPro as $item){ echo $item['Apepaterno'];  } } ?> <?php if(count($arrPro)!=0){ foreach ($arrPro as $item){ echo $item['Apematerno'];  } } ?> identificado con DNI: <?php if(count($arrPro)!=0){ foreach ($arrPro as $item){ echo $item['Dni'];  } } ?></p>

            <p class=MsoNormal align=center style='text-align:center'>Ponemos a su disposición
                el servicio de alquiler de equipos de sonido por Ud. Solicitado:</p>

            <div align=center>

                <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
                       style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
     mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
                    <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
                        <td width=78 style='width:58.2pt;border:solid windowtext 1.0pt;mso-border-alt:
      solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
                            <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
      text-align:center;line-height:normal'>CANTIDAD</p>
                        </td>
                        <td width=262 style='width:196.7pt;border:solid windowtext 1.0pt;border-left:
      none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
      padding:0cm 5.4pt 0cm 5.4pt'>
                            <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
      text-align:center;line-height:normal'>DESCRIPCION</p>
                        </td>
                        <td width=102 style='width:76.15pt;border:solid windowtext 1.0pt;border-left:
      none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
      padding:0cm 5.4pt 0cm 5.4pt'>
                            <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
      text-align:center;line-height:normal'>V. UNITARIO</p>
                        </td>
                        <td width=147 style='width:110.35pt;border:solid windowtext 1.0pt;border-left:
      none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
      padding:0cm 5.4pt 0cm 5.4pt'>
                            <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
      text-align:center;line-height:normal'>TOTAL</p>
                        </td>
                    </tr>
                    <tr style='mso-yfti-irow:1'>
                        <td width=78 style='width:58.2pt;border:solid windowtext 1.0pt;border-top:
      none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
      padding:0cm 5.4pt 0cm 5.4pt'>
                            <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
      text-align:center;line-height:normal'><?php if(count($arrPro)!=0){ foreach ($arrPro as $item){ echo $item['Ncamionetas'];  } } ?></p>
                        </td>
                        <td width=262 style='width:196.7pt;border-top:none;border-left:none;
      border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
      mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
      mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
                            <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
      text-align:center;line-height:normal'>Servicio de Transporte de Equipos</p>
                        </td>
                        <td width=102 style='width:76.15pt;border-top:none;border-left:none;
      border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
      mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
      mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
                            <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
      text-align:center;line-height:normal'>400</p>
                        </td>
                        <td width=147 style='width:110.35pt;border-top:none;border-left:none;
      border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
      mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
      mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
                            <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
      text-align:center;line-height:normal'><?php if(count($arrPro)!=0){ foreach ($arrPro as $item){ echo $item['Costo'];  } } ?></p>
                        </td>
                    </tr>
                    <tr style='mso-yfti-irow:2'>
                        <td width=78 style='width:58.2pt;border:solid windowtext 1.0pt;border-top:
      none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
      padding:0cm 5.4pt 0cm 5.4pt'>
                            <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
      text-align:center;line-height:normal'>
                                <o:p>&nbsp;</o:p>
                            </p>
                        </td>
                        <td width=262 style='width:196.7pt;border-top:none;border-left:none;
      border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
      mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
      mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
                            <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
      text-align:center;line-height:normal'>
                                <o:p>&nbsp;</o:p>
                            </p>
                        </td>
                        <td width=102 style='width:76.15pt;border-top:none;border-left:none;
      border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
      mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
      mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
                            <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
      text-align:center;line-height:normal'>
                                <o:p>&nbsp;</o:p>
                            </p>
                        </td>
                        <td width=147 style='width:110.35pt;border-top:none;border-left:none;
      border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
      mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
      mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
                            <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
      text-align:center;line-height:normal'>
                                <o:p>&nbsp;</o:p>
                            </p>
                        </td>
                    </tr>
                    <tr style='mso-yfti-irow:3'>
                        <td width=78 style='width:58.2pt;border:solid windowtext 1.0pt;border-top:
      none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
      padding:0cm 5.4pt 0cm 5.4pt'>
                            <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
      text-align:center;line-height:normal'>
                                <o:p>&nbsp;</o:p>
                            </p>
                        </td>
                        <td width=262 style='width:196.7pt;border-top:none;border-left:none;
      border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
      mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
      mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
                            <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
      text-align:center;line-height:normal'>
                                <o:p>&nbsp;</o:p>
                            </p>
                        </td>
                        <td width=102 style='width:76.15pt;border-top:none;border-left:none;
      border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
      mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
      mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
                            <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
      text-align:center;line-height:normal'>
                                <o:p>&nbsp;</o:p>
                            </p>
                        </td>
                        <td width=147 style='width:110.35pt;border-top:none;border-left:none;
      border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
      mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
      mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
                            <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
      text-align:center;line-height:normal'>
                                <o:p>&nbsp;</o:p>
                            </p>
                        </td>
                    </tr>
                    <tr style='mso-yfti-irow:4;mso-yfti-lastrow:yes'>
                        <td width=441 colspan=3 style='width:331.05pt;border:solid windowtext 1.0pt;
      border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
      padding:0cm 5.4pt 0cm 5.4pt'>
                            <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
      text-align:right;line-height:normal'>TOTAL</p>
                        </td>
                        <td width=147 style='width:110.35pt;border-top:none;border-left:none;
      border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
      mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
      mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
                            <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
      text-align:center;line-height:normal'><?php if(count($arrPro)!=0){ foreach ($arrPro as $item){ echo $item['Costo'];  } } ?></p>
                        </td>
                    </tr>
                </table>

            </div>

            <p class=MsoNormal align=center style='text-align:center'>
                <o:p>&nbsp;</o:p>
            </p>

            <p class=MsoNormal align=center style='text-align:center'>FORMA DE PAGO: 100%
                en efectivo a la aceptación de la proforma en caja</p>

            <p class=MsoNormal align=center style='text-align:center'>
                <o:p>&nbsp;</o:p>
            </p>

            <p class=MsoNormal align=center style='text-align:center'>Atentamente,</p>

            <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
    text-align:center'>Abel <span class=SpellE>Martinez</span> Anton</p>

            /* <p class=MsoNormal align=center style='text-align:center'></p> */

        </div>
        <br>
        <CENTER><a href="../Controlador/C_Principal.php">REGRESAR AL MENU PRINCIPAL</a></CENTER>


        </body>

        </html>

        <?php
    }
}

?>