<?php
require '../vendor/autoload.php';
use Mailgun\Mailgun;
# First, instantiate the SDK with your API credentials
$mg = Mailgun::create('key-366931960e3cac99f30d6185f4e4e9c5');
//============================================================+
// File name   : example_039.php
// Begin       : 2008-10-16
// Last Update : 2014-01-13
//
// Description : Example 039 for TCPDF class
//               HTML justification
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: HTML justification
 * @author Nicola Asuni
 * @since 2008-10-18
 */


//Inicio
$nombreCiudad =  $_POST['nombreCiudad'];
$diaDelMes = $_POST['diaDelMes'];
$mesDelAno =  $_POST['mesDelAno'];
$anoContrato = $_POST['anoContrato'];

//Comparecientes
$nombreVendedor =  $_POST['nombreVendedor'];
$identificacionRepresentante1 = $_POST['identificacionRepresentante1'];
$numeroRUCVendedor =  $_POST ['numeroRUCVendedor'];
$RepresentanteLegalVendedor = $_POST ['RepresentanteLegalVendedor'];
$IdentificacionVendedor =  $_POST['IdentificaciónVendedor'];
$nacionalidadVendedor =  $_POST['nacionalidadVendedor'];
$ciudadDomicilioVendedor =  $_POST['ciudadDomicilioVendedor'];


$nombreComprador =  $_POST['nombreComprador']; 
$identificacionRepresentante2 =  $_POST['identificacionRepresentante2'];
$numeroIdentificacionComprador =  $_POST['numeroIdentificacionComprador'];
$estadoCivilComprador =  $_POST['estadoCivilComprador'];
$nacionalidadComprador =  $_POST['nacionalidadComprador'];
$ciudadDomicilioComprador =  $_POST['ciudadDomicilioComprador'];
$domicilioComprador =  $_POST['domicilioComprador'];

//Antecedentes
$marca =  $_POST['marca'];
$modelo =  $_POST['modelo'];
$anoVehiculo =  $_POST['anoVehiculo'];
$motor =  $_POST['motor'];
$chasis =  $_POST['chasis'];
$placas =  $_POST['placas'];
$color =  $_POST['color'];


//Precio
$montoEnLetras =  $_POST['montoEnLetras'];
$montoEnNumeros =  $_POST['montoEnNumeros'];


//Forma de pago
$formaDePago =  $_POST['formaDePago'];


// Include the main TCPDF library (search for installation path).
require_once('../TCPDF/tcpdf.php');



// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
//$pdf->SetCreator(PDF_CREATOR);
//$pdf->SetAuthor('Nicola Asuni');
//$pdf->SetTitle('TCPDF Example 039');
//$pdf->SetSubject('TCPDF Tutorial');
//$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 039', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// add a page
$pdf->AddPage();

// set font
$pdf->SetFont('helvetica', 'B', 20);

//$pdf->Write(0, 'CONTRATO DE COMPRA VENTA VEHÍCULO', '', 0, 'L', true, 0, false, false, 0);


// Instanciation of inherited class


// create some HTML content
$html = '

<h1 style="text-align: center;"><strong>CONTRATO DE COMPRAVENTA DE VEH&Iacute;CULO</strong></h1>
<p>En la ciudad de '.$nombreCiudad.', a los '.$diaDelMes.' d&iacute;as del mes de '.$mesDelAno.' de '.$anoContrato.', las partes de forma libre y voluntaria suscriben el presente contrato:</p>
<h2 style="text-align: center;">I. <u>COMPARECIENTES</u></h2>
<p>1.1. Por una parte, '.$nombreVendedor.' con RUC No. '.$numeroRUCVendedor.', domiciliada en '.$ciudadDomicilioVendedor.', mediante su representante legal '.$RepresentanteLegalVendedor.', con '.$identificacionRepresentante1.' de identidad No. '.$IdentificacionVendedor.', a quien para efectos del presente contrato se le denominar&aacute; &ldquo;VENDEDOR&rdquo;; y,</p>
<p>1.2. Por otra parte, '.$nombreComprador.', con '.$identificacionRepresentante2.' de identidad No. '.$numeroIdentificacionComprador.', de estado civil '.$estadoCivilComprador.', nacionalidad '.$nacionalidadComprador.', con domicilio en la ciudad de '.$ciudadDomicilioComprador.' y con direcci&oacute;n en '.$domicilioComprador.', por sus propios y personales derechos  a quien para los efectos del presente contrato se le denominar&aacute; &ldquo;COMPRADOR&rdquo;.</p>
<h2 style="text-align: center;">II. <u>ANTECEDENTES</u></h2>
<p><strong>2.1.</strong> El VENDEDOR, es propietario del veh&iacute;culo de las siguientes caracter&iacute;sticas:</p>
<ol>
<li><b>Marca:</b> '.$marca.'</li>
<li><b>Modelo:</b> '.$modelo.'</li>
<li><b>A&ntilde;o: </b>'.$anoVehiculo.'</li>
<li><b>Motor N&ordm;: </b>'.$motor.'</li>
<li><b>Chasis: </b> '.$chasis.'</li>
<li><b>Placas: </b>'.$placas.'</li>
<li><b>Color: </b> '.$color.'</li>
</ol>
<p><strong>2.2.</strong> El VENDEDOR declara que sobre el veh&iacute;culo de su propiedad no pesa gravamen alguno ni prohibici&oacute;n de enajenar.</p>
<p><strong>2.3.</strong> El VENDEDOR declara que el veh&iacute;culo se encuentra en perfecto estado y que peri&oacute;dicamente ha sido sujeto de mantenimientos y chequeos mec&aacute;nicos para su &oacute;ptimo funcionamiento.</p>
<h2 style="text-align: center;">III. <u>OBJETO</u></h2>
<ul>
<li>Las partes de com&uacute;n acuerdo y por su convenir a sus intereses celebran el presente contrato de compraventa de veh&iacute;culo.</li>
<li>El VENDEDOR da en venta y perpetua enajenaci&oacute;n a favor del COMPRADOR, el veh&iacute;culo descrito en la cl&aacute;usula II del presente contrato. Adem&aacute;s, el VENDEDOR se compromete a efectuar la entrega de toda la documentaci&oacute;n inherente al veh&iacute;culo para efectos del traspaso de dominio.</li>
<li>Por su parte, el COMPRADOR se obliga a pagar la totalidad del precio pactado.</li>
</ul>
<h2 style="text-align: center;">IV. <u>DECLARACI&Oacute;N</u></h2>
<ul>
<li>El COMPRADOR declara que ha revisado el veh&iacute;culo y que este se encuentra en perfectas condiciones, renunciando a reclamos por vicios redhibitorios.</li>
</ul>
<br><br><br>
<h2 style="text-align: center;">V. <u>PRECIO</u></h2>
<ul>
<li>El precio del objeto del presente contrato es de '.$montoEnLetras.' D&Oacute;LARES DE LOS ESTADOS UNIDOS DE AM&Eacute;RICA (USD $ '.$montoEnNumeros.') que el COMPRADOR entrega al VENDEDOR en '.$formaDePago.' y a su entera satisfacci&oacute;n.</li>
</ul>
<h2 style="text-align: center;">VI. <u>RATIFICACI&Oacute;N</u></h2>
<p><strong>6.1.</strong> Las partes aceptan la vigencia y validez del presente instrumento por contener estipulaciones hechas en sus mutuos beneficios e intereses y en la buena fe de que se cumplir&aacute;n cada una con las obligaciones asumidas, para constancia de lo cual y fiel cumplimiento de lo estipulado, firman en dos ejemplares de igual tenor y valor.</p>
<table style="width: 988px;">
<tbody>
<tr>
<td style="width: 278px; text-align: center;">
<br><br><br><br><br><br>
<h2> '.$RepresentanteLegalVendedor.'</h2>
<p>Representante Legal de '.$nombreVendedor.'</p>
<p>RUC No. '.$numeroRUCVendedor.'</p>
</td>
<td style="width: 274px; text-align: center;">
<br><br><br><br><br><br>
<h2> '.$nombreComprador.'</h2>
<p>C.I.: '.$numeroIdentificacionComprador.'</p>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>


'

;


$html1 = '<head>
<title>Notificacion de consumo en SmartUp Law</title>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta content="width=device-width" name="viewport">
<style type="text/css">
            @font-face {
              font-family: &#x27;Postmates Std&#x27;;
              font-weight: 700;
              font-style: normal;
              src: local(&#x27;Postmates Std Bold&#x27;), url(https://s3-us-west-1.amazonaws.com/buyer-static.postmates.com/assets/email/postmates-std-bold.woff) format(&#x27;woff&#x27;);
            }

            @font-face {
              font-family: &#x27;Postmates Std&#x27;;
              font-weight: 500;
              font-style: normal;
              src: local(&#x27;Postmates Std Medium&#x27;), url(https://s3-us-west-1.amazonaws.com/buyer-static.postmates.com/assets/email/postmates-std-medium.woff) format(&#x27;woff&#x27;);
            }

            @font-face {
              font-family: &#x27;Postmates Std&#x27;;
              font-weight: 400;
              font-style: normal;
              src: local(&#x27;Postmates Std Regular&#x27;), url(https://s3-us-west-1.amazonaws.com/buyer-static.postmates.com/assets/email/postmates-std-regular.woff) format(&#x27;woff&#x27;);
            }
        </style>
<style media="screen and (max-width: 680px)">
            @media screen and (max-width: 680px) {
                .page-center {
                  padding-left: 0 !important;
                  padding-right: 0 !important;
                }
                
                .footer-center {
                  padding-left: 20px !important;
                  padding-right: 20px !important;
                }
            }
        </style>
</head>
<body>
<table cellpadding="0" cellspacing="0" style="width: 100%; height: 100%; background-color: #f4f4f5; text-align: center;">
<tbody><tr>
<td style="text-align: center;">
<table align="center" cellpadding="0" cellspacing="0" id="body" style="background-color: #fff; width: 100%; max-width: 680px; height: 100%;">
<tbody><tr>
<td>
<table align="center" cellpadding="0" cellspacing="0" class="page-center" style="text-align: left; padding-bottom: 16px; width: 100%; padding-left: 103px; padding-right: 103px;">
<tbody><tr>
<td style="padding-top: 24px;">
<img src="https://pilisimas.com/recursos_smartup/smartup_powered.png" style="width: 200px;">
</td>
</tr>
<tr>
<td colspan="2" style="padding-top: 72px; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; color: #000000; font-family: \'Postmates Std\', \'Helvetica\', -apple-system, BlinkMacSystemFont, \'Segoe UI\', \'Roboto\', \'Oxygen\', \'Ubuntu\', \'Cantarell\', \'Fira Sans\', \'Droid Sans\', \'Helvetica Neue\', sans-serif; font-size: 48px; font-smoothing: always; font-style: normal; font-weight: 600; letter-spacing: -2.6px; line-height: 52px; mso-line-height-rule: exactly; text-decoration: none;">Gracias por tu compra</td>
</tr>
</tbody></table>
<table align="center" cellpadding="0" cellspacing="0" style="width: 100%;">
<tbody><tr>
<td style="padding-top: 24px; padding-bottom: 24px;">
<img src="https://pilisimas.com/recursos_smartup/background_smartup.png" style="width: 100%; height: 400px">
</td>
</tr>
</tbody></table>

<table align="center" cellpadding="0" cellspacing="0" class="page-center" style="text-align: left; padding-bottom: 72px; width: 100%; padding-left: 103px; padding-right: 103px">
<tbody><tr>
<td colspan="2">
<table cellpadding="0" cellspacing="0" style="width: 100%">
<tbody><tr>
<td style="padding-top: 24px; max-width: 100px; padding-right: 24px">
<img src="https://pilisimas.com/recursos_smartup/logo_smartup.png" style="max-width: 88px; border-radius: 44px;">
</td>
<td style="padding-top: 24px; -ms-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; color: #000000; font-family: \'Postmates Std\', \'Helvetica\', -apple-system, BlinkMacSystemFont, \'Segoe UI\', \'Roboto\', \'Oxygen\', \'Ubuntu\', \'Cantarell\', \'Fira Sans\', \'Droid Sans\', \'Helvetica Neue\', sans-serif; font-size: 18px; font-smoothing: always; font-style: normal; font-weight: 400; letter-spacing: -0.48px; line-height: 32px; mso-line-height-rule: exactly; text-decoration: none; vertical-align: middle; width: 100%;">
<span style="font-weight: 600"></span> Se realizó un cobro en su tarjeta
                                          </td>
</tr>
</tbody></table>
</td>
</tr>
<tr>


<td colspan="2" style="padding-top: 48px; padding-bottom: 48px;">
<table cellpadding="0" cellspacing="0" style="width: 100%">
<tbody><tr>
<td style="width: 100%; height: 1px; max-height: 1px; background-color: #E1E4EB"></td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td colspan="2" style="-ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; color: #000000; font-family: \'Postmates Std\', \'Helvetica\', -apple-system, BlinkMacSystemFont, \'Segoe UI\', \'Roboto\', \'Oxygen\', \'Ubuntu\', \'Cantarell\', \'Fira Sans\', \'Droid Sans\', \'Helvetica Neue\', sans-serif; font-size: 40px; font-smoothing: always; font-style: normal; font-weight: 600; letter-spacing: -1.78px; line-height: 40px; mso-line-height-rule: exactly; text-decoration: none;">$19.99</td>
</tr>

<tr>
<td colspan="2" style="padding-top: 48px; padding-bottom: 48px;">
<table cellpadding="0" cellspacing="0" style="width: 100%">
<tbody><tr>
<td style="width: 100%; height: 1px; max-height: 1px; background-color: #E1E4EB"></td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td>
<table cellpadding="0" cellspacing="0" style="width: 100%">
<tbody>
<tr>
<td style="padding-top: 10px; vertical-align: top"><img src="https://d1pgqke3goo8l6.cloudfront.net/KYzSiQPnSgSDHn2bv34U_Pin.png" style="max-width: 16px;"></td>
<td style="-ms-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; color: #9095A2; font-family: \'Postmates Std\', \'Helvetica\', -apple-system, BlinkMacSystemFont, \'Segoe UI\', \'Roboto\', \'Oxygen\', \'Ubuntu\', \'Cantarell\', \'Fira Sans\', \'Droid Sans\', \'Helvetica Neue\', sans-serif; font-size: 16px; font-smoothing: always; font-style: normal; font-weight: 400; letter-spacing: -0.24px; line-height: 24px; mso-line-height-rule: exactly; text-decoration: none; vertical-align: top; width: 100%; padding-top: 8px; min-width: 225px">
<span style="font-weight: 600; color: #000000;">SmartUp Law</span><br>
                                              Av. 10 de Agosto y Naciones Unidas<br>
                                              
                                              Quito - Ecuador, EC170532
                                            </td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>


<table align="center" cellpadding="0" cellspacing="0" class="page-center" style="text-align: left; padding-bottom: 72px; width: 100%; padding-left: 103px; padding-right: 103px">
<tbody><tr>
<td colspan="2">
<table cellpadding="0" cellspacing="0" style="width: 100%">
<tbody><tr>
<td style="padding-top: 24px; -ms-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; color: #000000; font-family: \'Postmates Std\', \'Helvetica\', -apple-system, BlinkMacSystemFont, \'Segoe UI\', \'Roboto\', \'Oxygen\', \'Ubuntu\', \'Cantarell\', \'Fira Sans\', \'Droid Sans\', \'Helvetica Neue\', sans-serif; font-size: 18px; font-smoothing: always; font-style: normal; font-weight: 400; letter-spacing: -0.48px; line-height: 32px; mso-line-height-rule: exactly; text-decoration: none; vertical-align: middle; width: 100%;">
<span style="font-weight: 600"></span> Información de Contacto <br>

</td>
</tr>
</tbody></table>
</td>
</tr>
<tr>



<table cellpadding="0" cellspacing="0" style="text-align: center; width: 100%; background-color: #000000; padding: 40px; margin-bottom: 100px; max-width: 540px; margin-left: auto; margin-right: auto;">
<tbody>
<tr>
<td style="color: #ffffff; font-family: \'Postmates Std\', \'Helvetica\', \'Helvetica Neue\'; font-size: 32px; font-weight: 400; letter-spacing: 0; line-height: 35px; vertical-align: top; padding-bottom: 15px; text-align: center">Siguenos en Redes Sociales!</td>
</tr>
<tr>
<td style="color: #ffffff; font-family: \'Postmates Std\', \'Helvetica\', \'Helvetica Neue\'; font-size: 18px; font-weight: 400; letter-spacing: 0; line-height: 21px; vertical-align: top; padding-bottom: 30px; text-align: center"></td>
</tr>
<tr>
<td style="color: #ffffff; font-family: \'Postmates Std\', \'Helvetica\', \'Helvetica Neue\'; font-size: 72px; font-weight: 600; letter-spacing: 0; vertical-align: top; padding-bottom: 45px; text-transform: uppercase; word-break: break-all"></td>
</tr>

<tr>
<td style="vertical-align: top;">
<a href="https://www.facebook.com/Smartuplawecuador" style="display: block; background-color: #3B5998; width: 100%; max-width: 300px; color: #ffffff; font-family: \'Postmates Std\', \'Helvetica\', \'Helvetica Neue\'; font-size: 12px; font-weight: 600; letter-spacing: 0.7px; line-height: 56px; text-decoration: none; vertical-align: top; border-radius: 28px; text-transform: uppercase; text-align: center; margin-left: auto; margin-right: auto" universal="true" target="_blank">Facebook</a>
</td>
</tr>


<tr>
<td style="vertical-align: top;">
  <br><br>
<a href="https://www.instagram.com/smartuplaw/" style="display: block; background-color: #3f729b; width: 100%; max-width: 300px; color: #ffffff; font-family: \'Postmates Std\', \'Helvetica\', \'Helvetica Neue\'; font-size: 12px; font-weight: 600; letter-spacing: 0.7px; line-height: 56px; text-decoration: none; vertical-align: bottom; border-radius: 28px; text-transform: uppercase; text-align: center; margin-left: auto; margin-right: auto" universal="true" target="_blank">Instagram</a>
</td>
</tr>

<tr>
<td style="vertical-align: top;">
  <br><br>
<a href="https://twitter.com/smartupecuador" style="display: block; background-color: #00acee; width: 100%; max-width: 300px; color: #ffffff; font-family: \'Postmates Std\', \'Helvetica\', \'Helvetica Neue\'; font-size: 12px; font-weight: 600; letter-spacing: 0.7px; line-height: 56px; text-decoration: none; vertical-align: bottom; border-radius: 28px; text-transform: uppercase; text-align: center; margin-left: auto; margin-right: auto" universal="true" target="_blank">Twitter</a>
</td>
</tr>

<tr>
<td style="vertical-align: top;">
  <br><br>
<a href="https://www.linkedin.com/company/smartup-ecuador/" style="display: block; background-color: #0e76a8; width: 100%; max-width: 300px; color: #ffffff; font-family: \'Postmates Std\', \'Helvetica\', \'Helvetica Neue\'; font-size: 12px; font-weight: 600; letter-spacing: 0.7px; line-height: 56px; text-decoration: none; vertical-align: bottom; border-radius: 28px; text-transform: uppercase; text-align: center; margin-left: auto; margin-right: auto" universal="true" target="_blank">LinkedIn</a>
</td>
</tr>

</tbody>
</table>
</td>
</tr>
</tbody></table>
<table align="center" cellpadding="0" cellspacing="0" id="footer" style="background-color: #000; width: 100%; max-width: 680px; height: 100%;">
<tbody><tr>
<td>
<table align="center" cellpadding="0" cellspacing="0" class="footer-center" style="text-align: left; width: 100%; padding-left: 103px; padding-right: 103px;">
<tbody><tr>
<td colspan="2" style="padding-top: 72px; padding-bottom: 24px; width: 100%;">

<img src="https://pilisimas.com/recursos_smartup/logo_smartup_blanco.png" style="width: 200px; height: auto;">
</td>
</tr>
<tr>
<td colspan="2" style="padding-top: 24px; padding-bottom: 48px;">
<table cellpadding="0" cellspacing="0" style="width: 100%">
<tbody><tr>
<td style="width: 100%; height: 1px; max-height: 1px; background-color: #EAECF2; opacity: 0.19"></td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
<td style="-ms-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: 100%; color: #9095A2; font-family: \'Postmates Std\', \'Helvetica\', -apple-system, BlinkMacSystemFont, \'Segoe UI\', \'Roboto\', \'Oxygen\', \'Ubuntu\', \'Cantarell\', \'Fira Sans\', \'Droid Sans\', \'Helvetica Neue\', sans-serif; font-size: 16px; font-smoothing: always; font-style: normal; font-weight: 400; letter-spacing: 0; line-height: 24px; mso-line-height-rule: exactly; text-decoration: none; vertical-align: top; width: 100%;">
                                          Si tienes alguna pregunta o duda puedes contactarnos en <a data-click-track-id="7157" href="https://smartup.com.ec" style="font-weight: 600; color: #fff" target="_blank">SmartUp Law</a>.
                                        </td>
</tr>
<tr>
<td style="height: 72px;"></td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>



</body>
';

// set core font
$pdf->SetFont('helvetica', '', 10);
$pdf->SetProtection($permissions = array('print', 'modify', 'copy', 'annot-forms', 'fill-forms', 'extract', 'assemble', 'print-high'), '', null, 0, null);

// output the HTML content
$pdf->writeHTML($html, true, 0, true, true);

$pdf->Ln();

// set UTF-8 Unicode font
$pdf->SetFont('dejavusans', '', 10);

// output the HTML content
//$pdf->writeHTML($html, true, 0, true, true);

// reset pointer to the last page
$pdf->lastPage();


// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output(__DIR__ .'/archivos/compraVentaVehiculo_pj_pn.pdf', 'F');
//$pdf->Output('example_039.pdf', 'I');

$mg->messages()->send('mailing.pilisimas.com', [
  'from'    => 'SmartUp Law at Pilisimas <hola@mailing.pilisimas.com>',
  'to'      => 'isidrolo80@gmail.com',
  'bcc'     => 'cchacon@pilisimas.com',
  'subject' => 'Consumo en SmartUp Law - NO RESPONDER A ESTE CORREO ',
  'html'    => $html1,
  'attachment' => [
    ['filePath'=>'./archivos/compraVentaVehiculo_pj_pn.pdf']
  ]
]);
echo '<script type="text/javascript"> alert("Inscripción enviada con exito"); </script>';

//============================================================+
// END OF FILE
//============================================================+
