<?php
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

// set core font
$pdf->SetFont('helvetica', '', 10);

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
$pdf->Output('example_039.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
